
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mayani Poultry</title>
	<!-- Responsive Meta Tag -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- main stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url ();?>assets/css/style.css">
	<!-- responsive stylesheet -->
	<link rel="stylesheet" href="<?php echo base_url ();?>assets/css/responsive.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
						<p><span class="highlighted">+254 721 127 673</span> <br>info@mayanipoultry.co.ke</p>
					</div>
				</div>
				<div class="info-box">
					<div class="icon-box">
						<i class="icon icon-Timer"></i>
					</div>
					<div class="text-box">
						<p><span class="highlighted">Mon - Sat 8.00 - 19.00</span> <br>Sunday Closed</p>
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
						<li class="active"><a href="<?php echo base_url();?>home">Home</a></li>						
						<li  class="dropdown"><a href="<?php echo base_url();?>chicks">Chicks</a></li>
						<li  class="dropdown"><a href="<?php echo base_url();?>services">Services</a></li>
						<li class="dropdown"><a href="<?php echo base_url();?>equipment">Equipments</a></li>
						<li class="dropdown"><a href="<?php echo base_url();?>blog">blog</a></li>
						<li class="dropdown"><a href="<?php echo base_url();?>about">about us</a></li>
						<li><a href="<?php echo base_url();?>contact">Contact US</a></li>
					</ul>
				</div>
			</div>
			<div class="search-wrapper pull-right">
				<ul>
					<li>
						<button><i class="icon icon-Search"></i></button>
						<ul class="search-box">
							
						</ul>
					</li>					
				</ul>
			</div>
		</div>
	</nav>