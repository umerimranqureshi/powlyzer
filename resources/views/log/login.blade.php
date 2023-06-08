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
  	<h2>Login {{$role}}</h2>
  </div>
	     
    <form method="POST" action="/login">
        {{ csrf_field() }}
        
            <input type="hidden" class="form-control" id="role" name="role" value="{{$role}}">
        
        <div class="input-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="input-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <div class="input-group"> 
            <button style="cursor:pointer" type="submit" class="btn">Login</button>
        </div>
        @if($role == "vendor")
        
          <p>
            Not yet a member? <a href="log/register/{{$role}}">Sign up</a>
          </p>
        
        @endif
        
    </form> 



</body>
</html>