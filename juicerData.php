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

        <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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

            .styled-table {
                border-collapse: collapse;
                margin: 35px 0;
                font-size: 0.9em;
                font-family: sans-serif;
                min-width: 800px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            }

            .styled-table thead tr {
                background-color: #009879;
                color: #ffffff;
                text-align: left;
            }

            .styled-table th
            {
                font-size: 16px;
            }

            .styled-table th,
            .styled-table td {
                padding: 12px 28px;
            }

            .styled-table tbody tr {
                border-bottom: 1px solid #dddddd;
            }

            .styled-table tbody tr:nth-of-type(even) {
                background-color: #f3f3f3;
            }

            .styled-table tbody tr:last-of-type {
                border-bottom: 2px solid #009879;
            }

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

            .select-style {
                border: 1px solid #ccc;
                width: 120px;
                border-radius: 3px;
                overflow: hidden;
                background: #fafafa url("img/icon-select.png") no-repeat 90% 50%;
            }

            .select-style select {
                padding: 5px 8px;
                width: 130%;
                border: none;
                box-shadow: none;
                background: transparent;
                background-image: none;
                -webkit-appearance: none;
            }

            .select-style select:focus {
                outline: none;
            }

        details {
            position: relative;
            width: 300px;
            margin-right: 1rem;
        }

        details[open] {
            z-index: 1;
        }

        summary {
            padding: 1rem;
            cursor: pointer;
            border-radius: 5px;
            background-color: #ddd;
            list-style: none;
        }

        summary::-webkit-details-marker {
            display: none;
        }

        details[open] summary:before {
            content: '';
            display: block;
            width: 100vw;
            height: 100vh;
            background: transparent;
            position: fixed;
            top: 0;
            left: 0;
        }

        summary:after {
            content: '';
            display: inline-block;
            float: right;
            width: .5rem;
            height: .5rem;
            border-bottom: 1px solid currentColor;
            border-left: 1px solid currentColor;
            border-bottom-left-radius: 2px;
            transform: rotate(45deg) translate(50%, 0%);
            transform-origin: center center;
            transition: transform ease-in-out 100ms
        }

        summary:focus {
            outline: none;
        }

        details[open] summary:after {
            transform: rotate(-45deg) translate(0%, 0%);
        }

        ul {
            width: 100%;
            background: #ddd;
            position: absolute;
            top: calc(100% + .5rem);
            left: 0;
            padding: 1rem;
            margin: 0;
            box-sizing: border-box;
            border-radius: 5px;
            max-height: 200px;
            overflow-y: auto;
            text-decoration: none;
        }

        li {
            list-style: none;
            text-decoration: none;
            margin: 0;
            padding: 1rem 0;
            border-bottom: 1px solid #ccc;
        }

        li a
        {
            color: steelblue;
        }

        li:first-child {
            padding-top: 0;
        }

        li:last-child {
            padding-bottom: 0;
            border-bottom: none;
        }

            .styled-table {
                border-collapse: collapse;
                margin: 35px 0;
                font-size: 0.9em;
                font-family: sans-serif;
                min-width: 1700px;
                box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
            }

            .styled-table thead tr {
                background-color: #009879;
                color: #ffffff;
                text-align: left;
            }

            .styled-table th
            {
                font-size: 16px;
            }

            .styled-table th,
            .styled-table td {
                padding: 12px 14px;
            }

            .styled-table tbody tr {
                border-bottom: 1px solid #dddddd;
            }

            .styled-table tbody tr:nth-of-type(even) {
                background-color: #f3f3f3;
            }

            .styled-table tbody tr:last-of-type {
                border-bottom: 2px solid #009879;
            }


        </style>

        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap"
              rel="stylesheet"/>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" />

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

            $db_name = $_GET['mdname'];
        ?>

        <div class="main-content">
            <div class="main">

                <h1><?php echo ucfirst($db_name); ?> Product Data</h1>

                <details>
                    <summary>
                        <?php 

                            if($db_name!='')
                                echo ucfirst($db_name); 
                            else
                                echo "Select Model Name";
                        ?>                            
                        </summary>
                    <ul>
                        <li><a href="inductionData.php?mdname=induction">Induction Gas</a></li>
                        <li><a href="juicerData.php?mdname=juicer">Juicer</a></li>
                        <li><a href="grinderData.php?mdname=mixer">Mixer Grinder</a></li>
                        <li><a href="ovenData.php?mdname=oven">Microwave Oven</a></li>
                    </ul>
                </details>

                <?php
                    if($db_name!='')
                    {
                        $conn = mysqli_connect("remotemysql.com","FZe4kALKF5","2irRUZaJqv","FZe4kALKF5");
    
                        $sql = "SELECT * FROM $db_name";
                        $ret = mysqli_query($conn,$sql);
                ?>

                <table class="styled-table" style="width: 63%;">
                    <thead>
                        <tr style="text-align: center;">
                            <th>ID</th>
                            <th>Product Image</th>
                            <th>Gagdet Type</th>
                            <th>Model Type</th>
                            <th>Model Name</th>
                            <th>Product Price</th>
                            <th>Product Price</th>
                            <th>Sales Package</th>
                            <th>Power Required</th>
                            <th>Higlight</th>
                            <th>Depth</th>
                            <th>Weight</th>
                            <th>Warranty</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                            while($row = mysqli_fetch_assoc($ret))
                            {
                                $id = $row['id'];
                                $gadget = $row['gadget_type'];
                                $modType = $row['model_type'];
                                $modName = $row['model_name'];
                                $folder = $row['folder_name'];
                                $img = $row['img_name'];
                                $prod_price = $row['prod_price'];
                                $sales = $row['sales_package'];
                                $power = $row['power_required'];
                                $highlt = $row['highlight'];
                                $depth = $row['depth'];
                                $wt = $row['weight'];
                                $col = $row['color'];
                                $waranty = $row['waranty'];
                        ?>
                        <tr style="text-align: center;">
                            <td><?php echo $id; ?></td>
                            <td style="padding: 12px 24px;"><img src="images/gadget-frontview/<?php echo $img; ?>" style="height:70px; width: 95px;" >
                            </td>
                            <td><?php echo ucfirst($gadget); ?></td>
                            <td><?php echo ucfirst($modType); ?></td>
                            <td><?php echo ucfirst($modName);; ?></td>
                            <td><?php echo $prod_price; ?></td>
                            <td><?php echo $sales; ?></td>
                            <td><?php echo $power; ?></td>
                            <td><?php echo $highlt; ?></td>
                            <td><?php echo $depth; ?></td>
                            <td><?php echo $wt; ?></td>
                            <td><?php echo $col; ?></td>
                            <td><?php echo $waranty; ?></td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>

                <?php
                    }

                    else
                    {
                ?>

                <table class="styled-table" style="width: 63%;">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Product Image</th>
                            <th>Gagdet Type</th>
                            <th>Model Type</th>
                            <th>Model Name</th>
                            <th>Inches</th>
                            <th>Product Price</th>
                            <th>Display Size</th>
                            <th>Color</th>
                            <th>Screen Type</th>
                            <th>Hdmi</th>
                            <th>USB</th>
                            <th>Processor</th>
                            <th>Storage Memory</th>
                            <th>Speaker Type</th>
                            <th>Internet Access</th>
                            <th>Dimension</th>
                            <th>Warranty</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="19" style="text-align: center;">
                                <h3>No Product Data Found</h3></td>
                        </tr>
                    </tbody>
                </table>

                <?php
                    }
                ?>
                                
            </div>
        </div>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>

    </body>
</html>