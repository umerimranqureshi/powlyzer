@extends('admin.customerCRUD.layout')
@section('content')

    

<style>
#customers {
  font-family: Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
  font-size: 16px;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 8px;
}

#customers tr{background-color: white; color: black;}

#customers tr:hover {background-color: #ddd;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #04AA6D;
  color: white;
}
</style>
 <h2 style="background-color: white;"> Show Customer</h2>
    <div class="row">
        <div class="col-lg-12 margin-tb" >
           
            
                <a class="btn btn-primary" href="/admin/customers"> Back</a>
           
        </div>
    </div>
    <table style="margin-top: 60px;" id="customers">
        <thead>
            <th>user_id</th>
            <th>name</th>
            <th>email</th>

            <th>vendor_id</th>
            <th>device_id</th>
            
            <th>Status</th>
        </thead>
        <tbody>
            
            @foreach($customers as $key)
            <tr>
                <td>{{ $key->user_id }}</td>

                <td>{{ $name }}</td>
                
                <td>{{ $email }}</td>
                
                <td>{{ $key->device_id }}</td>
               
                <td>{{ $key->vendor_id }}</td>
               
                <td>{{ $key->status }}</td>
            </tr>
           @endforeach

        </tbody>
    </table>
   
    
@endsection