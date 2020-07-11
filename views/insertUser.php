<?php

require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/controller/controller.php');

    session_start();

if ( !empty($_POST)) {

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password =password_hash($_POST['password'], PASSWORD_BCRYPT) ;
    $role = 2;

    $view = new InsertUserForm();
    $view->insertUser($username, $email, $password, $role);
    header('Location: index.php');
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


    }
}
?>
