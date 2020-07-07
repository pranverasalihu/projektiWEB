<?php
 require_once ($_SERVER['DOCUMENT_ROOT'].'/models/userMapper.php');
 require_once ($_SERVER['DOCUMENT_ROOT'].'/models/user.php');
 require_once ($_SERVER['DOCUMENT_ROOT'].'/models/DBConn.php');

class Controller
{
    public function userInsert($username, $email, $password,$role)
    {
       
        $user = new User($username, $email, $password,$role);
        $userMapper = new UserMapper($user);
        $userMapper->insert($username, $email, $password,$role);
        return true;
       


    }

    public function getUser($username, $email, $password,$role )
    {
        $user = new User($username, $email, $password,$role);
        $userMapper = new UserMapper($user);
        $userMapper->insert($username, $email, $password,$role);
        return true;
    }
    	
}
