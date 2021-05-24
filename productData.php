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

                <h1>Product Data</h1>
                
                <div class="dash-cards" style="margin-top: 40px; height: 170px;">
                    <div class="card-single">
                        <div class="card-body">
                            <span class="ti-briefcase"></span>
                            <div>
                                <h5>MOBILE</h5>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="mobileData.php">View all</a>
                        </div>
                    </div>
                    
                    <div class="card-single">
                        <div class="card-body">
                            <span class="ti-briefcase"></span>
                            <div>
                                <h5>LAPTOP</h5>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="laptopData.php">View all</a>
                        </div>
                    </div>

                    <div class="card-single">
                        <div class="card-body">
                            <span class="ti-briefcase"></span>
                            <div>
                                <h5>TELEVISION</h5>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="televisionData.php">View all</a>
                        </div>
                    </div>
                </div>

                <div class="dash-cards" style="margin-top: 170px; height: 170px;">
                    <div class="card-single">
                        <div class="card-body">
                            <span class="ti-briefcase"></span>
                            <div>
                                <h5>ACCESSORIES</h5>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="accessoriesData.php">View all</a>
                        </div>
                    </div>
                   
                    <div class="card-single">
                        <div class="card-body">
                            <span class="ti-briefcase"></span>
                            <div>
                                <h5>KITCHEN APPLIANCES</h5>
                            </div>
                        </div>
                        <div class="card-footer">
                            <a href="kitchenData.php">View all</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--===== MAIN JS =====-->
        <script src="assets/js/main.js"></script>
    </body>
</html>