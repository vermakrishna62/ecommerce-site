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
	<title>My Orders</title>
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

	<div class="container-fluid bg-white" style="width:1500px; margin-top: 40px; border: 1.2px solid lightgrey;">
		<div class="row" style="border-bottom: 0.2px solid lightgrey;">
			<h4 style="font-weight: bolder; margin-left:60px; margin-top: 35px; margin-bottom: 15px; font-size: 24px;">
				My Orders
			</h4>
		</div>

		<?php  
			session_start();
		?>

		<div class="row mx-5 px-3 my-3 py-4">
			<table class="table table-bordered">
			    <thead class="thead-dark p-0 text-center">
			      <tr>
			        <th>ID</th>
			        <th>Product Image</th>
			        <th>Gadget type</th>
			        <th>Model Type</th>
			        <th>Model Name</th>
			        <th>Product Price</th>
			      </tr>
			    </thead>
			    <tbody>


		<?php  
			$user = $_SESSION['username'];

			$order_conn = mysqli_connect("remotemysql.com","BxmsIKBsAI","ZWAEvyWAPo","BxmsIKBsAI");

			$sql = "SELECT * FROM $user";

			$ret = mysqli_query($order_conn,$sql);

			if(mysqli_num_rows($ret) > 0)
			{
				$sql1 = "SELECT * FROM $user";
				$ret1 = mysqli_query($order_conn,$sql1);

					while($row = mysqli_fetch_assoc($ret1))
					{
						$iD = $row['id'];
						$img = $row['img_name'];
						$gadget = $row['gadget_type'];
						$modType = lcfirst($row['model_type']);
						$modName = lcfirst($row['model_name']);
						$prodId = $row['prod_id'];
						$prodPrice = $row['prod_price'];
		?>
			      <tr class="text-center">
			        <td class="align-middle"><?php echo $iD; ?></td>
			        <td class="align-middle">
			        	<img src="images/gadget-frontview/<?php echo $img; ?>" style="height: 100px;" 
			        		 class="p-0 m-0">			        
			        </td>
			        <td class="align-middle"><?php echo $gadget; ?></td>
			        <td class="align-middle"><?php echo ucfirst($modType); ?></td>
			        <td class="align-middle p-0"><?php echo ucfirst($modName); ?></td>
			        <td class="align-middle">
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
			        </td>
			      </tr>
	<?php  
			      	}
			}

			else
			{
				echo "<tr><td colspan='6' style='text-align: center;'>
                                <h5 style='padding-top:10px; letter-spacing:2.5px;'>
                                	No Order Placed Found</h4>
                      <br><a href='emart.php' class='btn btn-danger btn-lg py-0 mb-2'>
					  <h5 class='mt-2'>Browse Items</h5>
					  </a></td></tr>";
			}
    ?>
			    </tbody>
			</table>
		</div>
	</div>
	<?php require_once('emart_footer.php'); ?>
</body>
</html>
