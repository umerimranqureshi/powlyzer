
<?php 
  session_start(); 

  if (!isset($_SESSION['username'])) {
  	$_SESSION['msg'] = "You must log in first";
  	header('location: login.php'); 	
  }
  if (isset($_GET['logout'])) {
  	session_destroy();
  	unset($_SESSION['username']);
  	header("location: login.php");
  }
?>
<html>
	<head>
		<meta charset="utf-8">
		<title>POW-LYZER Billing</title>
		<link rel="stylesheet" href="in.css">
		<link rel="license" href="https://www.opensource.org/licenses/mit-license/">
		<script src="in.js"></script>
	</head>
	<body style="margin-left: 0px; margin-right: 0px; margin-top: 0px;">
		<header>
			<h1>POW-LYZER Billing</h1>
			<address contenteditable>
				
			</address>
			<a href="../powerlyzer/client/chome.php"><button>back to home</button></a>
		</header>
		<form>
			<h1>Recipient</h1>
			<br><br><br>
			<address contenteditable>
				<p><b>Dear. <?php echo $_SESSION['username']; ?></p>
			</address>
			<p><br>Address: <?php echo $_SESSION['address']; ?><br>Email: <?php echo $_SESSION['email']; ?></b></p>
			</br>
			</br>
			</br>
			<table class="meta">
				<tr>
					<th>Client ID #</th>
					<td><?php echo $_SESSION['id']; ?></td>
				</tr>
				<tr>
					<th>Date</th>
					<td><?php echo date("l jS \of F Y h:i:s A") . "<br>";?>
					</td>
				</tr>
				
			</table> 
			<table class="inventory">
				<thead>
					<tr>
						<th>Item</th>
						<th>Description</th>
						<th>Software Solution</th>
						<th>Installation</th>
						<th>Price</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>solar system billing</td>
						<td>Bill generation from POW-LYZER</td>
						<td><?php echo  $x = $_SESSION['solution'];; ?></td>
						<td><?php
						echo $y = $_SESSION['installation'];
						?></td>
						<td>RS. <?php echo $total = ($x + $y); ?></td>
					</tr>
				</tbody>
			</table>
			
			<table class="balance">
				<tr>
					<th>Total</th>
					<td>RS.<?php echo $total; ?></td>
				</tr>
			
			</table>

		</form>
		
	</body>
</html>