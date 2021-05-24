<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- ===== BOX ICONS ===== -->
        <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>

        <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>

        <!-- ===== CSS ===== -->
        <link rel="stylesheet" href="assets/css/styles.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    

        <title>E-MART DASHBOARD</title>

        <style type="text/css">

            @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap');
            @import url('https://fonts.googleapis.com/css?family=Fjalla+One&display=swap');

            $bg: "https://s3-us-west-2.amazonaws.com/s.cdpn.io/38816/image-from-rawpixel-id-2210775-jpeg.jpg"
            :root {
                --main-color: #027581;
                --color-dark: #1D2231;
                --text-grey: #8390A2;
                --form-bg: #f8f4e5;
                --form-shadow: #ffa580;
                --form-primary-highlight: #95a4ff;
                --form-secondary-highlight: #ffc8ff;
                --font-size: 14px;
                --font-face: 'Fjalla One';
                --font-color: #2A293E;
            }

            .main {
                margin-top: 0px;
                background: #f1f5f9;
                min-height: 90vh;
                padding: 1rem 3rem;
            }    

            .main-content {
                position: relative;
                margin-left: -30px;
                transition: margin-left 500ms;
                margin-right: -20px;
            }

            .contact-us
            {
                display: flex;
              background: #f8f4e5;
              padding: 50px 100px;
              padding-left: 10%;
              border: 2px solid rgba(0,0,0,1);
              box-shadow: 15px 15px 1px #ffa580, 15px 15px 1px 2px rgba(0,0,0,1);
            }

            .FN,.MN,.LN,.AD,.UN,.UE,.UP
            {
              display: block;
              width: 140%;
              font-size: 14pt;
              padding:20px 5px;
              line-height: 14pt * 2;
              margin-bottom: 14pt * 2;
              border: none;
              border-bottom: 5px solid rgba(0,0,0,1);
              background: #f8f4e5;
              min-width: 250px;
              padding-left: 5px;
              outline: none;
              color: rgba(0,0,0,1);
            }
              
            input:focus
            {
              border-bottom: 5px solid #ffa580;
            }

            .uud
            {
              display: block;
              margin: 36px auto 0;
              line-height: 14px * 2;
              padding: 10px 20px;
              background: #ffa580;
              letter-spacing: 2px;
              transition: .2s all ease-in-out;
              outline: none;
              border: 1px solid rgba(0,0,0,1);
              box-shadow: 3px 3px 1px #95a4ff, 3px 3px 1px 1px rgba(0,0,0,1);
            }

            .uld
            {
              display: block;
              margin: 100px auto 0;
              line-height: 14px * 2;
              padding: 10px 20px;
              background: #ffa580;
              letter-spacing: 2px;
              transition: .2s all ease-in-out;
              outline: none;
              border: 1px solid rgba(0,0,0,1);
              box-shadow: 3px 3px 1px #95a4ff, 3px 3px 1px 1px rgba(0,0,0,1);
            }
            
            button:hover
            {
                background: rgba(2,2,2,2);
                color: white;
                border: 1px solid rgba(0,0,0,1);
            }

            button::selection 
            {
              background: #ffc8ff;
            }

        </style>
    </head>
    <body id="body-pd">

        <header class="header" id="header">
            <div class="header__toggle">
                <i class='bx bx-menu' id="header-toggle"></i>
            </div>

            <div class="text-light font-weight-bolder dropdown-toggle" data-toggle="dropdown">
                <img src="assets/img/perfil.jpg" style="height:50px; width: 70px; margin-top: 10px; border-radius: 50%; margin-right: 50px;">
            </div>
        </header>
        
        <?php require_once('navheadbar.php'); 

            // emart_user_data
            $createconn = mysqli_connect("remotemysql.com","4pl0GTkFu2","aTxnXR5dTz","4pl0GTkFu2");
            // conn
            $conn = mysqli_connect("remotemysql.com","0mR1uZnpZd","QgKv6zXjnJ","0mR1uZnpZd");
            // admin
            $adminconn = mysqli_connect("remotemysql.com","wk0XWywUmm","q7fysGuRqY","wk0XWywUmm");

            $userId = $_GET['id'];

            $sql = "SELECT * FROM user_data WHERE id=$userId";
            $ret = mysqli_query($adminconn,$sql);

            $row = mysqli_fetch_assoc($ret);
            $fn = $row['firstname'];
            $mn = $row['midname'];
            $ln = $row['lastname'];
            $addrs = $row['address'];
            $userName = $row['username'];
            $userMail = $row['email'];
            $userPass = $row['password'];

        ?>

        <div class="main-content">
            <div class="main">
                <h1>Update User Profile</h1>
                
                <div style="background: url($bg) center center no-repeat; ">
                    <div class="contact-us">                   
                        <form action="userUpdateData.php" method="POST">
                            <input type="text" name="uname" value="<?php echo $userName; ?>" hidden>
                            <input type="text" name="userid" hidden value="<?php echo $userId; ?>" >
                            <input placeholder="First Name" class="FN" type="text" name="fname" 
                            value="<?php echo $fn; ?>" required>
                            <input placeholder="Mid Name" class="MN" type="text" name="mname" 
                            value="<?php echo $mn; ?>" required>
                            <input placeholder="Last Name" class="LN" type="text" name="lname" 
                            value="<?php echo $ln; ?>" required>
                            <input placeholder="User Address" class="AD" type="text" name="uaddr" 
                            value="<?php echo $addrs; ?>" required>
                            <input type="submit" class="uud" value="Update User Data">
                        </form>
                                      
                        <form action="userLoginData.php" method="POST" style="margin-left: 30%;">
                            <input type="text" hidden value="<?php echo $userId; ?>" name="userid">
                            <input placeholder="Username" class="UN" type="text" name="uname" 
                            value="<?php echo $userName; ?>" required readonly>
                            <input placeholder="E-Mail" class="UE" type="text" name="umail"
                            value="<?php echo $userMail; ?>" required>
                            <input placeholder="Password" class="UP" type="text" name="upass"
                            value="<?php echo $userPass; ?>" required>
                            <input type="submit" class="uld" value="Update Login Data">
                        </form>
                    </div>
                </div>
            </div>
        </div>
     
        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>