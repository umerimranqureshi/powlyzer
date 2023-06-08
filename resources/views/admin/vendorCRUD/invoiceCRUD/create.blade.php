@extends('vendor.customerCRUD.layout', ['cli_count' => $cli_count, 'dev_count'=> $dev_count, ])
  
@section('content')

<style>
.switch {
  position: relative;
  display: inline-block;
  width: 60px;
  height: 34px;
}

.switch input { 
  opacity: 0;
  width: 0;
  height: 0;
}

.slider {
  position: absolute;
  cursor: pointer;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: #ccc;
  -webkit-transition: .4s;
  transition: .4s;
}

.slider:before {
  position: absolute;
  content: "";
  height: 26px;
  width: 26px;
  left: 4px;
  bottom: 4px;
  background-color: white;
  -webkit-transition: .4s;
  transition: .4s;
}

input:checked + .slider {
  background-color: #2196F3;
}

input:focus + .slider {
  box-shadow: 0 0 1px #2196F3;
}

input:checked + .slider:before {
  -webkit-transform: translateX(26px);
  -ms-transform: translateX(26px);
  transform: translateX(26px);
}
</style>




<h2  style="background-color: white;"> Create New Invoice</h2>
<div class="row">
    
       
                   <a class="btn btn-primary" href="/vendor/customers/invoice"> Back</a>
        
    
</div>
   
@if ($errors->any())
    <dir class="alert alert-danger">
        <strong>Warning!</strong> Please check your input code<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </dir>
@endif
   
<form action="/vendor/customers/invoice/store" method="POST" style="margin-top: 50px;">
    @csrf
     <div class="row">
          

                <input type="hidden" name="user_id_generater" class="form-control" value="{{$vendor_id}}" placeholder="{{$vendor_id}}">
                <input type="hidden" name="user_id_receiver" class="form-control" value="{{$client_id}}" placeholder="{{$client_id}}">
            
                <!-- <strong>Invoice ID:</strong> -->
                <input type="hidden" name="invoice_id" class="form-control" value="{{$invoice_id}}" placeholder="{{$invoice_id}}">
           
                <strong>Product Name:</strong>
                <input type="text" name="product_name" class="form-control" placeholder="Product Name">

                <strong>Quantity:</strong>
                <input type="text" name="quantity" class="form-control" placeholder="Quantity">
           

           
                <strong>Description:</strong>
                <textarea class="form-control" style="height:80px" name="description" placeholder="Description"></textarea>
            
                
                


                <strong>Unit Price:</strong>
                <input type="text" name="rate" class="form-control" placeholder="Unit Price">
           



          <!--       <strong>Vendor ID:</strong>
                <input type="text" name="vendor_id" class="form-control" placeholder="Vendor ID">
           

                <strong>Firebase_ID:</strong>
                <input type="text" name="firebase_id" class="form-control" placeholder="Firebase_ID">
            -->

                <!--  <strong>Status:</strong>
               
                <input type="radio" id="age1" name="status" value="0" checked="checked">
                  <label for="age1">Inactive</label><br>
                  <input type="radio" id="age2" name="status" value="1">
                  <label for="age2">Active</label><br>  
                   -->
           
          


       
                <button style="margin-top: 50px; margin-left: -100px;" type="submit" class="btn btn-primary">Submit</button>
        
    </div>
   
</form>
@endsection