@extends('admin.customerCRUD.layout')
  
@section('content')
 <script type="text/javascript">
    ImageArray = new Array();
    ImageArray[0] = '113.jpg';
    ImageArray[1] = '09eb582566230f43de34c254db198c19.jpg';
    ImageArray[2] = '59a0e739d91e578e1ff17c46cc805c8c.jpg';
    ImageArray[3] = '400x297.jpg';
    ImageArray[4] = '1345_great_paintings_1200_grande.jpg';
    ImageArray[5] = 'god-is-great-paul-lovering.jpg';
    ImageArray[6] = 'image.jpg';
    ImageArray[7] = 'mona-lisa-leonardo-da-vinci-most-famous-painting.jpg';
    ImageArray[8] = 'my-verson-of-a-great-painting-robert-burns.jpg';
    ImageArray[9] = 'van-gogh-cafe-terrace-at-night.jpg';
    ImageArray[10] = '113.jpg';


function getRandomImage() {
    var num = Math.floor( Math.random() * 11);
    var img = ImageArray[num];
    document.getElementById("randImage").innerHTML = ('<img src="' + '<?php echo url('/'); ?>/fyp/' + img )

}
</script>

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
  <!-- <img src="#" alt="John" style="width:100%"> -->
  <h1>{{$name}}</h1>
  <p style=" color: grey; font-size: 18px;">Role: {{$role}}</p>
  <p>Email: {{$email}}</p>
  


<!-- <h2  style="background-color: white;"> Create New Customer</h2> -->
<div class="row" style="width: 400px;">
    
       
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
   
<form  action="/admin/customers/store" method="POST" style="margin-top: 50px; width: 300px">
    @csrf
     <div class="row" style="width: 400px;">
        
            
                <!-- <strong>User_id:</strong> -->
                <input type="hidden" name="user_id" class="form-control" value="{{ $user_id }}" placeholder="{{$user_id}}">
           
        
                <strong>Dervice_id:</strong>
                <input type="text" name="device_id" class="form-control" placeholder="Device_id">
           

           
<!--                 <strong>Description:</strong>
                <textarea class="form-control" style="height:80px" name="description" placeholder="Description"></textarea>
             -->
                
                


                <strong>Vendor_id:</strong>
                <input type="text" name="vendor_id" class="form-control" placeholder="Vendor_ID">
           



          <!--       <strong>Vendor ID:</strong>
                <input type="text" name="vendor_id" class="form-control" placeholder="Vendor ID">
           

                <strong>Firebase_ID:</strong>
                <input type="text" name="firebase_id" class="form-control" placeholder="Firebase_ID">
            -->

                 <strong>Status:</strong>
               
                <input type="radio" id="age1" name="status" value="0" checked="checked">
                  <label for="age1">Inactive</label><br>
                  <input type="radio" id="age2" name="status" value="1">
                  <label for="age2">Active</label><br>  
                  
           
          


       
                <button style=" position: absolute; margin-top: 180px; margin-left: 330px;" type="submit" class="btn btn-primary">Submit</button>
        
    </div>
   
</form>

</div>
@endsection