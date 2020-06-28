<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title>Vanoa</title>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@500;700&family=Roboto:ital,wght@0,300;0,400;0,500;0,700;1,400&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="dist/css/reset.css">
        <link rel="stylesheet" href="dist/css/style.css">
        <link rel="stylesheet" href="dist/css/responsive.css">
    </head>
    <body class="aboutUs">
        <!-- HEADER -->
        <?php include 'includes/header.php'; ?>

        <main id="main" class="main_content">
            <div class="mainWrap">
                <section class="block_section banner_section" style="background-image: url('dist/images/singleRoom.jpg');">
                    <div class="banner_content">
                        <div class="banner_logo">
                            <span>V</span>
                        </div>
                        <div class="banner_heading">
                            <h1>VANOA</h1>
                        </div>
                    </div>
                </section>
                <div>   
                     <section class="block_section rooms_section">
                        <div class="container">
                            <div class="border_title seperator white">
                                <span>V</span>
                            </div>
                            <div class="rooms_sidebar">
                                <li class="top_rooms rooms_price column-mob-12">
                                    <h2>Best Rooms</h2>
                                    <ul class="rooms_products">
                                        <li class="rooms_display">
                                            <img width="60" height="60" src="./dist/images/singleRoom.jpg">
                                            <a href="singleRoom.php">Single Room</a>
                                            <span> 49.00$</span>
                                        </li>
                                        <li>
                                            <img width="60" height="60" src="./dist/images/doubleRoom.jpg">
                                            <a href="doubleRoom.php">Double Room</a>
                                            <span>89.00$</span>
                                        </li>
                                        <li>
                                            <img width="60" height="60" src="./dist/images/premiumSuit.jpg">
                                            <a href="premiumSuit.php">Premium Suit</a>
                                            <span>129.00$</span>
                                        </li>
                                        <li>
                                        <img width="60" height="60" src="./dist/images/masterSuit.jpg">
                                        <a href="masterSuit.php">Master Suit</a>
                                        <span>229.00$</span>
                                        </li>
                                    </ul>
                                <div class="rooms_reservation">
                                    <p>Reservations</p>
                                    <span>044-100-100</span>
                                </div>
                            </li>
                            </div>
                            <div class="rooms"> 
                                <div class="row has_gutter">
                                    <div class="column-12 column-mob-12">
                                        <div class="rooms_img">
                                            <img src="./dist/images/singleRoom.jpg" alt="">
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="row has_gutter">
                                <div class="column-7 column-mob-12">
                                    <div class="rooms_title">
                                        <a href="singleRoom.php">Single Room</a>
                                        <div class="rooms_price">
                                            <span>49.00$</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="column-7 column-mob-12">               
                                    <div class="rooms_content">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                            sed do eiusmod tempor incididunt ut labore et dolore magna
                                            aliqua. Ut enim ad minim veniam, quis nostrud exercitation
                                            ullamco laboris nisi ut aliquip ex ea commodo consequat. 
                                            Duis aute irure dolor in reprehenderit in voluptate velit 
                                            esse cillum dolore eu fugiat nulla pariatur. Excepteur sint
                                            occaecat cupidatat non proident, sunt in culpa qui officia 
                                            deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </main>
        <!--footer-->
        <?php include 'includes/footer.php'; ?>

        <!-- SCRIPTS -->
        <script src="dist/js/jquery-1.12.4.js"></script>
        <script src="dist/js/main.js"></script>
    </body>
</html>