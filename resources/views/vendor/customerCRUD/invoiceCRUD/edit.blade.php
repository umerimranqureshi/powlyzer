@extends('vendor.customerCRUD.layout', ['cli_count' => $cli_count, 'dev_count'=> $dev_count, ])
   
@section('content')
  <h2  style="background-color: white;">Edit Customer</h2>
    <div class="row">
             
            
                <a class="btn btn-primary" href="/vendor/customers/invoice/{{$id}}"> Back</a>
            
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Warning!</strong> Please check input field code<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="/vendor/customers/invoice/update/{{$id}}" method="POST"  style="margin-top: 50px;">
        @csrf
        @method('POST')
   
         
              
               
           
                <strong>Product Name:</strong>
                <input type="text" name="product_name" class="form-control" value="{{$product_name}}" placeholder="{{$product_name}}">

                
           

           
                <strong>Description:</strong>
                <input class="form-control"  name="description" value="{{$description}}"   placeholder="{{$description}}">
            
                <strong>Quantity:</strong>
                <input type="text" name="quantity" class="form-control" value="{{$quantity}}" placeholder="{{$quantity}}">
                
                <strong>Paid Date and time:</strong>
                <input type="date" name="paid_date" class="form-control" value="{{$paid_date}}" placeholder="{{$paid_date}}">

                <strong>Unit Price:</strong>
                <input type="text" name="rate" class="form-control" value="{{$rate}}" placeholder="{{$rate}}">
                      
              <button type="submit" class="btn btn-primary">Submit</button>
            
        
   
    </form>
@endsection