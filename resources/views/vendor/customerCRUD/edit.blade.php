@extends('vendor.customerCRUD.layout', ['cli_count' => $cli_count, 'dev_count'=> $dev_count, ])
   
@section('content')
  <h2  style="background-color: white;">Edit Customer</h2>
    <div class="row">
             
            
                <a class="btn btn-primary" href="/vendor/customers"> Back</a>
            
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
  
    <form action="/vendor/customers/update/{{$id}}" method="POST"  style="margin-top: 50px;">
        @csrf
        @method('POST')
   
         
            
                    <!-- <strong>User_id:</strong> -->
                    <input type="hidden" name="user_id" value="{{ $user_id }}" class="form-control" placeholder="user_id">


                    <strong>Device_id:</strong>
                    <input type="text" name="device_id" value="{{ $device_id }}" class="form-control" placeholder="Device_id">
               
            
                   <!--  <strong>Description:</strong>
                    <textarea class="form-control" style="height:80px" name="description" placeholder="Description">{{-- $description --}}</textarea>


                    <strong>Installed at (address):</strong>
                    <input type="text" name="installed" value="{{-- $installed --}}" class="form-control" placeholder="Address">
               
 -->


                    <!-- <strong>Vendor ID:</strong> -->
                    <input type="hidden" name="vendor_id" value="{{ $vendor_id }}" class="form-control" placeholder="Vendor ID">
               

                   <!--  <strong>Firebase_ID:</strong>
                    <input type="text" name="firebase_id" value="{{-- $firebase_id --}}" class="form-control" placeholder="Firebase_ID">
                -->

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
           
              <button type="submit" class="btn btn-primary">Submit</button>
            
        
   
    </form>
@endsection