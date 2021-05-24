<?php session_start(); ?>

<?php  

	$prodId = ucfirst($_GET['prodid']);
	$modelName = ucfirst($_GET['modname']);
	$gadgetName =  ucfirst($_GET['gadname']);
	$prodPrice =  $_GET['prodprice'];
	$img = $_GET['imgName'];
	$company = $_GET['cname'];

	$user =  $_SESSION['username'];

	// emart_cart_data
	$cart_conn = mysqli_connect("remotemysql.com","xHvfSUyMTl","SM8y9Gh9ti","xHvfSUyMTl");

	// admin_cart_data
	$cartdata = mysqli_connect("remotemysql.com","AVIwJ205HG","9Wc5TeSMbl","AVIwJ205HG");

	$sql = "INSERT INTO $user (img_name,gadget_type,model_type,model_name,prod_id,prod_price) 
			VALUES ('$img','$gadgetName','$modelName','$company','$prodId','$prodPrice')";

	$sql1 = "INSERT INTO cart_data (img_name,gadget_type,model_type,model_name,prod_id,prod_price) 
			 VALUES ('$img','$gadgetName','$modelName','$company','$prodId','$prodPrice')";

	$r = mysqli_query($cart_conn,$sql);
	mysqli_query($cartdata,$sql1);
	if($r)
		echo "Success";
	else
		echo "not";

	header("location:myCart.php");
?>
