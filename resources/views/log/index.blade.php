<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
<!-- 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script>



$(document).ready(function(){
    if(navigator.geolocation){
        navigator.geolocation.getCurrentPosition(showLocation);
    }else{ 
        $('#location').html('Geolocation is not supported by this browser.');
    }
});

function showLocation(position){
    var latitude = position.coords.latitude;
    var longitude = position.coords.longitude;
    var data=[latitude, longitude];
     $("#location").html('longitude = '+ longitude + ' and latitude = '+ latitude);
    $.ajax({
      
        type:'POST',
        url:'/getLocation',
        dataType:'json',
        contentType: 'json',
        data: JSON.stringify(data),
        contentType: 'application/json; charset=utf-8',
        headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    },

        success:function(msg){
            if(msg){
               $("#location").html('longitude = '+ longitude + ' and latitude = '+ latitude);
            }else{
                $("#location").html('Not Available');
            }
        }
    });
}
</script> -->

	<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/css/log/style.css">
</head> 
<body style="background-image: url('<?php echo url('/'); ?>/images/1.png'); no-repeat center center fixed;  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
 ">

<div class="header">
	<h2> Client's Startup page</h2>
</div>
  <div class="content">

    <p>Welcome <strong> {{ $name }}</strong>, Our powlyzer's client</p>
    <br>
     
    
   
    <a href="/logout"><button  class="btn-danger">logout</button></a> 

   @if($status == 1)
    <a href="/client/chome"><button  class="btn-primary">go to home</button></a>
    @else
    <a href="/log/notApproved"><button  class="btn-primary">approval page</button></a>
    @endif
  </div>
   <!-- <p>Your Location: <span id="location"></span></p> -->

</body>
</html>