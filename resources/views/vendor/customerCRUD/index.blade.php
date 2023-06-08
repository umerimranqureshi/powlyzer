@extends('vendor.customerCRUD.layout', ['cli_count' => $cli_count, 'dev_count'=> $dev_count, ])
 
@section('content')

<!-- <h2 style="background-color: white;">Check all Customers</h2> -->
    <div class="row">
        <div class="col-lg-12 margin-tb">
           
                
            
           
                <a class="btn btn-success" href="/log/login/log/register/client"> Create new Customer</a>
            
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
            <th>User ID</th>
            <th>Device</th>
            <th>Approval</th>
            <th width="250px">Action</th>
        </tr>
        @foreach ($customers as $customer)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $customer->user_id }}</td>
            <td>{{ $customer->device_id }}</td>
            
                                 @php
                                if($customer->status == 1)
                                {
                                    echo "<td style=\"  background-color: #ccffcc;\">active</td>";
                                }
                                else
                                {
                                    echo "<td style=\"background-color: #ffcccc;\">inactive</td>";
                                }
                                
                                @endphp
            
            <td colspan="2">
                <form action="/vendor/customers/destroy/{{$customer->id}}" method="POST">
                    
                    <a class="btn btn-success" href="/vendor/customers/invoices/{{$customer->user_id}}">Invoice</a>

                    <a class="btn btn-info" href="/vendor/customers/show/{{$customer->id}}">Show</a>
    
                    <a class="btn btn-primary" href="/vendor/customers/edit/{{$customer->id}}">Edit</a>
   
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