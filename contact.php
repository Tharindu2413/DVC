<?php
error_reporting(0);
session_start();
include './connection.php';
$id = $_SESSION['id'];
$error = '';
$msg = '';
if (isset($_POST['new'])) {
	$fname      = $_POST['fullname'];
	$email      = $_POST['email'];
	$telephone  = $_POST['message'];



	// sql queries
	$sql2 = "INSERT INTO contact (name, email, message) VALUES ('$fname', '$email' , '$telephone' )";


	$result1 = mysqli_query($con, $sql2);
	$msg = "Successfuly Registered a new cusomter";
}


// sql queries
//     $sql2 = "INSERT INTO contact (name, email, message) VALUES ('$fname','$email', '$message' )";

//     echo $fname;
//     $result1 = mysqli_query($con, $sql2);
//     $msg = "Successfully send customer request";


// }



?>
<!DOCTYPE html>
<html lang="en">
<!-- Basic -->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- Mobile Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Site Metas -->
	<title>Home - CARS & COFFEE PALM BEACH</title>
	<meta name="keywords" content="">
	<meta name="description" content="">
	<meta name="author" content="">

	<!-- Site Icons -->
	<link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
	<link rel="apple-touch-icon" href="images/apple-touch-icon.png">

	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Site CSS -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- Custom CSS -->
	<link rel="stylesheet" href="css/custom.css">

	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
	<!-- Start header -->
	<header class="top-navbar">
		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<div class="container">
				<a class="navbar-brand" href="index.html">
					<img src="images/logo1.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item "><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="./Shop.php">Shop</a></li>
						<li class="nav-item"><a class="nav-link" href="./events.php">Events</a></li>
						<li class="nav-item"><a class="nav-link" href="./gallery.php">Gallery</a></li>
						<li class="nav-item active"><a class="nav-link" href="./contact.php">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="./about.php">About</a></li>
						<?php
						$sql = "SELECT * FROM users WHERE id='$id' ";
						$RES = mysqli_query($con, $sql);
						$result = mysqli_fetch_assoc($RES);
						if ($result['usertype'] != 'Admin') {
						?>

						<?php } else { ?>

							<a href="./logout.php" class="btn btn-danger stretched-link">Logout</a>
						<?php } ?>
						<div class="btn-group">

							<!-- <button type="button" class="btn btn-primary" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							  Login
							</button>
							 -->


						</div>
				</div>
				<!-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Pages</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="reservation.html">Reservation</a>
								<a class="dropdown-item" href="stuff.html">Stuff</a>
								<a class="dropdown-item" href="gallery.html">Gallery</a>
							</div>
						</li> -->
				<!-- <li class="nav-item dropdown">
							<a class="nav-link dropdown-toggle" href="#" id="dropdown-a" data-toggle="dropdown">Blog</a>
							<div class="dropdown-menu" aria-labelledby="dropdown-a">
								<a class="dropdown-item" href="blog.html">blog</a>
								<a class="dropdown-item" href="blog-details.html">blog Single</a>
							</div>
						</li> -->
				</ul>
			</div>
			</div>
		</nav>
	</header>
	<!-- End header -->

	<!-- Start All Pages -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>Contact</h1>
					<?php 
                  $sql = "SELECT * FROM users WHERE id='$id' ";
                  $RES = mysqli_query($con, $sql);
                  $result = mysqli_fetch_assoc($RES);
                        if ($result['usertype'] != 'Admin') {
                          ?> 
						  <h1>Cars & Coffee Palm Beach at Tanger</h1>
						  <?php } else {?>
							
							<a href="./contactUsRequests.php" class="btn btn-primary stretched-link">Contact US Requests</a>
							<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->

	<!-- Start Contact -->
	<div class="map-full"></div>
	<div class="contact-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Contact</h2>
						<?php if ($error) { ?> <div class="alert alert-danger"><strong></strong><?php echo htmlentities($error); ?> </div><?php } else if ($msg) { ?><div class="alert alert-success"><strong></strong><?php echo htmlentities($msg); ?> </div><?php } ?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<form method="post" enctype="multipart/form-data">
						<div class="form-group">
							<label for="exampleInputEmail1">Name</label>
							<input type="text" name="fullname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Name" required>
						</div>

						<div class="form-group">
							<label for="exampleInputEmail1">Email</label>
							<input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Telephone" required>
						</div>
						<div class="form-group">
							<textarea class="form-control" id="message" name="message" placeholder="Your Message" rows="4" data-error="Write your message" required></textarea>
							<div class="help-block with-errors"></div>
						</div>



						<!-- <button type="submit" class="btn btn-primary">Register</button> -->
						<input type="submit" name="new" value="Submit" class="btn btn-primary">

					</form>
				</div>
			</div>
		</div>
	</div>
	<!-- End Contact -->

	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							561-756-3063 </p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-envelope"></i>
					<div class="overflow-hidden">
						<h4>Email</h4>
						<p class="lead">
							Support@carsandcoffeepb.com
						</p>
					</div>
				</div>
				<div class="col-md-4">
					<i class="fa fa-map-marker"></i>
					<div class="overflow-hidden">
						<h4>Location</h4>
						<p class="lead">
							West Palm Beach, FL 33401
						</p>
					</div>
				</div>


			</div>
		</div>
	</div>
	<!-- End Contact info -->

	<!-- Start Footer -->
	<footer class="footer-area bg-f">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6">
					<h3>About Us</h3>
					<p>
						Cars & Coffee Palm Beach

						at Tanger Outlets Palm Beach

						1751 Palm Beach Lakes Blvd.

						West Palm Beach, FL 33401</p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Subscribe</h3>
					<div class="subscribe_form">
						<form class="subscribe_form">
							<input name="EMAIL" id="subs-email" class="form_input" placeholder="Email Address..." type="email">
							<button type="submit" class="submit">SUBSCRIBE</button>
							<div class="clearfix"></div>
						</form>
					</div>
					<ul class="list-inline f-social">
						<li class="list-inline-item"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
						<li class="list-inline-item"><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
					</ul>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Contact information</h3>
					<p class="lead">Cars & Coffee Palm Beach
						by ZeilCorp, LLC</p>
					<p class="lead"><a href="#">561-563-6074</a></p>
					<p><a href="#"> Support@carsandcoffeepb.com</a></p>
				</div>
				<div class="col-lg-3 col-md-6">
					<h3>Opening hours</h3>
					<p><span class="text-color">Monday: </span>Closed</p>
					<p><span class="text-color">Tue-Wed :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Thu-Fri :</span> 9:Am - 10PM</p>
					<p><span class="text-color">Sat-Sun :</span> 5:PM - 10PM</p>
				</div>
			</div>
		</div>

		<div class="copyright">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<p class="company-name">All Rights Reserved. &copy; 2022 <a href="#"> CARS & COFFEE PALM BEACH</a></p>
					</div>
				</div>
			</div>
		</div>

	</footer>
	<!-- End Footer -->

	<a href="#" id="back-to-top" title="Back to top" style="display: none;"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></a>

	<!-- ALL JS FILES -->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<!-- ALL PLUGINS -->

	<script src="js/jquery.superslides.min.js"></script>
	<script src="js/images-loded.min.js"></script>
	<script src="js/isotope.min.js"></script>
	<script src="js/baguetteBox.min.js"></script>
	<script src="js/jquery.mapify.js"></script>
	<script src="js/form-validator.min.js"></script>
	<script src="js/contact-form-script.js"></script>
	<script src="js/custom.js"></script>
	<script>
		$('.map-full').mapify({
			points: [{
				lat: 40.7143528,
				lng: -74.0059731,
				marker: true,
				title: 'Marker title',
				infoWindow: 'Live Dinner Restaurant'
			}]
		});
	</script>
</body>

</html>