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
        <div class="login-body">
            <div class="login-content">
                <div class="logo_footer white seperator">
                    <span>V</span>
                </div>

               
                <form class="login_box" id="register_form" action="registerForm.php" method="POST"> 
                    <div class="emailContainer">
                        <label>Email</label>
                        <input email="email" id="email">
                    </div>
                    <div class="usernameContainer">
                        <label>Username</label>
                        <input type="text" id="username">
                    </div>
                    <div class="passwordContainer">
                        <label>Password</label>
                        <input type="password" id="password">
                    </div>
                    <div class="confirmPasswordContainer">
                        <label>Confirm Password</label>
                        <input type="password" id="confirmPassword">
                    </div>
                    <div class="register_button">
                        <button class ="register_button">Sign up</button>
                    </div>  
                    <div class="login_notregistered">
                        <p>If registered.  
                            <a href="loginForm.php"><b>Login here</b></a>
                        </p>
                    </div>
                </form>  
            </div>
        </div> 
        <script src="dist/js/jquery-1.12.4.js"></script>
        <script src="dist/js/main.js"></script>
    </body>
</html>