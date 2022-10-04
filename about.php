<?php
      session_start();
      error_reporting(0);
      include ('./connection.php');
      $id = $_SESSION['id'];
?>


<!DOCTYPE html>
<html lang="en"><!-- Basic -->
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
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a class="nav-link" href="./Shop.php">Shop</a></li>
                        <li class="nav-item"><a class="nav-link" href="./events.php">Events</a></li>
						<li class="nav-item"><a class="nav-link" href="./gallery.php">Gallery</a></li>
						<li class="nav-item"><a class="nav-link" href="./contact.php">Contact</a></li>
						<li class="nav-item active"><a class="nav-link" href="./about.php">About</a></li>
						<?php 
                  $sql = "SELECT * FROM users WHERE id='$id' ";
                  $RES = mysqli_query($con, $sql);
                  $result = mysqli_fetch_assoc($RES);
                        if ($result['usertype'] != 'Admin') {
                          ?> 
						
						  <?php } else {?>
							
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
	
	<!-- Start header -->
	<div class="all-page-title page-breadcrumb">
		<div class="container text-center">
			<div class="row">
				<div class="col-lg-12">
					<h1>About Us</h1>
				</div>
			</div>
		</div>
	</div>
	<!-- End header -->
	
	<!-- Start About -->
	<div class="about-section-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 text-center">
					<div class="inner-column">
						<h1>Welcome To <span>Cars & Coffee Palm Beach</span></h1>
						<p>Just several years ago, Cars & Coffee Palm Beach Founder, John Zeilinga, arranged a small car meet in Boynton Beach, Florida. As a lifelong car enthusiast and full-time First Responder, he quickly gained a loyal, diverse, and enthusiastic following. Little did he know that within just a couple of years, the show would outgrow its location and blossom into one of the country's largest monthly car meets. </p>
						<p>Cars & Coffee Palm Beach now meets one Sunday a month at Palm Beach Outlets in West Palm Beach, Florida. With Thousands of show vehicles, Thousands of spectators, and Multiple vendors each month. The show has become one of the most prestigious, widely attended, and increasingly popular automotive events in the region.</p>
					</div>
				</div>
				<div class="col-lg-6 col-md-6">
					<img src="images/about-img.jpg" alt="" class="img-fluid">
				</div>
				<div class="col-md-12">
					<div class="inner-pt">
						<p>All makes, models, and vintages are welcome. From the unveiling of rare hyper cars to showcasing one-of-a-kind customs, the show strives to offer something for everyone. </p>
						<p>
							Due to the success of Cars & Coffee Palm Beach, John started ZeilCorp, LLC to manage the show and also help other venues, groups, clubs, and businesses create or improve their own auto events. John and his team work hard to make sure that efforts are results-oriented; clients and colleagues meet their goals; and the auto events are fun, well-attended, safe, and memorable. 
							
							 
							
							The ZeilCorp team is devoted to working hand-in-hand with all clients to ensure that the huge car community or automotive consortium that John has built continues to grow and feel like family for everyone who is part of it. </p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End About -->
	
<!-- Start Stuff -->
<div class="stuff-box">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Our Sponsors</h2>
					</div>
				</div>
			</div>
			<div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="https://static.wixstatic.com/media/0f70ca_773cc9faf48b41038f4d662f8ac2d9f2~mv2_d_1200_1200_s_2.jpg/v1/fill/w_650,h_650,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/0f70ca_773cc9faf48b41038f4d662f8ac2d9f2~mv2_d_1200_1200_s_2.jpg ">
                           
                        </div>
                        <div class="team-content">
                            <h3 class="title">Adam's Polishes</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="https://static.wixstatic.com/media/0f70ca_3cb72f57c7a841f188a1508c985e8b0e~mv2.jpg/v1/fill/w_650,h_650,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/0f70ca_3cb72f57c7a841f188a1508c985e8b0e~mv2.jpg">
                            <ul class="social">
								<div class="col-lg-12">
									</div>
                        </div>
                        <div class="team-content">
                            <h3 class="title">Private Auto Presenting Sponsors</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="https://static.wixstatic.com/media/0f70ca_92f5cd58fadc4bd18f4aa157232dc12a~mv2.png/v1/fill/w_650,h_650,al_c,q_90,usm_0.66_1.00_0.01,enc_auto/0f70ca_92f5cd58fadc4bd18f4aa157232dc12a~mv2.png">
                            
                        </div>
                        <div class="team-content">
                            <h3 class="title">Blackout Coffee Co.</h3>
                        
                        </div>
                    </div>
                </div>
				
				<div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
<img src="https://static.wixstatic.com/media/0f70ca_ded5ce216a5c4ac48e60bcf16efb74d5~mv2.jpg/v1/fill/w_600,h_600,al_c,lg_1,q_80,enc_auto/0f70ca_ded5ce216a5c4ac48e60bcf16efb74d5~mv2.jpg">                           
                        </div>
                        <div class="team-content">
                            <h3 class="title">BANG Energy</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
<img src="https://static.wixstatic.com/media/0f70ca_20efeb19dfdf4fdf9076f280e2ca11f7~mv2.jpg/v1/fill/w_600,h_600,al_c,lg_1,q_80,enc_auto/0f70ca_20efeb19dfdf4fdf9076f280e2ca11f7~mv2.jpg">                          
                        </div>
                        <div class="team-content">
                            <h3 class="title">BoyntonBeachDetailing </h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
<img src="https://static.wixstatic.com/media/0f70ca_db73f072650a4b45bba0bacbbbae82be~mv2.jpg/v1/fill/w_696,h_696,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/0f70ca_db73f072650a4b45bba0bacbbbae82be~mv2.jpg" >                            
                        </div>
                        <div class="team-content">
                            <h3 class="title">Hagerty</h3>
                        </div>
                    </div>
                </div>
				<div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
<img src="https://static.wixstatic.com/media/0f70ca_ac76e3ea55d842668f1023079c063608~mv2.jpg/v1/fill/w_600,h_600,al_c,lg_1,q_80,enc_auto/0f70ca_ac76e3ea55d842668f1023079c063608~mv2.jpg">                           
                        </div>
                        <div class="team-content">
                            <h3 class="title">RMM Motorcyle Rentals</h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
<img src="https://static.wixstatic.com/media/0f70ca_0aceb74cfcae4fc7b0a5c29100dea50e~mv2.png/v1/fill/w_600,h_600,al_c,lg_1,q_85,enc_auto/0f70ca_0aceb74cfcae4fc7b0a5c29100dea50e~mv2.png" >             
						</div>
                        <div class="team-content">
                            <h3 class="title">Backdraft-Jackson</h3>
                        </div>
                    </div>
                </div>
				
				                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
<img src="https://static.wixstatic.com/media/0f70ca_fb43e9cde5144156900a1092107a4e56~mv2.jpg/v1/fill/w_696,h_696,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/0f70ca_fb43e9cde5144156900a1092107a4e56~mv2.jpg" >                           
                        </div>
                        <div class="team-content">
                            <h3 class="title">Lamborghini Palm Beach</h3>
                          
                        </div>
                    </div>
                </div>
				
				<div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
<img src="https://static.wixstatic.com/media/0f70ca_cadc0553a2ee4b179f6e1cb45efd641c~mv2.jpg/v1/fill/w_600,h_600,al_c,lg_1,q_80,enc_auto/0f70ca_cadc0553a2ee4b179f6e1cb45efd641c~mv2.jpg" >                          
                        </div>
                        <div class="team-content">
                            <h3 class="title">McLaren Palm Beach</h3>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
<img src="https://static.wixstatic.com/media/0f70ca_cd395dce66fa4b2fb4eb285ac3e99043~mv2.jpg/v1/fill/w_600,h_600,al_c,lg_1,q_80,enc_auto/0f70ca_cd395dce66fa4b2fb4eb285ac3e99043~mv2.jpg" >                          
                        </div>
                        <div class="team-content">
                            <h3 class="title">Aston Martin Palm Beach</h3>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
							<img src="https://static.wixstatic.com/media/0f70ca_b9187a7935c54a1d883250949f5b27e5.jpg/v1/fill/w_696,h_696,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/0f70ca_b9187a7935c54a1d883250949f5b27e5.jpg" >                   
                        </div>
                        <div class="team-content">
                            <h3 class="title">Jaguar Palm Beach</h3>
                           
                        </div>
                    </div>
                </div>

				<div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="https://static.wixstatic.com/media/0f70ca_d5fc00f9e8754b7fa0aab0b7c9861327~mv2.jpg/v1/fill/w_600,h_600,al_c,lg_1,q_80,enc_auto/0f70ca_d5fc00f9e8754b7fa0aab0b7c9861327~mv2.jpg">
                        </div>
                        <div class="team-content">
                            <h3 class="title">Land Rover Palm Beach</h3>
                           
                        </div>
                    </div>
                </div>

				<div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="https://static.wixstatic.com/media/0f70ca_205fb021ff00481ab0e35d88910230f8~mv2.jpg/v1/fill/w_696,h_696,al_c,q_85,usm_0.66_1.00_0.01,enc_auto/0f70ca_205fb021ff00481ab0e35d88910230f8~mv2.jpg">
                   
                        </div>
                        <div class="team-content">
                            <h3 class="title">9Automotion Porsche</h3>
                           
                        </div>
                    </div>
                </div> 

				<div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
                            <img src="https://static.wixstatic.com/media/0f70ca_756ac6674d9345d98f1f7a9077d81d20~mv2.jpg/v1/fill/w_800,h_500,al_c,q_85,enc_auto/0f70ca_756ac6674d9345d98f1f7a9077d81d20~mv2.jpg">
                   
                        </div>
                        <div class="team-content">
                            <h3 class="title">FLA Car Shows</h3>
                           
                        </div>
                    </div>
                </div>
            </div>
		</div>
	</div>
	<!-- End Stuff -->
	
	<!-- Start Contact info -->
	<div class="contact-imfo-box">
		<div class="container">
			<div class="row">
				<div class="col-md-4">
					<i class="fa fa-volume-control-phone"></i>
					<div class="overflow-hidden">
						<h4>Phone</h4>
						<p class="lead">
							561-756-3063						</p>
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
	<script src="js/form-validator.min.js"></script>
    <script src="js/contact-form-script.js"></script>
    <script src="js/custom.js"></script>
</body>
</html>