<?php require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiweb-master/views/showRooms.php');
      require ($_SERVER['DOCUMENT_ROOT'].'/projektiweb-master/admin/functions.php');
   
    $rooms = new ShowRooms();
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
    <body>
        <!-- HEADER -->
        <?php include 'includes/header.php'; ?>

        <main id="main" class="main_content">
            <div class="mainWrap">
                <section class="block_section banner_section" style="background-image: url('dist/images/rooms_banner.jpg');">
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
                            <div class="rooms_sidebar" >
                                <li class="top_rooms rooms_price column-mob-12">
                                    <h2>Best Rooms</h2>
                                    <?php foreach ($allRooms as $room): ?>
                                    <ul class="rooms_products">
                                        <li class="rooms_display">
                                             <?php if ($room['image']): ?>
                                                <img width="60" height="60" src="<?php echo $room['image']; ?>"  >
                                                    <?php else: ?>
                                                        <p>No image Selected</p>
                                            <?php endif?>
                                            <a href="<?php roomLink($room['title']); ?>"><?php echo $room['title'] ?></a>
                                            <span> <?php echo $room['price'] ?></span>
                                        </li>
                                    </ul>
                                <?php endforeach; ?>
                            <div class="rooms_reservation">
                                    <p>Reservations</p>
                                    <span>044-100-100</span>
                            </div>
                            </li>
                            
                            </div>
                           
                            <?php foreach ($allRooms as $room): ?>
                            <div class="rooms"> 
                                <div class="row has_gutter">
                                    <div class="column-4 column-mob-12" >
                                        <div class="rooms_img">
                                            <?php if ($room['image']): ?>
                                                <img src="<?php echo $room['image']; ?>" >
                                                    <?php else: ?>
                                                        <p>No image Selected</p>
                                            <?php endif?>
                                        </div>
                                    </div>
                                    <div class="column-8 column-mob-12" >
                                        <div class="rooms_title">
                                            <a href="<?php roomLink($room['title']);?>"><?php echo $room['title'] ?></a>
                                            <div class="rooms_price">
                                                <span><?php echo $room['price'] ?></span>
                                            </div>
                                        </div>
                                        <div class="rooms_content">
                                            <p><?php echo $room['description'] ?> </p>
                                                <div class="room_title ">
                                                    <a href="<?php roomLink($room['title']);?>">Book now</a>
                                                </div>
                                        </div>
                                    </div>
                                </div> 
                            </div>
                        <?php endforeach; ?>
                       
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