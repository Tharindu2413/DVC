<?php
      session_start();
      error_reporting(0);
      include ('./connection.php');
      $id = $_SESSION['id'];

	  $delid = $_GET['id'];
        $type = $_GET['type'];
 
        if($type == 'delete'){
          $sql1="select * from 	product WHERE id='$delid'";
          $res=    mysqli_fetch_assoc(mysqli_query($con,$sql1));
          $pic = $res['image'];
          $sql2 = "DELETE FROM product WHERE id='$delid'";
          unlink("./images/products/".$pic);
          mysqli_query($con, $sql2);
          $msg =  "Successfully Deleted";
          echo "<script type='text/javascript'> document.location = './Shop.php'; </script>";

        }
?>


<!DOCTYPE html>
<html lang="en"><!-- Basic -->
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
 
     <!-- Site Metas -->
    <title>Shop - CARS & COFFEE PALM BEACH</title>  
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
				<a class="navbar-brand" href="index.php">
					<img src="images/logo1.png" alt="" />
				</a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbars-rs-food" aria-controls="navbars-rs-food" aria-expanded="false" aria-label="Toggle navigation">
				  <span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbars-rs-food">
					<ul class="navbar-nav ml-auto">
						<li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item active"><a class="nav-link" href="./Shop.php">Shop</a></li>
                        <li class="nav-item"><a class="nav-link" href="./events.php">Events</a></li>
						<li class="nav-item"><a class="nav-link" href="./gallery.php">Gallery</a></li>
						<li class="nav-item"><a class="nav-link" href="./contact.php">Contact</a></li>
						<li class="nav-item"><a class="nav-link" href="./about.php">About</a></li>
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
				<h1>Welcome shopping area</h1>
				<?php 
                  $sql = "SELECT * FROM users WHERE id='$id' ";
                  $RES = mysqli_query($con, $sql);
                  $result = mysqli_fetch_assoc($RES);
                        if ($result['usertype'] != 'Admin') {
                          ?> 
						  <!-- <h1>Cars & Coffee Palm Beach at Tanger</h1> -->
						  <?php } else {?>
							
							<a href="./addproduct.php" class="btn btn-primary stretched-link">Add Products</a>
							<?php } ?>
				</div>
			</div>
		</div>
	</div>
	<!-- End All Pages -->


	<!-- Start Stuff -->
	<div class="stuff-box">
		
		<div class="container">
			
			<div class="row">
				<div class="col-lg-12">
					<div class="heading-title text-center">
						<h2>Products</h2>
					</div>
				</div>
			</div>
			<div class="row">
			<div class="container">
    <div id="message"></div>
    <div class="row mt-2 pb-3">
      <?php
      $stmt = $con->prepare("SELECT * FROM product");
      $stmt->execute();
      $result = $stmt->get_result();
      while ($row = $result->fetch_assoc()) :
      ?>
      <div class="col-md-4 col-sm-6">
                    <div class="our-team">
                        <div class="pic">
							<!-- <img src="./images/" alt=""> -->
                            <img src="./images/products/<?= $row['image']?>">
                            <ul class="social">
								<div class="col-lg-12">
									<!-- <h1>Welcome shopping area</h1> -->
									</div>
                        </div>
                        <div class="team-content">
                            <h3 class="title"></h3>
                            <span class="post">Product Name :<?= $row['name'] ?></span>
							<span class="post">Price    : $ <?= $row['price'] ?></span>
							<span class="post">Quantity : <?= $row['qty'] ?></span>
							<?php
							if($id == 1){
					echo "<a href='./Shop.php?type=delete&id=" . $row['id'] . "'><button type='button' class='btn btn-danger'>Delete</button></a>";
					}else{}
					?>
                        </div>
                    </div>
                </div>
      <?php endwhile; ?>
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
	<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js'></script>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js'></script>
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

<script type="text/javascript">
  $(document).ready(function() {

    // Send product details in the server
    $(".addItemBtn").click(function(e) {

      e.preventDefault();
      var $form = $(this).closest(".form-submit");
      var id = $form.find(".id").val();
      var name = $form.find(".name").val();
      var price = $form.find(".price").val();
      var image = $form.find(".image").val();
    //   var code = $form.find(".code").val();
      // alert(code)

      var qty = $form.find(".qty").val();

      $.ajax({
        url: './cart/action.php',
        method: 'post',
        data: {
          id: id,
          name: name,
          price: price,
          qty: qty,
          image: image,
        //   code: code
        },
        success: function(response) {
          $("#message").html(response);
          window.scrollTo(0, 0);
          load_cart_item_number();
        }
      });
    });

    // Load total no.of items added in the cart and display in the navbar
    load_cart_item_number();

    function load_cart_item_number() {
      $.ajax({
        url: './cart/action.php',
        method: 'get',
        data: {
          cartItem: "cart_item"
        },
        success: function(response) {
          $("#cart-item").html(response);
        }
      });
    }
  });
</script>