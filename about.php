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
		table,td{
			border: 1px solid black;
			border-collapse: collapse;
		}
		td{
			padding:5px;
		}
		.navbar-default {
			background-color: #0f006f;
			border-color: #030033;
		}
		</style>
	</head>
	<body>
		<div class="container-fluid">
			<?php include("navbar-before-login.php"); ?>
			<div class = "row" style = "margin-top:80px;">
				<div class = "container-fluid">
					<div class = "col-sm-6">
						<div class = "panel panel-default">
							<div class = "panel-heading">
								<div class = "panel-title">4G phones with next gen VOLTE support</div>
							</div>
							<div class = "panel-body">
								<img style = "margin-left:0px;" src="images/leap1.png" width = "615px" height = "400px" alt="Item"/>
							</div>
						</div>	
					</div>
					<div class = "col-sm-6">
						<div class = "panel panel-default">
							<div class = "panel-heading">
								<div class = "panel-title">Customised dialer with free talktime and trendy games</div>
							</div>
							<div class = "panel-body">
								<img style = "margin-left:0px;" src="images/leap.png" width = "615px" height = "400px" alt="Item"/>
							</div>
						</div>	
					</div>
				</div>
			</div>
			<div class = "row">
				<div class = "container-fluid text-justify">
					<div class = "col-sm-2">
						<div class = "panel">
							<div class = "panel-heading">
								<div class = "panel-title">WHO WE ARE</div>
							</div>
							<div class = "panel-body">
								<p>Leap is an electronic commerce company in bangalore.In order to cater the high demands of consumers - low price,quality,
								variety,unique featues,Apps etc ,we are planning to release 4G enabled handsets with all the above qualities at very affordable price</p>
							</div>
						</div>
					</div>
					<div class = "col-sm-5">
						<div class = "panel">
							<div class = "panel-heading">
								<div class = "panel-title"><center>OUR PRODUCTS</center></div>
							</div>
							<div class = "panel-body">
								<p>Leap product line would encompass the following products</p>
								<h4>1.Mobile phones</h4>
								<ol>
									<li>Low-end Mobile phones under INR 2,000/-</li>
									<li>Medium-end Mobile phones ranging INR 2,000/- to INR 5,000</li>
									<li>High-end mobile phones ranging INR 5,000/- to INR 10,000/-</li>
								</ol></br>
								<h4>2.Tablets and Phablets</h4>
								<ol>
									<li>Low-end Tablets under INR 2000/-</li>
									<li>Medium-end Tablets ranging INR 2500 to INR 5000</li>
									<li>High-end Tablets ranging INR 5000 to INR 10000</li>
								</ol>
							</div>
						</div>
					</div>
					<div class = "col-sm-3">
						<div class = "panel">
							<div class = "panel-heading">
								<div class = "panel-title">AVAILABLE IN STORES</div>
							</div>
							<div class = "panel-body">
								<table>
									<tr>
										<td>1.Naaptol</td>
										<td>7.Amazon</td>
									</tr>
									<tr>
										<td>2.Snap Deal</td>
										<td>8.Paytm</td>
									</tr>
									<tr>
										<td>3.Homeshopee</td>
										<td>9.croma</td>
									</tr>
									<tr>
										<td>4.Shopclues</td>
										<td>10.Reliance digital</td>
									</tr>
									<tr>
										<td>5.Infibeam</td>
										<td>11.Sangeetha</td>
									</tr>
									<tr>
										<td>6.Flipkart</td>
										<td>12.Univer cell</td>
									</tr>
								</table>
							</div>
						</div>
					</div>
					<div class = "col-sm-2">
						<div class = "panel">
							<div class = "panel-heading">
								<div class = "panel-title">MANAGING DIRECTOR</div>
							</div>
							<div class = "panel-body">
								<h5><b>O.Raghunatha reddy</b></h5></br>
								<img src = "images/logo.png" alt = "leap"/>
							</div>
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
						<div>Contact: +91-123-000000</div>
					</div>
				</div>
			</div>
		</div>
	<?php include("modal.php"); ?>
	</body>
</html>