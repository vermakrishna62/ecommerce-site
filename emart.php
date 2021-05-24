
<?php  

	session_start();

	if(isset($_SESSION['username']))
	{
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

   	<!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    

	<title>Online Shopping Site in India for Mobiles, Electronic Applicances</title>

	<style type="text/css">
		h3 {
			color: #000;
			font-size: 26px;
			font-weight: 300;
			text-align: center;
			text-transform: uppercase;
			position: relative;
			margin: 30px 0 80px;
		}

		h3 b {
			color: #ffc000;
		}
		h3::after {
			content: "";
			width: 100px;
			position: absolute;
			margin: 0 auto;
			height: 4px;
			background: rgba(0, 0, 0, 0.2);
			left: 0;
			right: 0;
			bottom: -20px;
		}

		.carousel {
			margin: 50px auto;
			padding: 0 70px;
		}
		.carousel .carousel-item {
			min-height: 330px;
			text-align: center;
			overflow: hidden;
		}
		.carousel .carousel-item .img-box {
			height: 160px;
			width: 100%;
			position: relative;
		}
		.carousel .carousel-item img {	
			max-width: 100%;
			max-height: 100%;
			display: inline-block;
			position: absolute;
			bottom: 0;
			margin: 0 auto;
			left: 0;
			right: 0;
		}
		.carousel .carousel-item h4 {
			font-size: 18px;
			margin: 10px 0;
		}
		.carousel .carousel-item .btn {
			color: #333;
			border-radius: 0;
			font-size: 11px;
			text-transform: uppercase;
			font-weight: bold;
			background: none;
			border: 1px solid #ccc;
			padding: 5px 10px;
			margin-top: 5px;
			line-height: 16px;
		}
		.carousel .carousel-item .btn:hover, .carousel .carousel-item .btn:focus {
			color: #fff;
			background: #000;
			border-color: #000;
			box-shadow: none;
		}
		.carousel .carousel-item .btn i {
			font-size: 14px;
			font-weight: bold;
			margin-left: 5px;
		}
		.carousel .thumb-wrapper {
			text-align: center;
		}
		.carousel .thumb-content {
			padding: 15px;
		}
		.carousel-control-prev, .carousel-control-next {
			height: 100px;
			width: 40px;
			background: white;
			margin: auto 0;
			background: snow;
		}
		.carousel-control-prev i, .carousel-control-next i {
			font-size: 30px;
			position: absolute;
			top: 50%;
			display: inline-block;
			margin: -16px 0 0 0;
			z-index: 5;
			left: 0;
			right: 0;
			color: black;
			text-shadow: none;
			font-weight: bold;
		}
		.carousel-control-prev i {
			margin-left: -3px;
		}
		.carousel-control-next i {
			margin-right: -3px;
		}
		.carousel .item-price {
			font-size: 13px;
			padding: 2px 0;
		}
		.carousel .item-price strike {
			color: #999;
			margin-right: 5px;
		}
		.carousel .item-price span {
			color: #86bd57;
			font-size: 110%;
		}	
		.carousel .carousel-indicators {
			bottom: -50px;
		}
		.carousel-indicators li, .carousel-indicators li.active {
			width: 10px;
			height: 10px;
			margin: 4px;
			border-radius: 50%;
			border-color: transparent;
			border: none;
		}
		.carousel-indicators li {	
			background: rgba(0, 0, 0, 0.2);
		}
		.carousel-indicators li.active {	
			background: rgba(0, 0, 0, 0.6);
		}
		.star-rating li {
			padding: 0;
		}
		.star-rating i {
			font-size: 14px;
			color: #ffc000;
		}		

		@media (min-width: 1201px)
		{
			#mycon
			{
				width: 91%;
				padding-left:10px;
				padding-right:10px;
				margin-right: auto;
				margin-left: auto;
			}

			#mymobile,#mylaptop,#myled
			{
				width: 89.8%;
				padding-left:15px;
				padding-right:15x;
				margin-right: auto;
				margin-left: auto;
			}
		}

		@media (min-width: 993px) and (max-width: 1200px)
		{
			#mycon
			{
				width: 87%;
				padding-left:10px;
				padding-right:10px;
				margin-right: auto;
				margin-left: auto;
			}

			#mymobile,#mylaptop,#myled
			{
				width: 85%;
				padding-left:15px;
				padding-right:15x;
				margin-right: auto;
				margin-left: auto;
			}

			#mymobile,#mylaptop,#myled,#heading
			{
				font-size: 20px;
			}
		}

		@media (min-width:769px) and (max-width: 992px)
		{
			#mycon
			{
				width: 85%;
				padding-left:10px;
				padding-right:10px;
				margin-right: auto;
				margin-left: auto;
			}

			#mymobile,#mylaptop,#myled
			{
				width: 83%;
				padding-left:15px;
				padding-right:15x;
				margin-right: auto;
				margin-left: auto;
			}

			#mymobile,#mylaptop,#myled,#heading
			{
				font-size: 18px;
			}
		}

		@media (min-width:577px) and (max-width: 768px)
		{
			#mycon
			{
				width: 100%;
				padding-left:0px;
				padding-right:0px;
				margin-right: auto;
				margin-left: auto;
			}

			#mymobile,#mylaptop,#myled
			{
				width: 100%;
				padding-left:15px;
				padding-right:15x;
				margin-right: auto;
				margin-left: auto;
			}

			#mymobile,#mylaptop,#myled,#heading
			{
				font-size: 17px;
			}
		}

		@media (max-width:576px)
		{
			#mycon
			{
				width: 100%;
				padding-left: 0px;
				padding-right: 0px;
				margin-left: auto;
				margin-right: auto;
			}

			#mymobile,#mylaptop,#myled
			{
				width: 100%;
				padding-left:15px;
				padding-right:15x;
				margin-right: auto;
				margin-left: auto;
			}

			#mymobile,#mylaptop,#myled,#heading
			{
				font-size: 14px;
			}
		}

	</style>

</head>
<body style="background: #F1F3F6;">

	<div id="backTop"></div>

	<?php require_once('emart_header.php'); ?>
	<?php require_once('main_menus.php'); ?>

	<div class="container-fluid bg-white px-0" style="margin-top: -20px; width: 1650px;">

		<div id="myCarousel" class="carousel slide px-0" data-ride="carousel" data-interval="0">  
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					
					<img src="images/admin-images/showy3.webp " class="d-block w-100 h-100">
						<!-- Carousel controls -->
					<a class="carousel-control-prev bg-white" href="#myCarousel" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="carousel-control-next bg-white" href="#myCarousel" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
				<div class="carousel-item">
					<img src="images/admin-images/showy2.webp" class="d-block w-100 h-100">
					<a class="carousel-control-prev bg-white" href="#myCarousel" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="carousel-control-next bg-white" href="#myCarousel" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
				<div class="carousel-item">
					<img src="images/admin-images/show3.jpg" class="d-block w-100">
					<a class="carousel-control-prev bg-white" style="background:white;" href="#myCarousel" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="carousel-control-next bg-white" href="#myCarousel" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
				<div class="carousel-item">
					<img src="images/admin-images/showy4.webp" class="d-block w-100 h-100">
					<a class="carousel-control-prev bg-white" style="background:white;" href="#myCarousel" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="carousel-control-next bg-white" href="#myCarousel" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
		
		</div>
		</div>
	</div>
	
	<div class="container-fluid bg-white" style="margin-top: 30px; width: 1600px;">
		<div class="row">
		<div class="col-md-12">
			<h3>Trending <b>Products</b></h3>
			<div id="myslider1" class="carousel slide" data-ride="carousel" data-interval="0"
				 style="margin-top: -1%;">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myslider1" data-slide-to="0" class="active"></li>
				<li data-target="#myslider1" data-slide-to="1"></li>
				<li data-target="#myslider1" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_vivo_item.php?prodid=4&price=8990&modname=y11&folname=y11" target="_blank">
										<img src="images/mobile/vivo/y11/y11_1-1.jpeg" class="img-fluid">
									</a>
								</div>
								<div class="thumb-content">
									<h4>Vivo Y11</h4>
									<p class="item-price"><strike>Rs.9500</strike> <span>Rs. 8990</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_laptop_item.php?id=7&modeltype=acer&modelname=acerp2series" target="_blank">
										<img src="images/laptop/acer/acerp2series/acerp2series_1-1.jpeg" 
											 class="img-fluid">
									</a>
								</div>
								<div class="thumb-content">
									<h4>Acer P2 Series</h4>
									<p class="item-price"><strike>Rs.53000</strike> <span>Rs.50990</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>		
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_oven_item.php?id=1" target="_blank">
										<img src="images/kitchenappliance/oven/godrej25l/godrej25l_1_1.jpeg" 
											 class="img-fluid">
									</a>
								</div>
								<div class="thumb-content">
									<h4>Godrej 25 L Convection Microwave Oven</h4>
									<p class="item-price"><strike>Rs.15000</strike> <span>Rs.13049</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>								
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_powerbank_item.php?id=2" target="_blank">
										<img src="images/accessories/powerbank/mi3i/mi3i_1.jpeg" 
											 class="img-fluid">
									</a>
								</div>
								<div class="thumb-content">
									<h4>Powerbank Mi3i</h4>
									<p class="item-price"><strike>Rs.1700</strike> <span>Rs.1599</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_television.php?id=1&inches=32" target="_blank">
										<img src="images/television/32inches/compaqerseries80cm/compaqerseries_1-1.jpeg" class="img-fluid">
									</a>
								</div>
								<div class="thumb-content">
									<h4>Compaq ErSeries 80cm</h4>
									<p class="item-price"><strike>Rs.13999</strike> <span>Rs.11999</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_oppo_item.php?prodid=2&price=9990&modname=A15&folname=a15" target="_blank">
										<img src="images/mobile/oppo/a15/a15_1-1.jpeg" class="img-fluid">
									</a>
								</div>
								<div class="thumb-content">
									<h4>Oppo A15</h4>
									<p class="item-price"><strike>Rs.12990</strike> <span>Rs.9900</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_earphone_item.php?id=5" target="_blank">
										<img src="images/accessories/earphones/oneplus-bullets/oneplusbullets_1.jpeg" class="img-fluid">
									</a>
								</div>
								<div class="thumb-content">
									<h4>Oneplus Bullets Earphones</h4>
									<p class="item-price"><strike>Rs.2299</strike> <span>Rs.1999</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_juicer_item.php?id=1" target="_blank">
										<img src="images/kitchenappliance/juicer/mantavya/mantavya_1_1.jpeg"
										class="img-fluid">
									</a>
								</div>
								<div class="thumb-content">
									<h4>Samsung Galaxy S8</h4>
									<p class="item-price"><strike>Rs.749</strike> <span>Rs.699</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>						
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_mobilecables_item.php?id=6" target="_blank">
										<img src="images/accessories/mobilecables/redmi-original/redmioriginal_1.jpeg" class="img-fluid">
									</a>
								</div>
								<div class="thumb-content">
									<h4>Redmi Original Mobile Cable</h4>
									<p class="item-price"><strike>Rs.239</strike> <span>Rs.199</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_laptop_item.php?id=3&modeltype=asus&modelname=asustufgaming" target="_blank">
										<img src="images/laptop/asus/asustufgaming/asustufgaming_1-1.jpeg" 
											 class="img-fluid">
									</a>
								</div>
								<div class="thumb-content">
									<h4>Asus Stuf Gaming</h4>
									<p class="item-price"><strike>Rs.81000</strike> <span>Rs.76990</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_juicer_item.php?id=2" target="_blank">
										<img src="images/kitchenappliance/juicer/singer_nutri/singer_nutri_2_1.jpeg" class="img-fluid">
									</a>
								</div>
								<div class="thumb-content">
									<h4>Singer Nutri Blender NUTRIO</h4>
									<p class="item-price"><strike>Rs.1920</strike> <span>Rs.1741</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>	
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_vivo_item.php?prodid=1&price=19990&modname=v20se&folname=v20se" target="_blank">
										<img src="images/mobile/vivo/v20se/v20se_1-1.jpeg" class="img-fluid">
									</a>
								</div>
								<div class="thumb-content">
									<h4>Vivo V20</h4>
									<p class="item-price"><strike>Rs.21999</strike> <span>Rs.19990</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control-prev bg-white" href="#myslider1" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control-next bg-white" href="#myslider1" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
	</div>
	</div>

	<div class="container-fluid bg-white px-0" style="margin-top: 30px; width: 1600px;">
		<a href="laptop.php">
			<img src="images/admin-images/lappy-header.jpg" class="d-block w-100" style="height: 300px;">
		</a>
	</div>

	<div class="container-fluid mb-4" style="margin-top: 30px; width: 1600px;">
		<div class="row">
		<div class="col-md-9 bg-white">
			<h3>Trending <b>Smartphones</b></h3>
			<div id="myTrendingSmps" class="carousel slide" data-ride="carousel" data-interval="0"
				 style="margin-top: -1%;">
			<!-- Carousel indicators -->
			<ol class="carousel-indicators">
				<li data-target="#myTrendingSmps" data-slide-to="0" class="active"></li>
				<li data-target="#myTrendingSmps" data-slide-to="1"></li>
				<li data-target="#myTrendingSmps" data-slide-to="2"></li>
			</ol>   
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_oneplus_item.php?prodid=1&price=50499&modname=8pro5g&folname=8pro5g" target="_blank">
									<img src="images/mobile/oneplus/8pro5g/8pro5g_1-1.jpg" class="img-fluid">
								</a>
								</div>
								<div class="thumb-content">
									<h4>Oneplus 8pro5g</h4>
									<p class="item-price"><strike>Rs.53499</strike> <span>Rs.50499</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_oppo_item.php?prodid=4&price=14990&modname=A52&folname=a52" target="_blank">
										<img src="images/mobile/oppo/a52/a52_1-1.jpeg" class="img-fluid">
									</a>
								</div>
								<div class="thumb-content">
									<h4>Oppo A52</h4>
									<p class="item-price"><strike>Rs.17499</strike> <span>Rs.14990</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_oneplus_item.php?prodid=3&price=29999&modname=nord5g&folname=nord5g" target="_blank">
										<img src="images/mobile/oneplus/nord5g/nord5g_1-1.jpg" class="img-fluid">
									</a>
								</div>
								<div class="thumb-content">
									<h4>Oneplus Nord5g</h4>
									<p class="item-price"><strike>Rs.32999</strike> <span>Rs.29999</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_redmi_item.php?prodid=7&price=14999&modname=note9promax&folname=note9promax" target="_blank">
										<img src="images/mobile/redmi/redminote9promax/note9promax_1-1.jpeg" class="img-fluid">
									</a>
								</div>
								<div class="thumb-content">
									<h4>Redmi Note9 Pro Max</h4>
									<p class="item-price"><strike>Rs16499.</strike> <span>Rs.14999</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_vivo_item.php?prodid=6&price=11490&modname=y20series&folname=y20series" target="_blank">
										<img src="images/mobile/vivo/y20series/y20series_1-1.jpeg" class="img-fluid">
									</a>
								</div>
								<div class="thumb-content">
									<h4>Vivo Y20 Series</h4>
									<p class="item-price"><strike>Rs.13999</strike> <span>Rs.11490</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div><div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_samsung_item.php?prodid=2&price=6999&modname=M02&folname=galaxym02" target="_blank">
										<img src="images/mobile/samsung/galaxym02/m02_1-1.jpeg" class="img-fluid">
									</a>
								</div>
								<div class="thumb-content">
									<h4>Samsung M02</h4>
									<p class="item-price"><strike>Rs.7499</strike> <span>Rs.6999</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_vivo_item.php?prodid=5&price=9990&modname=y12s&folname=y12s" target="_blank">
										<img src="images/mobile/vivo/y12s/y12s_1-1.jpeg" class="img-fluid">
									</a>
								</div>
								<div class="thumb-content">
									<h4>Vivo Y12s</h4>
									<p class="item-price"><strike>Rs.12499</strike> <span>Rs.9990</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_oppo_item.php?prodid=1&price=8490&modname=A11k&folname=a11k" target="_blank">
										<img src="images/mobile/oppo/a11k/a11k_1-1.jpeg" class="img-fluid">
									</a>
								</div>
								<div class="thumb-content">
									<h4>Oppo A11k</h4>
									<p class="item-price"><strike>Rs.9490</strike> <span>Rs.8490</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>					
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_samsung_item.php?prodid=3&price=8999&modname=M02s&folname=galaxym02s" target="_blank">
										<img src="images/mobile/samsung/galaxym02s/m02s_1-1.jpeg" class="img-fluid">
									</a>
								</div>
								<div class="thumb-content">
									<h4>Samsung Galaxy M02s</h4>
									<p class="item-price"><strike>Rs.9499</strike> <span>Rs.8999</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_samsung_item.php?prodid=5&price=13999&modname=M21&folname=galaxym21" target="_blank">
										<img src="images/mobile/samsung/galaxym21/m21_1-1.jpeg" class="img-fluid">
									</a>
								</div>
								<div class="thumb-content">
									<h4>Samsung Galaxy M21</h4>
									<p class="item-price"><strike>Rs.15499</strike> <span>Rs.13999</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_redmi_item.php?prodid=3&price=6799&modname=9a&folname=redmi9a" target="_blank">
										<img src="images/mobile/redmi/redmi9a/redmi9a_1-1.jpeg" class="img-fluid">
									</a>
								</div>
								<div class="thumb-content">
									<h4>Redmi 9a</h4>
									<p class="item-price"><strike>Rs.7499</strike> <span>Rs.6799</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_samsung_item.php?prodid=8&price=27999&modname=Note10lite&folname=galaxynote10lite" target="_blank">
										<img src="images/mobile/samsung/galaxynote10lite/note10lite_1-1.jpeg" class="img-fluid">
									</a>
								</div>
								<div class="thumb-content">
									<h4>Apple iPad</h4>
									<p class="item-price"><strike>Rs.</strike> <span>Rs.</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- Carousel controls -->
			<a class="carousel-control-prev" href="#myTrendingSmps" data-slide="prev">
				<i class="fa fa-angle-left"></i>
			</a>
			<a class="carousel-control-next" href="#myTrendingSmps" data-slide="next">
				<i class="fa fa-angle-right"></i>
			</a>
		</div>
		</div>
		<div class="col-md-3">
			<a href="television.php">
					<img src="images/admin-images/showy1.webp"  style="height:510px; width:385px;">
				</a>
		</div>
	</div>
	</div>

	<div class="container-fluid bg-white" style="margin-bottom: 30px; width: 1600px;">
		<div class="row">
			<div class="col-md-12">
				<h3>Kitchen <b>Appliances</b></h3>
				<div id="mykitchenApp" class="carousel slide" data-ride="carousel" data-interval="0"
					 style="margin-top: -1%;">
					<!-- Carousel indicators -->
					<ol class="carousel-indicators">
						<li data-target="#mykitchenApp" data-slide-to="0" class="active"></li>
						<li data-target="#mykitchenApp" data-slide-to="1"></li>
					</ol>   
					<!-- Wrapper for carousel items -->
					<div class="carousel-inner">
						<div class="carousel-item active">
							<div class="row">
								<div class="col-sm-2">
									<div class="thumb-wrapper">
										<div class="img-box">
											<a href="show_juicer_item.php?id=2" target="_blank">
										<img src="images/kitchenappliance/juicer/singer_nutri/singer_nutri_2_1.jpeg" class="img-fluid">
									</a>
										</div>
										<div class="thumb-content">
											<h4>Singer Nutri Blender NUTRIO</h4>
											<p class="item-price"><span>Rs.1741</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>						
									</div>
								</div>
								<div class="col-sm-2">
									<div class="thumb-wrapper">
										<div class="img-box">
											<a href="show_induction_item.php?id=3" target="_blank">
										<img src="images/kitchenappliance/induction/havells_insta_cook/havells_insta_cook_3_1.jpeg" class="img-fluid">
									</a>
										</div>
										<div class="thumb-content">
											<h4>HAVELLS Insta Cook RT Induction Cooktop</h4>
											<p class="item-price"><span>Rs.2356</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>						
									</div>
								</div>
								<div class="col-sm-2">
									<div class="thumb-wrapper">
										<div class="img-box">
											<a href="show_mixer_item.php?id=7" target="_blank">
										<img src="images/kitchenappliance/mixer/prestige_atlas/prestige_atlas_7_1.jpeg" class="img-fluid">
									</a>
										</div>
										<div class="thumb-content">
											<h4>Prestige Atlas 550 W Mixer Grinder </h4>
											<p class="item-price"><span>Rs.3294</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
												</ul>
											</div>
										</div>						
									</div>
								</div>
								<div class="col-sm-2">
									<div class="thumb-wrapper">
										<div class="img-box">
											<a href="show_juicer_item.php?id=4" target="_blank">
										<img src="images/kitchenappliance/juicer/bluwings_hand/bluwings_hand_4_1.jpeg" class="img-fluid">
									</a>
										</div>
										<div class="thumb-content">
											<h4>Bluwings Hand Juicer Grinder</h4>
											<p class="item-price"><span>Rs.550</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>						
									</div>
								</div>
								<div class="col-sm-2">
									<div class="thumb-wrapper">
										<div class="img-box">
											<a href="show_induction_item.php?id=2" target="_blank">
												<img src="images/kitchenappliance/induction/prestige_atlas/prestige_atlas_2_1.jpeg" class="img-fluid">
											</a>
										</div>
										<div class="thumb-content">
											<h4>Prestige Atlas 2.0 Induction Cooktop</h4>
											<p class="item-price"><span>Rs.2799/span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>						
									</div>
								</div>
								<div class="col-sm-2">
									<div class="thumb-wrapper">
										<div class="img-box">
											<a href="show_mixer_item.php?id=5" target="_blank">
										<img src="images/kitchenappliance/mixer/bajaj_pluto/bajaj_pluto_5_1.jpeg" class="img-fluid">
									</a>
										</div>
										<div class="thumb-content">
											<h4>BAJAJ 3 Jar Pluto 500 W Mixer Grinder </h4>
											<p class="item-price"><span>Rs.1899</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
												</ul>
											</div>
										</div>						
									</div>
								</div>
							</div>
						</div>
						<div class="carousel-item">
							<div class="row">
								<div class="col-sm-2">
									<div class="thumb-wrapper">
										<div class="img-box">
											<a href="show_mixer_item.php?id=4" target="_blank">
										<img src="images/kitchenappliance/mixer/philips_hl7756/philips_hl7756_4_1.jpeg" class="img-fluid">
									</a>
										</div>
										<div class="thumb-content">
											<h4>PHILIPS Daily Collection HL7756/03 750W</h4>
											<p class="item-price"><span>Rs.3149</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>						
									</div>
								</div>
								<div class="col-sm-2">
									<div class="thumb-wrapper">
										<div class="img-box">
											<a href="show_juicer_item.php?id=8" target="_blank">
										<img src="images/kitchenappliance/juicer/techobucks/techobucks_8_1.jpeg" class="img-fluid">
									</a>
										</div>
										<div class="thumb-content">
											<h4>Techobucks USB Rechargeable Juicer </h4>
											<p class="item-price"><span>Rs.515</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>						
									</div>
								</div>
								<div class="col-sm-2">
									<div class="thumb-wrapper">
										<div class="img-box">
											<a href="show_induction_item.php?id=5" target="_blank">
										<img src="images/kitchenappliance/induction/sansui_neutron_2100_w/sansui_neutron_2100_w_5_1.jpeg" class="img-fluid">
									</a>
										</div>
										<div class="thumb-content">
											<h4>Sansui Neutron 2100 W Induction Cooktop</h4>
											<p class="item-price"><span>Rs.2999</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>						
									</div>
								</div>
								<div class="col-sm-2">
									<div class="thumb-wrapper">
										<div class="img-box">
											<a href="show_mixer_item.php?id=2" target="_blank">
										<img src="images/kitchenappliance/mixer/bajaj_gx/Bajajgx_2_1.jpeg" class="img-fluid">
									</a>
										</div>
										<div class="thumb-content">
											<h4>Bajaj GX1 500 W Mixer Grinder</h4>
											<p class="item-price"><span>RS.1799</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>						
									</div>
								</div>
								<div class="col-sm-2">
									<div class="thumb-wrapper">
										<div class="img-box">
											<a href="show_juicer_item.php?id=7" target="_blank">
										<img src="images/kitchenappliance/juicer/tom_gee/tom_gee_7_1.jpeg" class="img-fluid">
									</a>
										</div>
										<div class="thumb-content">
											<h4>Tom & Gee J 01 Fruit & Vegetable Mixer Hand Juice</h4>
											<p class="item-price"><span>Rs.501</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>						
									</div>
								</div>
								<div class="col-sm-2">
									<div class="thumb-wrapper">
										<div class="img-box">
											<a href="show_induction_item.php?id=6" target="_blank">
										<img src="images/kitchenappliance/induction/prestige_pic_16_plus/prestige_pic_16_plus_6_1.jpeg" class="img-fluid">
									</a>
										</div>
										<div class="thumb-content">
											<h4>Prestige PIC 16.0 plus Induction Cooktop</h4>
											<p class="item-price"><span>Rs.2249</span></p>
											<div class="star-rating">
												<ul class="list-inline">
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
													<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
												</ul>
											</div>
										</div>						
									</div>
								</div>
							</div>
						</div>
					</div>

					<a class="carousel-control-prev" href="#mykitchenApp" data-slide="prev">
								<i class="fa fa-angle-left"></i>
					</a>
					<a class="carousel-control-next" href="#mykitchenApp" data-slide="next">
								<i class="fa fa-angle-right"></i>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid px-0 mb-3" style="margin-top: 30px; width: 1600px;">
		<div class="row">
			<div class="col-4">
				<a href="accessories.php">
					<img src="images/admin-images/show1.jpg" class="d-block w-100" style="height: 300px;">
				</a>
			</div>
			<div class="col-4">
				<a href="accessories.php">
					<img src="images/admin-images/show2.jpg" class="d-block w-100" style="height: 300px;">
				</a>
			</div>
			<div class="col-4">
				<a href="accessories.php">
					<img src="images/accessories/accy1.webp" class="d-block w-100" style="height: 300px;">
				</a>
			</div>
		</div>
	</div>

	<div class="container-fluid bg-white" style="margin-top: 30px; width: 1600px;">
		<div class="row">
		<div class="col-md-12">
			<h3>Gaming <b>Products</b></h3>
			<div id="myglap1" class="carousel slide" data-ride="carousel" data-interval="0"
				 style="margin-top: -1%;">
		
			<!-- Wrapper for carousel items -->
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_laptop_item.php?id=2&modeltype=asus&modelname=asusrogstrix" target="_blank">
										<img src="images/laptop/asus/asusrogstrix/asusrogstrix_1-1.jpeg" 
											 style="height:150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>Asus Rogstriz</h5>
									<p class="item-price"><strike>Rs.108490</strike> <span>Rs. 102990</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_laptop_item.php?id=5&modeltype=acer&modelname=aceraspire5" target="_blank">
										<img src="images/laptop/acer/aceraspire5/aceraspire5_1-1.jpeg" 
											 style="height:150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>Acer Aspire 5</h5>
									<p class="item-price"><strike>Rs.40490</strike> <span>Rs.37990</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>		
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_laptop_item.php?id=6&modeltype=dell&modelname=dellg7" target="_blank">
										<img src="images/laptop/dell/dellg7/dellg7_1-1.jpeg" 
											 style="height:150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>Dell LG 7</h5>
									<p class="item-price"><strike>Rs.217990</strike> <span>Rs.207990</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>								
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_laptop_item.php?id=6&modeltype=hp&modelname=hpomen15" target="_blank">
										<img src="images/laptop/hp/hpomen15/hpomen15_1-1.jpeg" 
											 style="height:150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>HP Omen 15</h5>
									<p class="item-price"><strike>Rs.73490</strike> <span>Rs.69990</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
					</div>
				
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_laptop_item.php?id=2&modeltype=dell&modelname=dellinspiron3505" target="_blank">
										<img src="images/laptop/dell/dellinspiron3505/dellinspiron3505_1-1.jpeg" 
											 style="height:150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>Dell Inspiron 3505</h5>
									<p class="item-price"><strike>Rs.34490</strike> <span>Rs.32517</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_laptop_item.php?id=3&modeltype=hp&modelname=hpnotebook" target="_blank">
										<img src="images/laptop/hp/hpnotebook/hpnotebook_1-1.jpeg" 
											 style="height:150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>HP Notebook</h5>
									<p class="item-price"><strike>Rs.27786</strike> <span>Rs.24686</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_laptop_item.php?id=8&modeltype=acer&modelname=acerswift3" target="_blank">
										<img src="images/laptop/acer/acerswift3/acerswift3_1-1.jpeg" 
											 style="height:150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>Acer Swift3</h5>
									<p class="item-price"><strike>Rs.54999</strike> <span>Rs.59990</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_laptop_item.php?id=5&modeltype=asus&modelname=asusceleron" target="_blank">
										<img src="images/laptop/asus/asusceleron/asusceleron_1-1.jpeg" 
											 style="height:150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>Asus Celeron</h5>
									<p class="item-price"><strike>Rs.22490</strike> <span>Rs.20990</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>						
					</div>
				</div>
		</div>
		</div>
	</div>
	</div>

	<div class="container-fluid bg-white" style="margin-top: 30px; width: 1600px;">
		<div class="row">
		<div class="col-md-12">
			<h3>Android <b>Tv's</b></h3>
			<div id="myglap1" class="carousel slide" data-ride="carousel" data-interval="0"
				 style="margin-top: -1%;">
		
			<!-- Wrapper for carousel items -->
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_television.php?id=4&inches=32" target="_blank">
										<img src="images/television/32inches/oneplusyseries80cm/oneplusyseries80cm_1-1.jpeg" 
											 style="height:150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>Oneplus Y Series 32inch</h5>
									<p class="item-price"><strike>Rs.16999</strike> <span>Rs. 15499</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_television.php?id=3&inches=38" target="_blank">
										<img src="images/television/38inches/jvc/jvc_1-1.jpeg" 
											 style="height:150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>JVC 38inch</h5>
									<p class="item-price"><strike>Rs.18299</strike> <span>Rs.16499</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>		
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_television.php?id=5&inches=42" target="_blank">
										<img src="images/television/42inches/panasonic106cm/panasonic106cm_1-1.jpeg" 
											 style="height:150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>Panasonic 42inch</h5>
									<p class="item-price"><strike>Rs.43399</strike> <span>Rs.4199</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>								
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_television.php?id=5&inches=50" target="_blank">
										<img src="images/television/50inches/samsung126cm/samsung126cm_1-1.jpeg" 
											 style="height:150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>Samsung 50inch</h5>
									<p class="item-price"><strike>Rs.97499</strike> <span>Rs.94990</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
					</div>
				
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_television.php?id=4&inches=42" target="_blank">
										<img src="images/television/42inches/onidalivegenius/onidalivegenius_1-1.jpeg" 
											 style="height:150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>Onida Live Genius</h5>
									<p class="item-price"><strike>Rs.32499</strike> <span>Rs.29799</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_television.php?id=8&inches=42" target="_blank">
										<img src="images/television/42inches/thomsan9aseries/thomsan9aseries_1-1.jpeg" 
											 style="height:150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>Thomsan 9A Series</h5>
									<p class="item-price"><strike>Rs.22349</strike> <span>Rs.20990</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_television.php?id=3&inches=50" target="_blank">
										<img src="images/television/50inches/motorolazxpro/motorolazxpro_1-1.jpeg" 
											 style="height:150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>Motorola ZX Pro</h5>
									<p class="item-price"><strike>Rs.37890</strike> <span>Rs.34999</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_television.php?id=2&inches=55" target="_blank">
										<img src="images/television/55inches/oneplususeries/oneplususeries_1-1.jpeg" 
											 style="height:150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>Oneplus YSeries 55inch</h5>
									<p class="item-price"><strike>Rs.54690</strike> <span>Rs.52990</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>						
					</div>
				</div>
		</div>
		</div>
	</div>
	</div>

	<div class="container-fluid bg-white" style="margin-top: 30px; width: 1600px;">
		<div class="row">
		<div class="col-md-12">
			<h3>Mobile <b>Accessories</b></h3>
			<div id="myglap1" class="carousel slide" data-ride="carousel" data-interval="0"
				 style="margin-top: -1%;">
		
			<!-- Wrapper for carousel items -->
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_earphone_item.php?id=4" target="_blank">
										<img src="images/accessories/earphones/catbull/catbull_1.jpeg" 
											 style="height:150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>Catbull</h5>
									<p class="item-price"><strike>Rs.195</strike> <span>Rs. 167</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_mobilecables_item.php?id=5" target="_blank">
										<img src="images/accessories/mobilecables/vivo-cables/vivocables_1.jpeg" 
											 style="height:150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>Vivo Cables</h5>
									<p class="item-price"><strike>Rs.399</strike> <span>Rs.364</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>		
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_mobilecharger_item.php?id=5" target="_blank">
										<img src="images/accessories/mobilecharger/redmi-standard/redmistandard_1.jpeg" 
											 style="height:150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>Redmi Standard</h5>
									<p class="item-price"><strike>Rs.539</strike> <span>Rs.499</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>								
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_powerbank_item.php?id=2" target="_blank">
										<img src="images/accessories/powerbank/mi3i/mi3i_1.jpeg" 
											 style="height: 150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>Mi3i</h5>
									<p class="item-price"><strike>Rs.1700</strike> <span>Rs.1599</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
					</div>
				
					<div class="row">
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_pendrive_item.php?id=6" target="_blank">
										<img src="images/accessories/pendrives/strontium-nitro/strontiumnitroammo_1.jpeg" 
											 style="height:150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>Strontium Nitro</h5>
									<p class="item-price"><strike>Rs.610</strike> <span>Rs.575</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_mobilecharger_item.php?id=3" target="_blank">
										<img src="images/accessories/mobilecharger/oppo2.4/oppo2.4_1.jpeg" 
											 style="height:150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>Oppo 2.4</h5>
									<p class="item-price"><strike>Rs.389</strike> <span>Rs.349</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-half-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_earphone_item.php?id=5" target="_blank">
										<img src="images/accessories/earphones/oneplus-bullets/oneplusbullets_1.jpeg" style="height: 150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>Oneplus Bullets</h5>
									<p class="item-price"><strike>Rs.2299</strike> <span>Rs.1999</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>						
							</div>
						</div>
						<div class="col-sm-3">
							<div class="thumb-wrapper">
								<div class="img-box">
									<a href="show_selected_mobilecables_item.php?id=3" target="_blank">
										<img src="images/accessories/mobilecables/chronorex/chronorex_1.jpeg" 
											 style="height:150px;">
									</a>
								</div>
								<div class="thumb-content">
									<h5>Chrono Nex</h5>
									<p class="item-price"><strike>Rs.199</strike> <span>Rs.179</span></p>
									<div class="star-rating">
										<ul class="list-inline">
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star"></i></li>
											<li class="list-inline-item"><i class="fa fa-star-o"></i></li>
										</ul>
									</div>
								</div>					
							</div>
						</div>						
					</div>
				</div>
		</div>
		</div>
	</div>
	</div>

	<?php require_once('emart_footer.php'); ?>

</body>
</html>
                               		

<?php

	}
	else
	{
?>

	<script type="text/javascript">
		alert("Session Logout");
	</script>

<?php
	}
?>

