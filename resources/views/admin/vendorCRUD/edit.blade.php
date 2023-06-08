@extends('admin.vendorCRUD.layout')
   
@section('content')
<div style="width: 400px;">
  <h1>{{$name}}</h1>
  <p style=" color: grey; font-size: 18px;">Role: {{$role}}</p>
  <p>Email: {{$email}}</p>
  
  

  <!-- <h2>Edit Vendor</h2> -->
    <div class="row">
             
            
                <a class="btn btn-primary" href="/admin/vendors"> Back</a>
            
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
  
    <form action="/admin/vendors/update/{{$id}}" method="POST"  style="margin-top: 50px;">
        @csrf
        @method('POST')
   
         
            
                    <strong>Company Name:</strong>
                    <input type="text" name="company_name" value="{{ $company_name }}" class="form-control" placeholder="{{ $company_name }}">


                    <strong>Phone:</strong>
                    <input type="text" name="phone" value="{{ $phone }}" class="form-control" placeholder="{{ $phone }}">
               
            
                   <!--  <strong>Description:</strong>
                    <textarea class="form-control" style="height:80px" name="description" placeholder="Description">{{-- $description --}}</textarea>


                    <strong>Installed at (address):</strong>
                    <input type="text" name="installed" value="{{-- $installed --}}" class="form-control" placeholder="Address">
               
 -->


                    <strong>CNIC:</strong>
                    <input type="text" name="cnic" value="{{ $cnic }}" class="form-control" placeholder="{{ $cnic}}">
               

                    <strong>User ID:</strong>
                    <input type="text" name="user_id" value=" {{$user_id}} " class="form-control" placeholder="{{$user_id}}">
               

                     <strong>Status:</strong>

<br>
                   @if( $status  == 0)

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
           
              <button style=" margin-left: 350px;" type="submit" class="btn btn-primary">Submit</button>
            
        
   
    </form>
</div>
@endsection