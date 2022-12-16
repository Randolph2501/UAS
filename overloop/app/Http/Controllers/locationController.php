<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Viewlocation;
use PDF;


class locationController extends Controller
{
    //
    public function index()
    {  
        $location = Viewlocation::all();
        return view('admin.location.index', ['title' => 'location'],compact('location'));
    }

    public function print_pdf()
    {
    	$location = Viewlocation::all();
 
    	$pdf = PDF::loadView('admin.location.print_pdf',compact('location'));
        $pdf->setPaper('A4','potrait');
    	return $pdf->download('location-pdf.pdf');
    }
}
