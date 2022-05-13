<?php session_start(); ?>


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



<section class="page-wrapper">
	<div class="contact-section">
		<div class="container">
			<div class="row">
				<!-- Contact Form -->
				<div class="contact-form col-md-6 " >
					<form id="contact-form" method="post" action="" role="form">
					
						<div class="form-group">
							<input type="text" placeholder="Your Name" class="form-control" name="user" id="name">
						</div>
						
						<div class="form-group">
							<input type="email" placeholder="Your Email" class="form-control" name="email" id="email">
						</div>
						
						<div class="form-group">
							<input type="text" placeholder="Subject" class="form-control" name="subject" id="subject">
						</div>
						
						<div class="form-group">
							<textarea rows="6" placeholder="Message" class="form-control" name="message" id="message"></textarea>	
						</div>
						
						<div id="mail-success" class="success">
							Thank you. The Mailman is on His Way :)
						</div>
						
						<div id="mail-fail" class="error">
							Sorry, don't know what happened. Try later :(
						</div>
						
						<div id="cf-submit">
							<input type="submit" id="contact-submit" class="btn btn-transparent" value="Submit">
						</div>						
						
					</form>
				</div>
				<!-- ./End Contact Form -->
				
				<!-- Contact Details -->
				<div class="contact-details col-md-6 " >
					<div class="google-map">
						<div id="map"></div>
					</div>
					<ul class="contact-short-info" >
						<li>
							<i class="tf-ion-ios-home"></i>
							<span style="color:black;"><b>1002 Schimmel Lane Apt. 615
Kreigerfurt, USA - 49232-6001</b></span>
						</li>
						<li>
							<i class="tf-ion-android-phone-portrait"></i>
							<span style="color:black;">Phone: <b>+1-202-555-0110</b></span>
						</li>
					
						<li>
							<i class="tf-ion-android-mail"></i>
							<span style="color:black;">Email: <b>support@salesempire.com</b></span>
						</li>
					</ul>
					<!-- Footer Social Links -->
					<div class="social-icon">
						<ul>
							<li><a class="fb-icon" href="#"><i class="tf-ion-social-facebook"></i></a></li>
							<li><a href="h#"><i class="tf-ion-social-twitter"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-dribbble-outline"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-googleplus-outline"></i></a></li>
							<li><a href="#"><i class="tf-ion-social-pinterest-outline"></i></a></li>
						</ul>
					</div>
					<!--/. End Footer Social Links -->
				</div>
				<!-- / End Contact Details -->
					
				
			
			</div> <!-- end row -->
		</div> <!-- end container -->
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
			<a href="contact.php">Contact</a>
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