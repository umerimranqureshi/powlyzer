@extends('admin.deviceCRUD.layout')
@section('content')

<style>
#tableShow {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size: 16px;
}

#tableShow td, #tableShow th {
  border: 1px solid #ddd;
  padding: 8px;
}

#tableShow tr{background-color: white; color: black;}

#tableShow tr:hover {background-color: #ddd;}

#tableShow th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
 <h2 style="background-color: white;"> Show Device</h2>
    <div class="row">
        <div class="col-lg-12 margin-tb" >
           
            
                <a class="btn btn-primary" href="/admin/devices"> Back</a>
           
        </div>
    </div>
    <table style="margin-top: 60px;" id="tableShow">
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