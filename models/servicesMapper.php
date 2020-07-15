<?php
require_once ('DbConn.php');


class ServiceMapper
{
   
    private $connection;
    public function __construct( )
    {
        
        $this->connection = DBConnection::connect();
        
    }

    public function insert($title, $description){

        $sql = "INSERT INTO services (title,description,user_id) VALUES (:title,:description,:user_id)";

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":title", $title);
        $statement->bindParam(":description", $description);
        //$statement->bindParam(":image", $image);
        
        session_start();
        $statement->bindParam(":user_id", $_SESSION['user_id']);

        $statement->execute();
    }

    public function update($title, $description, $id){

        $sql = "UPDATE services SET title=:title, description =:description WHERE id = :id";

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":title", $title);
        $statement->bindParam(":description", $description);
        $statement->bindParam(":id", $id);
       

        $statement->execute();
    }


    public function getServices(){

    
        $servicesQuery = 'SELECT s.*, u.username FROM services s LEFT JOIN users u ON s.user_id = u.user_id';
        $sth = $this->connection->prepare($servicesQuery);
        $sth->execute();
        $services = $sth->fetchAll();
        DBConnection::disconnect(); 
    
            return $services;
    }


    public function getService($id){

    
        $servicesQuery = 'SELECT * FROM services WHERE id = :id';
        $sth = $this->connection->prepare($servicesQuery);
        $sth->bindParam(':id', $id);
        $sth->execute();
        $service = $sth->fetchAll();
        
        if ($service) {
            return $service[0];
        }
    }

    


}
