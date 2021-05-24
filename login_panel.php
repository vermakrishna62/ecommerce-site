<?php  
	session_start();
?>

<?php  
	
	// emart_login_data database
	$conn = mysqli_connect("remotemysql.com","0mR1uZnpZd","QgKv6zXjnJ","0mR1uZnpZd");
	
	$user = trim($_POST['user_name']);
	$pass = trim($_POST['pass_word']);

	$sql = "SELECT * FROM login_credentials";
	$res = mysqli_query($conn,$sql);

	if(mysqli_num_rows($res) > 0)
	{
		while($row = mysqli_fetch_assoc($res))
		{
			if($user != $row['username'] && $pass != $row['password'])
			{
				echo "0";
			}

			elseif($user != $row['username'])
			{
				echo "0";
			}

			elseif($pass != $row['password'])
			{
				echo "0";
			}

			else
			{
				$_SESSION['username'] = $user;
				$_SESSION['password'] = $pass;
				$_SESSION['email'] = $row['email'];

				echo "1";
				break;
			}
		}
	}

	else
		echo "Please first registered with us";
?>