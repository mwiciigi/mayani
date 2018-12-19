
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Garden Care || Home  Page || Gardening and Landscaping HTML Template</title>
	
	<!-- Responsive Meta Tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- main stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url ();?>assets/css/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url ();?>assets/css/responsive.css">
    
    



</head>
<body>


	<!-- start header -->
	<header>
		<div class="container">
			<div class="logo pull-left">
				<a href="index.html">
					<img src="<?php echo base_url ();?>assets/img/resources/logo.png" alt="Awesome Image"/>
				</a>
			</div>
			<div class="top-info pull-right">
				<div class="info-box">
					<div class="text-box">
						<p><span class="highlighted">Follow Us</span></p>
						<ul class="social-icons">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="info-box">
					<div class="icon-box">
						<i class="icon icon-Phone2"></i>
					</div>
					<div class="text-box">
						<p><span class="highlighted">(123) 456 789</span> <br>contact@gardencare.com</p>
					</div>
				</div>
				<div class="info-box">
					<div class="icon-box">
						<i class="icon icon-Timer"></i>
					</div>
					<div class="text-box">
						<p><span class="highlighted">Mon - Sat 9.00 - 19.00</span> <br>Sunday Closed</p>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- end header -->
	
	<!-- start mainmenu -->
	<nav class="mainmenu-navigation stricky">
		<div class="container mainmenu-gradient-bg">
			<div class="navigation pull-left">
				<div class="nav-header">
					<button><i class="fa fa-bars"></i></button>
				</div>
				<div class="nav-footer">
					<ul class="nav">
						<li class="active"><a href="index.html">Home</a></li>
						<li class="dropdown">
							<a href="about-us.html">about us</a>							
							<div class="sub-menu">
								<ul>
									<li class="dropdown">
										<a href="team.html">Team</a>
										<div class="sub-menu">
											<ul>
												<li><a href="#">Third Level Menu</a></li>
												<li><a href="#">Third Level Menu</a></li>
												<li><a href="#">Third Level Menu</a></li>
											</ul>
										</div>
									</li>
									<li><a href="testimonial.html">Testimonials</a></li>
								</ul>
							</div>
						</li>
						<li  class="dropdown">
							<a href="services.html">SErvices</a>
							<div class="sub-menu">
								<ul>
									<li><a href="pricing.html">Pricing</a></li>
								</ul>
							</div>
						</li>
						<li class="dropdown">
							<a href="project-v1.html">Projects</a>
							<div class="sub-menu">
								<ul>
									<li><a href="project-v1.html">Project One</a></li>
									<li><a href="project-v2.html">Project Two</a></li>
									<li><a href="project-v3.html">Project Three</a></li>
									<li><a href="project-v4.html">Project Four</a></li>
								</ul>
							</div>
						</li>
						<li class="dropdown">
							<a href="#">pages</a>
							<div class="sub-menu">
								<ul>
									<li><a href="404.html">404 Page</a></li>
									<li><a href="no-search-results.html">No Search Page</a></li>
									<li><a href="search-result.html">Search Page</a></li>									
									<li><a href="faq.html">FAQ</a></li>
								</ul>
							</div>
						</li>
						<li class="dropdown">
							<a href="blog-left-sidebar.html">blog</a>
							<div class="sub-menu">
								<ul>
									<li><a href="blog-left-sidebar.html">Blog Left Bar</a></li>
									<li><a href="blog-right-sidebar.html">Blog Right Bar</a></li>
									<li><a href="blog-without-sidebar.html">Blog Without bar</a></li>									
									<li><a href="blog-details.html">Blog Details</a></li>
								</ul>
							</div>
						</li>
						<li class="dropdown">
							<a href="shop.html">shop</a>
							<div class="sub-menu">
								<ul>
									<li><a href="shop.html">Shop Page</a></li>
									<li><a href="product-details.html">Product Details</a></li>
									<li><a href="cart-page.html">Cart Page</a></li>
									<li><a href="checkout-page.html">Checkout Page</a></li>
								</ul>
							</div>
						</li>
						<li><a href="contact.html">contact us</a></li>
					</ul>
				</div>
			</div>
			<div class="search-wrapper pull-right">
				<ul>
					<li>
						<button><i class="icon icon-Search"></i></button>
						<ul class="search-box">
							<li>
								<form action="#">
									<input type="text" placeholder="Search for anything">
									<button type="submit"><i class="icon icon-Search"></i></button>
								</form>
							</li>
						</ul>
					</li>
					<li>
						<button><i class="icon icon-ShoppingCart"></i></button>
						<ul class="cart-box">
							<li class="cart-header">
								<h4>You have 2 Items In Your Cart.</h4>
							</li>
							<li class="cart-content">
								<div class="img-box">
									<img src="img/cart/1.jpg" alt="Awesome Image"/>
								</div>
								<div class="content">
									<h4>Grass Trimmer</h4>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</div>
									<ul class="price">
										<li><span class="or-price">$39.99</span></li>
										<li><span class="sale-price">$24.5</span></li>
									</ul>
								</div>
							</li>
							<li class="cart-content">
								<div class="img-box">
									<img src="img/cart/1.jpg" alt="Awesome Image"/>
								</div>
								<div class="content">
									<h4>Grass Trimmer</h4>
									<div class="rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star-o"></i>
									</div>
									<ul class="price">
										<li><span class="or-price">$39.99</span></li>
										<li><span class="sale-price">$24.5</span></li>
									</ul>
								</div>
							</li>
							<li class="cart-footer clearfix">
								<div class="total-price">
									<h4>Total price: <span>$73.5</span></h4>
								</div>
								<div class="checkout-box">
									<a href="#">Checkout <i class="fa fa-shopping-cart"></i></a>
								</div>
							</li>
						</ul>
					</li>
				</ul>
			</div>
		</div>
	</nav>