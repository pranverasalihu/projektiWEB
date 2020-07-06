<?php
 require ('DbConn.php') 
require ('user.php') 

class UserMapper
{
    private $user;
    private $connection;
    public function __construct( $user)
    {
        $obj = new DBConnection();
        $this->connection = $obj->connect();
        $this->user = $user;
    }

    public function insert($username, $email, $password,$role)
    {

        $sql = "INSERT INTO users (username, email, password,role) VALUES (?,?,?,?)";

        $statement = $this->connection->prepare($sql);
        $statement->execute(array($username,$email,$password,$role));
        $statement->bindParam(":username", $username);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":password", $password);
        $statement->bindParam(":role", $role);

        $statement->execute();
    }

  
    


}
