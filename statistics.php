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

        <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

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

                <h1>Statistics & Analytics</h1>

                <?php  

                    $conn = mysqli_connect("remotemysql.com","AVIwJ205HG","9Wc5TeSMbl","AVIwJ205HG");
    
                    $sql1 = "SELECT * FROM cart_data WHERE gadget_type='Laptop' or gadget_type='laptop'";
                    $ret = mysqli_query($conn,$sql1);
                    $noLap = mysqli_num_rows($ret);

                    $sql2 = "SELECT * FROM cart_data WHERE gadget_type='Mobile' or gadget_type='mobile'";
                    $ret = mysqli_query($conn,$sql2);
                    $noMob = mysqli_num_rows($ret);

                    $sql3 = "SELECT * FROM cart_data WHERE gadget_type='Television' or gadget_type='television'";
                    $ret = mysqli_query($conn,$sql3);
                    $noTel = mysqli_num_rows($ret);

                    $sql4 = "SELECT * FROM cart_data WHERE gadget_type='Accessories' or gadget_type='accessories'";
                    $ret = mysqli_query($conn,$sql3);
                    $noAcc = mysqli_num_rows($ret);

                    $sql5 = "SELECT * FROM cart_data WHERE gadget_type='Kitchen Appliance' or gadget_type='kitchen appliance'";
                    $ret = mysqli_query($conn,$sql5);
                    $noKap = mysqli_num_rows($ret);

                    $conn1 = mysqli_connect("remotemysql.com","KaT2UowDB4","dipaqLav47","KaT2UowDB4");
    
                    $sql6 = "SELECT * FROM order_data WHERE gadget_type='Laptop' or gadget_type='laptop'";
                    $ret = mysqli_query($conn1,$sql6);
                    $noOLap = mysqli_num_rows($ret);

                    $sql7 = "SELECT * FROM order_data WHERE gadget_type='Mobile' or gadget_type='mobile'";
                    $ret = mysqli_query($conn1,$sql7);
                    $noOMob = mysqli_num_rows($ret);

                    $sql8 = "SELECT * FROM order_data WHERE gadget_type='Television' or gadget_type='television'";
                    $ret = mysqli_query($conn1,$sql8);
                    $noOTel = mysqli_num_rows($ret);

                    $sql9 = "SELECT * FROM order_data WHERE gadget_type='Accessories' or gadget_type='accessories'";
                    $ret = mysqli_query($conn1,$sql9);
                    $noOAcc = mysqli_num_rows($ret);

                    $sql10 = "SELECT * FROM order_data WHERE gadget_type='Kitchen Appliance' or gadget_type='kitchen appliance'";
                    $ret = mysqli_query($conn1,$sql10);
                    $noOKap = mysqli_num_rows($ret);

                ?>

                <input type="text" id="mob" hidden value="<?php echo $noMob; ?>">
                <input type="text" id="lap" hidden value="<?php echo $noLap; ?>">
                <input type="text" id="tel" hidden value="<?php echo $noTel; ?>">
                <input type="text" id="accs" hidden value="<?php echo $noAcc; ?>">
                <input type="text" id="kapp" hidden value="<?php echo $noKap; ?>">
                
                <input type="text" id="omob" hidden value="<?php echo $noOMob; ?>">
                <input type="text" id="olap" hidden value="<?php echo $noOLap; ?>">
                <input type="text" id="otel" hidden value="<?php echo $noOTel; ?>">
                <input type="text" id="oaccs" hidden value="<?php echo $noOAcc; ?>">
                <input type="text" id="okapp" hidden value="<?php echo $noOKap; ?>">
                
                <div style="display: flex; justify-content: space-around; width: 100%;">
                    <div style="width: 50%; border-right: 1px solid lightgrey;">
                         <div id="piechart_3d1" style="width: 100%; height: 800px;">
                         </div>
                    </div>

                    <div style="width: 50%; border-left: 1px solid lightgrey;">
                         <div id="piechart_3d2" style="width: 100%; height: 800px;">
                         </div>
                    </div>
                </div>
                
            </div>
        </div>

         <script type="text/javascript">

            mobile = parseInt(document.getElementById('mob').value);
            laptop = parseInt(document.getElementById('lap').value);
            television = parseInt(document.getElementById('tel').value);
            accessories = parseInt(document.getElementById('accs').value);
            kitchenapp = parseInt(document.getElementById('kapp').value);

            omobile = parseInt(document.getElementById('omob').value);
            olaptop = parseInt(document.getElementById('olap').value);
            otelevision = parseInt(document.getElementById('otel').value);
            oaccessories = parseInt(document.getElementById('oaccs').value);
            okitchenapp = parseInt(document.getElementById('okapp').value);

          google.charts.load("current", {packages:["corechart"]});
          google.charts.setOnLoadCallback(drawChart1);
          function drawChart1() {
            var data = google.visualization.arrayToDataTable([
              ['Gadgets', 'Percentage'],
              ['Mobile', mobile],
              ['Laptop', laptop],
              ['Televison',television],
              ['Accessories',accessories],
              ['Kitchen Appliances',kitchenapp]
            ]);

            var options = {
                title : 'Shopping Cart Data',
                'chartArea': {'width': '90%', 'height': '75%'},
               'legend': {'position': 'bottom'},
                backgroundColor: 'transparent',
                is3D: true,
                titleTextStyle: {
                    color: 'steelblue',    // any HTML string color ('red', '#cc00cc')
                    fontName: 'times new roman', // i.e. 'Times New Roman'
                    fontSize: 24, // 12, 18 whatever you want (don't specify px)
                    bold: true,    // true or false
                    italic: false   // true of false
                }
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d1'));
            chart.draw(data, options);
          }

          google.charts.setOnLoadCallback(drawChart2);
          function drawChart2() {
            var data = google.visualization.arrayToDataTable([
              ['Gadgets', 'Percentage'],
              ['Mobile', omobile],
              ['Laptop', olaptop],
              ['Televison',otelevision],
              ['Accessories',oaccessories],
              ['Kitchen Appliances',okitchenapp]
            ]);

            var options = {
                title : 'Product Order Data',
                backgroundColor: 'transparent',
                'chartArea': {'width': '90%', 'height': '75%'},
               'legend': {'position': 'bottom'},
                is3D: true,
                titleTextStyle: {
                    color: 'steelblue',    // any HTML string color ('red', '#cc00cc')
                    fontName: 'times new roman', // i.e. 'Times New Roman'
                    fontSize: 24, // 12, 18 whatever you want (don't specify px)
                    bold: true,    // true or false
                    italic: false   // true of false
                }
            };

            var chart = new google.visualization.PieChart(document.getElementById('piechart_3d2'));
            chart.draw(data, options);
          }

        </script>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>