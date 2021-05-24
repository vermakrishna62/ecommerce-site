
<?php  
	session_start();
?>

<style type="text/css">
	
	@import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;500;600;700;800&display=swap");
	@import url('https://fonts.googleapis.com/css2?family=Itim&display=swap');


	@media (max-width:768px)
	{
		h2
		{
			text-align: center;
		}

		#logo
		{
			width: 150px;
			height: 40px;
		}
	}


	@media (max-width:576px) and (min-width: 321px)
	{
		h2
		{
			text-align: center;
		}

		#logo
		{
			width: 80px;
			height: 20px;
		}

		#search_box::placeholder
		{
			font-size: 16px;
		}
	}

	@media (max-width:320px)
	{
		h2
		{
			text-align: center;
		}

		#search_box::placeholder
		{
			font-size: 14px;
		}
	}

/*	.search_input
	{
		background: white;
		width: 100%;
	}

	.autocom_box
	{
		padding: 4px 8px;
		max-height: 260px;
		overflow-y: auto;
		display: none;
	}

	.autocom_box li
	{
		list-style: none;
		padding: 4px 10px;
		width: 100%;
		cursor: default;
	}

	.autocom_box li:hover
	{
		background: aliceblue;
	}
*/
	#product_name::placeholder
	{
		font-size: 17px;
	}

	@media(max-width: 576px)
	{
		#product_name::placeholder
		{
			font-size: 16px;
		}
	}

	@media (max-width: 992px)
	{
		#my_header_right
		{
			display: all;
		}

		#header_right
		{
			display: none;
		}
	}

	@media (min-width: 769px)
	{
		#my_header_right
		{
			display: all;
		}

		#header_right
		{
			display: none;
		}
	}

	.action-menu
	{
		width: 200px;
		margin-top: 12px;
		border-radius: 25px;
	}

	.action-menu::before
	{
		content: '';
		position: absolute;
		width: 20px;
		height: 20px;
		right: 110px;
		background: white;
		transform: rotate(45deg);
		top:-7px;
	}
	
</style>

<div class="container-fluid sticky-top" style="border: 1px solid black; background: #232F3E;">
	<div class="row">
		<div class="col-sm-3 col-md-3 col-lg-3">
			<h2 class="mt-2" style="font-family: serif; color: white; font-size: 34px; 
							 font-weight: bold; letter-spacing: 2px; word-spacing: 3px;">
				<a href="emart.php"><img src="images/emartLogo.png" id="logo" style="width: 90px; height: 38px;"></a>
					E-MART
			</h2>
		</div>

		<div class="col-sm-8 col-md- col-lg-4">
			<div class="dropdown">
				<div class="input-group input-group-md" style="margin-top: 8.5px;">
					<input type="text" id="product_name" class="form-control" 
					placeholder="Search for Products & Brands" data-toggle="dropdown"
					style="border-radius: 0px; margin-left: 0px;">
					
					<div class="input-group-append">
					<button class="btn btn-danger" type="submit" id="search_btn" style="border-radius: 0px;">
					   	<span><i class="fa fa-search text-white" aria-hidden="true"></i></span>
					</button>
					</div>
				</div>
			</div>
			<div id="prod_list" class="dropdown-menu" style="border-radius: 0px; border:1px solid black; margin-left: 2.5%; 
				 width: 95.4%; padding-top: 1px; padding-bottom: 1px; ">
				<li class='dropdown-item'></li>
			</div>
		</div>
		<div class="col-lg-4" id="my_header_right">
			<div class="container-fluid">
				<div class="row">
					<div class="col-2"></div>
					<div class="col-2">
						<div class="dropdown">
							<div class="text-light font-weight-bolder dropdown-toggle" data-toggle="dropdown" 
							style="margin-top: 12px; font-size: 20px;">
							    <img class="rounded-circle" src="images/profile-icon.png" 
							    	 style="margin-left: 60px; height: 36px;">
							</div>
							<div class="dropdown-menu action-menu" style="padding-bottom: 0px;">
								<a class="dropdown-item pt-0" href="#" 
								style="border-bottom: 0.5px solid lightgrey;">
									
									<i class="fa fa-id-card-alt fa-lg" aria-hidden="true" 
									   style="height: 28px; font-size: 34px; margin-top:15px; margin-left:50px; color: grey; background: white;">
									</i>
									<div style="margin-top: 12px; margin-bottom: 10px; text-align: center; border-radius: 25px;">
										<span style="letter-spacing: 1px; font-size: 14px; color: lightgrey;">
											Signed in as
										</span>
										<br>
										<span class="text-secondary" style="letter-spacing: 1px; font-weight: bolder; font-size: 18px;">
										<?php
										 	$dbuser = $_SESSION['username']; 
										 	echo $dbuser;
										 ?>
										</span>
									</div>	

								</a>
							    <a class="dropdown-item" href="#" style="border-bottom: 0.5px solid lightgrey;"
							       data-toggle="modal" data-target="#profileModal">
									<i class="fas fa-user-alt mt-1" style="color:grey; font-size: 19px;"></i>
										<span class="text-secondary">&nbsp;&nbsp;View Profile</span>
							    </a>

							    <a class="dropdown-item" href="userUpdateProfile.php" style="border-bottom: 0.5px solid lightgrey;">
							    	<i class="fas fa-key" style="color:grey; font-size: 16px;"></i>
							    		<span class="text-secondary">&nbsp;&nbsp;Update Profile</span>
								</a>
							 
								 <a class="dropdown-item py-1" id="logout" style="border-radius: 35px;">
							    	<i class="fas fa-sign-out-alt" style="color:grey; font-size: 17px;"></i>
							    		<span class="text-secondary">&nbsp;&nbsp;&nbsp;Logout</span>
								</a>
							</div>

							<?php 

								// emart_user_data

								$createconn = mysqli_connect("remotemysql.com","4pl0GTkFu2","aTxnXR5dTz","4pl0GTkFu2");

								$retrievesql = "SELECT * FROM $dbuser";

								$ret = mysqli_query($createconn,$retrievesql);

								$userid="";
								$user_first_name = "";
								$user_mid_name = "";
								$user_last_name = "";
								$address = "";
								$db_username = "";
								$db_mail = "";
								$db_password = "";

								while($row = mysqli_fetch_assoc($ret))
								{
									$user_first_name = $row['firstname'];
									$user_mid_name = $row['midname'];
									$user_last_name = $row['lastname'];
									$address = $row['address'];
									$db_username = $row['username'];
									$db_mail = $row['email'];
									$db_password = $row['password'];
								}

							 ?>
						</div> 
					</div>
					<div class="col-3 ml-5 text-white text-right" style="padding-top: 15px; font-size: 20px;">
						<a href="myCart.php" style="text-decoration: none; color: white; padding: 14px;">
							<i class="fas fa-shopping-cart" style="font-size: 18px;"></i>&nbsp;Cart
						</a>
					</div>

					<div class="col-4 text-white text-right" style="padding-top: 15px; font-size: 20px;">
						<a href="myOrder.php" style="text-decoration: none; color: white;margin-right: 40px; ">
							<i class="fab fa-shopify"></i>
							&nbsp;Orders
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<!-- Profile Modal -->
									<div class="modal fade" id="profileModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									  <div class="modal-dialog" role="document">
									    <div class="modal-content">
									    	<!-- Modal Header -->
									      <div class="modal-header">
									        <h5 class="modal-title" id="exampleModalLabel">PROFILE</h5>
									        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
									          <span aria-hidden="true">&times;</span>
									        </button>
									      </div>

									      <!-- Modal Body -->

									      <div class="modal-body">
									    	<div class="form-group pl-4">
									    		<label>First Name</label>
								    			<div class="input-group pr-5"> 
								    				<div class="input-group-prepend">
								    					<span class="input-group-text">
								    						<i class="fa fa-user"></i>
								    					</span>
								    				</div>
								    				<input type="text" value="<?php echo $user_first_name; ?>" class="form-control" 
								    					   readonly>
								    			</div>	    			
								    		</div>
								    		<div class="form-group pl-4">
								    			<label>Middle Name</label>
								    			<div class="input-group pr-5"> 
								    				<div class="input-group-prepend">
								    					<span class="input-group-text">
								    						<i class="fa fa-user"></i>
								    					</span>
								    				</div>
								    				<input type="text" value="<?php echo $user_mid_name; ?>" class="form-control" 
								    					   readonly>
								    			</div>	    			
								    		</div>
								    		<div class="form-group pl-4">
								    			<label>Last Name</label>
								    			<div class="input-group pr-5"> 
								    				<div class="input-group-prepend">
								    					<span class="input-group-text">
								    						<i class="fa fa-user"></i>
								    					</span>
								    				</div>
								    				<input type="text" value="<?php echo $user_last_name; ?>" class="form-control" 
								    					   readonly>
								    			</div>	    			
								    		</div>
								    		<div class="form-group pl-4">
								    			<label>Address</label>
								    			<div class="input-group pr-5"> 
								    				<div class="input-group-prepend">
								    					<span class="input-group-text">
								    						<i class="fa fa-user"></i>
								    					</span>
								    				</div>
								    				<input type="text" value="<?php echo $address; ?>" class="form-control" 
								    					   readonly>
								    			</div>	    			
								    		</div>
								    		<div class="form-group pl-4">
								    			<label>Username</label>
								    			<div class="input-group pr-5"> 
								    				<div class="input-group-prepend">
								    					<span class="input-group-text">
								    						<i class="fa fa-user"></i>
								    					</span>
								    				</div>
								    				<input type="text" value="<?php echo $db_username ?>" class="form-control" 
								    					   readonly>	
								    			</div>	    			
								    		</div>
								    		<div class="form-group pl-4">
								    			<label>Mail</label>
								    			<div class="input-group pr-5"> 
								    				<div class="input-group-prepend">
								    					<span class="input-group-text">
								    						<i class="fa fa-envelope"></i>
								    					</span>
								    				</div>
								    				<input type="text" value="<?php echo $db_mail; ?>" class="form-control" 
								    					   readonly>		
									    		</div>	    			
									    	</div>
									    	<div class="form-group pl-4">
									    		<label>Password</label>
									    		<div class="input-group pr-5"> 
									    			<div class="input-group-prepend">
									    				<span class="input-group-text">
									    					<i class="fa fa-lock"></i>
									    				</span>
									    			</div>
									    			<input type="text" value="<?php echo $db_password; ?>" class="form-control" 
								    					   readonly>				
									    		</div>	    			
									    	</div>
									   	 </div>
									    </div>
									  </div>
									</div>


<script type="text/javascript">
	$(document).ready(function(){

		$("#prod_list").fadeOut();

		$("#product_name").keyup(function(){
			var prod = $(this).val();

			if(prod!='')
			{
				$.ajax({
					url:"return_product_total.php",
					method:"POST",
					data:{prod_name:prod},
					success: function(data)
					{
						if(data == 1)
						{
							$.ajax({
							url:"show_product_list.php",
							method:"POST",
							data:{prod_name:prod},
							success: function(data)
							{
								$("#prod_list").fadeIn("fast").html(data);
							}
							});
						}

						else
						{
							$("#prod_list").fadeOut();
						}
					}
				});
			}				

			else
			{
				$("#prod_list").fadeOut();
			}
		});

		$(document).on('click',"#prod_list li",function(){
			$("#product_name").val($(this).text());
			$("#prod_list").fadeOut();
		});

		$("#search_btn").on("click",function(e){

			e.preventDefault();

			var p = $("#product_name").val();
			if(p!="")
			{
				if(p=="Laptop" || p=="Acer" || p=="Asus" || p=="Dell" || p=="Hp")
				{
					location.href="http://localhost/ecommerce_site/laptop.php";
				}

				else if(p=="Mobile" || p=="Samsung" || p=="Oppo" || p=="Vivo" || p=="Redmi" || p=="Oneplus")
				{
					location.href="mobile.php";
				}

				else if(p=="Television")
				{
					location.href="television.php";
				}

				else if(p=="Accessories")
					// ||p=="Data Cables"||p=="Mobile Chargers"||p=="Earphones"||p=="Powerbank" ||p=="Pendrive")
				{
					location.href="accessories.php";
				}

				else if(p=="Data Cables")
					// ||p=="Data Cables"||p=="Mobile Chargers"||p=="Earphones"||p=="Powerbank" ||p=="Pendrive")
				{
					location.href="accessories.php";
				}

				else if(p=="Earphones"|| p=="Powerbanks" ||p=="Pendrive")
					// ||p=="Data Cables"||p=="Mobile Chargers"||p=="Earphones"||p=="Powerbank" ||p=="Pendrive")
				{
					location.href="accessories.php";
				}

				else if(p=="Kitchen Appliance")
					// ||p="Mixer Grinder"||p="Juicer"||p="Induction"||p="Microwave Oven")
				{
					location.href="kitchen_appliance.php";
				}

				else if(p="Mixer Grinder")
					// ||p="Mixer Grinder"||p="Juicer"||p="Induction"||p="Microwave Oven")
				{
					location.href="kitchen_appliance.php";
				}

				else if(p="Induction")
					// ||p="Mixer Grinder"||p="Juicer"||p="Induction"||p="Microwave Oven")
				{
					location.href="kitchen_appliance.php";
				}

				else if(p="Microwave Oven")
					// ||p="Mixer Grinder"||p="Juicer"||p="Induction"||p="Microwave Oven")
				{
					location.href="kitchen_appliance.php";
				}

				else
					alert("Product Not Found..!");
			}

			else
			{
				alert("Select Product");
			}
		});

		$("#logout").click(function(){

			var res = confirm("Do u want to logout?");

			if (res == true)
			{
				$.ajax({

					url : "logout.php",
					success: function(data)
					{
						location.href="index.php";
					}

				});
			}

		});

		$("#changePassBtn").click(function(){

			var newPass = document.getElementById("newpass").value; 
			var confirmPass = document.getElementById("confirmpass").value; 

			if(newPass == confirmPass)
			{
				$.ajax({

					url : "change_password.php",
					method :"POST",
					data : {pass:newPass},
					success: function(data)
					{
						if(data == 1)
						{
							alert("Password Changed Successfully");
						}

						else
						{
							alert("There is problem while changing password");
						}
					}

				});
			}

			else
			{
				alert("Password doesn't match.");
			}

		});

	});

</script>


