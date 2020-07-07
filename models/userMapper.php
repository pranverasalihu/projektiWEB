<?php
require_once ('DbConn.php');
require_once ('user.php');

class UserMapper
{
    private $user;
    private $connection;
    public function __construct( $user)
    {
        //$obj = new DBConnection();
        $this->connection = DBConnection::connect();
        $this->user = $user;
    }

    public function insert($username, $email, $password,$role)
    {

        $sql = "INSERT INTO users (username, email, password,role) VALUES (:username,:email,:password,:role)";

        $statement = $this->connection->prepare($sql);
        //$statement->execute(array($username,$email,$password,$role));
        $statement->bindParam(":username", $username);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":password", $password);
        $statement->bindParam(":role", $role);

        $statement->execute();
    }

  
    


}
