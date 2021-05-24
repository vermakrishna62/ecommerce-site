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

	<title>Mobile Phones Store: Buy Oneplus Mobiles</title>
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

		$model_type = "Oneplus";
		$prod_id = $_GET['prodid'];
		$prod_price = $_GET['price'];
		$model_name = $_GET['modname'];
		$folder_name = $_GET['folname'];

		// entities

		$modname = "";
		$modtype = "";
		$display = "";				
		$ram = "";
		$internal = "";
		$expand = "";
		$primary = "";
		$secondary = "";
		$os = "";
		$battery = "";
		$processor = "";
		$network = "";

		// mobile_database
		$conn = mysqli_connect("remotemysql.com","Izv8ER3SBl","23JWd8bHvp","Izv8ER3SBl");
	
		$sql = "SELECT * FROM oppo WHERE Id = '$prod_id'";
		$ret = mysqli_query($conn,$sql);

		while($row = mysqli_fetch_assoc($ret))
		{
			$modtype = $row['Model_Type'];
			$modname = $row['Model_Name'];
			$ram = $row['RAM'];
			$internal = $row['Internal_Storage'];
			$expand = $row['Expandable_Memory'];
			$display = $row['Display_Size'];
			$primary = $row['Primary_Camera'];
			$secondary = $row['Secondary_Camera'];
			$os = $row['Android_System'];
			$battery = $row['Battery'];
			$processor = $row['Processor_Type'];
			$network = $row['Network_Type'];
		}

		if($prod_id == 1)
		{
	?>

		<div class="row">
			<div class="col-2"></div>
			<div class="col-8 justify-content-center">
				<div id="demo" class="carousel slide" data-ride="carousel">
				 
				  <!-- The slideshow -->
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="images/mobile/oneplus/8pro5g/8pro5g_1-1.jpg" style="height: 460px; margin-left: 37%;">
				    </div>
				    <div class="carousel-item">
				      <img src="images/mobile/oneplus/8pro5g/8pro5g_1-2.jpg" style="height: 460px; margin-left: 27%;">
				    </div>
				    <div class="carousel-item">
				     <img src="images/mobile/oneplus/8pro5g/8pro5g_1-3.jpg" style="height: 460px; margin-left: 40%;">
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
			<div class="col-2"></div>
		</div>

		<div class="row mt-5">
			<div class="col-4"></div>
			<div class="col-6">
				<a href="addToCart.php?prodid=<?php echo $prod_id; ?>&modname=Oneplus&gadname=Mobile&prodprice=<?php echo $prod_price; ?>&imgName=8pro5g_1-1.jpg&cname=<?php echo $modname; ?>" 
				   class="btn btn-danger text-white p-2 mr-3" style="font-weight: bolder;">
					<h6 class="mt-2 mx-3 font-weight-bolder">
						<i class="fas fa-shopping-cart mr-2"></i>ADD TO CART
					</h6>
				</a>
				<a href="addToOrder.php?prodid=<?php echo $prod_id; ?>&modname=Oneplus&gadname=Mobile&prodprice=<?php echo $prod_price; ?>&imgName=8pro5g_1-1.jpg&cname=<?php echo $modname; ?>" 
					class="btn btn-success text-white p-2 px-4" style="font-weight: bolder;">
					<h6 class="mt-2 mx-3 px-2 font-weight-bolder">
						<i class="fa fa-shopping-bag mr-2"></i>ORDER
					</h6>
				</a>
			</div>
			<div class="col-2"></div>
		</div>

	<?php
		}

		else if($prod_id == 2)
		{	
	?>

		<div class="row">
			<div class="col-2"></div>
			<div class="col-8 justify-content-center">
				<div id="demo" class="carousel slide" data-ride="carousel">
				 
				  <!-- The slideshow -->
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="images/mobile/oneplus/8t5g/8t5g_1-1.jpg" style="height: 460px; margin-left: 37%;">
				    </div>
				    <div class="carousel-item">
				      <img src="images/mobile/oneplus/8t5g/8t5g_1-2.jpg" style="height: 460px; margin-left: 37%;">
				    </div>
				    <div class="carousel-item">
				     <img src="images/mobile/oneplus/8t5g/8t5g_1-3.jpg" style="height: 460px; margin-left: 42%;">
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
			<div class="col-2"></div>
		</div>

		<div class="row mt-5">
			<div class="col-4"></div>
			<div class="col-6">
				<a href="addToCart.php?prodid=<?php echo $prod_id; ?>&modname=Oneplus&gadname=Mobile&prodprice=<?php echo $prod_price; ?>&imgName=8t5g_1-1.jpg&cname=<?php echo $modname; ?>" 
				   class="btn btn-danger text-white p-2 mr-3" style="font-weight: bolder;">
					<h6 class="mt-2 mx-3 font-weight-bolder">
						<i class="fas fa-shopping-cart mr-2"></i>ADD TO CART
					</h6>
				</a>
				<a href="addToOrder.php?prodid=<?php echo $prod_id; ?>&modname=Oneplus&gadname=Mobile&prodprice=<?php echo $prod_price; ?>&imgName=8pro5g_1-1.jpg&cname=<?php echo $modname; ?>" 
					class="btn btn-success text-white p-2 px-4" style="font-weight: bolder;">
					<h6 class="mt-2 mx-3 px-2 font-weight-bolder">
						<i class="fa fa-shopping-bag mr-2"></i>ORDER
					</h6>
				</a>
			</div>
			<div class="col-2"></div>
		</div>

	<?php
		}

		else if($prod_id == 3)
		{	
	?>

		<div class="row">
			<div class="col-2"></div>
			<div class="col-8 justify-content-center">
				<div id="demo" class="carousel slide" data-ride="carousel">
				 
				  <!-- The slideshow -->
				  <div class="carousel-inner">
				    <div class="carousel-item active">
				      <img src="images/mobile/oneplus/nord5g/nord5g_1-1.jpg" style="height: 460px; margin-left: 37%;">
				    </div>
				    <div class="carousel-item">
				      <img src="images/mobile/oneplus/nord5g/nord5g_1-2.jpg" style="height: 460px; margin-left: 37%;">
				    </div>
				    <div class="carousel-item">
				     <img src="images/mobile/oneplus/nord5g/nord5g_1-3.jpg" style="height: 460px; margin-left: 42%;">
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
			<div class="col-2"></div>
		</div>

		<div class="row mt-5">
			<div class="col-4"></div>
			<div class="col-6">
				<a href="addToCart.php?prodid=<?php echo $prod_id; ?>&modname=Oneplus&gadname=Mobile&prodprice=<?php echo $prod_price; ?>&imgName=nord5g_1-1.jpg&cname=<?php echo $modname; ?>" 
				   class="btn btn-danger text-white p-2 mr-3" style="font-weight: bolder;">
					<h6 class="mt-2 mx-3 font-weight-bolder">
						<i class="fas fa-shopping-cart mr-2"></i>ADD TO CART
					</h6>
				</a>
				<a href="addToOrder.php?prodid=<?php echo $prod_id; ?>&modname=Oneplus&gadname=Mobile&prodprice=<?php echo $prod_price; ?>&imgName=nord5g_1-1.jpg&cname=<?php echo $modname; ?>" class="btn btn-success text-white p-2 px-4" style="font-weight: bolder;">
					<h6 class="mt-2 mx-3 px-2 font-weight-bolder">
						<i class="fa fa-shopping-bag mr-2"></i>ORDER
					</h6>
				</a>
			</div>
			<div class="col-2"></div>
		</div>

	<?php
		}
	?>	
		<div class="row mt-4">
			<div class="col">
				<p>
					<span>
						<h3 style="font-weight: bolder;">
							<?php echo $model_type." ".$model_name." (".$ram.", ".$internal.")";?>
						</h3>
					</span>
					<span>
						<h3 style="font-weight: bolder;">
							Rs. <?php  
									$price = strlen($prod_price);
									if($price == 5)
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
					<div class="row my-2">
						<div class="col-4">		
							<h6>Model Name</h6>
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo ucfirst($model_name);?></span></h6>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-4">		
							<h6>Model Type</h6>		
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $model_type;?></span></h6>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-4">		
							<h6>Display Size</h6>
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $display;?></span></h6>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-4">		
							<h6>RAM</h6>
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $ram;?></span></h6>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-4">		
							<h6>Internal Storage</h6>
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $internal;?></span></h6>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-4">		
							<h6>Expandable Memory</h6>
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $expand;?></span></h6>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-4">		
							<h6>Primary Camera</h6>
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $primary;?></span></h6>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-4">		
							<h6>Secondary Camera</h6>
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $secondary;?></span></h6>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-4">		
							<h6>Android System</h6>
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $os;?></span></h6>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-4">		
							<h6>Battery</h6>
						</div>
						<div class="col-7 ml-4"><?php echo $battery;?>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-4">		
							<h6>Processor Type</h6>
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $processor;?></span></h6>
						</div>
					</div>
					<div class="row my-2">
						<div class="col-4">		
							<h6>
								Network Type
							</h6>
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $network;?></span></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require_once('emart_footer.php'); ?>
</body>
</html>