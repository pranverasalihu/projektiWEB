<?php

require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/controller/controller.php');

    

class InsertUserForm
{
    public function insertUser($username, $email, $password, $role)
    {

        $controller = new Controller();
        $response = $controller->userInsert($username, $email, $password,$role);


    }

    public function editUser($username, $email, $password, $role){
        $controller = new Controller();
        $response = $controller->userEdit($username, $email, $password,$role);
    }
}
?>
