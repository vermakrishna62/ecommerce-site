
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

	<title>Accessories Store: Buy Earphones</title>
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
			
			$conn = mysqli_connect("remotemysql.com","NrFu7xTyH7","VICTfnhELR","NrFu7xTyH7");
			$sql = "SELECT * FROM chargers WHERE id = $id";

			$res = mysqli_query($conn,$sql);

			$row = mysqli_fetch_assoc($res);

			$modType = $row['Model_Type'];
			$modName = $row['Model_Name'];
			$prodModel = $row['Product_Model'];
			$foldName = $row['Folder_Name'];
			$imgName = $row['Img_Name'];
			$length = $row['Cable_Length'];
			$chargerType = $row['Charger_Type'];
			$opcurrent = $row['Output_Current'];
			$opwattage = $row['Output_Wattage'];
			$prod_price = $row['Price'];
			$Waranty = $row['Warranty'];
		?>

		<div class="row">
			<div class="col text-center">
				<img src="images/accessories/mobilecharger/<?php echo $foldName; ?>/<?php echo $imgName; ?>" style="height: 460px;">
			</div>
		</div>

		<div class="row mt-5">
			<div class="col-4"></div>
			<div class="col-6">
				<a href="addToCart.php?prodid=<?php echo $id; ?>&modname=<?php echo $modType; ?>&gadname=Accessories&prodprice=<?php echo $prod_price; ?>&imgName=<?php echo $imgName; ?>&cname=<?php echo $prodModel; ?>"  class="btn btn-danger text-white p-2 mr-3" style="font-weight: bolder;">
					<h6 class="mt-2 mx-3 font-weight-bolder">
						<i class="fas fa-shopping-cart mr-2"></i>ADD TO CART
					</h6>
				</a>
				<a href="addToOrder.php?prodid=<?php echo $id; ?>&modname=<?php echo $modType; ?>&gadname=Accessories&prodprice=<?php echo $prod_price; ?>&imgName=<?php echo $imgName; ?>&cname=<?php echo $prodModel; ?>" 
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
							<?php echo ucfirst($modType)." :- ".$prodModel ;?>
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

									else if($price == 4)
									{
										echo $prod_price[0].",".$prod_price[1].$prod_price[2].$prod_price[3];
									}

									else
									{
										echo $prod_price[0].$prod_price[1].$prod_price[2];
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
							<h6>Model Name</h6>
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo ucfirst($prodModel); ?></span></h6>
						</div>
					</div>

					<div class="row my-2">
						<div class="col-4">		
							<h6>Cable Length</h6>		
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $length ; ?></span></h6>
						</div>
					</div>

					<div class="row my-2">
						<div class="col-4">		
							<h6>Charger Type</h6>		
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $chargerType ; ?></span></h6>
						</div>
					</div>

					<div class="row my-2">
						<div class="col-4">		
							<h6>Output Current</h6>		
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $opcurrent ; ?></span></h6>
						</div>
					</div>

					<div class="row my-2">
						<div class="col-4">		
							<h6>Output Wattage</h6>		
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $opwattage ; ?></span></h6>
						</div>
					</div>
					
					<div class="row my-2 mb-4">
						<div class="col-4">		
							<h6>Waranty</h6>
						</div>
						<div class="col-7 ml-4">
							<h6><span><?php echo $Waranty;?></span></h6>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php require_once('emart_footer.php'); ?>
</body>
</html>