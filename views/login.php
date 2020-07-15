<?php

 require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiweb-master/models/DBConn.php');

class Login
{
    private $connection;

    public function __construct()
    {
        $this->connection = DBConnection::connect();
    }

    public function login($username,$password)
    {

        $query = $this->connection->prepare('SELECT * FROM users WHERE username = :username');
        $query->bindParam(':username', $username);
        $query->execute();

        $user = $query->fetch();
        
        if(count($user) > 0 && password_verify($password, $user['password'])){
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            //header("Location: index.php");
            return true;
        }
    }
}
