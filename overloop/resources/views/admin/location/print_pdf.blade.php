<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Overloop location PDF</title>
</head>

<body>
    <center><img
            src="{{ url('https://www.weareanimalkingdom.com/wp-content/uploads/2021/06/Universitas-Pelita-Harapan-UPH.jpg%27%27') }}"
            alt="logo UPH"></center>
    <p style="text-align:center"><strong>Nama: Randolph</strong><br />
        &nbsp;</p>
    <p style="text-align:center"><strong>NIM: 03081200048</strong><br />
        &nbsp;</p>

        <table class="table" id="DataTables">
          <thead>
            <tr>
                <th>#</th>
                <th>City</th>
                <th>Location</th>
            </tr>
          </thead>
          <tbody>
            @foreach($location as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->city }}</td>
                <td>{{ $item->location }}</td>
              </tr>
            @endforeach
          </tbody>

        <p style="text-align:center"><strong>Copyright Randolph(03081200048)</strong></p>


        </body>
        
        </html>