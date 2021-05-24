<!DOCTYPE html>
<html>
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

	<title>Mobile Phones: Buy Mobiles</title>

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
	</style>

</head>
<body style="background:#F1F3F6;">
	<div id="backTop"></div>
	<?php require_once('emart_header.php'); ?>
	<?php require_once('emart_menus.php'); ?>
	
	<!-- Carousel -->
	<div class="container-fluid bg-white px-0" id="mycon" style="width: 1600px; margin-top: 30px; margin-top: 30px;">

		<div id="myCarousel" class="carousel slide px-0" data-ride="carousel" data-interval="0">  
			<!-- Wrapper for carousel items -->
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img src="images/mobile/mobby1.webp " class="d-block w-100">
					<a class="carousel-control-prev bg-white" style="background:white;" href="#myCarousel" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="carousel-control-next bg-white" href="#myCarousel" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
				<div class="carousel-item">
					<img src="images/mobsliderimg/sliddy1.webp" class="d-block w-100 h-100">
						<!-- Carousel controls -->
					<a class="carousel-control-prev bg-white" href="#myCarousel" data-slide="prev">
						<i class="fa fa-angle-left"></i>
					</a>
					<a class="carousel-control-next bg-white" href="#myCarousel" data-slide="next">
						<i class="fa fa-angle-right"></i>
					</a>
				</div>
				<div class="carousel-item">
					<img src="images/mobsliderimg/sliddy2.webp" class="d-block w-100 h-100">
					<a class="carousel-control-prev bg-white" href="#myCarousel" data-slide="prev">
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

	<!-- Offers can't resist -->

	<div class="container-fluid bg-white px-0" style="width: 1540px; margin-top: 40px;">
		<div class="row">
			<div class="col">
				<img src="images/mobile/offers_cant_resist.jpg" class="d-block w-100">
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<a href="show_selected_samsung_item.php?prodid=7&price=21749&modname=M51&folname=galaxym51" target="_blank">
					<img src="images/mobile/samsung/galaxym51/galaxym51_model.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_redmi_item.php?prodid=6&price=10999&modname=note9&folname=redminote9" target="_blank">
					<img src="images/mobile/redmi/redminote9/redminote9_model.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_oneplus_item.php?prodid=3&price=29999&modname=nord5g&folname=nord5g" target="_blank">
					<img src="images/mobile/oneplus/nord5g/oneplusnod5g_model.jpeg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_redmi_item.php?prodid=4&price=10499&modname=9power&folname=redmi9power" target="_blank">
					<img src="images/mobile/redmi/redmi9power/redmi9power_model.jpg" class="img-thumbnail">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<a href="show_selected_redmi_item.php?prodid=2&price=8799&modname=9&folname=redmi9" target="_blank">
					<img src="images/mobile/redmi/redmi9/redmi9_model.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_oppo_item.php?prodid=5&price=12990&modname=A53&folname=a53" target="_blank">
					<img src="images/mobile/oppo/a53/a53_model.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_samsung_item.php?prodid=6&price=18499&modname=M31s&folname=galaxym31s" target="_blank">
					<img src="images/mobile/samsung/galaxym31s/galaxym31s_model.jpg" class="img-thumbnail" target="_blank">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_vivo_item.php?prodid=2&price=13990&modname=y30&folname=vivoy30" target="_blank">
					<img src="images/mobile/vivo/vivoy30/vivoy30_model.jpg" class="img-thumbnail">
				</a>
			</div>
		</div>
	</div>

	<!-- Exciting offers -->

	<div class="container-fluid bg-white px-0" style="width: 1540px; margin-top: 40px;">
		<div class="row">
			<div class="col">
				<img src="images/mobile/exciting_offers.jpg" class="d-block w-100">
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<a href="show_selected_samsung_item.php?prodid=3&price=8999&modname=M02s&folname=galaxym02s" target="_blank">
					<img src="images/mobile/samsung/galaxym02s/galaxym02s_model.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_oppo_item.php?prodid=3&price=9990&modname=A31&folname=a31" target="_blank">
					<img src="images/mobile/oppo/a31/a31_model.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_samsung_item.php?prodid=5&price=13999&modname=M21&folname=galaxym21" target="_blank">
					<img src="images/mobile/samsung/galaxym21/galaxym21_model.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_vivo_item.php?prodid=3&price=16490&modname=y31&folname=vivoy31" target="_blank">
					<img src="images/mobile/vivo/vivoy31/vivoy31_model.jpg" class="img-thumbnail">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<a href="show_selected_redmi_item.php?prodid=1&price=12999&modname=note9&folname=redminote9" target="_blank">
					<img src="images/mobile/redmi/note9pro/note9pro_model.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_samsung_item.php?prodid=8&price=27999&modname=Note10lite&folname=galaxynote10lite" target="_blank">
					<img src="images/mobile/samsung/galaxynote10lite/galaxynote10lite_model.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_redmi_item.php?prodid=3&price=6799&modname=9a&folname=redmi9a" target="_blank">
					<img src="images/mobile/redmi/redmi9a/redmi9a_model.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_vivo_item.php?prodid=7&price=17990&modname=y51series&folname=y51series" target="_blank">
					<img src="images/mobile/vivo/y51series/y51series_model.jpg" class="img-thumbnail">
				</a>
			</div>
		</div>
	</div>

	<!-- Best Budget Smartphones -->

	<div class="container-fluid bg-white px-0" style="width: 1540px; margin-top: 40px;">
		<div class="row">
			<div class="col">
				<img src="images/mobile/best_budget_smartphones.jpg" class="d-block w-100">
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<a href="show_selected_oppo_item.php?prodid=1&price=8490&modname=A11k&folname=a11k" target="_blank">
					<img src="images/mobile/oppo/a11k/a11k_model.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_redmi_item.php?prodid=5&price=9499&modname=9prime&folname=redmi9prime" target="_blank">
					<img src="images/mobile/redmi/redmi9prime/redmi9prime_model.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_samsung_item.php?prodid=1&price=12999&modname=A12&folname=galaxya12" target="_blank">
					<img src="images/mobile/samsung/galaxya12/galaxya12_model.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_vivo_item.php?prodid=4&price=8990&modname=y11&folname=y11" target="_blank">
					<img src="images/mobile/vivo/y11/y11_model.jpg" class="img-thumbnail">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<a href="show_selected_samsung_item.php?prodid=4&price=9999&modname=M11&folname=galaxym11" target="_blank">
					<img src="images/mobile/samsung/galaxym11/galaxym11_model.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_oppo_item.php?prodid=2&price=9990&modname=A15&folname=a15" target="_blank">
					<img src="images/mobile/oppo/a15/a15_model.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_vivo_item.php?prodid=5&price=9990&modname=y12s&folname=y12s" target="_blank">
					<img src="images/mobile/vivo/y12s/y12s_model.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3"> 
				<a href="show_selected_vivo_item.php?prodid=8&price=7490&modname=y91i&folname=y91i" target="_blank">
					<img src="images/mobile/vivo/y91i/y91i_model.jpg" class="img-thumbnail">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<a href="show_selected_vivo_item.php?prodid=6&price=11490&modname=y20series&folname=y20series" target="_blank">
					<img src="images/mobile/vivo/y20series/y20series_model.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_samsung_item.php?prodid=2&price=6999&modname=M02&folname=galaxym02" target="_blank">
					<img src="images/mobile/samsung/galaxym02/galaxym02_model.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_vivo_item.php?prodid=5&price=9990&modname=y12s&folname=y12s" target="_blank">
					<img src="images/mobile/vivo/y12s/y12s_model.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_oppo_item.php?prodid=1&price=8490&modname=A11k&folname=a11k" target="_blank">
					<img src="images/mobile/oppo/a11k/a11k_model.jpg" class="img-thumbnail">
				</a>
			</div>
		</div>
	</div>

	<!-- Premium Smartphones -->

	<div class="container-fluid bg-white px-0" style="width: 1540px; margin-top: 40px;">
		<div class="row">
			<div class="col">
				<img src="images/mobile/premium_smartphones.jpg" class="d-block w-100">
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<a href="show_selected_oneplus_item.php?prodid=1&price=50499&modname=8pro5g&folname=8pro5g" target="_blank">
					<img src="images/mobile/oneplus/8pro5g/8pro5g_model.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_oppo_item.php?prodid=4&price=14990&modname=A52&folname=a52" target="_blank">
					<img src="images/mobile/oppo/a52/a52_model.jpg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_oneplus_item.php?prodid=3&price=29999&modname=nord5g&folname=nord5g" target="_blank">
					<img src="images/mobile/oneplus/nord5g/oneplusnod5g_model.jpeg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_redmi_item.php?prodid=7&price=14999&modname=note9promax&folname=note9promax" target="_blank">
					<img src="images/mobile/redmi/redminote9promax/note9promax_model.jpg" class="img-thumbnail">
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col-3">
				<a href="show_selected_oppo_item.php?prodid=7&price=21490&modname=F19pro&folname=f19pro" target="_blank">
					<img src="images/mobile/oppo/f19pro/f19pro_model.jpeg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_oneplus_item.php?prodid=2&price=39499&modname=8t5g&folname=8t5g" target="_blank">
					<img src="images/mobile/oneplus/8t5g/8t5g_model.jpeg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_oppo_item.php?prodid=8&price=25990&modname=F19pro5g&folname=f19pro5g" target="_blank">
					<img src="images/mobile/oppo/f19pro5g/f19pro5g_model.jpeg" class="img-thumbnail">
				</a>
			</div>
			<div class="col-3">
				<a href="show_selected_vivo_item.php?prodid=1&price=19990&modname=v20se&folname=v20se" target="_blank">
					<img src="images/mobile/vivo/v20se/v20se_model.jpg" class="img-thumbnail">
				</a>
			</div>
		</div>
	</div>
	<?php require_once('emart_footer.php'); ?>
</body>
</html>