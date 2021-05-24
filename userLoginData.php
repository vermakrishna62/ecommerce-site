<?php  

	// emart_user_data
	$createconn = mysqli_connect("remotemysql.com","4pl0GTkFu2","aTxnXR5dTz","4pl0GTkFu2");
	// conn
	$conn = mysqli_connect("remotemysql.com","0mR1uZnpZd","QgKv6zXjnJ","0mR1uZnpZd");
	// admin
	$adminconn = mysqli_connect("remotemysql.com","wk0XWywUmm","q7fysGuRqY","wk0XWywUmm");

	$db_name = $_POST['uname'];
	$ID = $_POST['userid'];
	$mail = $_POST['umail'];
	$pass = $_POST['upass'];

	$sql1 = "UPDATE user_data SET email='$mail' , password='$pass' WHERE id = $ID";
	$a = mysqli_query($adminconn,$sql1);

	$sql2 = "UPDATE $db_name SET email='$mail' , password='$pass' WHERE id = 1";
	$b = mysqli_query($createconn,$sql2);

	$sql3 = "UPDATE login_credentials SET email='$mail' , password='$pass' WHERE username = '$db_name'";
	$c = mysqli_query($conn,$sql3);

	if($a && $b && $c)
	{
		header("location:userProfile.php");
	}
?>