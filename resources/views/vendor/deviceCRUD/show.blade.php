@extends('vendor.deviceCRUD.layout', ['cli_count' => $cli_count, 'dev_count'=> $dev_count, ])

@section('content')
 <h2 style="background-color: white;"> Show Device</h2>
    <div class="row">
        <div class="col-lg-12 margin-tb" >
           
            
                <a class="btn btn-primary" href="/vendor/devices"> Back</a>
           
        </div>
    </div>
    <table style="margin-top: 60px;">
        <thead>
            <th>Name</th>
            <th>Model</th>
            <th>Discription</th>
            <th>Installed at</th>
            <th>Vendor ID</th>
            <th>Firebase ID</th>
            <th>Status</th>
        </thead>
        <tbody>
            
            @foreach($blog as $key)
            <tr>
                <td>{{ $key->name }}</td>
                <td>{{ $key->model }}</td>
                <td>{{ $key->description }}</td>
                <td>{{ $key->Installed }}</td>
                <td>{{ $key->vendor_id }}</td>
                <td>{{ $key->firebase_id }}</td>
                <td>{{ $key->status }}</td>
            </tr>
           @endforeach

        </tbody>
    </table>
   
    
@endsection