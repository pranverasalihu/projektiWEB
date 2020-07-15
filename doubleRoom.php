<?php 
    require_once ($_SERVER['DOCUMENT_ROOT'].'/2020/vanoa/views/showRooms.php');
    require_once ($_SERVER['DOCUMENT_ROOT'].'/2020/vanoa/admin/functions.php');
    
    $rooms = new ShowRooms(); 
    $room = $rooms->get_Room(9);
    $allRooms = $rooms->get_Rooms();
?>

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

        <!-- BEGIN HEADER -->
        <?php include 'includes/header.php'; ?>

        <main id="main" class="main_content">
            <div class="mainWrap">
                <section class="block_section banner_section" style="background-image: url('dist/images/doubleRoom.jpg');">
                    <div class="banner_content">
                        <div class="banner_logo">
                            <span>V</span>
                        </div>
                        <div class="banner_heading">
                            <h1>VANOA</h1>
                        </div>
                    </div>
                </section>  
                    <section class="block_section rooms_section">
                        <div class="container">
                            <div class="border_title seperator white">
                                <span>V</span>
                            </div>
                            <div class="rooms_sidebar">
                                <li class="top_rooms rooms_price column-mob-12">
                                    <h2>Best Rooms</h2>
                                    <?php foreach ($allRooms as $oneRoom): ?>
                                    <ul class="rooms_products">
                                        <li class="rooms_display">
                                            <?php if ($oneRoom['image']): ?>
                                                <img width="60" height="60" src="<?php echo $oneRoom['image']; ?>"  >
                                                    <?php else: ?>
                                                        <p>No image Selected</p>
                                            <?php endif?>
                                            <a href="<?php roomLink($oneRoom['title']); ?>"><?php echo $oneRoom['title']  ?></a>
                                            <span> <?php echo $oneRoom['price']  ?></span>
                                        </li>
                                    </ul>
                                <?php endforeach; ?>
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
                                            <?php if ($room['image']): ?>
                                                <img src="<?php echo $room['image']; ?>" >
                                                    <?php else: ?>
                                                        <p>No image Selected</p>
                                            <?php endif?>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                            <div class="row has_gutter">
                                <div class="column-7 column-mob-12">
                                    <div class="rooms_title">
                                        <a href="doubleRoom.php"><?php echo $room['title'] ?></a>
                                        <div class="rooms_price">
                                            <span><?php echo $room['price'] ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="column-7 column-mob-12">               
                                    <div class="rooms_content">
                                        <p><?php echo $room['description'] ?></p>
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