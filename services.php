<?php require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/views/showServices.php');
    $service = new ShowServices();
    $services = $service->get_Services();

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
            <section class="block_section banner_section" style="background-image: url('dist/images/services_banner.jpg');">
                <div class="banner_content">
                    <div class="banner_logo">
                        <span>V</span>
                    </div>
                    <div class="banner_heading">
                        <h1>VANOA</h1>
                    </div>
                </div>
            </section>
            <section class="block_section left_section">
                <div class="row">
                    <div class="column-6 column-mob-12">
                        <div class="left_image">
                            <?php if ($services[0] ['image']): ?>
                                <img src="<?php echo $services[0] ['image']; ?>" >
                            <?php else: ?>
                                    <p>No image Selected</p>
                            <?php endif?>   
                        </div>
                    </div>
                    <div class="column-6 column-mob-12">
                        <div class="left_content">
                            <div class="left_title">
                                <h1><?php echo $services[0] ['title']; ?></h1>
                            </div>
                            <div class="left_paragraph">
                                <p><?php echo $services[0] ['description']; ?></p>
                            </div>
                        </div>
                    </div>
              
                </div>
            </section>
     
         <section class="block_section right_section">
            <div class="row" >
                <div class="column-6 column-mob-12">
                    <div class="right_content">
                        <div class="right_title">
                            <h1><?php echo $services[1] ['title']; ?></h1>
                        </div>
                        <div class="right_paragraph">
                           <p><?php echo $services[1] ['description']; ?></p>
                        </div>
                    </div>
                </div>
                <div class="column-6 column-mob-12">
                    <div class="right_image">
                        <?php if ($services[1] ['image']): ?>
                                <img src="<?php echo $services[1] ['image']; ?>" >
                            <?php else: ?>
                                    <p>No image Selected</p>
                            <?php endif?>   
                    </div>
                </div>
            </div>
        </section>
        <section class="block_section left_section">
            <div class="row">
                <div class="column-6 column-mob-12">
                    <div class="left_image">
                         <?php if ($services[2] ['image']): ?>
                                <img src="<?php echo $services[2] ['image']; ?>" >
                            <?php else: ?>
                                    <p>No image Selected</p>
                            <?php endif?> 
                    </div>
                </div>
                <div class="column-6 column-mob-12">
                    <div class="left_content">
                        <div class="left_title">
                            <h1><?php echo $services[2] ['title']; ?></h1>
                        </div>
                        <div class="left_paragraph">
                            <p><?php echo $services[2] ['description']; ?></p>
                        </div>
                    </div>
                </div>
            </section>
            <section class="block_section right_section">
                <div class="row">
                    <div class="column-6 column-mob-12">
                        <div class="right_content">
                            <div class="right_title">
                                <h1><?php echo $services[3] ['title']; ?></h1>
                            </div>
                            <div class="right_paragraph">
                                <p><?php echo $services[3] ['description']; ?></p>
                            </div>
                        </div>
                    </div>
                    <div class="column-6 column-mob-12">
                        <div class="right_image">
                            <?php if ($services[3] ['image']): ?>
                                <img src="<?php echo $services[3] ['image']; ?>" >
                            <?php else: ?>
                                    <p>No image Selected</p>
                            <?php endif?> 
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <!-- FOOTER -->
        <?php include 'includes/footer.php'; ?>
        
        <!-- SCRIPTS -->
        <script src="dist/js/jquery-1.12.4.js"></script>
        <script src="dist/js/main.js"></script>
    </body>
</html>