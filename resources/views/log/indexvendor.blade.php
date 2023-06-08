<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/css/log/style.css">
</head>
<body style="background-image: url('<?php echo url('/'); ?>/images/1.png'); no-repeat center center fixed;  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
 ">
<div class="header">
  <h2> Vendor's Startup page</h2>
</div>
  <div class="content">

      <p>Welcome <strong> {{ $name }}</strong>, Our powlyzer's Vendor</p>
      <br>
      
     
      <a href="/logout"><button  class="btn-danger">logout</button></a> 


     
      
       @if($status == 1)
       <a href="/vendor/homedash"><button  class="btn-primary">go to home</button></a>
      @else
      <a href="/log/notApproved"><button  class="btn-primary">approval page</button></a>
      @endif
     
  </div>



		
</body>
</html>