@extends('admin.vendorCRUD.layout')
  
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
input[type=text], select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}
input[type=submit] {
  width: 100%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}
input[type=submit]:hover {
  background-color: #45a049;
}
</style>




<div style="width: 400px;">

  <h1>{{$vendor->company_name}}</h1>
  <p style=" color: grey; font-size: 18px;">Role: {{$role}}</p>
  <h2>Name: {{$name}}</h2>
  <p>Email: {{$email}}</p>

  <p>Phone: {{$vendor->phone}}</p>
  <p>CNIC: {{$vendor->cnic}}</p>
  
  
  <div class="row">
      
         
                     <a class="btn btn-primary" href="/admin/homedash"> Back</a>
          
      
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
     
  <form action="/admin/vendors/store" method="POST" style="margin-top: 50px;">
      @csrf
      @method('POST')
       <div class="row" style="width: 400px;">
          
                  
                 
                  
                 


                 <!--  <strong>Company Name:</strong>
                  <input type="text" name="company_name" class="form-control" placeholder="company_name">
             
          
                  <strong>Phone:</strong>
                  <input type="text" name="phone" class="form-control" placeholder="phone">
              -->

             
  <!--                 <strong>Description:</strong>
                  <textarea class="form-control" style="height:80px" name="description" placeholder="Description"></textarea>
               -->
                  
                  


                 <!--  <strong>CNIC:</strong>
                  <input type="text" name="cnic" class="form-control" placeholder="cnic">
             

                   <strong>User ID:</strong>
                   <input type="text" name="user_id" class="form-control" value="{{ $user_id }}" placeholder="{{$user_id}}">
                          -->           

                 <!--  <strong>Firebase_ID:</strong>
                  <input type="text" name="firebase_id" class="form-control" placeholder="Firebase_ID"> -->
             

                   <strong>Status:</strong>
                 
                  @if( $vendor->status  == 0)

                      <input type="radio" id="age1" name="status" value="0"  checked="checked">
                      <label for="age1">Inactive</label>
                      <input type="radio" id="age2" name="status" value="1">
                      <label for="age2">Active</label><br>  
                  @else

                      <input type="radio" id="age1" name="status" value="0"  >
                      <label for="age1">Inactive</label><br>
                      <input type="radio" id="age2" name="status" value="1" checked="checked">
                      <label for="age2">Active</label><br>  
                 @endif
                    
             
             <input type="hidden" name="id" value="{{$vendor->id}}" placeholder="{{$vendor->id}}">
            


         
                  <button style=" margin-left: 350px;" type="submit" class="btn btn-primary">Submit</button>
          
      </div>
     
  </form>
</div>
@endsection