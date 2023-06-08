{{--@php include('serveradmin.php') @endphp-->--}}
<!DOCTYPE html>
<html>
<head>
  <title>Registration system PHP and MySQL</title>
  <link rel="stylesheet" type="text/css" href="<?php echo url('/'); ?>/css/log/style.css">
</head>
<body style="background-image: url('<?php echo url('/'); ?>/images/1.png'); no-repeat center center fixed;  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
 ">
  <div class="header" >
  	<h2>Admin's Login</h2>
  </div>
	 
  <form method="head" action="/log/indexadmin">
  {{--	@php include('errors'); @endphp --}}
  	<div class="input-group">
  		<label>Username</label>
  		<input type="text" name="username" >
  	</div>
  	<div class="input-group">
  		<label>Password</label>
  		<input type="password" name="password">
  	</div>

  	<div class="input-group">
  		<button type="submit" class="btn" name="login_user">Login</button>
  	</div>
 



  </form>
</body>
</html>