<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
        <title>Vanoa</title>
        <link rel = "icon" type = "image/ico" href = "./dist/images/vanoa-icon.ico">
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
                <section class="block_section banner_section" style="background-image: url('dist/images/about.jpg');">
                    <div class="banner_content">
                        <div class="banner_logo">
                            <span>V</span>
                        </div>
                        <div class="banner_heading">
                            <h1>VANOA</h1>
                        </div>
                    </div>
                </section>
                <section class="block_section about_section">
                    <div class="container">
                        <div class="border_title seperator white">
                            <span>V</span>
                        </div>
                        <div class="row has_gutter">
                            <div class="column-6 column-mob-12">
                                <div class="aboutUs_image">
                                    <img src="./dist/images/aboutUs_hotel.jpg" alt="">
                                </div>
                            </div>
                            <div class="column-6 column-mob-12">
                                <div class="about_title">
                                    <h1>About Us</h1>
                                </div>
                                <div class="about_content">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                        incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
                                        exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute 
                                        irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla
                                        pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia
                                        deserunt mollit anim id est laborum.Lorem ipsum dolor sit amet, consectetur 
                                        adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip 
                                        ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit 
                                        esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non 
                                        proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                                </div>
                            </div>
                        </div> 
                    </div>
                </section>
            </div>
            </main>
            <!--footer-->
              <?php include 'includes/footer.php'; ?>

        <!-- SCRIPTS -->
        <script src="dist/js/jquery-1.12.4.js"></script>
        <script src="dist/js/main.js"></script>
    </body>
</html>

