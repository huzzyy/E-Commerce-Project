
<!DOCTYPE html>
<html lang="en">
<head>

  <!-- Basic Page Needs
  ================================================== -->
  <meta charset="utf-8">
  <title>SALES EMPIRE STORE</title>

  <!-- Mobile Specific Metas
  ================================================== -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="Construction Html5 Template">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta name="author" content="Themefisher">
  <meta name="generator" content="Themefisher Constra HTML Template v1.0">
  
    <link rel="stylesheet" href="style.css">
	
  <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">

  <link href="//fonts.googleapis.com/css?family=Cookie" rel="stylesheet" type="text/css">

  <!-- Favicon -->
  <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />
  
  <!-- Themefisher Icon font -->
  <link rel="stylesheet" href="plugins/themefisher-font/style.css">
  <!-- bootstrap.min css -->
  <link rel="stylesheet" href="plugins/bootstrap/css/bootstrap.min.css">
  
  <!-- Animate css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- Slick Carousel -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <link rel="stylesheet" href="plugins/slick/slick-theme.css">
  
  <!-- Main Stylesheet -->
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="css/styl.css">

</head>

<body id="body">

<!-- Start Top Header Bar -->
<section class="top-header">
	<div class="container">
		<div class="row">
			<div class="col-md-4 col-xs-12 col-sm-4">
				<div class="contact-number">
					<i class="tf-ion-ios-telephone"></i>
					<span style="color:  #e0ac1c; font: normal 15px 'Cookie', cursive;">+1-202-555-0110</span>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Site Logo -->
				<div class="logo text-center">
					<a href="index.php">
						<!-- replace logo here -->
						<svg  width="135px" height="29px" viewBox="0 0 155 29" version="1.1" xmlns="http://www.w3.org/2000/svg"
							xmlns:xlink="http://www.w3.org/1999/xlink">
							<g style="color:  #e0ac1c; font: normal 26px 'Cookie', cursive;" 
								>
								<g id="Group" transform="translate(-108.000000, -297.000000)" fill="">
									<text id="AVIATO">
										<tspan  x="108.94" y="325" fill="#FFFFF" >SALES-</tspan><tspan x="180"y="325" fill="#e0ac1c">EMPIRE</tspan>
									</text>
								</g>
							</g>
						</svg>
					</a>
				</div>
			</div>
			<div class="col-md-4 col-xs-12 col-sm-4">
				<!-- Cart -->
				<?php 
					  $count=0;
					    if(isset($_SESSION['cart']))
						{
							$count=count($_SESSION['cart']);
						}
					  ?>
				<ul class="top-menu text-right list-inline">
					<li class="dropdown cart-nav dropdown-slide">
						<a style="color:  #e0ac1c; font: normal 15px 'Cookie', cursive;" href="index.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"><i 
								class="tf-ion-android-cart" ></i>CART <?php echo $count; ?></a>
						<div class="dropdown-menu cart-dropdown">
							<!-- Cart Item -->
						<!-- / Cart Item -->
							<!-- Cart Item -->

                  
							 
						
							<ul class="text-center cart-button">
								<li><a style="font: normal 15px 'Cookie', cursive;" href="cart.php" class="btn btn-small">View Cart </a></li>
							
							</ul>
						</div>

					</li><!-- / Cart -->

				

				

				</ul><!-- / .nav .navbar-nav .navbar-right -->
			</div>
		</div>
	</div>
</section><!-- End Top Header Bar -->


<!-- Main Menu Section -->
<section  class="menu">
	<nav class="navbar navigation">
		<div class="container">
			<div class="navbar-header">
				<h2 class="menu-title">Main Menu</h2>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
					aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>

			</div><!-- / .navbar-header -->

			<!-- Navbar Links -->
			<div id="navbar" class="navbar-collapse collapse text-center">
				<ul class="nav navbar-nav">

					<!-- Home -->
					<li class="dropdown ">
						<a style="color:  #e0ac1c; font-size:25px;" href="index.php">Home</a>
					</li><!-- / Home -->

	
					
					<!-- CATEGGORES -->
					<li class="dropdown dropdown-slide">
						<a style="color:  #e0ac1c; font-size:25px;" href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"
							role="button" aria-haspopup="true" aria-expanded="false">Categories <span
								class="tf-ion-ios-arrow-down"></span></a>
						<ul style="color:  #e0ac1c; font: normal 30px;" class="dropdown-menu">
							<li><a href="address.php">Home Accessories</a></li>
							<li><a href="profile-details.php">Kitchen Ware's</a></li>
							<li><a href="product.php">Pet Supplies</a></li>
					
						</ul>
					</li><!--CATEGORIES -->

					
					<!-- Pages -->
					<li class="dropdown full-width dropdown-slide">
						<!-- <a href="contact.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350"> -->
						<a style="color:  #e0ac1c; font-size:25px;" href="contact.php" role="button" aria-haspopup="true" aria-expanded="false">Contact Us <span
								class="tf-ion-ios-arrow-down"></span></a>
					
					</li><!-- / Pages -->

					<!-- Shop -->
					<li  class="dropdown dropdown-slide">
						<!-- <a href="#!" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="350" -->
							<a style="color:  #e0ac1c; font-size:25px;" href="about.php" role="button" aria-haspopup="true" aria-expanded="false">About Us <span
								class="tf-ion-ios-arrow-down"></span></a>
					
					</li><!-- / Blog -->
				</ul><!-- / .nav .navbar-nav -->


			</div>
			<!--/.navbar-collapse -->
		</div><!-- / .container -->
	</nav>
</section>



<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">About Us</h1>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">about us</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
	<p style="word-spacing:	0.9px; text-align:justify; color:black; font-size:25px; font: normal 30px 'Cookie', cursive;">
<h3 style="color:  blue; font: normal 30px 'Cookie', cursive;">SalesEmpireStore - </h3>
ONLINE SHOPPING PORTAL IN USA
We founded in 2011 and grown up as the leading online shopping store offering a huge range of products from the world's leading brands.

SalesEmpireStore has its origins as an independent online store for all luxury shopping needs.</p>
<h3 style="color:  blue; font: normal 30px 'Cookie', cursive;">
WHY SHOP WITH SalesEmpireStore?</h3>
<p style="word-spacing:	0.9px; text-align:justify; color:black; font-size:15px; ">With the existence of various shopping platforms popping up online, providing more or less the same products at the same prices, it has become very difficult for consumers to actually decide upon their platform of choice. SalesEmpireStore helps you with making a better and informed decision. We have something more to offer than good products at reasonable prices and that is the service level. A lot of companies are in the business of selling but SalesEmpire helps its valuable customers by providing a personalized level of pre sales and after sales support unmatched by any of our competitors.</p>

 

<h4 style="color:  blue; font: normal 30px 'Cookie', cursive;">HOW DO WE FACILITATE OUR VALUED CUSTOMERS?</h4>
<p style="word-spacing:	0.9px; text-align:justify; color:black; font-size:15px; ">We are quick to respond to our customers in the shortest possible time via whatever medium of communication they have chosen. Our offer on almost immediate returns on defected or damaged merchandise during transit allows you to feel as comfortable as if you were choosing goods from your own shop. Our philosophy is simple: “Treat someone as you would like to be treated yourself”.  Our staff first unlearns their existing customer service knowledge and then relearn it our way; the ‘SalesEmpire’ way. This ensures us to be able to sell world class branded products coupled with the most convenient and effective SalesEmpire service. Shop now with SalesEmpireStore and feel the difference!</p>

<h5 style="color:  blue; font: normal 30px 'Cookie', cursive;">Happy Shopping!

SalesEmpireStore  - Endless Selection to Enjoy!</h5>


<h1 style="text-align:center; padding-top:100px;">MEET OUR TEAM</h1>

<section class="team-members ">
	<div class="container">
		<div class="row">
			<div class="title"><h2>Team Members</h2></div>
		</div>
		<div class="row">
			<div class="col-md-3">
				<div class="team-member text-center">
					<img class="img-circle" src="img/team-1-1.jpg">
					<h4>Jonathon Andrew</h4>
					<p style="color:black; font-size:20px;">Founder</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="team-member text-center">
					<img class="img-circle" src="img/team-1-2.jpg">
					<h4>Mollie Ross</h4>
					<p style="color:black; font-size:20px;">Developer</p>
				</div>
			</div>
			<div class="col-md-3">
				<div class="team-member text-center">
					<img class="img-circle" src="img/team-1-3.jpg">
					<h4>Dylan Adams</h4>
					<p style="color:black; font-size:20px;">SALES EXECUTIVE</p>
					
				</div>
			</div>
			<div class="col-md-3">
				<div class="team-member text-center">
					<img class="img-circle" src="img/team-1-4.jpg">
					<h4>Jennifer</h4>
					<p style="color:black; font-size:20px;">Shop Manager</p>
				</div>
			</div>
		</div>
	</div>

</section>



<footer class="footer-distributed">

	<div class="footer-left">
  <img src="img/logo.png">
		<h3>Sales<span>Empire</span></h3>

		<p class="footer-links">
			<a href="index.php">Home</a>
			|
			<a href="privacypolicy.html">Privacy Policy</a>
			|
			<a href="about.php">About</a>
			|
			<a href="contact.html">Contact</a>
		</p>

		<p class="footer-company-name">© 2019 SalesEmpireStore Pvt. Ltd.</p>
	</div>

	<div class="footer-center">
		<div>
			<i class="fa fa-map-marker"></i>
			  <p><span>1002 Schimmel Lane Apt. 615</span>
				Kreigerfurt, USA - 49232-6001</p>
		</div>

		<div>
			<i class="fa fa-phone"></i>
			<p>+1-202-555-0110</p>
		</div>
		<div>
			<i class="fa fa-envelope"></i>
			<p><a href="mailto:support@salesempire.com">support@salesempire.com</a></p>
		</div>
	</div>
	<div class="footer-right">
		<p class="footer-company-about">
			<span>About the company</span>
			We founded in 2011 and grown up as the leading online shopping store offering a huge range of products from the world's leading brands.	</p>
		<div class="footer-icons">
			<a href="#"><i class="fa fa-facebook"></i></a>
			<a href="#"><i class="fa fa-twitter"></i></a>
			<a href="#"><i class="fa fa-instagram"></i></a>
			<a href="#"><i class="fa fa-linkedin"></i></a>
			<a href="#"><i class="fa fa-youtube"></i></a>
		</div>
	</div>
</footer>
    <!-- 
    Essential Scripts
    =====================================-->
    
    <!-- Main jQuery -->
    <script src="plugins/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap 3.1 -->
    <script src="plugins/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap Touchpin -->
    <script src="plugins/bootstrap-touchspin/dist/jquery.bootstrap-touchspin.min.js"></script>
    <!-- Instagram Feed Js -->
    <script src="plugins/instafeed/instafeed.min.js"></script>
    <!-- Video Lightbox Plugin -->
    <script src="plugins/ekko-lightbox/dist/ekko-lightbox.min.js"></script>
    <!-- Count Down Js -->
    <script src="plugins/syo-timer/build/jquery.syotimer.min.js"></script>

    <!-- slick Carousel -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>

    <!-- Google Mapl -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCC72vZw-6tGqFyRhhg5CkF2fqfILn2Tsw"></script>
    <script type="text/javascript" src="plugins/google-map/gmap.js"></script>

    <!-- Main Js File -->
    <script src="js/script.js"></script>
    


  </body>
  </html>