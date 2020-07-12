 <?php
 require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/views/login.php');
    session_start();

    if(isset($_SESSION['user_id'])){
        header("Location: index.php");
    }

     $user = new Login();

     if ( !empty($_POST)) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        if(isset($_POST['login_button'])) {

            $user->login($username,$password);
            
            
        }

    }
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
        <div class="login-body">
           <div class="login-content">
                <div class="logo_footer white seperator">
                    <span>V</span>
                </div>
                <form class="login_box" id="login_form" action="loginForm.php" method="POST"> 
                   
                    <div class="usernameContainer">
                        <label>Username</label>
                        <input type="text" name="username" id="username">
                    </div>
                    <div class="passwordContainer">
                        <label>Password</label>
                        <input type="password" name="password" id ="password">
                    </div>
                       
                    <div class="login_button">
                        <button type=login_button" name="login_button">Login</button>
                    </div>
                </form>
                <div class="login_notregistered">
                    <p>Not registered?  
                        <a href="registerForm.php"><u>Create an account</u></a>
                    </p>
                </div>
            </div>
        </div>
        <script src="dist/js/jquery-1.12.4.js"></script>
        <script src="dist/js/main.js"></script>
    </body>
</html>
    


   
   