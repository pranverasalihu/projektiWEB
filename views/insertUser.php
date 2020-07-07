<?php

require_once ($_SERVER['DOCUMENT_ROOT'].'/controller/controller.php');

if ( !empty($_POST)) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password =password_hash($_POST['password'], PASSWORD_BCRYPT) ;
    $role = 2;

    $view = new InsertUserForm();
    $view->insertUser($username, $email, $password, $role);

    // $user = new User('albina123', 'albina@123.com', 'a123');

    // $mapper = new UserMapper($user);
    // $mapper->insert($username, $email, $password,$role);   
    
    //$controller = new Controller();
    //$response = $controller->userInsert($username, $email, $password,$role);
   }

class InsertUserForm
{
    public function insertUser($username, $email, $password, $role)
    {

        $controller = new Controller();
        $response = $controller->userInsert($username, $email, $password,$role);

        if ($response) {
?>
            <h1>U regjistrua me sukses</h1>
        <?php

        } else {
        ?>
            <h1>Nuk u regjistrua me sukses</h1>
<?php
        }
    }
}
?>
