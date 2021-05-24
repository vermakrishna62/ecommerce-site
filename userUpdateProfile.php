
<?php session_start(); $dbuser = $_SESSION['username']; ?>

<!DOCTYPE html>
<html lang="en">
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

	<title>Online Shopping Site in India for Mobiles, Electronic Applicances</title>

</head>
<body style="background: #F1F3F6;">

	<?php require_once('emart_header.php'); ?>

	<?php 

		// emart_user_data

		$createconn = mysqli_connect("remotemysql.com","4pl0GTkFu2","aTxnXR5dTz","4pl0GTkFu2");

		$retrievesql = "SELECT * FROM $dbuser";

		$ret = mysqli_query($createconn,$retrievesql);

		while($row = mysqli_fetch_assoc($ret))
		{
			$user_first_name = $row['firstname'];
			$user_mid_name = $row['midname'];
			$user_last_name = $row['lastname'];
			$address = $row['address'];
			$dbuser = $row['username'];
			$dbmail = $row['email'];
			$dbpass = $row['password'];
		}
    ?>

	<div class="container-fluid ">
		<div class="row" style="background: lightgrey; color: black;">
				<div class="col">
					<h4 class="mb-0" style="margin-left:240px; padding: 13px; font-size: 22px; letter-spacing: 1.5px; word-spacing: 2px;">
						Update User Data
					</h4>
				</div>
		</div>
		<div class="row">
		<div class="col-md-2"></div>
			<div class="col-md-7">
			<div class="container-fluid" style="border-bottom: 0.6px solid grey;">
				<div class="row my-5">
					<div class="col-md-6" style="font-size: 19.5px;color:steelblue;font-family:sans-serif; letter-spacing: 1.5px;">
						User Personal Details
					</div>
				</div>
				<div class="row my-2">
					<div class="col-md-1"></div>
					<div class="col-md-3 pt-2">
						First Name
					</div>
					<div class="col-md-7 mx-3">
						<div class="form-group">
				    			<div class="input-group"> 
				    				<div class="input-group-prepend">
				    					<span class="input-group-text">
				    						<i class="fa fa-user"></i>
				    					</span>
				    				</div>
				    				<input type="text" id="firstname" class="form-control" placeholder="First Name" required value="<?php echo $user_first_name; ?>">
				    			</div>	    			
				    	</div>
					</div>
				</div>
				<div class="row my-2">
					<div class="col-md-1"></div>
					<div class="col-md-3 pt-2">
						Middle Name
					</div>
					<div class="col-md-7 mx-3">
						<div class="form-group">
				    			<div class="input-group"> 
				    				<div class="input-group-prepend">
				    					<span class="input-group-text">
				    						<i class="fa fa-user"></i>
				    					</span>
				    				</div>
				    				<input type="text" id="midname" class="form-control" placeholder="Middle Name"required value="<?php echo $user_mid_name; ?>">	
				    			</div>	    			
				    	</div>
					</div>
				</div>
				<div class="row my-2">
					<div class="col-md-1"></div>
					<div class="col-md-3 pt-2">
						Last Name
					</div>
					<div class="col-md-7 mx-3">
						<div class="form-group">
				    			<div class="input-group"> 
				    				<div class="input-group-prepend">
				    					<span class="input-group-text">
				    						<i class="fa fa-user"></i>
				    					</span>
				    				</div>
				    				<input type="text" id="lastname" class="form-control" placeholder="Last Name" required value="<?php echo $user_last_name; ?>">	
				    			</div>	    			
				    	</div>
					</div>
				</div>
				<div class="row my-2">
					<div class="col-md-1"></div>
					<div class="col-3 pt-2">
						Address
					</div>
					<div class="col-md-7 mx-3">
						<div class="form-group">
				    			<div class="input-group"> 
				    				<div class="input-group-prepend">
				    					<span class="input-group-text">
				    						<i class="fa fa-user"></i>
				    					</span>
				    				</div>
				    				<input type="text" id="userAddress" class="form-control" placeholder="Last Name" required value="<?php echo $address; ?>">	
				    			</div>	    			
				    	</div>
					</div>
				</div>
				<div class="row my-5">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<button type="button" class="btn btn-outline-danger btn-lg" id="uptUsData"
								style="font-size: 19px; letter-spacing:2px; font-family: sans-serif;">
							Update User Data
						</button>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-7">
			<div class="container-fluid" style="border-bottom: 0.6px solid #EEE7FF;">
				<div class="row my-5">
					<div class="col-md-6" style="font-size: 19.5px;color:steelblue;font-family:sans-serif; letter-spacing: 1.5px;">
						User Login Details
					</div>
				</div>
				<div class="row my-2">
					<div class="col-md-1"></div>
					<div class="col-md-3">
						Username
					</div>
					<div class="col-md-7 mx-3">
						<div class="form-group">
				    			<div class="input-group"> 
				    				<div class="input-group-prepend">
				    					<span class="input-group-text">
				    						<i class="fa fa-id-card-alt fa-lg"></i>
				    					</span>
				    				</div>
				    				<input readonly type="text" id="username" class="form-control" placeholder="Username" value="<?php echo($dbuser); ?>" required >		
				    			</div>	    			
				    	</div>
					</div>
				</div>
				<div class="row my-2">
					<div class="col-1"></div>
					<div class="col-md-3">
						Email Id
					</div>
					<div class="col-md-7 mx-3">
						<div class="form-group">
				    			<div class="input-group"> 
				    				<div class="input-group-prepend">
				    					<span class="input-group-text">
				    						<i class="fa fa-envelope"></i>
				    					</span>
				    				</div>
				    				<input type="text" id="user_mail" class="form-control" placeholder="Email"
				    				       value="<?php echo($dbmail); ?>" required>   		
					    		</div>	    			
					    	</div>
					</div>
				</div>
				<div class="row my-2">
					<div class="col-1"></div>
					<div class="col-md-3">
						Password
					</div>
					<div class="col-md-7 mx-3">
						<div class="form-group">
					    		<div class="input-group"> 
					    			<div class="input-group-prepend">
					    				<span class="input-group-text">
					    					<i class="fa fa-lock"></i>
					    				</span>
					    			</div>
					    			<input type="password" id="user_pass" class="form-control" placeholder="Password" value="<?php echo($dbpass); ?>" required >   				
					    		</div>	    			
					    </div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-2"></div>
	</div>

	<div class="row my-5">
		<div class="col-md-3"></div>
		<div class="col-md-6">
			<button type="button" class="btn btn-outline-danger btn-lg" id="uptLgData"
					style="font-size: 19px; letter-spacing:2px; font-family: sans-serif;">
				Update Login Data
			</button>
		</div>
	</div>
</div>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function(){

		$("#uptUsData").click(function(){
			var fn = document.getElementById("firstname").value;
			var mn = document.getElementById("midname").value;
			var ln = document.getElementById("lastname").value;
			var uadd = document.getElementById("userAddress").value;
			
			$.ajax({

				url:"updatePcData.php",
				method:"POST",
				data : {fname:fn,mname:mn,lname:ln,useradd:uadd},
				success : function(data)
				{
					if(data == 1)
					{
						alert("Record Updated");
						location.href="emart.php";
					}

					else
					{
						alert("Error while Updating Record");
						location.href="emart.php";
					}
				}
			});
		});

		$("#uptLgData").click(function(){
			var mail = document.getElementById("user_mail").value;
			var pass = document.getElementById("user_pass").value;

			$.ajax({

				url:"updateUcData.php",
				method:"POST",
				data : {usermail:mail,userpass:pass},
				success : function(data)
				{
					if(data == 1)
					{
						alert("Login Crdentials Updated");
						location.href="emart.php";
					}

					else
					{
						alert("Error while Updating Credentials");
						location.href="emart.php";
					}
				}
			});
		});

	});
</script>