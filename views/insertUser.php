<?php

require_once ($_SERVER['DOCUMENT_ROOT'].'/2020/vanoa/controller/controller.php');

    

class InsertUserForm
{
    public function insertUser($username, $email, $password, $role)
    {
        $controller = new Controller();
        $response = $controller->userInsert($username, $email, $password,$role);
    }

    public function editUser($userId,$username, $email, $password, $role){
        $controller = new Controller();
        $response = $controller->userEdit($userId,$username, $email, $password,$role);
    }
}
?>
