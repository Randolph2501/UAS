<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests;

use App\Models\Offline_store;
use Illuminate\Http\Request;

class Offline_storeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\View\View
     */
    public function index(Request $request)
    {
        $keyword = $request->get('search');
        $perPage = 25;

        if (!empty($keyword)) {
            $offline_store = Offline_store::where('city', 'LIKE', "%$keyword%")
                ->orWhere('location', 'LIKE', "%$keyword%")
                ->latest()->paginate($perPage);
        } else {
            $offline_store = Offline_store::latest()->paginate($perPage);
        }

        return view('admin.offline_store.index',[
        'title' => 'Product'
        ] ,compact('offline_store'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('admin.offline_store.create',[
            'title' => 'Create Offline Store'
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function store(Request $request)
    {
        
        $requestData = $request->all();
        $validated = $request->validate([
            'city' => 'required|max:30',
            'location' => 'required|max:30'
        ]);
        
        Offline_store::create($requestData);

        return redirect('admin/offline_store')->with('flash_message', 'Offline_store added!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        $offline_store = Offline_store::findOrFail($id);

        return view('admin.offline_store.show', compact('offline_store'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     *
     * @return \Illuminate\View\View
     */
    public function edit($id)
    {
        $offline_store = Offline_store::findOrFail($id);

        return view('admin.offline_store.edit', compact('offline_store'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
        
        $requestData = $request->all();
        
        $offline_store = Offline_store::findOrFail($id);
        $offline_store->update($requestData);

        return redirect('admin/offline_store')->with('flash_message', 'Offline_store updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     *
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function destroy($id)
    {
        Offline_store::destroy($id);

        return redirect('admin/offline_store')->with('flash_message', 'Offline_store deleted!');
    }
}
