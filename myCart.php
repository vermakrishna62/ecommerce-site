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
	<title>Shopping Cart</title>

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
		.dpdown {
		  position: relative;
		  display: inline-block;
		}

		.dpdown-content {
		  display: none;
		  position: absolute;
		  background-color: #f9f9f9;
		  min-width: 160px;
		  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
		  z-index: 1;
		}

		.dpdown:hover .dpdown-content {
		  display: block;
		}

		.desc {
		  padding: 15px;
		  text-align: center;
		}
	</style>

</head>
<body style="background: #F1F3F6;">
	<div id="backTop"></div>
	<?php require_once('emart_header.php'); ?>

	<div class="container-fluid bg-white" style="width:1200px; margin-top: 40px; border: 1.2px solid lightgrey;">
		<div class="row" style="border-bottom: 0.2px solid lightgrey;">
			<h4 style="font-weight: bolder; margin-left:60px; margin-top: 35px; margin-bottom: 15px; font-size: 24px;">
				My Cart
			</h4>
		</div>

		<?php  
			session_start();
		?>

		<?php  
			$user = $_SESSION['username'];

			$cart_conn = mysqli_connect("remotemysql.com","xHvfSUyMTl","SM8y9Gh9ti","xHvfSUyMTl");

			$mobile = mysqli_connect("remotemysql.com","Izv8ER3SBl","23JWd8bHvp","Izv8ER3SBl");

			$laptop = mysqli_connect("remotemysql.com","aQBT69jJHM","hKXCLsRXMb","aQBT69jJHM");

			$television = mysqli_connect("remotemysql.com","u7bd8kc8aS","hKXCLsRXMb","u7bd8kc8aS");

			$accessory = mysqli_connect("remotemysql.com","NrFu7xTyH7","VICTfnhELR","NrFu7xTyH7");

			$kitchen = mysqli_connect("remotemysql.com","FZe4kALKF5","2irRUZaJqv","FZe4kALKF5");

			$sql = "SELECT * FROM $user";

			// entities

			$ret = mysqli_query($cart_conn,$sql);

			if(mysqli_num_rows($ret) > 0)
			{
				$sql1 = "SELECT * FROM $user";
				$ret1 = mysqli_query($cart_conn,$sql1);

					while($row = mysqli_fetch_assoc($ret1))
					{
						$gadget = $row['gadget_type'];
						$model = lcfirst($row['model_type']);
						$prodId = $row['prod_id'];
						$prodPrice = $row['prod_price'];

						if($gadget == 'Mobile')
						{
							$sql = "SELECT * FROM $model WHERE Id = $prodId";
							$res = mysqli_query($mobile,$sql);

							while($data = mysqli_fetch_assoc($res))
							{
								$modelName = $data['Model_Name'];
								$imgName = $data['Img_Name'];
								$ram = $data['RAM'];
								$rom = $data['Internal_Storage'];
								$display = $data['Display_Size'];
								$primary = $data['Primary_Camera'];
								$secondary = $data['Secondary_Camera'];
								$battery = $data['Battery'];
								$processor = $data['Processor_Type'];

		?>

						<!-- Mobile Cart -->

			<div class="row" style="border-bottom: 1.2px solid lightgrey;">
				<div class="col-4 py-5 pl-5">
					<!-- <div class="dpdown"> -->
						<img src="images/gadget-frontview/<?php echo $imgName; ?>" style="height: 200px;" class="ml-5 pl-5">
						<!-- <div class="dpdown-content">
						  <img src="images/gadget-frontview/<?php echo $imgName; ?>" 
						  	   style="height:400px; width: 300px;">
						  <div class="desc"><?php echo ucfirst($model)." ".$modelName; ?></div>
						 </div> -->
					<!-- </div> -->
				</div>
				<div class="col-4 py-5">
					<h6 style="font-size: 20px;">
						<?php echo ucfirst($model)." ".$modelName." (".$ram.", ".$rom.")";?>
					</h6>
					<h6 style="font-size: 18px;">
						Rs. <?php  
									$price = strlen($prodPrice);
									if($price == 5)
									{
										echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
									}

									else
									{
										echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
									}
								?>
					</h6>
					<p>
						<ul>
							<li style="padding-left: 5px;"><?php echo $ram." | ".$rom; ?></li>
							<li style="padding-left: 5px;"><?php echo $display; ?></li>
							<li style="padding-left: 5px;"><?php echo $primary; ?></li>
							<li style="padding-left: 5px;"><?php echo $secondary; ?></li>
							<li style="padding-left: 5px;"><?php echo $battery; ?></li>
							<li style="padding-left: 5px;"><?php echo $processor; ?></li>
						</ol>
					</p>
				</div>
				<div class="col-4 py-4">
					<div class="card" style="border-radius: 0px;">
						<div class="card-body pb-0">
							<div class="card-title">
								<h6 style="color:grey;border-bottom:1px solid lightgrey;padding-bottom:12px;letter-spacing:1px;
									word-spacing: 5px; font-weight: bolder;font-size:18px;" class="mx-4">
									PRICE DETAILS</h6>
							</div>
							<div class="card-text px-4">
								<p>
									<h6 class="py-2" style="color:black;">
										Price (1 item)
										<span style="margin-left: 80px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 5)
												{
													echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
												}

												else
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
												}
											?>
										</span>
									<h6 class="py-2" style="color:black;" style="border-bottom: 1.2px solid lightgrey;">
										Delivery Charges
										<span style="margin-left: 50px;" class="text-success">FREE</span>
									</h6>
									<h6 class="pt-3" style="border-top: 1.2px solid lightgrey; font-size: 18px; font-weight: bold;">
										Total Price
										<span style="margin-left: 75px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 5)
												{
													echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
												}

												else
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
												}
											?>
										</span>
									</h6>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		<?php 
							}
						}

						else if($gadget == "Laptop")
						{

							$sql = "SELECT * FROM $model WHERE id = $prodId";
							$res = mysqli_query($laptop,$sql);

							while($data = mysqli_fetch_assoc($res))
							{
								$modelName = $data['laptop_model'];
								$modelType = $data['model_name'];
								$img = $data['img_name'];
								$company = $data['company_name'];
								$prod_price = $data['product_price'];
								$processorBrand = $data['processor_brand'];
								$processorName = $data['processor_name'];
								$generation = $data['processor_generation'];
								$ram = $data['ram'];
								$hdd = $data['hard_disk_size'];
								$osbit = $data['os_bit'];
								$os = $data['operating_system'];
								$display = $data['display_size'];
								$screen = $data['screen_resolution'];
								$waranty = $data['waranty'];

		?>

			<!-- Laptop Cart -->

			<div class="row" style="border-bottom: 1.2px solid lightgrey;">
				<div class="col-4 py-5 text-center">
					<img src="images/laptop/<?php echo $modelName; ?>/<?php echo $modelType; ?>/<?php echo $img; ?>"
						 style="height: 200px;"  >
				</div>
				<div class="col-4 py-5">
					<h6 style="font-size: 20px;">
						<?php echo ucfirst($model)." ".$company." (".$ram.", ".$hdd.")";?>
					</h6>
					<h6 style="font-size: 18px;">
						Rs. <?php  
									$price = strlen($prodPrice);

									if($price == 6)
									{
										echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
									}

									else if($price == 5)
									{
										echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
									}

									else
									{
										echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
									}
								?>
					</h6>
					<p>
						<ul>
							<li style="padding-left: 5px;"><?php echo $ram." | ".$hdd; ?></li>
							<li style="padding-left: 5px;"><?php echo $display; ?></li>
							<li style="padding-left: 5px;"><?php echo $screen;?></li>
							<li style="padding-left: 5px;"><?php echo $processorBrand; ?></li>
							<li style="padding-left: 5px;"><?php echo $processorName." | ".$generation;?></li>
							<li style="padding-left: 5px;"><?php echo $os." | ".$osbit; ?></li>

						</ul>
					</p>
				</div>
				<div class="col-4 py-4">
					<div class="card" style="border-radius: 0px;">
						<div class="card-body pb-0">
							<div class="card-title">
								<h6 style="color:grey;border-bottom:1px solid lightgrey;padding-bottom:12px;letter-spacing:1px;
									word-spacing: 5px; font-weight: bolder;font-size:18px;" class="mx-4">
									PRICE DETAILS</h6>
							</div>
							<div class="card-text px-4">
								<p>
									<h6 class="py-2" style="color:black;">
										Price (1 item)
										<span style="margin-left: 80px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 6)
													{
														echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
													}

													else if($price == 5)
													{
														echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
													}

													else
													{
														echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
													}
											?>
										</span>
									<h6 class="py-2" style="color:black;" style="border-bottom: 1.2px solid lightgrey;">
										Delivery Charges
										<span style="margin-left: 50px;" class="text-success">FREE</span>
									</h6>
									<h6 class="pt-3" style="border-top: 1.2px solid lightgrey; font-size: 18px; font-weight: bold;">
										Total Price
										<span style="margin-left: 75px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 6)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
												}

												else if($price == 5)
												{
													echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
												}

												else
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
												}
											?>
										</span>
									</h6>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		<?php
							}
						}

						else if($gadget == "Television")
						{

							$sql = "SELECT * FROM $model WHERE id = $prodId";
							$res = mysqli_query($television,$sql);

							while($data = mysqli_fetch_assoc($res))
							{
								$modType = $data['model_type'];
								$modName = $data['model_name'];
								$folder = $data['folder_name'];
								$img = $data['img_name'];
								$display = $data['display_size'];
								$color = $data['color'];
								$screen = $data['screen_type'];
								$hdmi = $data['hdmi'];
								$usb = $data['usb'];
								$procc = $data['processor'];
								$storage = $data['storage_memory'];
								$speaker = $data['speaker_type'];
								$internet = $data['internet_access'];
								$dimension = $data['dimension'];
								$waranty = $data['Warranty'];
		?>

		<!-- Television Cart -->

			<div class="row" style="border-bottom: 1.2px solid lightgrey;">
				<div class="col-4 py-5 text-center">
				      <img src="images/television/<?php echo $model ; ?>/<?php echo $folder; ?>/<?php echo $img; ?>" 
						 style="height: 200px;"  >
				</div>
				<div class="col-4 py-5">
					<h6 style="font-size: 20px;">
						<?php echo ucfirst($modName)." , ".$display;?>
					</h6>
					<h6 style="font-size: 18px;">
						Rs. <?php  
									$price = strlen($prodPrice);

									if($price == 6)
									{
										echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
									}

									else if($price == 5)
									{
										echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
									}

									else
									{
										echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
									}
								?>
					</h6>
					<p>
						<ul>
							<li style="padding-left: 5px;"><?php echo $screen." Screen"; ?></li>
							<li style="padding-left: 5px;"><?php echo $usb." USB Ports | ".$hdmi." Hdmi Ports"; ?></li>
							<li style="padding-left: 5px;"><?php echo $procc;?></li>
							<li style="padding-left: 5px;"><?php echo $storage; ?></li>
							<li style="padding-left: 5px;"><?php echo $speaker;?></li>
							<li style="padding-left: 5px;"><?php echo $dimension; ?></li>

						</ul>
					</p>
				</div>
				<div class="col-4 py-4">
					<div class="card" style="border-radius: 0px;">
						<div class="card-body pb-0">
							<div class="card-title">
								<h6 style="color:grey;border-bottom:1px solid lightgrey;padding-bottom:12px;letter-spacing:1px;
									word-spacing: 5px; font-weight: bolder;font-size:18px;" class="mx-4">
									PRICE DETAILS</h6>
							</div>
							<div class="card-text px-4">
								<p>
									<h6 class="py-2" style="color:black;">
										Price (1 item)
										<span style="margin-left: 80px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 6)
													{
														echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
													}

													else if($price == 5)
													{
														echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
													}

													else
													{
														echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
													}
											?>
										</span>
									<h6 class="py-2" style="color:black;" style="border-bottom: 1.2px solid lightgrey;">
										Delivery Charges
										<span style="margin-left: 50px;" class="text-success">FREE</span>
									</h6>
									<h6 class="pt-3" style="border-top: 1.2px solid lightgrey; font-size: 18px; font-weight: bold;">
										Total Price
										<span style="margin-left: 75px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 6)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
												}

												else if($price == 5)
												{
													echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
												}

												else
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
												}
											?>
										</span>
									</h6>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>


		<?php
							}
						}

						else if($gadget == "Accessories")
						{
							if($model == "earphones")
							{
								$sql = "SELECT * FROM earphones WHERE id = $prodId";
								$res = mysqli_query($accessory,$sql);

								while($data = mysqli_fetch_assoc($res))
								{
									$modType = $data['Model_Type'];
									$modName = $data['Model_Name'];
									$prodModel = $data['Product_Model'];
									$foldName = $data['Folder_Name'];
									$imgName = $data['Img_Name'];
									$withmic = $data['With_Mic'];
									$connector = $data['Connector_Type'];
									$bluetooth = $data['Bluetooth'];
									$waterResistant = $data['Water_Resistant'];
									$battery = $data['Battery'];
									$prodPrice = $data['Price'];
									$waranty = $data['Warranty'];
		?>

			<div class="row" style="border-bottom: 1.2px solid lightgrey;">
				
				<div class="col-4 py-5 text-center">
					<img src="images/accessories/earphones/<?php echo $foldName; ?>/<?php echo $imgName; ?>"
					 style="height: 200px;"  >
				</div>

				<div class="col-4 py-5">
					<h6 style="font-size: 20px;">
						<?php echo "Earphones :-  ".$prodModel ;?>
					</h6>
					<h6 style="font-size: 18px;">
						Rs. <?php  
									$price = strlen($prodPrice);

									if($price == 6)
									{
										echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
									}

									else if($price == 5)
									{
										echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
									}

									else if($price == 4)
									{
										echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
									}

									else
									{
										echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
									}
								?>
					</h6>
				</div>
				<div class="col-4 py-4">
					<div class="card" style="border-radius: 0px;">
						<div class="card-body pb-0">
							<div class="card-title">
								<h6 style="color:grey;border-bottom:1px solid lightgrey;padding-bottom:12px;letter-spacing:1px;
									word-spacing: 5px; font-weight: bolder;font-size:18px;" class="mx-4">
									PRICE DETAILS</h6>
							</div>
							<div class="card-text px-4">
								<p>
									<h6 class="py-2" style="color:black;">
										Price (1 item)
										<span style="margin-left: 80px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 6)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
												}

												else if($price == 5)
												{
													echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
												}

												else if($price == 4)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
												}

												else
												{
													echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
												}
											?>
										</span>
									<h6 class="py-2" style="color:black;" style="border-bottom: 1.2px solid lightgrey;">
										Delivery Charges
										<span style="margin-left: 50px;" class="text-success">FREE</span>
									</h6>
									<h6 class="pt-3" style="border-top: 1.2px solid lightgrey; font-size: 18px; font-weight: bold;">
										Total Price
										<span style="margin-left: 75px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 6)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
												}

												else if($price == 5)
												{
													echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
												}

												else if($price == 4)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
												}

												else
												{
													echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
												}
											?>
										</span>
									</h6>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		<?php
								}
							}

							else if($model == "mobilecables")
							{
								$sql = "SELECT * FROM cables WHERE id = $prodId";
								$res = mysqli_query($accessory,$sql);

								while($data = mysqli_fetch_assoc($res))
								{
									$modType = $data['Model_Type'];
									$modName = $data['Model_Name'];
									$prodModel = $data['Product_Model'];
									$foldName = $data['Folder_Name'];
									$imgName = $data['Img_Name'];
									$length = $data['Length'];
									$cableType = $data['Cable_Type'];
									$cableSpeed = $data['Cable_Speed'];
									$connectorOne = $data['Connector_One'];
									$connectorTwo = $data['Connector_Two'];
									$prod_price = $data['Price'];
									$waranty = "1 Yr";
		?>

			<div class="row" style="border-bottom: 1.2px solid lightgrey;">
				
				<div class="col-4 py-5 text-center">
					<img src="images/accessories/mobilecables/<?php echo $foldName; ?>/<?php echo $imgName; ?>"
						 style="height: 200px;"  >
				</div>

				<div class="col-4 py-5">
					<h6 style="font-size: 20px;">
						<?php echo "Mobile Cables :-  ".$prodModel ;?>
					</h6>
					<h6 style="font-size: 18px;">
						Rs. <?php  
									$price = strlen($prodPrice);

									if($price == 6)
									{
										echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
									}

									else if($price == 5)
									{
										echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
									}

									else if($price == 4)
									{
										echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
									}

									else
									{
										echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
									}
								?>
					</h6>
					<p>
						<ul>
							<li style="padding-left: 5px;"><?php echo "Cable Length :- ".$length; ?>
							<li style="padding-left: 5px;"><?php echo "Cable Type :- ".$cableType; ?></li>
							<li style="padding-left: 5px;"><?php echo "Cable Speed :- ".$cableSpeed; ?></li>
						</ul>
					</p>
				</div>
				<div class="col-4 py-4">
					<div class="card" style="border-radius: 0px;">
						<div class="card-body pb-0">
							<div class="card-title">
								<h6 style="color:grey;border-bottom:1px solid lightgrey;padding-bottom:12px;letter-spacing:1px;
									word-spacing: 5px; font-weight: bolder;font-size:18px;" class="mx-4">
									PRICE DETAILS</h6>
							</div>
							<div class="card-text px-4">
								<p>
									<h6 class="py-2" style="color:black;">
										Price (1 item)
										<span style="margin-left: 80px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 6)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
												}

												else if($price == 5)
												{
													echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
												}

												else if($price == 4)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
												}

												else
												{
													echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
												}
											?>
										</span>
									<h6 class="py-2" style="color:black;" style="border-bottom: 1.2px solid lightgrey;">
										Delivery Charges
										<span style="margin-left: 50px;" class="text-success">FREE</span>
									</h6>
									<h6 class="pt-3" style="border-top: 1.2px solid lightgrey; font-size: 18px; font-weight: bold;">
										Total Price
										<span style="margin-left: 75px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 6)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
												}

												else if($price == 5)
												{
													echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
												}

												else if($price == 4)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
												}

												else
												{
													echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
												}
											?>
										</span>
									</h6>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		<?php
								}
							}

							else if($model == "mobilecharger")
							{
								$sql = "SELECT * FROM chargers WHERE id = $prodId";
								$res = mysqli_query($accessory,$sql);

								while($data = mysqli_fetch_assoc($res))
								{
									$modType = $data['Model_Type'];
									$modName = $data['Model_Name'];
									$prodModel = $data['Product_Model'];
									$foldName = $data['Folder_Name'];
									$imgName = $data['Img_Name'];
									$length = $data['Cable_Length'];
									$chargerType = $data['Charger_Type'];
									$opcurrent = $data['Output_Current'];
									$opwattage = $data['Output_Wattage'];
									$prod_price = $data['Price'];
									$Waranty = $data['Warranty'];
		?>

			<div class="row" style="border-bottom: 1.2px solid lightgrey;">
				
				<div class="col-4 py-5 text-center">
					<img src="images/accessories/mobilecharger/<?php echo $foldName; ?>/<?php echo $imgName; ?>"
					 style="height: 200px;"  >
				</div>

				<div class="col-4 py-5">
					<h6 style="font-size: 20px;">
						<?php echo "Mobile Chargers :-  ".$prodModel ;?>
					</h6>
					<h6 style="font-size: 18px;">
						Rs. <?php  
									$price = strlen($prodPrice);

									if($price == 6)
									{
										echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
									}

									else if($price == 5)
									{
										echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
									}

									else if($price == 4)
									{
										echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
									}

									else
									{
										echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
									}
								?>
					</h6>
					<p>
						<ul>
							<li style="padding-left: 5px;"><?php echo "Cable Length :- ".$length; ?>
							<li style="padding-left: 5px;"><?php echo "Charger Type :- ".$chargerType; ?></li>
						</ul>
					</p>
				</div>
				<div class="col-4 py-4">
					<div class="card" style="border-radius: 0px;">
						<div class="card-body pb-0">
							<div class="card-title">
								<h6 style="color:grey;border-bottom:1px solid lightgrey;padding-bottom:12px;letter-spacing:1px;
									word-spacing: 5px; font-weight: bolder;font-size:18px;" class="mx-4">
									PRICE DETAILS</h6>
							</div>
							<div class="card-text px-4">
								<p>
									<h6 class="py-2" style="color:black;">
										Price (1 item)
										<span style="margin-left: 80px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 6)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
												}

												else if($price == 5)
												{
													echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
												}

												else if($price == 4)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
												}

												else
												{
													echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
												}
											?>
										</span>
									<h6 class="py-2" style="color:black;" style="border-bottom: 1.2px solid lightgrey;">
										Delivery Charges
										<span style="margin-left: 50px;" class="text-success">FREE</span>
									</h6>
									<h6 class="pt-3" style="border-top: 1.2px solid lightgrey; font-size: 18px; font-weight: bold;">
										Total Price
										<span style="margin-left: 75px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 6)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
												}

												else if($price == 5)
												{
													echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
												}

												else if($price == 4)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
												}

												else
												{
													echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
												}
											?>
										</span>
									</h6>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		<?php
								}
							}

							else if($model == "pendrive")
							{
								$sql = "SELECT * FROM pendrive WHERE id = $prodId";
								$res = mysqli_query($accessory,$sql);

								while($data = mysqli_fetch_assoc($res))
								{
									$modType = $data['Model_Type'];
									$modName = $data['Model_Name'];
									$prodModel = $data['Product_Model'];
									$foldName = $data['Folder_Name'];
									$imgName = $data['Img_Name'];
									$usb = $data['USB'];
									$storage = $data['Storage_Capacity'];
									$material = $data['Material_used'];
									$prod_price = $data['Price'];
									$Waranty = $data['Warranty'];
		?>

			<div class="row" style="border-bottom: 1.2px solid lightgrey;">
				
				<div class="col-4 py-5 text-center">
					<img src="images/accessories/pendrives/<?php echo $foldName; ?>/<?php echo $imgName; ?>"
						 style="height: 200px;"  >
				</div>

				<div class="col-4 py-5">
					<h6 style="font-size: 20px;">
						<?php echo "Pendrive :-  ".$prodModel ;?>
					</h6>
					<h6 style="font-size: 18px;">
						Rs. <?php  
									$price = strlen($prodPrice);

									if($price == 6)
									{
										echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
									}

									else if($price == 5)
									{
										echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
									}

									else if($price == 4)
									{
										echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
									}

									else
									{
										echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
									}
								?>
					</h6>
					<p>
						<ul>
							<!-- <li style="padding-left: 5px;"><?php echo $ram." | ".$hdd; ?></li> -->
							<li style="padding-left: 5px;"><?php echo "USB :- ".$usb; ?></li>
							<li style="padding-left: 5px;"><?php echo $storage; ?></li>
							<li style="padding-left: 5px;"><?php echo $material." Body"; ?></li>
						</ul>
					</p>
				</div>
				<div class="col-4 py-4">
					<div class="card" style="border-radius: 0px;">
						<div class="card-body pb-0">
							<div class="card-title">
								<h6 style="color:grey;border-bottom:1px solid lightgrey;padding-bottom:12px;letter-spacing:1px;
									word-spacing: 5px; font-weight: bolder;font-size:18px;" class="mx-4">
									PRICE DETAILS</h6>
							</div>
							<div class="card-text px-4">
								<p>
									<h6 class="py-2" style="color:black;">
										Price (1 item)
										<span style="margin-left: 80px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 6)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
												}

												else if($price == 5)
												{
													echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
												}

												else if($price == 4)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
												}

												else
												{
													echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
												}
											?>
										</span>
									<h6 class="py-2" style="color:black;" style="border-bottom: 1.2px solid lightgrey;">
										Delivery Charges
										<span style="margin-left: 50px;" class="text-success">FREE</span>
									</h6>
									<h6 class="pt-3" style="border-top: 1.2px solid lightgrey; font-size: 18px; font-weight: bold;">
										Total Price
										<span style="margin-left: 75px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 6)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
												}

												else if($price == 5)
												{
													echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
												}

												else if($price == 4)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
												}

												else
												{
													echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
												}
											?>
										</span>
									</h6>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		<?php
								}
							}

							else if($model == "powerbank")
							{
								$sql = "SELECT * FROM powerbank WHERE id = $prodId";
								$res = mysqli_query($accessory,$sql);

								while($data = mysqli_fetch_assoc($res))
								{
									$modType = $data['Model_Type'];
									$modName = $data['Model_Name'];
									$prodModel = $data['Product_Model'];
									$foldName = $data['Folder_Name'];
									$imgName = $data['Img_Name'];
									$power = $data['Power_Source'];
									$cable = $data['Charging_Cable'];
									$weight = $data['Weight'];
									$capacity = $data['Capacity'];
									$batteryType = $data['Battery_Type'];
									$prod_price = $data['Price'];
									$Waranty = $data['Warranty'];
		?>

			<div class="row" style="border-bottom: 1.2px solid lightgrey;">
				
				<div class="col-4 py-5 text-center">
					<img src="images/accessories/powerbank/<?php echo $foldName; ?>/<?php echo $imgName; ?>"
						 style="height: 200px;"  >
				</div>

				<div class="col-4 py-5">
					<h6 style="font-size: 20px;">
						<?php echo "Powerbank :-  ".$prodModel ;?>
					</h6>
					<h6 style="font-size: 18px;">
						Rs. <?php  
									$price = strlen($prodPrice);

									if($price == 6)
									{
										echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
									}

									else if($price == 5)
									{
										echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
									}

									else if($price == 4)
									{
										echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
									}

									else
									{
										echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
									}
								?>
					</h6>
					<p>
						<ul>
							<li style="padding-left: 5px;"><?php echo "Power Source :- ".$power; ?></li>
							<li style="padding-left: 5px;"><?php echo $weight; ?></li>
							<li style="padding-left: 5px;"><?php echo $capacity; ?></li>
						</ul>
					</p>
				</div>
				<div class="col-4 py-4">
					<div class="card" style="border-radius: 0px;">
						<div class="card-body pb-0">
							<div class="card-title">
								<h6 style="color:grey;border-bottom:1px solid lightgrey;padding-bottom:12px;letter-spacing:1px;
									word-spacing: 5px; font-weight: bolder;font-size:18px;" class="mx-4">
									PRICE DETAILS</h6>
							</div>
							<div class="card-text px-4">
								<p>
									<h6 class="py-2" style="color:black;">
										Price (1 item)
										<span style="margin-left: 80px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 6)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
												}

												else if($price == 5)
												{
													echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
												}

												else if($price == 4)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
												}

												else
												{
													echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
												}
											?>
										</span>
									<h6 class="py-2" style="color:black;" style="border-bottom: 1.2px solid lightgrey;">
										Delivery Charges
										<span style="margin-left: 50px;" class="text-success">FREE</span>
									</h6>
									<h6 class="pt-3" style="border-top: 1.2px solid lightgrey; font-size: 18px; font-weight: bold;">
										Total Price
										<span style="margin-left: 75px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 6)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
												}

												else if($price == 5)
												{
													echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
												}

												else if($price == 4)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
												}

												else
												{
													echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
												}
											?>
										</span>
									</h6>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>

		<?php

								}
							}
						}

						else if($gadget == "Kitchen Appliance")
						{
							if($model == "induction")
							{
								$sql = "SELECT * FROM induction WHERE id = $prodId";
								$res = mysqli_query($kitchen,$sql);

								while($data = mysqli_fetch_assoc($res))
								{
									$modType = $data['model_type'];
									$modName = $data['model_name'];
									$folder = $data['folder_name'];
									$imgName = $data['img_name'];
									$prodPrice = $data['prod_price'];
									$sales = $data['sales_package'];
									$power = $data['power_required'];
									$highlt = $data['highlight'];
									$bodymat = $data['body_material'];
									$col = $data['color'];
									$wt = $data['weight'];
									$waranty = $data['waranty'];
		?>

		<div class="row" style="border-bottom: 1.2px solid lightgrey;">
				
				<div class="col-4 py-5 text-center">
					<img src="images/kitchenappliance/induction/<?php echo $folder; ?>/<?php echo $imgName; ?>"
						 style="height: 200px;"  >
				</div>

				<div class="col-4 py-5">
					<h6 style="font-size: 20px;">
						<?php echo "Induction :-  ".$modName ;?>
					</h6>
					<h6 style="font-size: 18px;">
						Rs. <?php  
									$price = strlen($prodPrice);

									if($price == 6)
									{
										echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
									}

									else if($price == 5)
									{
										echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
									}

									else if($price == 4)
									{
										echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
									}

									else
									{
										echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
									}
								?>
					</h6>
					<p>
						<ul>
							<li style="padding-left: 5px;"><?php echo $power; ?></li>
							<li style="padding-left: 5px;"><?php echo $highlt; ?></li>
							<li style="padding-left: 5px;"><?php echo $bodymat; ?></li>
						</ul>
					</p>
				</div>
				<div class="col-4 py-4">
					<div class="card" style="border-radius: 0px;">
						<div class="card-body pb-0">
							<div class="card-title">
								<h6 style="color:grey;border-bottom:1px solid lightgrey;padding-bottom:12px;letter-spacing:1px;
									word-spacing: 5px; font-weight: bolder;font-size:18px;" class="mx-4">
									PRICE DETAILS</h6>
							</div>
							<div class="card-text px-4">
								<p>
									<h6 class="py-2" style="color:black;">
										Price (1 item)
										<span style="margin-left: 80px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 6)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
												}

												else if($price == 5)
												{
													echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
												}

												else if($price == 4)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
												}

												else
												{
													echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
												}
											?>
										</span>
									<h6 class="py-2" style="color:black;" style="border-bottom: 1.2px solid lightgrey;">
										Delivery Charges
										<span style="margin-left: 50px;" class="text-success">FREE</span>
									</h6>
									<h6 class="pt-3" style="border-top: 1.2px solid lightgrey; font-size: 18px; font-weight: bold;">
										Total Price
										<span style="margin-left: 75px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 6)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
												}

												else if($price == 5)
												{
													echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
												}

												else if($price == 4)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
												}

												else
												{
													echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
												}
											?>
										</span>
									</h6>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>


		<?php
								}
							}

							else if($model == "mixer")
							{
								$sql = "SELECT * FROM mixer WHERE id = $prodId";
								$res = mysqli_query($kitchen,$sql);

								while($data = mysqli_fetch_assoc($res))
								{
									$modType = $data['model_type'];
									$modName = $data['model_name'];
									$folder = $data['folder_name'];
									$imgName = $data['img_name'];
									$prodPrice = $data['prod_price'];
									$sales = $data['sales_package'];
									$power = $data['power_required'];
									$watt = $data['wattage'];
									$dpth = $data['depth'];
									$col = $data['color'];
									$wt = $data['weight'];
									$waranty = $data['waranty'];
		?>

		<div class="row" style="border-bottom: 1.2px solid lightgrey;">
				
				<div class="col-4 py-5 text-center">
					<img src="images/kitchenappliance/mixer/<?php echo $folder; ?>/<?php echo $imgName; ?>"
						 style="height: 200px;"  >
				</div>

				<div class="col-4 py-5">
					<h6 style="font-size: 20px;">
						<?php echo "Mixer Grinder :-  ".$modName ;?>
					</h6>
					<h6 style="font-size: 18px;">
						Rs. <?php  
									$price = strlen($prodPrice);

									if($price == 6)
									{
										echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
									}

									else if($price == 5)
									{
										echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
									}

									else if($price == 4)
									{
										echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
									}

									else
									{
										echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
									}
								?>
					</h6>
					<p>
						<ul>
							<li style="padding-left: 5px;"><?php echo $power; ?></li>
							<li style="padding-left: 5px;"><?php echo $watt; ?></li>
							<li style="padding-left: 5px;"><?php echo $wt; ?></li>							
						</ul>
					</p>
				</div>
				<div class="col-4 py-4">
					<div class="card" style="border-radius: 0px;">
						<div class="card-body pb-0">
							<div class="card-title">
								<h6 style="color:grey;border-bottom:1px solid lightgrey;padding-bottom:12px;letter-spacing:1px;
									word-spacing: 5px; font-weight: bolder;font-size:18px;" class="mx-4">
									PRICE DETAILS</h6>
							</div>
							<div class="card-text px-4">
								<p>
									<h6 class="py-2" style="color:black;">
										Price (1 item)
										<span style="margin-left: 80px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 6)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
												}

												else if($price == 5)
												{
													echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
												}

												else if($price == 4)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
												}

												else
												{
													echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
												}
											?>
										</span>
									<h6 class="py-2" style="color:black;" style="border-bottom: 1.2px solid lightgrey;">
										Delivery Charges
										<span style="margin-left: 50px;" class="text-success">FREE</span>
									</h6>
									<h6 class="pt-3" style="border-top: 1.2px solid lightgrey; font-size: 18px; font-weight: bold;">
										Total Price
										<span style="margin-left: 75px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 6)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
												}

												else if($price == 5)
												{
													echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
												}

												else if($price == 4)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
												}

												else
												{
													echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
												}
											?>
										</span>
									</h6>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>


		<?php
								}
							}

							else if($model == "juicer")
							{
								$sql = "SELECT * FROM juicer WHERE id = $prodId";
								$res = mysqli_query($kitchen,$sql);

								while($data = mysqli_fetch_assoc($res))
								{
									$modType = $data['model_type'];
									$modName = $data['model_name'];
									$folder = $data['folder_name'];
									$imgName = $data['img_name'];
									$prodPrice = $data['prod_price'];
									$sales = $data['sales_package'];
									$power = $data['power_required'];
									$highlt = $data['highlight'];
									$bodymat = $data['body_material'];
									$col = $data['color'];
									$wt = $data['weight'];
									$waranty = $data['waranty'];
		?>

		<div class="row" style="border-bottom: 1.2px solid lightgrey;">
				
				<div class="col-4 py-5 text-center">
					<img src="images/kitchenappliance/juicer/<?php echo $folder; ?>/<?php echo $imgName; ?>"
						 style="height: 200px;"  >
				</div>

				<div class="col-4 py-5">
					<h6 style="font-size: 20px;">
						<?php echo "Juicer :-  ".$modName ;?>
					</h6>
					<h6 style="font-size: 18px;">
						Rs. <?php  
									$price = strlen($prodPrice);

									if($price == 6)
									{
										echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
									}

									else if($price == 5)
									{
										echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
									}

									else if($price == 4)
									{
										echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
									}

									else
									{
										echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
									}
								?>
					</h6>
					<p>
						<ul>
							<li style="padding-left: 5px;"><?php echo $power; ?></li>
							<li style="padding-left: 5px;"><?php echo $highlt; ?></li>
							<li style="padding-left: 5px;"><?php echo $wt; ?></li>
						</ul>
					</p>
				</div>
				<div class="col-4 py-4">
					<div class="card" style="border-radius: 0px;">
						<div class="card-body pb-0">
							<div class="card-title">
								<h6 style="color:grey;border-bottom:1px solid lightgrey;padding-bottom:12px;letter-spacing:1px;
									word-spacing: 5px; font-weight: bolder;font-size:18px;" class="mx-4">
									PRICE DETAILS</h6>
							</div>
							<div class="card-text px-4">
								<p>
									<h6 class="py-2" style="color:black;">
										Price (1 item)
										<span style="margin-left: 80px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 6)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
												}

												else if($price == 5)
												{
													echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
												}

												else if($price == 4)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
												}

												else
												{
													echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
												}
											?>
										</span>
									<h6 class="py-2" style="color:black;" style="border-bottom: 1.2px solid lightgrey;">
										Delivery Charges
										<span style="margin-left: 50px;" class="text-success">FREE</span>
									</h6>
									<h6 class="pt-3" style="border-top: 1.2px solid lightgrey; font-size: 18px; font-weight: bold;">
										Total Price
										<span style="margin-left: 75px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 6)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
												}

												else if($price == 5)
												{
													echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
												}

												else if($price == 4)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
												}

												else
												{
													echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
												}
											?>
										</span>
									</h6>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>


		<?php
								}
							}

							else if($model == "oven")
							{
								$sql = "SELECT * FROM oven WHERE id = $prodId";
								$res = mysqli_query($kitchen,$sql);

								while($data = mysqli_fetch_assoc($res))
								{
									$modType = $data['model_type'];
									$modName = $data['model_name'];
									$folder = $data['folder_name'];
									$imgName = $data['img_name'];
									$prodPrice = $data['prod_price'];
									$sales = $data['sales_package'];
									$power = $data['power_required'];
									$highlt = $data['highlight'];
									$bodymat = $data['body_material'];
									$col = $data['color'];
									$wt = $data['weight'];
									$waranty = $data['waranty'];
		?>

		<div class="row" style="border-bottom: 1.2px solid lightgrey;">
				
				<div class="col-4 py-5 text-center">
					<img src="images/kitchenappliance/oven/<?php echo $folder; ?>/<?php echo $imgName; ?>"
						 style="height: 200px;"  >
				</div>

				<div class="col-4 py-5">
					<h6 style="font-size: 20px;">
						<?php echo "Microwave Oven :-  ".$modName ;?>
					</h6>
					<h6 style="font-size: 18px;">
						Rs. <?php  
									$price = strlen($prodPrice);

									if($price == 6)
									{
										echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
									}

									else if($price == 5)
									{
										echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
									}

									else if($price == 4)
									{
										echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
									}

									else
									{
										echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
									}
								?>
					</h6>
					<p>
						<ul>
							<li style="padding-left: 5px;"><?php echo $power; ?></li>
							<li style="padding-left: 5px;"><?php echo $highlt; ?></li>
							<li style="padding-left: 5px;"><?php echo $wt; ?></li>
						</ul>
					</p>
				</div>
				<div class="col-4 py-4">
					<div class="card" style="border-radius: 0px;">
						<div class="card-body pb-0">
							<div class="card-title">
								<h6 style="color:grey;border-bottom:1px solid lightgrey;padding-bottom:12px;letter-spacing:1px;
									word-spacing: 5px; font-weight: bolder;font-size:18px;" class="mx-4">
									PRICE DETAILS</h6>
							</div>
							<div class="card-text px-4">
								<p>
									<h6 class="py-2" style="color:black;">
										Price (1 item)
										<span style="margin-left: 80px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 6)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
												}

												else if($price == 5)
												{
													echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
												}

												else if($price == 4)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
												}

												else
												{
													echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
												}
											?>
										</span>
									<h6 class="py-2" style="color:black;" style="border-bottom: 1.2px solid lightgrey;">
										Delivery Charges
										<span style="margin-left: 50px;" class="text-success">FREE</span>
									</h6>
									<h6 class="pt-3" style="border-top: 1.2px solid lightgrey; font-size: 18px; font-weight: bold;">
										Total Price
										<span style="margin-left: 75px;">
											Rs. <?php  
												$price = strlen($prodPrice);
												if($price == 6)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].",".$prodPrice[3].$prodPrice[4].$prodPrice[5];	
												}

												else if($price == 5)
												{
													echo $prodPrice[0].$prodPrice[1].",".$prodPrice[2].$prodPrice[3].$prodPrice[4];
												}

												else if($price == 4)
												{
													echo $prodPrice[0].",".$prodPrice[1].$prodPrice[2].$prodPrice[3];
												}

												else
												{
													echo $prodPrice[0].$prodPrice[1].$prodPrice[2];
												}
											?>
										</span>
									</h6>
								</p>
							</div>
						</div>
					</div>
				</div>
			</div>


		<?php
								}
							}
						}
				}
			}

			else
			{
		?>
				<div class="row" style="margin-top: 40px;">
					<div class="col-2"></div>
					<div class="col-8 text-center">
						<img src="images/cartImg.png" style="height: 310px;">
					</div>
					<div class="col-2"></div>
				</div>

				<div class="row mb-4">
					<div class="col-4"></div>
					<div class="col-4 text-center mt-3">
						<h5>Missing Cart Items?</h5>
						<h6 style="margin-top: 12px;">Click on below link to browse & order items</h6>
					</div>
					<div class="col-4"></div>
				</div>

				<div class="row mb-5 mt-1">
					<div class="col-4"></div>
					<div class="col-4 text-center">
						<a href="emart.php" class="btn btn-danger btn-lg py-2 px-4">
							<h5 class="mt-2">Browse Items</h5>
						</a>
					</div>
					<div class="col-4"></div>
				</div> 
	<?php } ?>

	</div>
	<?php require_once('emart_footer.php'); ?>
</body>
</html>
