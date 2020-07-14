<?php
require_once ('DbConn.php');
require_once ('user.php');

class UserMapper
{
    
    private $connection;
    public function __construct( )
    {
        
        $this->connection = DBConnection::connect();
        
    }

    public function insert($username, $email, $password,$role)
    {

        $sql = "INSERT INTO users (username, email, password,role) VALUES (:username,:email,:password,:role)";

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":username", $username);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":password", $password);
        $statement->bindParam(":role", $role);

        $statement->execute();
    }

    public function update($userId, $username, $email, $password,$role){
        $sql = "UPDATE users SET username=:username , email=:email , password=:password , role=:role  WHERE user_id = :user_id";

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":username", $username);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":password", $password);
        $statement->bindParam(":role", $role);
        $statement->bindParam(":user_id", $userId);

        $statement->execute();
    }

    public function getUsers(){

        $usersQuery = 'SELECT * FROM users';
        $sth = $this->connection->prepare($usersQuery);
        $sth->execute();
        $users = $sth->fetchAll();
        DBConnection::disconnect(); 
    
        return $users;
    }

    public function getUser($id){

        $usersQuery = 'SELECT * FROM users WHERE user_id = :id';
        $sth = $this->connection->prepare($usersQuery);
        $sth->bindParam(':id', $id);
        $sth->execute();
        $user = $sth->fetchAll();
        
        if ($user) {
            return $user[0];
        }
    }

}
