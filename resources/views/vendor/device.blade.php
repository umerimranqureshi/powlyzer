<!DOCTYPE html>
<script>
 window.onload = function() {
  document.getElementById('addDevice').style.display = 'none';
    // document.getElementsByClassName('editDevice').style.display = 'none';
    document.getElementById('editDevice').style.display = 'none';

};
</script>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" >
	<head>
		<meta http-equiv="content-type" content="text/html" charset="utf-8" />
		<title>ui_kit___dashboard___admin</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="" >
		<link rel="StyleSheet" href="<?php echo url('/'); ?>/vendor/inbox.css" />
		<script src="https://secure.exportkit.com/cdn/js/ek_googlefonts.js"></script>




<style type="text/css">
	

table {
  width: 100%;
  margin: 20px auto;
  table-layout: auto;
}

.fixed {
  table-layout: fixed;
}

table,
td,
th {
  border-collapse: collapse;
}

th,
td {
  padding: 10px;
  border: solid 1px;
  text-align: center;
}

</style>
 <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha/css/bootstrap.css" rel="stylesheet">

		 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="<?php echo url('/'); ?>/vendor/css/style.css">
		<!-- Add your custom HEAD content here -->
		<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">


<style>
* {
  box-sizing: border-box;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}



.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
	</head>
	<body>
		<div id="content-container" style="height: 1450px;" >
			<div id="_bg__ui_kit___dashboard___admin"  style="height: 1450px;" ></div>
			<div id="rectangle_1493"  ></div>

		

			<div id="group_173" style="position: sticky; height: 600px;" >
				<div id="rectangle_1490"  ></div>

				<div id="group_7"  >

					<div id="bar_chart_2"  >
						<div id="line_1"  ></div>
						<div id="line_2"  ></div>
						<div id="line_3"  ></div>

					</div>
					<div id="dashboard" >
						Dashboard
					</div>

				</div>

				<div id="group_5" >
					<a href="/vendor/homedash">
						<div id="rectangle_1491"  ></div>
						<div id="home"  >
							Home
						</div>
					</a>
					<div id="home_ek1"  >
						<div id="path_435"  ></div>
						<div id="path_436"  ></div>

					</div>

				</div>

				<div id="group_6"  style="background-color: rgb(193 210 255);" >
					<!-- <a href="/vendor/inbox">
					<div id="rectangle_1492"  ></div>
					<div id="inbox" style="color: black;">
						Admin Communication
					</div>
				</a>
					<div id="mail"  >
						<div id="path_437"  ></div>
						<div id="path_438"  ></div>

					</div> -->
					<a href="/vendor/devices">
					<div id="rectangle_1492_ek1" style="background-color: rgb(193 210 255);" ></div>
					<div id="device" style="color: black;">
						Device
					</div>
				</a>
					<div id="package"  >
						<div id="line_4"  ></div>
						<div id="path_439"  ></div>
						<div id="path_440"  ></div>
						<div id="line_5"  ></div>

					</div>

				</div>

				<div id="group_8"  >
					
					<a href="/vendor/invoice">
					<div id="rectangle_1492_ek2"  ></div>
					<div id="invoices" style="color: black;">
						Invoices
					</div>
</a>
					<div id="file_text"  >
						<div id="path_441"  ></div>
						<div id="path_442"  ></div>
						<div id="line_6"  ></div>
						<div id="line_7"  ></div>
						<div id="path_443"  ></div>

					</div>

				</div>

				

				<div id="group_9"  >
					<a href="https://app.hubspot.com/live-messages/9295841/inbox/850594966#reply-editor" target="_blank">
					<div id="rectangle_1492_ek3"  ></div>
					<div id="messages"  style="color: black;">
						Communication
					</div>
</a>
					<div id="message_square"  >
						<div id="message_square_ek1"  ></div>

					</div>
					
				</div>

				<div id="group_10"  >
				
					<a href="/vendor/customers"  >
					<div id="rectangle_1492_ek5"  > </div>
					<div id="customers" style="color: black;">
						Customers
					</div>
	</a>
					<div id="user"  >
						<div id="path_444"  ></div>
						<div id="ellipse_340"  ></div>

					</div>

				</div>

				<div id="group_11"  >
					<!-- <a href="/vendor/calender">
					<div id="rectangle_1492_ek4"  ></div>
					<div id="calender" style="color: black;">
						Calender
					</div>
</a>
					<div id="calendar"  >
						<div id="rectangle_1480"  ></div>
						<div id="line_8"  ></div>
						<div id="line_9"  ></div>
						<div id="line_10"  ></div>

					</div> -->
					<a href="/vendor/setting">
					<div id="rectangle_1492_ek6"  ></div>
					<div id="settings" style="color: black;">
						Settings
					</div>
	</a>
					<div id="settings_ek1"  >
						<div id="ellipse_341"  ></div>
						<div id="path_445"  ></div>

					</div>
					
				</div>
				
				<div id="group_12"  >
					

				</div>
			
				<div id="group_13"  >
					
					
				</div>
					
				
			</div>
			</div>

			<div id="bell"  >
				<div id="path_447"  ></div>
				<div id="path_448"  ></div>

			</div>

			<div id="help_circle"  >
				<div id="ellipse_351"  ></div>
				<div id="path_465"  ></div>
				<div id="line_25"  ></div>

			</div>

			<div id="group_14"  >
<div >    	<p> <a href="/index" style="color: yellow;"><button type="button" id="hs_remove_cookie_button"
  style="background-color: #425b76; border: 1px solid #425b76;
         border-radius: 3px; padding: 10px 10px; text-decoration: none; color: #fff;
         font-family: inherit; font-size: inherit; font-weight: normal; line-height: inherit;
         text-align: left; text-shadow: none;"
  onClick="(function(){
    var _hsp = window._hsp = window._hsp || [];
    _hsp.push(['revokeCookieConsent']);
  })()"
>
  Logout
</button></a> </p></div>			<div id="arya_stark" >
					
				</div>

			</div>
			<div id="admin" >
				Vendor
			</div>

			<div id="group_16"  >

				<div id="home_ek2"  >
					<div id="path_439"  ></div>
					<div id="path_440"  ></div>

				</div>
				<div id="home_ek3" >
					DEVICES -
				</div>
				<div id="__" >
					-
				</div>
				<div id="dashboard_ek1" >
					Dashboard
				</div>

			</div>



<div id="group_18"  >
				<div id="rectangle_1495"  ></div>
				<div id="active_devices" >
					ACTIVE DEVICES
				</div>
				<div id="_123_456" >
{{$dev_count}}
					<!--numberof active devices to be written here -->
			
				</div>
				<div id="__3_48_" >
					
				</div>
				<div id="since_last_month" >
					Since last month
				</div>

				<div id="group_17"  >
					<div id="ellipse_353"  ></div>

					<div id="trending_up"  >
						<div id="path_473"  ></div>
						<div id="path_474"  ></div>

					</div>

				</div>

			</div>





<!--vender box-->


		

<!--total devices box-->


			<div id="group_20"  >
				<div id="rectangle_1495_ek2"  ></div>
				<div id="total_devices" >
					TOTAL USERS
				</div>
				<div id="_123_654" >
{{$cli_count}}
				</div>
				<div id="_0_002" >
					
				</div>
				<div id="since_last_month_ek2" >
					Since last month
				</div>

				<div id="group_17_ek1"  >
					<div id="ellipse_353_ek1"  ></div>

				</div>

				<div id="shopping_cart"  >
					<div id="ellipse_346"  ></div>
					<div id="ellipse_347"  ></div>
					<div id="path_458"  ></div>

				</div>

			</div>
			<div id="group_29"  style="width: 1050px;" >
					

<section class="ftco-section">
		<div class="container">
			
			<div class="row">
				<div class="col-md-12">
					<div >


						<h2 class="heading-section" style="margin-left: 40%; width: 1000px;">INSTALLATION OF DEVICES</h2>
						<!-- <table>
							<thead>
								<th>ID</th>
								<th>Name</th>
								<th>Model</th>
								<th>Description</th>
								<th>Client ID</th>
								<th>Installed</th>
								<th>Remember token</th>
								<th>Created at</th>
								<th>Updated at</th>
								
							</thead>
							<tbody>
								@foreach($devices as $device)
								<tr>
									<td>{{$device->id}}</td>
									<td>{{$device->name}}</td>
									<td>{{$device->model}}</td>
									<td>{{$device->description}}</td>
									<td>{{$device->client_id}}</td>
									<td>{{$device->Installed}}</td>
									<td>{{$device->remember_token}}</td>
									<td>{{$device->created_at}}</td>
									<td>{{$device->updated_at}}</td>
								</tr>
								@endforeach
							</tbody>
						</table> -->
						   
						                <a id="newDevice" class="btn btn-success" style="color: white;"> Create New Device</a>
						       



						                <div id="addDevice" style="padding: 15px; border-radius: 5px; background-color: #f2f2f2; padding: 20px;" >
						                	
										            <!-- <a class="btn btn-primary" > Back</a> -->
										   
										   
										@if ($errors->any())
										    <div class="alert alert-danger">
										        <strong>Whoops!</strong> There were some problems with your input.<br><br>
										        <ul>
										            @foreach ($errors->all() as $error)
										                <li>{{ $error }}</li>
										            @endforeach
										        </ul>
										    </div>
										@endif
<!-- vendor/store/device -->
										  <form action=""  method="POST">
										  @csrf
										   
										   	 <label for="DevicName">Device Name</label>
										    
										      <select id="DevicName" name="DevicName">
										        <option value="Shinider">Shinider</option>
										        <option value="PowerMax">PowerMax</option>
										        <option value="Shinger">Shinger</option>
										      </select>
										    

										    <label for="Model">Model</label>
										    
										      <select id="Model" name="Model">
										        <option value="50">50KV</option>
										        <option value="30">30KV</option>
										        <option value="20">20KV</option>
										        <option value="15">15KV</option>
										        <option value="10">10KV</option>
										        <option value="5">5KV</option>
										        <option value="3">3KV</option>
										        <option value="2">2KV</option>
										      </select>


										      <label for="Installed">Installed at</label>
										    
										    
										      <input type="text" id="Installed" name="Installed" placeholder="Device Installed at..">
										    
										  
										 
										    
										      <label for="Firebase">Firebase ID</label>
										    
										   
										      <input type="text" id="Firebase" name="Firebase" placeholder="Device Firebase ID..">
										    
										      
										    
										      <label for="Discription">Discription</label>
										    
										      <textarea id="Discription" name="Discription" placeholder="Write something.." style="height:100px"></textarea>
										    
										    <input id="newDevice" type="submit" value="Submit">
										  
										  	
										 
										  </form>

										   
									

						                </div>




























						   <div id="showDevice" style="border-radius: 5px; background-color: #f2f2f2; padding: 20px; height: min-content;">
						   	 @if ($message = Session::get('success'))
						            <div class="alert alert-success">
						                <p>{{ $message }}</p>
						            </div>
						    @endif
						   
						    <table class="table table-bordered">
						        <tr>
						            <th>No</th>
									<th>Name</th>
									<th>Model</th>
									<th>Description</th>
									<th>Firebase ID</th>
									<th>Installed</th>
									<th width="280px">Action</th>
						        </tr>
						        @foreach($devices as $device)
						        <tr>
						            <td>{{ ++$i }}</td>
						            <td>{{$device->name}}</td>
									<td>{{$device->model}}</td>
									<td>{{$device->description}}</td>
									<td>{{$device->firebase_id}}</td>
									<td>{{$device->Installed}}</td>
						            <td>
						                <form action="vendor/destroy/device/{{$device->id}}" method="POST">
						    			<button type="submit" class="btn btn-danger">Delete</button>
						    			@csrf
						                @method('DELETE')
						                </form>

						                    <button  id="show" class="btn btn-info"  style="color: white;"    >Show {{session(['show' => $device->id])}}</button>
						    
						                   	<a class="edit">
						                   	 <button onclick="myFunction( )" id="edit" class="btn btn-primary "  style="color: white;" >Edit </button>
						                   </a>
						                    
						      
						                   
						            </td>
						        </tr>
								@endforeach
						        <tr id="editDevice">
								
								    <td id="mytd" colspan="7">
								    	<form action=""  method="POST">
										
								        @csrf
								        @method('PUT')
								   
								         
										   
										   	 <label for="DevicName">Device Name</label>
										    
										      <select id="DevicName" name="DevicName" >

										        <option value="Shinider">Shinider</option>
										        <option value="PowerMax">PowerMax</option>
										        <option value="Shinger">Shinger</option>
										      </select>
										    

										    <label for="Model">Model</label>
										    
										      <select id="Model" name="Model">
										        <option value="50">50KV</option>
										        <option value="30">30KV</option>
										        <option value="20">20KV</option>
										        <option value="15">15KV</option>
										        <option value="10">10KV</option>
										        <option value="5">5KV</option>
										        <option value="3">3KV</option>
										        <option value="2">2KV</option>
										      </select>


										          <label for="Installed">Installed at</label>
										    
										    
										      <input type="text" id="Installed" name="Installed" placeholder="{{session('show')}}" >
										    
										  
										 
										    
										      <label for="Firebase">Firebase ID</label>
										    
										   
										      <input type="text" id="Firebase" name="Firebase" placeholder="Device Firebase ID..">
										    
										      
										    
										      <label for="Discription">Discription</label>
										    
										      <textarea id="Discription" name="Discription" placeholder="Write something.." style="height:100px"></textarea>
										  
								              <button type="submit" class="btn btn-primary">Submit</button>
								            </div>
								        </div>
								   
								    </form>
								    </td>
								  
								   		
						        </tr>





						        
						    </table>
						   </div>
						  

  


					</div>
				</div>
			</div>
		</div>
	</section>

	<script src="<?php echo url('/'); ?>/vendor/js/jquery.min.js"></script>
  <script src="<?php echo url('/'); ?>/vendor/js/popper.js"></script>
  <script src="<?php echo url('/'); ?>/vendor/js/bootstrap.min.js"></script>
  <script src="<?php echo url('/'); ?>/vendor/js/main.js"></script>


				

				

			</div>

			<div id="group_9828"  >
				<div id=""  ></div>

				</div>

			


			<div id="group_9828"  >
				<div id=""  ></div>

				</div>

			</div>

			<div id="group_9829"  >
				<div id=""  ></div>

				<div id="arrow_pointing_to_right__3__ek1"  >
					<div id=""  ></div>

				</div>

			</div>

			<div id="group_9830"  >
				<div id=""  ></div>

				<div id="arrow_pointing_to_right__3__ek2"  >
					<div id=""  ></div>

				</div>

			</div>
			
			<div id="group_9828"  >
				<div id="rectangle_16841"  ></div>

				<div id="arrow_pointing_to_right__3_"  >
					<div id="path_1925"  ></div>

				</div>

			</div>

			<div id="group_9829"  >
				

				

				</div>

			</div>

			<div id="group_9830"  >
				<div id="rectangle_16841_ek2"  ></div>

				<div id="arrow_pointing_to_right__3__ek2"  >
					<div id="path_1925_ek2"  ></div>

				</div>

			</div>
			<div id="black_and_red_laser_games_logo123"  ></div>
		
				<div id="path_473_ek1"  ></div>
				<div id="path_474_ek1"  ></div>

			</div>
			<div id="__1_48_" >
				
			</div>

		</div>
		</div>
				<!-- Start of HubSpot Embed Code -->
  <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/9378352.js"></script>
<!-- End of HubSpot Embed Code -->

<script>
$(document).ready(function(){
  $("#newDevice").click(function(){
    $("#showDevice").toggle(600);
    $("#addDevice").toggle(600);

  });
});
</script>

<script>
$(document).ready(function(){
  $(".edit").click(function(){
    $("#editDevice").toggle(600);
    // $("#addDevice").toggle(600);

  });
});
</script>

<!-- <script>
function myFunction() {
  var x = document.getElementById("editDevice");
  
  if (x.style.display === "none") {
    x.style.display = "block";
    document.getElementById("mytd").colSpan = "7";
  } else {
    x.style.display = "none";
  }
}
</script> -->

	</body>
	<img src="<?php echo url('/'); ?>/vendor/images/footer.PNG">

</html>
