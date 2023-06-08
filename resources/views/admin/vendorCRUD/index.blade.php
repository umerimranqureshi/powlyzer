@extends('admin.vendorCRUD.layout')
 
@section('content')

<!-- <h2 style="background-color: white;">Check all Vendors</h2>
    <div class="row">
        <div class="col-lg-12 margin-tb">           
                <a class="btn btn-success" href="/admin/vendors/create"> Create new Vendors</a>
            
        </div>
    </div>
    -->
    @if ($message = Session::get('success'))
        <div  class="alert alert-success" style="margin-top: 60px;">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered" style="margin-top: 50px;">
        <tr>
            <th>No</th>
            <th>Company Name</th>
            <th>Phone</th>
            <th>CNIC</th>
            <th>Status</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($vendors as $vendor)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $vendor->company_name }}</td>
            <td>{{ $vendor->phone }}</td>
             <td>{{ $vendor->cnic }}</td>
              <td>{{ $vendor->status }}</td>
            <td>
                <form action="/admin/vendors/destroy/{{$vendor->id}}" method="POST">

                    <!-- <a class="btn btn-success" href="/admin/vendors/invoices/{{$vendor->user_id}}">Invoice</a> -->
   
                    <a class="btn btn-info" href="/admin/vendors/show/{{$vendor->id}}">Show</a>
    
                    <a class="btn btn-primary" href="/admin/vendors/edit/{{$vendor->id}}">Edit</a>
    
                    @csrf
                    @method('POST')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $vendors->links() !!}
      
@endsection