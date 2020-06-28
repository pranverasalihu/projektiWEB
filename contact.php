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
        <!-- BEGIN HEADER -->
        <?php include 'includes/header.php'; ?>

        <main id="main" class="main_content">
            <div class="mainWrap">
                <section class="block_section contact_section">
                    <div id="map" style="width:100%; height: 400px;"></div>
                    <script>
                      var map;
                      function initMap() {
                        map = new google.maps.Map(document.getElementById('map'), {
                          center: {lat: -34.397, lng: 150.644},
                          zoom: 8
                        });
                      }
                    </script>
                    <script src="https://maps.googleapis.com/maps/api/js?callback=initMap"async defer>
                    </script>
                </section>
                <section class="block_section content_section">
                    <div class="container">
                            <div class="border_title seperator white">
                                <span>V</span>
                            </div>
                            <p class="contact_content">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia deserunt mollitia animi, id est laborum et dolorum fuga. Et harum quidem rerum facilis est et expedita distinctio. Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus. Temporibus autem quibusdam et aut officiis debitis aut rerum necessitatibus saepe eveniet ut et voluptates repudiandae sint molestiae non recusandae. Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis voluptatibus maiores alias consequatur aut perferendis doloribus asperiores repellat.</p>
                            <hr class="contact_line"></hr>
                    </div>
                </section>
                <section class="block_section contact_section">
                    <div class="container">
                        <form class="contact_form has_gutter" id="contact_form" action="contact.html" method="POST">
                            <div class="row">
                                <div class="column-6 nameContainer">
                                    <label class="">Name</label>
                                    <input type="text" id="name">
                                </div>
                                <div class="column-6 emailContainer">
                                    <label>Email</label>
                                    <input type="email" id="email">
                                </div>
                            </div>
                            <div class="row">
                                <div class="column-12 subjectContainer">
                                    <label>Subject</label>
                                    <input type="text" id="subject">
                                </div>
                            </div>
                            <div class="row">
                                <div class="column-12 messageContainer">
                                    <label>Message</label>
                                    <textarea rows="3" id="message"></textarea>
                                </div>
                            </div>
                            <div class="row">
                                <div class="column-12">
                                    <button class="contact_button">Send</button>  
                                </div> 
                            </div>
                        </form>
                    </div>
                </section>
            </div>
        </main>
        <!-- footer -->
        <?php include 'includes/footer.php'; ?>
        
        <!-- SCRIPTS -->
        <script src="dist/js/jquery-1.12.4.js"></script>
        <script src="dist/js/main.js"></script>
    </body>
</html>