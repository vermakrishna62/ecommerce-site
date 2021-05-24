<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

         <!-- Latest compiled and minified CSS -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

		<!-- jQuery library -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

		<!-- Popper JS -->
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

		<!-- Latest compiled JavaScript -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

        <link rel="stylesheet" href="css/style.css" />
        <title>Login Page</title>
    </head>
  <body>
        <div class="container-page">
            <div class="forms-container">
                <div class="signin-signup">
                    <form class="sign-in-form">
                        <h2 class="title">Sign in</h2>
                            <div class="input_field">
                                <i class="fas fa-user"></i>
                                <input type="text" placeholder="Username" id="login-user">
                            </div>
                            <div class="input_field">
                                <i class="fas fa-lock"></i>
                                <input type="password" placeholder="Password" id="login-pass">
                            </div>
                            
                            <div style="width: 100%;">
                            	 <button type="button" id="login-btn" class="button solid userlg">
                                	User Login
                                </button>

                                <button type="button" id="admin-btn" class="button solid adminlg">
                                	Admin Login
                                </button>
                            </div>
                            
                            <!-- Forgot Password  -->

                            <p class="social_text" style="margin-top: 5%;">
                               <a href="#" style="color: darkblue; text-decoration: none;" data-toggle="modal" data-target="#modalforgotpass">
                               		Forgot Password?
                               </a>
                            </p>	                          
                    </form>
                </div>
                <div class="modal fade" id="modalforgotpass" tabindex="-1"role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			        <div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							
							<!-- Header -->
							<div class="modal-header">
					    		<h4 class="modal-title text-center">Forgot Password?</h4>
					    		<button type="button" class="close" data-dismiss="modal">&times;</button>
							</div>
							
							<!-- Body -->
							<div class="modal-body">					    	
						    	<form>
						    		<div class="form-group" style="width: 440px;">
						    			<div class="input-group mt-2"> 						    				
						    				<div class="input-group-prepend">
						    					<span class="input-group-text">
						    						<i class="fa fa-envelope"></i>
						    					</span>
						    				</div>
						    				<input type="text" id="email" class="form-control" placeholder="Enter Email" required>   				
						    			</div>	    			
						    		</div>
						    	</form>
						    </div>

						    <!-- Footer -->
						    <!-- Modal footer -->
							<div class="modal-footer justify-content-center">
							    <button type="button" class="btn btn-primary" id="forgot-pass" 
							    data-dismiss="modal">
								     Submit</button>
							    </div>
							</div>
						</div>
					</div>
				</div>
            </div>

	        <div class="panels-container">
	            <div class="panel left-panel">
	                <div class="content">
	                	<p>
	                	<h2 id="head"><i class="fab fa-etsy"></i>-Mart&nbsp;<i class="fa fa-shopping-basket" aria-hidden="true"></i></h2>
	                	</p>
	                    <h3>New here ?</h3>
		                <p>
		                   Click here to registered with us...!
		                </p> 
		                <a href="#" role="button" data-toggle="modal" data-target="#modalRegisterForm" class="button transparent" id="sign-up-btn">Register</a>
		            </div>
		            	<img src="images/ecom.png" class="image" alt="" />		            	
		        </div>
		        <div class="modal fade" id="modalRegisterForm" tabindex="-1" role="dialog" 
		        aria-labelledby="myModalLabel" aria-hidden="true">
		        	<div class="modal-dialog modal-dialog-centered">
					<div class="modal-content">

					<!-- Modal Header -->
						<div class="modal-header">
					    	<h4 class="modal-title text-center">Registration Form</h4>
					    	<button type="button" class="close" data-dismiss="modal">&times;</button>
						</div>

					<!-- Modal body -->
					    <div class="modal-body">
					    	<div class="form-group">
				    			<div class="input-group"> 
				    				<div class="input-group-prepend">
				    					<span class="input-group-text">
				    						<i class="fa fa-user"></i>
				    					</span>
				    				</div>
				    				<input type="text" id="firstname" class="form-control" placeholder="First Name" required>
				    			</div>	    			
				    		</div>
				    		<div class="form-group">
				    			<div class="input-group"> 
				    				<div class="input-group-prepend">
				    					<span class="input-group-text">
				    						<i class="fa fa-user"></i>
				    					</span>
				    				</div>
				    				<input type="text" id="midname" class="form-control" placeholder="Middle Name"required>	
				    			</div>	    			
				    		</div>
				    		<div class="form-group">
				    			<div class="input-group"> 
				    				<div class="input-group-prepend">
				    					<span class="input-group-text">
				    						<i class="fa fa-user"></i>
				    					</span>
				    				</div>
				    				<input type="text" id="lastname" class="form-control" placeholder="Last Name" required>	
				    			</div>	    			
				    		</div>
				    		<div class="form-group">
				    			<div class="input-group"> 
				    				<div class="input-group-prepend">
				    					<span class="input-group-text">
				    						<i class="fa fa-user"></i>
				    					</span>
				    				</div>
				    				<input type="text" id="address" class="form-control" placeholder="Address" required>	
				    			</div>	    			
				    		</div>
				    		<div class="form-group">
				    			<div class="input-group"> 
				    				<div class="input-group-prepend">
				    					<span class="input-group-text">
				    						<i class="fa fa-user"></i>
				    					</span>
				    				</div>
				    				<input type="text" id="username" class="form-control" placeholder="Username" required>		
				    			</div>	    			
				    		</div>
				    		<div class="form-group">
				    			<div class="input-group"> 
				    				<div class="input-group-prepend">
				    					<span class="input-group-text">
				    						<i class="fa fa-envelope"></i>
				    					</span>
				    				</div>
				    				<input type="text" id="user_mail" class="form-control" placeholder="Email" required>   		
					    		</div>	    			
					    	</div>
					    	<div class="form-group">
					    		<div class="input-group"> 
					    			<div class="input-group-prepend">
					    				<span class="input-group-text">
					    					<i class="fa fa-lock"></i>
					    				</span>
					    			</div>
					    			<input type="password" id="user_pass" class="form-control" placeholder="Password" required>   				
					    		</div>	    			
					    	</div>
					    </div>

						<!-- Modal footer -->
						<div class="modal-footer justify-content-center">
						    <input type="submit" class="btn btn-primary" id="register" data-dismiss="modal" value="Sign up">
						 </div>
						</div>
					</div>
		        </div>
   			</div>
   		</div>
  </body>
</html>

<script type="text/javascript">
	$(document).ready(function()
		{
			// Registration Check

			$("#register").click(function(){
				var firstname = $("#firstname").val();
				var midname = $("#midname").val();
				var lastname = $("#lastname").val();
				var address = $("#address").val();
				var username = $("#username").val();
				var usermail = $("#user_mail").val();
				var userpass = $("#user_pass").val();

				if(firstname == '' && midname == '' && lastname == '' && address == '' && usermail == '' && userpass == '')
					alert("Input Credentials can't be empty");

				else if(firstname == '')
					alert("First name Must");

				else if(midname == '')
					alert("Middle Name Must");

				else if(lastname == '')
					alert("Last Name Must");

				else if(address == '')
					alert("Address Must");

				else if(usermail == '')
					alert("Usermail Must");
				
				else if(userpass == '')
					alert("Userpass Must");
				
				else
				{
					$.ajax({
						url:'registration_panel.php',
						method:'POST',
						data: {fn:firstname,md:midname,ln:lastname,ads:address,user:username,email:usermail,pass:userpass},
						success : function(data)
						{
							alert(data);
						}
					});
				}
			});

			// Admin Login Check

			$("#admin-btn").click(function(e){

				e.preventDefault();

				var login_user = $("#login-user").val();
				var login_pass = $("#login-pass").val();

				if(login_user == '' && login_pass == '')
					alert("Input Credentials can't be empty");

				else if(login_user == '')
					alert("Username can't be empty");
				
				else if(login_pass == '')
					alert("Password can't be empty");

				else
				{
					if(login_user == 'admin' && login_pass == 'password123')
						window.open("dashboard.php",'_blank');	
					

					else
					{
						alert("Invalid Admin Credential..! ");
					}				
				}

			});

			// Login Check
			$("#login-btn").click(function(e){

				e.preventDefault();

				var login_user = $("#login-user").val();
				var login_pass = $("#login-pass").val();

				if(login_user == '' && login_pass == '')
					alert("Input Credentials can't be empty");

				else if(login_user == '')
					alert("Username can't be empty");
				
				else if(login_pass == '')
					alert("Password can't be empty");

				else
				{
					$.ajax({
						url:"login_panel.php",
						method:"POST",
						data:{user_name:login_user,pass_word:login_pass},
						success: function(data)
						{
							if(data == 1)
							{
								setTimeout(function(){
												$('.loader').fadeToggle();
											});			

								location.href="emart.php";					
							}

							else
								alert("Invalid Credentials");
						}
					});
				}
			});

			// Forgot Password

			$("#forgot-pass").click(function(){
				var email = $("#email").val();

				if(email == '')
					alert("Can't be empty");

				else
				{
					$.ajax({
						url:"forgot_password.php",
						method:"POST",
						data:{mail:email},
						success:function(data)
						{
							if(data == "")
								alert("Entered E-Mail doesn't exists...!");
							else
								alert(data);
						}
					});
				}
			});
		});
	
</script>
