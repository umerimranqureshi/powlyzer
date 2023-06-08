@extends('admin.vendorCRUD.layout')
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
 <h2 style="background-color: white;"> Show Vendor</h2>
    <div class="row">
        <div class="col-lg-12 margin-tb" >
           
            
                <a class="btn btn-primary" href="/admin/vendors"> Back</a>
           
        </div>
    </div>
    <table style="margin-top: 60px;" id="customers">
        <thead>
            <th>Company Name</th>
            <th>Phone</th>
            <th>CNIC</th>
            <th>User ID</th>
            <th>Name</th>
            <th>email</th>
            <th>Status</th>
        </thead>
        <tbody>
            
            @foreach($vendor as $key)
            <tr>
                <td>{{ $key->company_name }}</td>
                <td>{{ $key->phone }}</td>
               
                <td>{{ $key->cnic }}</td>
                <td>{{ $key->user_id }}</td>
                <td>{{ $key->name }}</td>
                <td>{{ $key->email   }}</td>               
                <td>{{ $key->status }}</td>
            </tr>
           @endforeach

        </tbody>
    </table>
   
    
@endsection