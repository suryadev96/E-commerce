<?php 
	session_start();
	if (isset($_SESSION['email']))
	header('location: home.php');
	error_reporting(0);
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
				<div class="container text-justify">
					<div class="col-lg-10">
						<h2>LIVE SUPPORT</h2>
						<h4>24 hours | 7 days a week | 365 days a year    Live Technical Support</h4>
						<h3>Follow Us On</h3>
						<ul>
							<li><h6><img src="images/fb.png" width="35px" height = "35px" alt ="fb"/>Facebook</h6></li>
							<li><h5><img src="images/tt.png" width="35px" height = "35px" alt ="fb"/>Twitter</h5></li>
							<li><h5><img src="images/g.jpg" width="35px" height = "35px" alt ="fb"/>Google+</h5></li>
						</ul>
					</div>
					<div class="col-lg-2">
						<center><img src="images/contact.png" alt="Contact Us"/></center>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="container">
					<div class="col-lg-8" style="margin-bottom:10px;">
						<h2>CONTACT US</h2>
						<form role="form" action="contact_script.php" method="POST">
							<div class="form-group">
								<label>Name</label>
								<input class="form-control" name="name" required = "true">
							</div>
							<div class="form-group">
								<label>Email:</label>
								<input class="form-control" name="e-mail" required = "true">
								<?php echo $_GET['m1'];?>
							</div>
							<div class="form-group">
								<label>Message:</label>
								<textarea class="form-control" rows="5" name="message" required = "true"></textarea>
							</div>
						  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
					<div class="col-lg-4">
						<h2>Company Information :</h2>
						<h4 style = "color:	#006400;"><i><b>Leap Mobiles Pvt Ltd</b></i></h4>
						<font face = "Verdana">
						<p>7B-7C, Umiya suntech building, </p>
						<p>Groud floor, Whitefield main road,</p>
						<p>Bangalore.</p>
						</font>
						<p>Phone-09845153749</p>
						<p>Email: contact@leapmobiles.com</p>
						<p>Follow on: Facebook, Twitter<p>
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
		</div>
	</body>
</html>