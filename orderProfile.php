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

         <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>   

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
                min-width: 980px;
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
        
        <?php require_once('navheadbar.php'); 

                $search = $_GET['search'];
        ?>

        <div class="main-content">
            <div class="main">

                <h1>Users Shopping Cart Management</h1>

                    
                    <div style="width: 620px; display: flex; justify-content: space-around;">
                        <div style=" margin-top: 4.5%;">
                            <label style="font-size: 24px;">
                            Search By Username</label>
                        </div>
                        <div>
                            <form action="orderProfile.php" class="search-bar">                        
                                <input type="search" name="search" pattern=".*\S.*" required 
                                       placeholder="Search By User Type ">
                                <button class="search-btn" type="submit">
                                    <span>Search</span>
                                </button>
                            </form>
                        </div>
                    </div>
                
                    <?php

                        $conn = mysqli_connect("remotemysql.com","0mR1uZnpZd","QgKv6zXjnJ","0mR1uZnpZd");

                        $cart_conn = mysqli_connect("remotemysql.com","BxmsIKBsAI","ZWAEvyWAPo","BxmsIKBsAI");

                        $flag = 0;

                        if($search != '')
                        {
                            $sql = "SELECT * FROM login_credentials";
                            $ret = mysqli_query($conn,$sql);

                            while($row = mysqli_fetch_assoc($ret))
                            {
                                if($row['username'] == $search)
                                {

                                    $sql1 = "SELECT * FROM $search WHERE gadget_type='Laptop' or gadget_type='laptop'";
                                    $ret = mysqli_query($cart_conn,$sql1);
                                    $noLap = mysqli_num_rows($ret);

                                    $sql2 = "SELECT * FROM $search WHERE gadget_type='Mobile' or gadget_type='mobile'";
                                    $ret = mysqli_query($cart_conn,$sql2);
                                    $noMob = mysqli_num_rows($ret);

                                    $sql3 = "SELECT * FROM $search WHERE gadget_type='Television' or gadget_type='television'";
                                    $ret = mysqli_query($cart_conn,$sql3);
                                    $noTel = mysqli_num_rows($ret);

                                    $sql4 = "SELECT * FROM $search WHERE gadget_type='Accessories' or gadget_type='accessories'";
                                    $ret = mysqli_query($cart_conn,$sql4);
                                    $noAcc = mysqli_num_rows($ret);

                                    $sql5 = "SELECT * FROM $search WHERE gadget_type='Kitchen Appliance' or gadget_type='kitchen appliance'";
                                    $ret = mysqli_query($cart_conn,$sql5);
                                    $noKap = mysqli_num_rows($ret);

                                    $sql_run = "SELECT * FROM $search";
                                    $ret_run = mysqli_query($cart_conn,$sql_run);
                    ?>
                            <div style="display: flex; justify-content: space-around; width: 100%;">
                                <div style="width: 60%; border-right: 1px solid lightgrey;">
                                    <div class="tablesection">
                                        <table class="styled-table" style="width: 63%; margin-left: 1.7%;">
                                            <thead>
                                                <tr style="text-align: center;">
                                                    <th>ID</th>
                                                    <th>Product Image</th>
                                                    <th>Gagdet Type</th>
                                                    <th>Model Type</th>
                                                    <th>Model Name</th>
                                                    <th>Product Price</th>
                                                </tr>
                                            </thead>
                                            <tbody style="text-align: center;">  
                                                <?php 
                                                    while($row = mysqli_fetch_assoc($ret_run))
                                                    {
                                                        $id = $row['id'];
                                                        $gadget = $row['gadget_type'];
                                                        $modType = $row['model_type'];
                                                        $modName = $row['model_name'];
                                                        $img = $row['img_name'];
                                                        $prod_price = $row['prod_price'];
                                                ?>
                                                <tr>
                                                    <td><?php echo $id; ?></td>
                                                    <td style="padding: 12px 28px;">
                                                        <img src="images/gadget-frontview/<?php echo $img; ?>" 
                                                             style="height:70px;" >
                                                    </td>
                                                    <td><?php echo ucfirst($gadget); ?></td>
                                                    <td><?php echo ucfirst($modType); ?></td>
                                                    <td><?php echo ucfirst($modName); ?></td>
                                                    <td>
                                                        Rs. 
                                                        <?php  
                                                            $price = strlen($prod_price);

                                                            if($price == 6)
                                                            {
                                                                echo $prod_price[0].",".$prod_price[1].$prod_price[2].",".$prod_price[3].$prod_price[4].$prod_price[5]; 
                                                            }

                                                            else if($price == 5)
                                                            {
                                                                echo $prod_price[0].$prod_price[1].",".$prod_price[2].$prod_price[3].$prod_price[4];
                                                            }

                                                            else
                                                            {
                                                                echo $prod_price[0].",".$prod_price[1].$prod_price[2].$prod_price[3];
                                                            }
                                                        ?>
                                                    </td>
                                                </tr>
                                                <?php  
                                                    $flag = 1;
                                                    }
                                                ?>                    
                                            </tbody>
                                        </table> 
                                    </div>
                                </div>
                                <div style="width: 40%;">
                                    <input type="text" id="mob" hidden value="<?php echo $noMob; ?>">
                                    <input type="text" id="lap" hidden value="<?php echo $noLap; ?>">
                                    <input type="text" id="tel" hidden value="<?php echo $noTel; ?>">
                                    <input type="text" id="accs" hidden value="<?php echo $noAcc; ?>">
                                    <input type="text" id="kapp" hidden value="<?php echo $noKap; ?>">
                                     <div id="piechart_3d" style="height: 700px;">
                                     </div>
                                </div>
                            </div>

                     <?php
                                }

                                else{}
                            } 

                            if($flag!=1)
                            {
                ?>

                    <table class="styled-table" style="width: 63%; margin-left: 1.7%; margin-top: 3.1%;
                            border: 2px solid green;">
                        <thead>
                            <tr style="text-align: center;">
                                <th style="margin: 0; padding: 1px 0px;"></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="19" style="text-align: center;">
                                    <h2>Search Account does not exists !</h2></td>
                            </tr>
                        </tbody>
                    </table>  

                <?php       } 
                        }

                        else{}
                ?>
            </div>
        </div>


        <script type="text/javascript">

            mobile = parseInt(document.getElementById('mob').value);
            laptop = parseInt(document.getElementById('lap').value);
            television = parseInt(document.getElementById('tel').value);
            accessories = parseInt(document.getElementById('accs').value);
            kitchenapp = parseInt(document.getElementById('kapp').value);

            google.charts.load("current", {packages:["corechart"]});

            google.charts.setOnLoadCallback(drawChart);
            function drawChart() {
                var data = google.visualization.arrayToDataTable([
                  ['Gadgets', 'Percentage'],
                  ['Mobile', mobile],
                  ['Laptop', laptop],
                  ['Televison',television],
                  ['Accessories',accessories],
                  ['Kitchen Appliances',kitchenapp]
                ]);

                var options = 
                {    
                    title : 'Shopping Cart Data',
                    backgroundColor: 'transparent',
                    'chartArea': {'width': '90%', 'height': '92%'},
                   'legend': {'position': 'bottom'},
                    is3D: true,
                    titleTextStyle: {
                        color: 'steelblue',    // any HTML string color ('red', '#cc00cc')
                        fontName: 'times new roman', // i.e. 'Times New Roman'
                        fontSize: 24, // 12, 18 whatever you want (don't specify px)
                        bold: true,    // true or false
                        italic: false   // true of false
                    },
                    is3D: true
                };

                var chart = new google.visualization.PieChart(document.getElementById('piechart_3d'));
                chart.draw(data, options);
            }

        </script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>
