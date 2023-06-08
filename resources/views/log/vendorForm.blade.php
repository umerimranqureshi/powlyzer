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
    <h2>Register  Vendor</h2>
    <h4>"Your administration needs approval after your registration"</h4>
  </div>

  <form action="/register/storevendor" method="POST">
        {{ csrf_field() }}

        

        <div class="input-group">
            <label >Company Name:</label>
            <input type="text" class="form-control" name="company_name">
        </div>

        <div class="input-group">
            <label >Phone:</label>
            <input type="phone" class="form-control"  name="phone">
        </div>

         


        <div class="input-group">
            <label>Location:</label>
            <input type="text" class="form-control"  name="cnic">
        </div>

        

       
            
            <input type="hidden" class="form-control"  name="user_id" value="{{ $user_id }}">
       


        <div class="input-group">
            <button style="cursor:pointer; margin-left: 82%; " type="submit" class="btn btn-primary">Submit</button>
        </div>
        @include('partials.formerrors') 
       
    </form>
  





</body>
</html>