
<?php session_start(); ?>

<?php 

	// emart_user_data
	$createconn = mysqli_connect("remotemysql.com","4pl0GTkFu2","aTxnXR5dTz","4pl0GTkFu2");
	// admin
	$adminconn = mysqli_connect("remotemysql.com","wk0XWywUmm","q7fysGuRqY","wk0XWywUmm");

	$fn = $_POST['fname'];
	$mn = $_POST['mname'];
	$ln = $_POST['lname'];
	$uadd = $_POST['useradd'];

	$db_name = $_SESSION['username'];

	$sql = "SELECT * FROM user_data";
	$ret = mysqli_query($adminconn,$sql);

	while($row = mysqli_fetch_assoc($ret))
	{
		if($row['username'] == $db_name)
		{
			$ID =  $row['id'];

			$sql1 = "UPDATE $db_name SET firstname='$fn' , midname='$mn' , lastname='$ln' , address='$uadd' WHERE id = 1";
			$sql2 = "UPDATE user_data SET firstname='$fn' , midname='$mn' , lastname='$ln' , address='$uadd'  WHERE id = $ID";

			$a = mysqli_query($createconn,$sql1);
			$b = mysqli_query($adminconn,$sql2);

			if($a==1 && $b==1)
			{
				echo 1;
				break;
			}

			else
			{
				echo 0;
				break;
			}
		}
	}
?>