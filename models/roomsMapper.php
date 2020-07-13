<?php
require_once ('DbConn.php');


class RoomsMapper
{
   
    private $connection;
    public function __construct()
    {
        
        $this->connection = DBConnection::connect();
        
    }

    public function getRooms()
    {

    
    $roomsQuery = 'SELECT * FROM rooms';
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
