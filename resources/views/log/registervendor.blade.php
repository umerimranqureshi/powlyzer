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
  <div class="header">
  	<h2>Vendor's Register</h2>
  </div>
	
  <form method="POST" action="/registervendor">
        {{ csrf_field() }}
        <div class="input-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name">
        </div>

        <div class="input-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" id="email" name="email">
        </div>

        <div class="input-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

         <div class="input-group">
            <label for="password_confirmation">Password Confirmation:</label>
            <input type="password" class="form-control" id="password_confirmation"
                   name="password_confirmation">
        </div>

        <div class="input-group">
            <button style="cursor:pointer" type="submit" class="btn btn-primary">Submit</button>
        </div>
        @include('partials.formerrors') 
        <p>
          Already a member? <a href="/log/loginvendor">Sign in</a>
        </p>
    </form>

</body>
</html>