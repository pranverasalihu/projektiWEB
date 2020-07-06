<?php
 require ('/models/userMapper.php')
 require ('/models/user.php') 
 require('models/DBConn.php')

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

    	$user = new User($username, $email, $password,$role);
        $userMapper = new UserMapper($user);
        $userMapper->insert($username, $email, $password,$role);
        return true;
}
