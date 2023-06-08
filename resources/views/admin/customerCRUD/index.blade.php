@extends('admin.customerCRUD.layout')
 
@section('content')

<h2 style="background-color: white;">Check all Customers</h2>
    <div class="row">
        <div class="col-lg-12 margin-tb">
           
                
            
           
                <!-- <a class="btn btn-success" href="/admin/customers/create"> Create new Customer</a> -->
            
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div  class="alert alert-success" style="margin-top: 60px;">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered" style="margin-top: 50px;">
        <tr>
            <th>No</th>
            <th>user_id</th>
            <th>vendor_id</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $customer->user_id }}</td>
            <td>{{ $customer->vendor_id }}</td>
            <td>
                <form action="/admin/customers/destroy/{{$customer->id}}" method="POST">
   
                    <a class="btn btn-info" href="/admin/customers/show/{{$customer->id}}">Show</a>
    
                    <a class="btn btn-primary" href="/admin/customers/edit/{{$customer->id}}">Edit</a>
   
                    @csrf
                    @method('POST')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $customers->links() !!}
      
@endsection