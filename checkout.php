<?php 
session_start();
?>
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

<section class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="content">
					<h1 class="page-name">Checkout</h1>
					<ol class="breadcrumb">
						<li><a href="index.php">Home</a></li>
						<li class="active">checkout</li>
					</ol>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="page-wrapper">
   <div class="checkout shopping">
      <div class="container">
         <div class="row">
            <div class="col-md-8">
               <div class="block billing-details">
                  <h4 class="widget-title">Billing Details</h4>
                  <form action="php/purchase.php" method="POST">
                     <div class="form-group">
                        <label for="full_name">Full Name</label>
                        <input type="text"  name="full_name"class="form-control" id="full_name" placeholder="" required>
                     </div>
                     <div class="form-group">
                        <label for="user_address">Address</label>
                        <input type="text"  name="address" class="form-control" id="user_address" placeholder="" required>
                     </div>
                     <div class="checkout-country-code clearfix">
                        <div class="form-group">
                           <label for="user_post_code">Phone Number</label>
                           <input type="number" name="phone_no" class="form-control" id="user_phone"  required>
                        </div>
                        <div class="form-group" >
                           <label for="user_city">City</label>
                           <input type="text"  name="city" class="form-control" id="user_city"  required>
                        </div>
                     </div>
                     <div class="form-group">
                        <label for="user_country">Country</label>
                        <input type="text" name="country" class="form-control" id="user_country" placeholder="" required>
                     </div>
                  
               </div>
         
                         
                            
			              <button class="btn btn-primary btn-block" name="purchase">Place Order</button>
                              <!-- <a href="confirmation.html" class="btn btn-main mt-20">Place Order</a > -->
                           </form>
                           <!--- CHECKING >--->
                           			   <div class="col-md-4">
               <div class="product-checkout-details">
                  <div class="block">
                     <h4 class="widget-title">Order Summary</h4>
                 
                     <ul class="summary-prices">
                        <li>
                           <span>Subtotal:</span>

						   <?php 
					$total=0;
				  if(isset($_SESSION['cart']))
				  {
					  foreach($_SESSION['cart'] as $key => $value)
					  {
						  $sr=$key+1;
						   $total=$total+$value['Price'];
					  }
					}  
						   ?>
						   
                           <span class="price"><?php echo $total  ?>$</span>
                        </li>
                        <li>
                           <span>Shipping:</span>
                           <span>Free</span>
                        </li>
                     </ul>
                     <div class="summary-total">
					 <?php 
					$total=0;
				  if(isset($_SESSION['cart']))
				  {
					  foreach($_SESSION['cart'] as $key => $value)
					  {
						  $sr=$key+1;
						   $total=$total+$value['Price'];
					  }
					}  
						   ?>
                        <span>Total</span>
                        <span><?php echo $total  ?>$</span>
                     </div>
                     <div class="verified-icon">
                        <img src="images/shop/verified.png">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
<!--- CHECKING >--->
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         
  
   

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