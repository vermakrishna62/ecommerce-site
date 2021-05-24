<?php  

	// admin_user_data
	$userdata = mysqli_connect("remotemysql.com","wk0XWywUmm","q7fysGuRqY","wk0XWywUmm");

	// emart_user_data
	$createconn = mysqli_connect("remotemysql.com","4pl0GTkFu2","aTxnXR5dTz","4pl0GTkFu2");

	// // emart_login_data database
	$conn = mysqli_connect("remotemysql.com","0mR1uZnpZd","QgKv6zXjnJ","0mR1uZnpZd");

	// emart_cart_data
	$cart_conn = mysqli_connect("remotemysql.com","xHvfSUyMTl","SM8y9Gh9ti","xHvfSUyMTl");

	// emart_order_data
	$order_conn = mysqli_connect("remotemysql.com","BxmsIKBsAI","ZWAEvyWAPo","BxmsIKBsAI");

	$firstname=trim($_POST['fn']);
	$midname=trim($_POST['md']);
	$lastname=trim($_POST['ln']);
	$address=trim($_POST['ads']);
	$user=trim($_POST['user']);
	$mail=trim($_POST['email']);
	$pass=trim($_POST['pass']);

	$sql = "SELECT * FROM login_credentials";
	$res = mysqli_query($conn,$sql);

	if(mysqli_num_rows($res) > 0)
	{
		while($row = mysqli_fetch_assoc($res))
		{	
			if($user == $row['username'] && $mail == $row['email'] && $pass == $row['password'])
			{
				echo "Input Credentials already Exists...!";
				break;
			}

			if($user == $row['username'])
			{
				echo "Same Username already Exists...!";
				break;
			}

			elseif($mail == $row['email'])
			{
				echo "Same E-Mail already Exists...!";	
				break;
			}

			elseif($pass == $row['password'])
			{
				echo "Same Password already Exists...!";	
				break;
			}

			else
			{
				$sql = "INSERT INTO login_credentials VALUES ('$user','$mail','$pass')";
				$ret = mysqli_query($conn,$sql);

				$makesql = "
							CREATE TABLE $user
							   (id INT NOT NULL AUTO_INCREMENT , 
							    img_name VARCHAR(30)  NOT NULL,
							    gadget_type VARCHAR(30) NOT NULL , 
							   	model_type VARCHAR(100) NOT NULL , 
							   	model_name VARCHAR(100) NOT NULL,
							    prod_id VARCHAR(20) NOT NULL,
							    prod_price INT(10) NOT NULL,
							    PRIMARY KEY (id))
						   ";

				mysqli_query($cart_conn,$makesql);
				mysqli_query($order_conn,$makesql);

				$create_sql = "CREATE TABLE $user
							   (id INT NOT NULL AUTO_INCREMENT , 
							    firstname VARCHAR(20) NOT NULL , 
							    midname VARCHAR(20) NOT NULL , 
							    lastname VARCHAR(20) NOT NULL , 
							    address VARCHAR(50) NOT NULL , 
							    username VARCHAR(30) NOT NULL , 
							   	email VARCHAR(40) NOT NULL , 
							    password VARCHAR(30) NOT NULL,
							    PRIMARY KEY (id))";

				mysqli_query($createconn,$create_sql);

				$insert_sql = "INSERT INTO $user VALUES (1,'$firstname','$midname','$lastname','$address','$user','$mail',
							  '$pass')";

				mysqli_query($createconn,$insert_sql);

				$adminSql = "INSERT INTO user_data (firstname,midname,lastname,address,username,email,password) 		  			 VALUES ('$firstname','$midname','$lastname','$address','$user','$mail','$pass')";

				mysqli_query($userdata,$adminSql);

				if($ret)
				{
					echo "Registered Successfully";
					break;
				}

				else
				{
					echo "Registration Failed";
					break;
				}
			}
		}
	}

	else
	{
		$makesql = "   CREATE TABLE $user
					   (id INT NOT NULL AUTO_INCREMENT ,
					   	img_name VARCHAR(30)  NOT NULL, 
					    gadget_type VARCHAR(30) NOT NULL , 
					   	model_type VARCHAR(100) NOT NULL ,
					   	model_name VARCHAR(100) NOT NULL, 
					    prod_id VARCHAR(20) NOT NULL,
					    prod_price INT(10) NOT NULL,					    
					    PRIMARY KEY (id))
				   ";

		mysqli_query($cart_conn,$makesql);
		mysqli_query($order_conn,$makesql);


		$sql1 = "INSERT INTO login_credentials VALUES ('$user','$mail','$pass')";
		$ret2 = mysqli_query($conn,$sql1);

		$create_sql = "CREATE TABLE $user
								   (id INT NOT NULL AUTO_INCREMENT , 
								    firstname VARCHAR(20) NOT NULL , 
								    midname VARCHAR(20) NOT NULL , 
								    lastname VARCHAR(20) NOT NULL , 
								    address VARCHAR(50) NOT NULL , 
								    username VARCHAR(30) NOT NULL , 
								   	email VARCHAR(40) NOT NULL , 
								    password VARCHAR(30) NOT NULL,
								    PRIMARY KEY (id))";

		mysqli_query($createconn,$create_sql);

		$insert_sql = "INSERT INTO $user VALUES (1,'$firstname','$midname','$lastname','$address','$user','$mail',
					   '$pass')";

		mysqli_query($createconn,$insert_sql);

		$adminSql = "INSERT INTO user_data (firstname,midname,lastname,address,username,email,password) 		  		 VALUES ('$firstname','$midname','$lastname','$address','$user','$mail','$pass')";

		mysqli_query($userdata,$adminSql);

		if($ret2)
		{
			echo "Registered Successfully";
		}

		else
		{
			echo "Registration Failed";
		}
	}
?>