<?php

require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/models/DBConn.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/views/insertUser.php'); 


class AuthController
{
    private $connection;

    public function __construct()
    {
        $this->connection = DBConnection::connect();

    }

    public function login($request)
    {
        
        $query = $this->connection->prepare('SELECT user_id,username,email,password,role FROM users WHERE username = :username');
        $query->bindParam(':username', $request['username']);
        $query->execute();

        $user = $query->fetch();
        if($user&& count($user) > 0 && password_verify($request['password'], $user['password']) ){
            $_SESSION['user_id'] = $user['user_id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['is_admin'] = $user['role'] == 1 ? true : false;

            if ( isset( $_SESSION['is_admin'] ) && $_SESSION['is_admin'] ) {
                header("Location: admin/index.php");
            }
            else if ( isset( $_SESSION['is_admin'] ) && !$_SESSION['is_admin'] ) {
                header("Location: index.php");
            }
        }else{
            return "Username or password is wrong";
        }
    }
    

    public function register($request)
    {
        $username = $request['username'];
        $email = $request['email'];
        $password =password_hash($request['password'], PASSWORD_BCRYPT);
        $role = 2;
        
        $query = $this->connection->prepare('SELECT user_id,username,email,password,role FROM users WHERE username = :username or email = :email');
        $query->bindParam(':username', $request['username']);
        $query->bindParam(':email', $request['email']);
        $query->execute();

        $user = $query->fetch();
        
        if($user){
            return "Username or email already exists!";
        }else{
            $view = new InsertUserForm();
            $view->insertUser($username, $email, $password, $role);
            header("Location: loginForm.php");
        }
    }
}
