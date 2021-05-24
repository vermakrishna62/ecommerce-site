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
	$order_conn = mysqli_connect("remotemysql.com","BxmsIKBsAI","ZWAEvyWAPo","BxmsIKBsAI");

	// admin_user_data
	$orderdata = mysqli_connect("remotemysql.com","KaT2UowDB4","dipaqLav47","KaT2UowDB4");

	$sql = "INSERT INTO $user (img_name,gadget_type,model_type,model_name,prod_id,prod_price) 
			VALUES ('$img','$gadgetName','$modelName','$company','$prodId','$prodPrice')";

	$sql1 = "INSERT INTO order_data (img_name,gadget_type,model_type,model_name,prod_id,prod_price) 
			 VALUES ('$img','$gadgetName','$modelName','$company','$prodId','$prodPrice')";

	$r = mysqli_query($order_conn,$sql);
	mysqli_query($orderdata,$sql1);
	if($r)
		echo "Success";
	else
		echo "not";

	header("location:myOrder.php");
?>