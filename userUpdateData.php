<?php  

	// emart_user_data
	$createconn = mysqli_connect("remotemysql.com","4pl0GTkFu2","aTxnXR5dTz","4pl0GTkFu2");
	// admin
	$adminconn = mysqli_connect("remotemysql.com","wk0XWywUmm","q7fysGuRqY","wk0XWywUmm");

	$db_name = $_POST['uname'];
	$ID = $_POST['userid'];
	$fn = $_POST['fname'];
	$mn = $_POST['mname'];
	$ln = $_POST['lname'];
	$uad = $_POST['uaddr'];

	$sql1 = "UPDATE user_data SET firstname='$fn',midname='$mn',lastname='$ln',address='$uad' WHERE id=$ID";
	$a = mysqli_query($adminconn,$sql1);

	$sql2 = "UPDATE $db_name SET firstname='$fn',midname='$mn',lastname='$ln',address='$uad' WHERE id=1";
	$b = mysqli_query($createconn,$sql2);

	if($a && $b)
	{
		header("location:userProfile.php");
	}

?>