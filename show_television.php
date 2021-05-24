
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

	<title>Television Store: Buy inches LED's</title>
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
	</style>
</head>
<body style="background: #F1F3F6;">
	<div id="backTop"></div>
	<?php require_once('emart_header.php'); ?>
	<?php require_once('emart_menus.php'); ?>

	<div class="container bg-white mt-5 pt-5 mb-5 px-5 pb-5">

		<?php 

			$id =  $_GET['id'];
			$inch = $_GET['inches']."inches";

			$conn = mysqli_connect("remotemysql.com","u7bd8kc8aS","hKXCLsRXMb","u7bd8kc8aS");
			$sql = "SELECT * FROM $inch WHERE id = $id";

			$res = mysqli_query($conn,$sql);

			$row = mysqli_fetch_assoc($res);
			$modType = $row['model_type'];
			$modName = $row['model_name'];
			$folder = $row['folder_name'];
			$img = $row['img_name'];
			$prod_price = $row['prod_price'];
			$display = $row['display_size'];
			$color = $row['color'];
			$screen = $row['screen_type'];
			$hdmi = $row['hdmi'];
			$usb = $row['usb'];
			$procc = $row['processor'];
			$storage = $row['storage_memory'];
			$speaker = $row['speaker_type'];
			$internet = $row['internet_access'];
			$dimension = $row['dimension'];
			$waranty = $row['Warranty'];

			$main_img = $img;

		?>

		<div class="row">
			<div class="col-1"></div>
			<div class="col-10 justify-content-center">
				<div id="demo" class="carousel slide" data-ride="carousel">
				 
				  <!-- The slideshow -->
				  <div class="carousel-inner text-center">
				    <div class="carousel-item active ">
				      <img src="images/television/<?php echo $inch ; ?>/<?php echo $folder; ?>/<?php echo $img; ?>" 
				      	   style="height: 460px; width: 75%;">
				    </div>

				    <?php  

				    	$len = strlen($img);

				    	$img[$len-6] = '2';
				    	$img2 = $img;
				    	$img[$len-6] = '3';
				    	$img3 = $img;
				    	$img[$len-6] = '4';
				    	$img4 = $img;
				    ?>

				    <div class="carousel-item">
				      <img src="images/television/<?php echo $inch ; ?>/<?php echo $folder; ?>/<?php echo $img2; ?>" 
				      	   style="height: 460px; width: 75%;">
				    </div>
				    <div class="carousel-item">
				     <img src="images/television/<?php echo $inch ; ?>/<?php echo $folder; ?>/<?php echo $img3; ?>" 
				     	  style="height: 460px; width: 75%;">
				    </div>
				    <div class="carousel-item">
				     <img src="images/television/<?php echo $inch ; ?>/<?php echo $folder; ?>/<?php echo $img4; ?>" 
				     	  style="height: 460px; width: 75%;">
				    </div>
				  </div>
 
				  <!-- Left and right controls -->
				  <a class="carousel-control-prev" href="#demo" data-slide="prev">
				    <span><i class="fa fa-chevron-left text-dark font-weight-bolder" style="font-size: 38px;" aria-hidden="true"></i>
				    </span>
				  </a>
				  <a class="carousel-control-next" href="#demo" data-slide="next">
					    <span><i class="fa fa-chevron-right text-dark font-weight-bolder" style="font-size: 38px;" aria-hidden="true"></i></span>
				  </a>
			</div>
			</div>
			<div class="col-1"></div>
		</div>

		<div class="row mt-5">
			<div class="col-4"></div>
			<div class="col-6">
				<a href="addToCart.php?prodid=<?php echo $id; ?>&modname=<?php echo $inch; ?>&gadname=Television&prodprice=<?php echo $prod_price; ?>&imgName=<?php echo $main_img; ?>&cname=<?php echo $modName; ?>"  class="btn btn-danger text-white p-2 mr-3" style="font-weight: bolder;">
					<h6 class="mt-2 mx-3 font-weight-bolder">
						<i class="fas fa-shopping-cart mr-2"></i>ADD TO CART
					</h6>
				</a>
				<a href="addToOrder.php?prodid=<?php echo $id; ?>&modname=<?php echo $inch; ?>&gadname=Television&prodprice=<?php echo $prod_price; ?>&imgName=<?php echo $main_img; ?>&cname=<?php echo $modName; ?>" 
				   class="btn btn-success text-white p-2 px-4" style="font-weight: bolder;">
					<h6 class="mt-2 mx-3 px-2 font-weight-bolder">
						<i class="fa fa-shopping-bag mr-2"></i>ORDER
					</h6>
				</a>
			</div>
			<div class="col-2"></div>
		</div>
	
		<div class="row mt-4">
			<div class="col">
				<p>
					<span>
						<h3 style="font-weight: bolder;">
							<?php echo ucfirst($modName)." , ".$_GET['inches']." inches";?>
						</h3>
					</span>
					<span>
						<h3 style="font-weight: bolder;">
							Rs. <?php  
									$price = strlen($prod_price);

									if($price == 6)
									{
										echo $prod_price[0].",".$prod_price[1].$prod_price[2].",".$prod_price[3].$prod_price[4].$prod_price[5];	
									}

									else if($price == 5)
									{
										echo $prod_price[0].$prod_price[1].",".$prod_price[2].$prod_price[3].$prod_price[4];
									}

									else
									{
										echo $prod_price[0].",".$prod_price[1].$prod_price[2].$prod_price[3];
									}
								?>
						</h3>
					</span>
				</p>
			</div>
		</div>		 

		<div class="row mt-4 mb-4">
			<div class="col-1"></div>
			<div class="col-9">
				<div class="container" style="border : 2px solid lightgrey; border-radius: 0.5px;">
					<div class="row" style="border-bottom:1px solid lightgrey;">
						<div class="col">
							<h4 class="pt-2 pb-0 px-2" style="letter-spacing: 2px;">
							Specifications</h4>
						</div>
					</div>
					<div class="row my-2 mt-4">
						<div class="col-4">		
							<h6>Model Type</h6>		
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo ucfirst($modType); ?></span></h6>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-4">		
							<h6>Display Size</h6>		
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $display; ?></span></h6>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-4">		
							<h6>Color</h6>
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $color; ?></span></h6>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-4">		
							<h6>Screen Type</h6>
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $screen; ?></span></h6>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-4">		
							<h6>HDMI</h6>
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $hdmi;?></span></h6>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-4">		
							<h6>USB</h6>
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $usb;?></span></h6>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-4">		
							<h6>Processor</h6>
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $procc;?></span></h6>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-4">		
							<h6>Storage Memory</h6>
						</div>
						<div class="col-7 ml-4"><?php echo $storage;?>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-4">		
							<h6>Speaker Type</h6>
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $speaker;?></span></h6>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-4">		
							<h6>Internet Access</h6>
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $internet; ?></span></h6>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-4">		
							<h6>Dimension</h6>
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $dimension;?></span></h6>
						</div>
					</div>
					<div class="row my-2 mb-4">
						<div class="col-4">		
							<h6>Waranty</h6>
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $waranty;?></span></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require_once('emart_footer.php'); ?>
</body>
</html>