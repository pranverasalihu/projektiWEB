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
                    <div id="map" style="width:100%; height: 400px; display:none;"></div>

                    <iframe style="width:100%; height: 600px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9703.63681699247!2d21.15272827883984!3d42.661079446194044!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x13549ee1325c4fbb%3A0x5219d01d01e788dc!2sQendra%2C%20Pristina!5e1!3m2!1sen!2s!4v1594743120327!5m2!1sen!2s" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                    <script>
                      var map;
                      function initMap() {
                          return;
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