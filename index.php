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
							<g style="color:  #e0ac1c; font: normal 26px 'Cookie', cursive;">
								
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


<div class="hero-slider">
  <div class="slider-item th-fullpage hero-area" style="background-image: url(images/slider/kitchen\ 2.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-center">
          <p style="color:  white;  font: normal 45px 'Cookie', cursive; " data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PRODUCTS</p>
          <h1 style="color:  #e0ac1c; font: normal 40px 'Cookie', cursive;" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Kitchen's Ware.</h1>
          <a style="color:red;" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="profile-details.php">Explore Now</a>
        </div>
      </div>
    </div>
  </div>
  <div class="slider-item th-fullpage hero-area" height="50px" style="background-image: url(kitch.jpg);">
    <div class="container">
      <div class="row">
        <div class="col-lg-8 text-left">
          <p style="color:  white;  font: normal 45px 'Cookie', cursive; " data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PRODUCTS</p>
          <h1 style="color:  #e0ac1c; font: normal 40px 'Cookie', cursive;" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Home Accessories</h1>
          <a style="color:red;" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="address.php">Explore Now</a>
        </div>
      </div>
    </div>
  </div>
  
  <div class="slider-item th-fullpage hero-area" style="background-image: url(pet.jpg);">
    <div class="container">
      <div class="row">
        <div  class="col-lg-8 text-left">
          <p style="color:  white;  font: normal 45px 'Cookie', cursive; " data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".1">PRODUCTS</p>
          <h1 style="color:  #e0ac1c; font: normal 40px 'Cookie', cursive;" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">Pet & Supplies</h1>
          <a style="color:red;"  data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".8" class="btn" href="product.php">Explore Now</a>
        </div>
      </div>
    </div>
  </div>
  
</div>



<section class="products section bg-gray" id="men">
	<div class="container">
		<div class="row">
			<div class="title text-center">
				<h2 style="color:  #e0ac1c; font: normal 35px 'Cookie', cursive;">Trendy Products</h2>
			</div>
		</div>
		<div class="row">
			
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">Sale</span>
						<img class="img-responsive" src="images/shop/products/Product 1.jpg" alt="product-img" />
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
							
								<li>
								
									
									<input type="hidden" name="item1" value="brush">
								</li>
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.html">Oster Mane and Tail Brush</a></h4>
						<p class="price">$100</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<img class="img-responsive" src="images/shop/products/Product 2.jpg" alt="product-img">
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal2">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
							
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.html">LENOX Tools Hole Saw</a></h4>
						<p class="price">$40</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<img class="img-responsive" src="images/shop/products/Product 3.jpg" alt="product-img" />
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal3">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
							
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.html">Bi-Metal Speed Slot</a></h4>
						<p class="price">$80</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<img class="img-responsive" src="images/shop/products/product 4.jpg" alt="product-img" />
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal4">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
							
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.html">Glass Water Bottles Deluxe Set</a></h4>
						<p class="price">$175</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<img class="img-responsive" src="images/shop/products/product 5.jpg" alt="product-img" />
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal5">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
						
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.html">DrawerStore Compact Cutlery</a></h4>
						<p class="price">$25</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<img class="img-responsive" src="images/shop/products/prodct 6.jpg" alt="product-img" />
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal6">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
							
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.html">Houseplant Sticky Stakes	</a></h4>
						<p class="price">$15</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<span class="bage">Sale</span>
						<img class="img-responsive" src="images/shop/products/product 7.jpg" alt="product-img" />
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal7">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
							
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.html">CoolZone Cat Pad</a></h4>
						<p class="price">$180</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<img class="img-responsive" src="images/shop/products/product 8.jpg" alt="product-img" />
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal8">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
							
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.html">Oakley Universal Soft Goggle Case</a></h4>
						<p class="price">$65</p>
					</div>
				</div>
			</div>
			<div class="col-md-4">
				<div class="product-item">
					<div class="product-thumb">
						<img class="img-responsive" src="images/shop/products/9.jpg" alt="product-img" />
						<div class="preview-meta">
							<ul>
								<li>
									<span  data-toggle="modal" data-target="#product-modal9">
										<i class="tf-ion-ios-search-strong"></i>
									</span>
								</li>
							
							</ul>
                      	</div>
					</div>
					<div class="product-content">
						<h4><a href="product-single.html">Scratching Tree Cubby House and Snuggle Bed</a></h4>
						<p class="price">$180</p>
					</div>
				</div>
			</div>
		
		<!-- Modal -->
		<div class="modal product-modal fade" id="product-modal">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<i class="tf-ion-close"></i>
			</button>
		  	<div class="modal-dialog " role="document">
		    	<div class="modal-content">
			      	<div class="modal-body">
			        	<div class="row">
			        		<div class="col-md-8 col-sm-6 col-xs-12">
								<form action="php/managecart.php" method="POST">
			        			<div class="modal-image">
				        			<img class="img-responsive" src="images/shop/products/Product 1.jpg" alt="product-img" />
			        			</div>
			        		</div>
			        		<div class="col-md-4 col-sm-6 col-xs-12">
			        			<div class="product-short-details">
			        				<h2 class="product-title">Oster Mane and Tail Brush For Horse</h2>
			        				<p class="product-price">$180</p>
									<p class="product-price">$170</p>
			        				<p class="product-short-description">
			        				
Use this to brush mane and tail after it is combed to remove tangles.
This comfortable
ergonomically designed brush will make the necessary task of brushing your horse s mane and tail less of .
Design enables multi-directional brushing.
Control touch reduces hand fatigue.
Use this comfortable brush to gently and completely brush your horse s mane and tail.
			        				</p>
			        				<button type="submit" name="Add_To_Cart" class="btn btn-main">Add To Cart</a></button>
									<input type="hidden" name="Item_Name" value="Oster Mane and Tail brush for horse">
									<input type="hidden" name="Price" value="100$">
			        			
			        			</div>
			        		</div>
			        	</div>
					</form>
			        </div>
		    	</div>
		  	</div>
		
		</div><!-- /.modal -->

<!-- Modal -->
<div class="modal product-modal fade" id="product-modal2">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<i class="tf-ion-close"></i>
	</button>
	  <div class="modal-dialog " role="document">
		<div class="modal-content">
			  <div class="modal-body">
				<div class="row">
					<div class="col-md-8 col-sm-6 col-xs-12">
						<form action="php/managecart.php" method="POST">
						<div class="modal-image">
							<img class="img-responsive" src="product 2.jpg" alt="product-img" />
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="product-short-details">
							<h2 class="product-title">LENOX Tools Hole Saw with Arbor, Speed Slot, 1-Inch</h2>
							<p class="product-price">$80</p>
							<p class="product-price">$75</p>
							<p class="product-short-description">
							
								2X more durable with 50% longer life than previous LENOX hole saws
								Increased wall thickness improves durability and minimizes tooth loss
								Optimized tooth design penetrates metal with ease
								Larger, sharper teeth for faster cutting
								SPEED SLOT staircase design for easy plug ejection
							</p>
							<button type="submit" name="Add_To_Cart" class="btn btn-main">Add To Cart</a></button>
									<input type="hidden" name="Item_Name" value="LENOX TOOLS HOLE SAW WITH ARBOR, SPEED SLOT, 1-Inch">
									<input type="hidden" name="Price" value="75$">
							
						</div>
					</div>
				</div>
			</form>
			</div>
		</div>
	  </div>
</div><!-- /.modal -->

<!-- Modal -->
<div class="modal product-modal fade" id="product-modal3">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<i class="tf-ion-close"></i>
	</button>
	  <div class="modal-dialog " role="document">
		<div class="modal-content">
			  <div class="modal-body">
				<div class="row">
					<div class="col-md-8 col-sm-6 col-xs-12">
						<form action="php/managecart.php" method="POST">
						<div class="modal-image">
							<img class="img-responsive" src="Product 3.jpg" alt="product-img" />
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="product-short-details">
							<h2 class="product-title">Lenox Tools - 1773006 Bi-Metal Speed Slot Arbored Hole Saw with T3 Technology, 4-1/2"</h2>
							<p class="product-price">$150</p>
							<p class="product-price">$140</p>
							<p class="product-short-description">
							
								2X more durable with 50% longer life than previous LENOX hole saws
								Increased wall thickness improves durability and minimizes tooth loss
								Optimized tooth design penetrates metal with ease
								Larger, sharper teeth for faster cutting
								SPEED SLOT staircase design for easy plug ejection
							</p>
							<button type="submit" name="Add_To_Cart" class="btn btn-main">Add To Cart</a></button>
							<input type="hidden" name="Item_Name" value="Lenox Tools - 1773006 Bi-Metal Speed Slot Arbored hole Saw with T3 Technology, 4-1/2">
							<input type="hidden" name="Price" value="140$">
						
						</div>
					</div>
				</div>
			</form>
			</div>
		</div>
	  </div>
</div><!-- /.modal -->


	<!-- Modal -->
	<div class="modal product-modal fade" id="product-modal4">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<i class="tf-ion-close"></i>
		</button>
		  <div class="modal-dialog " role="document">
			<div class="modal-content">
				  <div class="modal-body">
					<div class="row">
						<div class="col-md-8 col-sm-6 col-xs-12">
							<form action="php/managecart.php" method="POST">
							<div class="modal-image">
								<img class="img-responsive" src="product 4.jpg" alt="product-img" />
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="product-short-details">
								<h2 class="product-title">Glass Water Bottles 6 Pack Deluxe Set 18oz - Includes 6 Sleeves. Stainless Steel Lids - Kombucha, Juice, Tea</h2>
								<p class="product-price">$180</p>
								<p class="product-price">$175</p>
								<p class="product-short-description">
								
									STORE ANYTHING: Ideal for hot or cold drinks, still or carbonated, leftover storage.
									HEAVY DUTY GLASS: Made from 3mm thick high quality white glass. Strong, crystal clear and attractive
									AIR TIGHT AND LEAK PROOF: Slow oxidation, keep your beverages fresher for longer.
									SAFE TO DRINK FROM: Unlike plastic, our glass bottles are odourless, won’t change the taste of your drink and won’t seep out nasty chemicals when exposed to heat.
									NEOPRENE SLEEVES: In 6 colors. Keep your beverages hot or cold, bump and knock protection. The perfect Christmas gift and holiday stocking stuffer!
								</p>
								<button type="submit" name="Add_To_Cart" class="btn btn-main">Add To Cart</a></button>
									<input type="hidden" name="Item_Name" value="Glass Water Bottles 6 Pack Deluxe Set 18oz - Includes 6 Sleeves. Stainless Steel Lids - Kombucha, Juice, Tea">
									<input type="hidden" name="Price" value="175$">
								
							</div>
						</div>
					</div>
				</form>
				</div>
			</div>
		  </div>
	</div><!-- /.modal -->

		<!-- Modal -->
		<div class="modal product-modal fade" id="product-modal5">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<i class="tf-ion-close"></i>
			</button>
		  	<div class="modal-dialog " role="document">
		    	<div class="modal-content">
			      	<div class="modal-body">
			        	<div class="row">
			        		<div class="col-md-8 col-sm-6 col-xs-12">
								<form action="php/managecart.php" method="POST">
			        			<div class="modal-image">
				        			<img class="img-responsive" src="Product 5.jpg" alt="product-img" />
			        			</div>
			        		</div>
			        		<div class="col-md-4 col-sm-6 col-xs-12">
			        			<div class="product-short-details">
			        				<h2 class="product-title">DrawerStore Compact Cutlery Organizer Kitchen Drawer Tray, Small, Gray</h2>
			        				<p class="product-price">$30</p>
									<p class="product-price">$25</p>
			        				<p class="product-short-description">
			        				
										Unique design creates more space in your drawer
										Utensil organizer comes with stacked compartments for different cutlery
										Cutlery icons for easy identification. Fits up to 24 pieces of cutlery
										Suitable for drawers with a minimum height of 3.25 inches. Dimensions: 15.6 x 4.33 x 2.25 inches.
										Five angled compartments. Wash and dry by hand. BPA free
			        				</p>
									<button type="submit" name="Add_To_Cart" class="btn btn-main">Add To Cart</a></button>
									<input type="hidden" name="Item_Name" value="DrawerStore Compact Cutlery Organizer Kitchen Drawer Tray, Small, Gray">
									<input type="hidden" name="Price" value="25$">
			        			
			        			</div>
			        		</div>
			        	</div>
					</form>
			        </div>
		    	</div>
		  	</div>
		</div><!-- /.modal -->

		<!-- Modal -->
<div class="modal product-modal fade" id="product-modal6">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<i class="tf-ion-close"></i>
	</button>
	  <div class="modal-dialog " role="document">
		<div class="modal-content">
			  <div class="modal-body">
				<div class="row">
					<div class="col-md-8 col-sm-6 col-xs-12">
						<form action="php/managecart.php" method="POST">
						<div class="modal-image">
							<img class="img-responsive" src="product 6.jpg" alt="product-img" />
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="product-short-details">
							<h2 class="product-title">Safer Brand SF5026 Houseplant Sticky Stakes Insect Traps, 1 Pack, One Color</h2>
							<p class="product-price">$20</p>
							<p class="product-price">$15</p>
							<p class="product-short-description">
								Attracts and traps a variety of flying insects including white flies, fungus gnats, thrips, and fruit flies
								The poison-free and pesticide-free formula draws pest insects like a magnet
								Allows easy disposal when full, simply toss it in the trash and replace it
								Comes with 7 stakes to help keep your plants insect free
								Best used with potted plants both indoors and outdoors
							</p>
							<button type="submit" name="Add_To_Cart" class="btn btn-main">Add To Cart</a></button>
							<input type="hidden" name="Item_Name" value="Safer Brand SF5026 Houseplant Sticky Stakes Insect Traps, 1 Pack, One Colory">
							<input type="hidden" name="Price" value="15$">
						
						</div>
					</div>
				</div>
			</form>
			</div>
		</div>
	  </div>
</div><!-- /.modal -->

	<!-- Modal -->
	<div class="modal product-modal fade" id="product-modal7">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<i class="tf-ion-close"></i>
		</button>
		  <div class="modal-dialog " role="document">
			<div class="modal-content">
				  <div class="modal-body">
					<div class="row">
						<div class="col-md-8 col-sm-6 col-xs-12">
							<form action="php/managecart.php" method="POST">
							<div class="modal-image">
								<img class="img-responsive" src="Product 7.jpg" alt="product-img" />
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="product-short-details">
								<h2 class="product-title">COOLZONE CAT PAD</h2>
								<p class="product-price">$200</p>
								<p class="product-price">$180</p>
								<p class="product-short-description">
								
									Made from specialised cooling nylon fibres.
CoolZone bedding provides a cooling temperature and assists in keeping your dog comfortable and relaxed during the warmer months.
Does not require refrigeration or freezing.
Non-toxic.
Mattresses include non-slip bases for added stability.
Loungers feature a fully removable and reversible cushion.
Mattress Toppers are the perfect fit for our Pet One Leisure Raised Dog Beds (sold separately).
Easy to clean.
Lightweight and portable.
Available in 6 different styles and various sizes.
								</p>
								<button type="submit" name="Add_To_Cart" class="btn btn-main">Add To Cart</a></button>
								<input type="hidden" name="Item_Name" value="CoolZone Cat Pad">
								<input type="hidden" name="Price" value="180$">
							
							</div>
						</div>
					</div>
				</form>
				</div>
			</div>
		  </div>
	</div><!-- /.modal -->

	<!-- Modal -->
<div class="modal product-modal fade" id="product-modal8">
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
		<i class="tf-ion-close"></i>
	</button>
	  <div class="modal-dialog " role="document">
		<div class="modal-content">
			  <div class="modal-body">
				<div class="row">
					<div class="col-md-8 col-sm-6 col-xs-12">
						<form action="php/managecart.php" method="POST">
						<div class="modal-image">
							<img class="img-responsive" src="product 8.jpg" alt="product-img" />
						</div>
					</div>
					<div class="col-md-4 col-sm-6 col-xs-12">
						<div class="product-short-details">
							<h2 class="product-title">Oakley Universal Soft Goggle Case</h2>
							<p class="product-price">$70</p>
							<p class="product-price">$65</p>
							<p class="product-short-description">
								Plastic frame
Plastic lens
non-polarized
Hydrophilic Coating coating
Color: Black
Size: Large
Oakley Universal Soft Storage Case Snow Goggles Accessories for Adult
							</p>
							<button type="submit" name="Add_To_Cart" class="btn btn-main">Add To Cart</a></button>
							<input type="hidden" name="Item_Name" value="Oakley Universal Soft Goggle Case">
							<input type="hidden" name="Price" value="65$">
							
						</div>
					</div>
				</div>
			</form>
			</div>
		</div>
	  </div>
</div><!-- /.modal -->

	<!-- Modal -->
	<div class="modal product-modal fade" id="product-modal9">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<i class="tf-ion-close"></i>
		</button>
		  <div class="modal-dialog " role="document">
			<div class="modal-content">
				  <div class="modal-body">
					<div class="row">
						<div class="col-md-8 col-sm-6 col-xs-12">
							<form action="php/managecart.php" method="POST">
							<div class="modal-image">
								<img class="img-responsive" src="images/shop/products/	9.jpg" alt="product-img" />
							</div>
						</div>
						<div class="col-md-4 col-sm-6 col-xs-12">
							<div class="product-short-details">
								<h2 class="product-title">Scratching Tree Cubby House and Snuggle Bed</h2>
								<p class="product-price">$200</p>
								<p class="product-price">$180</p>
								<p class="product-short-description">
									Provides enrichment and satisfies your pets natural scratching instinct
Perfect to help exercise your cat, allowing them to work out their hindquarter muscles whilst satisfying their natural instinct to climb and pounce
Assist your cat in shedding loose/dead layers from their claws to help keep them healthy and sharp
Available in various textures that provide your cat with a range of sensations to enjoy
Multi level scratching posts provides hours of fun for your cat
Available in various sizes and styles
								</p>
								<button type="submit" name="Add_To_Cart" class="btn btn-main">Add To Cart</a></button>
							<input type="hidden" name="Item_Name" value="Scratching Tree Cubby House and Snuggle Bed">
							<input type="hidden" name="Price" value="180$">
							
							</div>
						</div>
					</div>
				</form>
				</div>
			</div>
		  </div>
	</div><!-- /.modal -->


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
