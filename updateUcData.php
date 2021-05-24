
<?php session_start(); ?>

<?php 

	// emart_user_data
	$createconn = mysqli_connect("remotemysql.com","4pl0GTkFu2","aTxnXR5dTz","4pl0GTkFu2");
	// conn
	$conn = mysqli_connect("remotemysql.com","0mR1uZnpZd","QgKv6zXjnJ","0mR1uZnpZd");
	// admin
	$adminconn = mysqli_connect("remotemysql.com","wk0XWywUmm","q7fysGuRqY","wk0XWywUmm");

	$mail = $_POST['usermail'];
	$pass = $_POST['userpass'];

	$db_name = $_SESSION['username'];

	$sql = "SELECT * FROM user_data";
	$ret = mysqli_query($adminconn,$sql);

	while($row = mysqli_fetch_assoc($ret))
	{
		if($row['username'] == $db_name)
		{
			$ID =  $row['id'];

			$sql1 = "UPDATE $db_name SET email='$mail' , password='$pass' WHERE id = 1";
			$sql2 = "UPDATE user_data SET email='$mail' , password='$pass' WHERE id = $ID";
			$sql3 = "UPDATE login_credentials SET email='$mail' , password='$pass' WHERE username = '$db_name'";

			$a = mysqli_query($createconn,$sql1);
			$b = mysqli_query($adminconn,$sql2);
			$c = mysqli_query($conn,$sql3);

			if($a==1 && $b==1 && $c==1)
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