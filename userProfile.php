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

            :root {
                --main-color: #027581;
                --color-dark: #1D2231;
                --text-grey: #8390A2;
            }

            .main {
                margin-top: 0px;
                background: #f1f5f9;
                min-height: 90vh;
                padding: 1rem 3rem;
            }

            .dash-title {
                color: var(--color-dark);
                margin-bottom: 1rem;
            }

            .dash-cards {
                display: grid;
                grid-template-columns: repeat(3, 1fr);
                grid-column-gap: 3rem;
            }

            .card-single {
                background: #fff;
                border-radius: 7px;
                box-shadow: 2px 2px 2px rgba(0,0,0,0.2);
            }

            .card-body {
                padding: 0 1rem;
                display: flex;
            }

            .card-body span {
                font-size: 1.5rem;
                color: #777;
                padding-right: 1.4rem;
            }

            .card-body h5 {
                color: var(--text-grey);
                font-size: 1.4rem;
            }

            .card-body img {
                margin: 0;
                padding: 0;
                margin-left: 40%;
            }

            .card-footer {
                padding: .6rem 1rem;
                margin-top: 3rem;
                background: #f9fafc;
            }

            .card-footer a {
                color: var(--main-color);
            }

            .main-content {
                position: relative;
                margin-left: -30px;
                transition: margin-left 500ms;
                margin-right: -20px;
            }

            /* The Modal (background) */
            .modal {
              display: none; /* Hidden by default */
              position: fixed; /* Stay in place */
              z-index: 1; /* Sit on top */
              padding-top: 100px; /* Location of the box */
              left: 0;
              top: 0;
              width: 100%; /* Full width */
              height: 100%; /* Full height */
              overflow: auto; /* Enable scroll if needed */
              background-color: rgb(0,0,0); /* Fallback color */
              background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
            }

            /* Modal Content */
            .modal-content {
              position: relative;
              background-color: #fefefe;
              margin: auto;
              padding: 0;
              border: 1px solid #888;
              width: 30%;
              box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2),0 6px 20px 0 rgba(0,0,0,0.19);
              -webkit-animation-name: animatetop;
              -webkit-animation-duration: 0.4s;
              animation-name: animatetop;
              animation-duration: 0.4s
            }

            /* Add Animation */
            @-webkit-keyframes animatetop {
              from {top:-300px; opacity:0} 
              to {top:0; opacity:1}
            }

            @keyframes animatetop {
              from {top:-300px; opacity:0}
              to {top:0; opacity:1}
            }

            /* The Close Button */
            .close {
              color: white;
              float: right;
              font-size: 28px;
              font-weight: bold;
            }

            .close:hover,
            .close:focus {
              color: #000;
              text-decoration: none;
              cursor: pointer;
            }

            .modal-header {
              padding: 0 16px;
              background-color: #5cb85c;
              color: white;
            }

            .modal-body {padding: 2px 16px;}

            /*.action-menu
            {
                width: 250px;
                margin-top: 5px;
                border-radius: 0px;
            }*/

            /*.action-menu::before
            {
                content: '';
                position: absolute;
                width: 20px;
                height: 20px;
                right: 138px;
                background: white;
                transform: rotate(45deg);
                top:-7px;
            }*/

            .tablesection {
              display: inline-block;
              height: 650px;
              overflow: auto
            }

            table thead {
              position: -webkit-sticky;
              position: sticky;
              top: 0;
            }


            /* == Just general styling, not relevant :) == */

            table {
                font-size: 0.9em;
                font-family: sans-serif;
                min-width: 1550px;
                border-collapse: collapse; 
            }

            table thead tr {
                background-color: #009879;
                color: #ffffff;
                text-align: left;
            }

            table th
            {
                font-size: 16px;
            }

            table th,
            table td {
                padding: 12px;
            }

            table tbody tr {
                border-bottom: 1px solid #dddddd;
            }

            table tbody tr:nth-of-type(even) {
                background-color: #f3f3f3;
            }

            tbody tr:last-of-type {
                border-bottom: 2px solid #009879;
            }

            .search-bar input,
        .search-btn, 
        .search-btn:before, 
        .search-btn:after {
            transition: all 0.25s ease-out;
        }
        .search-bar input,
        .search-btn {
            width: 3em;
            height: 3em;
        }
        .search-bar input:invalid:not(:focus),
        .search-btn {
            cursor: pointer;
        }
        .search-bar,
        .search-bar input:focus,
        .search-bar input:valid  {
            width: 100%;
        }
        .search-bar input:focus,
        .search-bar input:not(:focus) + .search-btn:focus {
            outline: transparent;
        }
        .search-bar {
            margin: 0;
            padding: 1.5em;
            max-width: 23em;
            display: flex;
        }
        .search-bar input {
            background: transparent;
            border-radius: 1.5em;
            box-shadow: 0 0 0 0.4em #171717 inset;
            padding: 0.75em;
            transform: translate(0.5em,0.5em) scale(0.5);
            transform-origin: 100% 0;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }
        .search-bar input::-webkit-search-decoration {
            -webkit-appearance: none;
        }
        .search-bar input:focus,
        .search-bar input:valid {
            background: #fff;
            border-radius: 0.375em 0 0 0.375em;
            box-shadow: 0 0 0 0.1em #d9d9d9 inset;
            transform: scale(1);
        }
        .search-btn {
            background: #171717;
            border-radius: 0 0.75em 0.75em 0 / 0 1.5em 1.5em 0;
            padding: 0.75em;
            position: relative;
            transform: translate(0.25em,0.25em) rotate(45deg) scale(0.25,0.125);
            transform-origin: 0 50%;
        }
        .search-btn:before, 
        .search-btn:after {
            content: "";
            display: block;
            opacity: 0;
            position: absolute;
        }
        .search-btn:before {
            border-radius: 50%;
            box-shadow: 0 0 0 0.2em #f1f1f1 inset;
            top: 0.75em;
            left: 0.75em;
            width: 1.2em;
            height: 1.2em;
        }
        .search-btn:after {
            background: #f1f1f1;
            border-radius: 0 0.25em 0.25em 0;
            top: 51%;
            left: 51%;
            width: 0.75em;
            height: 0.25em;
            transform: translate(0.2em,0) rotate(45deg);
            transform-origin: 0 50%;
        }
        .search-btn span {
            display: inline-block;
            overflow: hidden;
            width: 1px;
            height: 1px;
        }

        .searches{
            display: flex;
        }

        /* Active state */
        .search-bar input:focus + .search-btn,
        .search-bar input:valid + .search-btn {
            background: #2762f3;
            border-radius: 0 0.375em 0.375em 0;
            transform: scale(1);
        }
        .search-bar input:focus + .search-btn:before, 
        .search-bar input:focus + .search-btn:after,
        .search-bar input:valid + .search-btn:before, 
        .search-bar input:valid + .search-btn:after {
            opacity: 1;
        }
        .search-bar input:focus + .search-btn:hover,
        .search-bar input:valid + .search-btn:hover,
        .search-bar input:valid:not(:focus) + .search-btn:focus {
            background: #0c48db;
        }
        .search-bar input:focus + .search-btn:active,
        .search-bar input:valid + .search-btn:active {
            transform: translateY(1px);
        }

        @media screen and (prefers-color-scheme: dark) {
            body, input {
                color: #f1f1f1;
            }
            body {
                background: #171717;
            }
            .search-bar input {
                box-shadow: 0 0 0 0.4em #f1f1f1 inset;
            }
            .search-bar input:focus,
            .search-bar input:valid {
                background: #3d3d3d;
                box-shadow: 0 0 0 0.1em #3d3d3d inset;
            }
            .search-btn {
                background: #f1f1f1;
            }
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
        
        <?php require_once('navheadbar.php'); ?>

        <div class="main-content">
            <div class="main">

                <?php  
                    $adminconn = mysqli_connect("remotemysql.com","wk0XWywUmm","q7fysGuRqY","wk0XWywUmm");

                    $sql = "SELECT * FROM user_data";
                    $ret = mysqli_query($adminconn,$sql);
                    $total_no = mysqli_num_rows($ret);
                ?>

                <div style="display: flex; justify-content: flex-start;">
                    <h1>User Account</h1>
                    <h1 style="margin-left: 35%;">
                        Total No. of Users :- <?php echo $total_no; ?> </h1>
                </div>

                <div class="searches">
                    <form action="searchByUser.php" class="search-bar">
                        <input type="search" name="search" pattern=".*\S.*" required 
                               placeholder="Search By User Type ">
                        <button class="search-btn" type="submit">
                            <span>Search</span>
                        </button>
                    </form>

                    <form action="searchByName.php" class="search-bar">
                        <input type="search" name="search" pattern=".*\S.*" required 
                               placeholder="Search By Name ">
                        <button class="search-btn" type="submit">
                            <span>Search</span>
                        </button>
                    </form>
                </div>
                
                <div class="tablesection">

                <?php  
                   
                    $conn = mysqli_connect("remotemysql.com","wk0XWywUmm","q7fysGuRqY","wk0XWywUmm");
    
                    $sql = "SELECT * FROM user_data";
                    $ret = mysqli_query($conn,$sql);
                ?>

                    <table style="width: 63%; margin-left: 1.7%;">
                    <thead>
                        <tr style="text-align: center;">
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Middle Name</th>
                            <th>Last Name</th>
                            <th>Address</th>
                            <th>Username</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Profile</th>
                        </tr>
                    </thead>
                    <tbody style="text-align: center;"> 
                        <?php 
                            while($row = mysqli_fetch_assoc($ret))
                            {
                                $id = $row['id'];
                                $fn = $row['firstname'];
                                $mn = $row['midname'];
                                $ln = $row['lastname'];
                                $address = $row['address'];
                                $user = $row['username'];
                                $mail = $row['email'];
                                $pass = $row['password'];
                        ?>  
                        <tr>
                            <td><?php echo $id; ?></td>
                            <td><?php echo $fn; ?></td>
                            <td><?php echo $mn; ?></td>
                            <td><?php echo $ln; ?></td>
                            <td><?php echo $address; ?></td>
                            <td><?php echo $user; ?></td>
                            <td><?php echo $mail; ?></td>
                            <td><?php echo $pass; ?></td>
                            <td><a href="adminUserUpdateProfile.php?id=<?php echo $id; ?>" 
                                style="padding:6px 8px;border:1px solid black;
                                background:#3CB371; color:white;">
                                    Update Profile
                            </a></td>
                        </tr>   <?php } ?>  
                        </tbody>                
                    </tbody> 
                </div>
            </div>
        </div>

        <script type="text/javascript">
            // Get the modal
            var modal = document.getElementById("myModal");

            // Get the button that opens the modal
            var btn = document.getElementById("myBtn");

            // Get the <span> element that closes the modal
            var span = document.getElementsByClassName("close")[0];

            // When the user clicks on the button, open the modal
            btn.onclick = function() {
              modal.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            span.onclick = function() {
              modal.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
              if (event.target == modal) {
                modal.style.display = "none";
              }
            } 
        </script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>