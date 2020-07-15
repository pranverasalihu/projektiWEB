<?php 
    require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiweb-master/views/showRooms.php');
    require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiweb-master/views/showServices.php');
    require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiweb-master/views/showPages.php');
    require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiweb-master/admin/functions.php');
?>

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
    <body>
        <!-- HEADER -->
        <?php include 'includes/header.php'; ?>

        <main id="main" class="main_content">
            <div class="mainWrap">
                <section class="block_section banner_section" style="background-image: url('dist/images/slider.jpg');">
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
                                <div class="about_image">
                                    <img src="./dist/images/hotel.jpg" alt="">
                                </div>
                            </div>
                            <div class="column-6 column-mob-12">
                                <div class="about_title">
                                    <?php 
                                        $page = new ShowPages();
                                        $about = $page->get_Page(1);
                                    ?>
                                    <h1><?php echo $about['title']; ?></h1>
                                </div>
                                <div class="about_content">
                                    <p><?php echo $about['description']; ?></p>
                                </div>
                            </div>
                        </div> 
                    </div>
                </section>
                <section class="block_section services_section">
                    <div class="container">
                        <div class="services_title">
                            <h1>OUR SERVICES</h1>
                        </div>
                        <?php 
                            $s = new ShowServices();
                            $services = $s->get_Services();

                            foreach ($services as $service):
                        ?>
                        <div class="row has_gutter">
                            <div class="column-3 column-mob-12">
                                <div class="service_title">
                                    <h1><?php echo $service['title']; ?></h1>
                                </div>
                                <div class="service_image">
                                <?php if ($service['image']): ?>
                                    <img src="<?php echo $service['image']; ?>">
                                        <?php else: ?>
                                            <p>No image Selected</p>
                                <?php endif?>
                                </div>
                                <div class="service_content">
                                    <p><?php echo $service['description']; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php endforeach; ?>
                </section>
                <section class="block_section rooms_section">
                    <div class="container">
                        <div class="rooms_title">
                            <h1>FAVORITE ROOMS</h1>
                        </div>
                        <?php 
                            $r = new ShowRooms();
                            $rooms = $r->get_Rooms();
                            foreach ($rooms as $room):
                        ?>
                        <div class="row has_gutter">
                            <div class="column-3 column-mob-12">
                                <div class="service_image">
                                    <?php if ($room['image']): ?>
                                    <img src="<?php echo $room['image']; ?>">
                                        <?php else: ?>
                                            <p>No image Selected</p>
                                <?php endif?>
                                </div>
                                <div class="room_title">
                                    <h1><?php echo $room['title']; ?></h1>
                                    <a href="<?php roomLink($room['title']); ?>">BOOK NOW</a>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                        <div class="rooms_view">
                            <a href="rooms.php">VIEW ALL ROOMS</a>
                        </div>
                    </div>
                </section>   
            </div>
        </main>
        
        <!-- FOOTER -->
        <?php include 'includes/footer.php'; ?>

        <!-- SCRIPTS -->
        <script src="dist/js/jquery-1.12.4.js"></script>
        <script src="dist/js/main.js"></script>
    </body>
</html>