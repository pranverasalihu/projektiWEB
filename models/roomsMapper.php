<?php
require_once ('DbConn.php');


class RoomsMapper
{
   
    private $connection;

    public function __construct(){
        
        $this->connection = DBConnection::connect(); 
    }


    public function insert($title, $description,$price){

        $sql = "INSERT INTO rooms (title,description,price, user_id) VALUES (:title,:description, :price, :user_id)";

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":title", $title);
        $statement->bindParam(":description", $description);
        //$statement->bindParam(":image", $image);
        $statement->bindParam(":price", $price);

        session_start();
        $statement->bindParam(":user_id", $_SESSION['user_id']);

        $statement->execute();
    }


    public function update($title,$description,$price,$id){

        $sql = "UPDATE rooms SET title=:title, description =:description, price = :price WHERE id = :id";

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":title", $title);
        $statement->bindParam(":description", $description);
        $statement->bindParam(":price", $price);
        $statement->bindParam(":id", $id);
       

        $statement->execute();
    }


    public function getRooms(){

        $roomsQuery = 'SELECT r.*, u.username FROM rooms r LEFT JOIN users u ON r.user_id = u.user_id';
        $sth = $this->connection->prepare($roomsQuery);
        $sth->execute();
        $rooms = $sth->fetchAll();
        DBConnection::disconnect(); 
    
            return $rooms;
    }
  
    public function getRoom($id){

        $roomQuery = 'SELECT * FROM rooms WHERE id = :id';
        $sth = $this->connection->prepare($roomQuery);
        $sth->bindParam(':id', $id);
        $sth->execute();
        $room = $sth->fetchAll();
        if ($room) {
            return $room[0];
        }
    }
    


}
