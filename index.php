<?php 
	session_start();
	if (isset($_SESSION['email']))
	header('location: home.php');
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Welcome</title>
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
		<link rel="stylesheet" href="index.css" type="text/css"/>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		</script>
			<style>
		.navbar-default {
			background-color: #0f006f;
			border-color: #030033;
		}
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<?php include("navbar-before-login.php"); ?>
			<div class="row" style="margin-top:80px;">
				<div class="col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">1 LEAP DUO MINI PHAB&nbsp;&nbsp;&nbsp;&nbsp;<b>INR 3900</b></pre></div>
						</div>
						<div class="panel-body">
							<center><img src="images/Leap DUo MINI PHAB.jpg" alt="Item"/></center>
							<p> 7" HD screen with PPI at 170 ppi integrated with 64 bit Quad Core Processor with SoFIA 3GR, clocking at 1 Ghz with GPU of Mali 450 MP4, High quality phablet with excellent and simplistic design, embedded with gravity sensor, comes with DUAL-SIM and preloaded Android 5.1., Rs 3900.</p>
							<a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">Mobile 2LEAP DUO PHAB&nbsp;&nbsp;&nbsp;&nbsp;<b>INR 5400</b></div>
						</div>
						<div class="panel-body">
							<center><img src="images/Leap Duo PHAB.jpg" alt="Item"/></center>
							<p>7.85" IPS XGA screen with PPI at 165 ppi integrated with Intel Quad Core Processor with SoFIA 3GR with GPU of Mali 450 MP4, 3D Acceleration clocking at 1Ghz, High quality phablet with excellent and simplistic design, embedded with gravity sensor, comes with DUAL-SIM.</p>
							<a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>
						</div>
					</div>
				</div>
				<div class="col-lg-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">Mobile 3LEAP DUO PLUS&nbsp;&nbsp;&nbsp;&nbsp;<b>INR 3850</b></div>
						</div>
						<div class="panel-body">
							<center><img src="images/Leap DUo PLUS.jpg" alt="Item"/></center>
							<p>5" IPS FWVGA screen with the PPI at 200 ppi integrated with Dual Core Processor clocking at 1.3Ghz, High quality phone with excellent and simplistic design, embedded with gravity sensor, comes with DUAL-SIM and preloaded Android 5.1., Rs 3850.</p>
							<a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">Mobile 4LEAP DUO&nbsp;&nbsp;&nbsp;&nbsp; <b>INR 3500</b></div>
						</div>
						<div class="panel-body">
							<center><img src="images/LEAP DUO.jpg" alt="Item"/></center>
							<p>5" IPS FWVGA screen with the PPI at 200 ppi integrated with Dual Core Processor clocking at 1.3Ghz, High quality phone with excellent and simplistic design, embedded with gravity sensor, comes with DUAL-SIM and preloaded Android 4.4.1., Rs 3500</p>
							<a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">Mobile 5LEAP TRIO PHAB&nbsp;&nbsp;&nbsp;&nbsp;<b>INR 6300</b></div>
						</div>
						<div class="panel-body">
							<center><img src="images/Leap TRIO PHAB 4G.jpg" alt="Item"/></center>
							<p>6" IPS QHD screen with PPI at 185 ppi integrated with Intel 64 Bit Quad Core Processor with SoFIA 3GR with GPU of Mali T720, 3D Acceleration clocking at 1Ghz, High quality phablet with excellent and simplistic design, embedded with gravity sensor, comes with DUAL-SIM .</p>
							<a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<div class="panel-title">Mobile 6LEAP TRIO&nbsp;&nbsp;&nbsp;&nbsp;<b>INR 6300</b></div>
						</div>
						<div class="panel-body">
							<center><img src="images/LeapTrio.jpg" alt="Item"/></center>
							<p>5" 2.5D TP OGS screen with PPI at 295 ppi integrated with MTK6735 Quad Core 64 bit, 3D Acceleration clocking at 1Ghz, High quality phone with excellent and simplistic design, embedded with gravity sensor, comes with DUAL-SIM and preloaded Android 5.1.1., Rs 6300</p>
							<a href="#myModal" role="button" data-toggle="modal" class="btn btn-primary btn-block">Order Now!</a>
						</div>
					</div>
				</div>
			</div>			
		</div>
		<div class="footer_menu">
			<div class="container">
				<div class="row" style="color:#fff;margin-bottom:5px;">
					<div class="col-lg-4" >
						<div><h3>Information</h3></div>
						<div><a href="about.php">About Us</a></div>
						<div><a href="contact.php">Contact Us</a></div>
					</div>
					<div class="col-lg-4">
						<div><h3>My Account</h3></div>
						<div><a href="#myModal" role="button" data-toggle="modal">Login</a></div>
						<div><a href="signup.php">Signup</a></div>
					</div>
					<div class="col-lg-4">
						<div><h3>Contact Us</h3></div>
						<div>Contact: +91-9845153749</div>
					</div>
				</div>
			</div>
		</div>
		<?php include("modal.php"); ?>
	</body>
</html>