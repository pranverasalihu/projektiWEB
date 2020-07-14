<?php
require_once ('DbConn.php');


class ServiceMapper
{
   
    private $connection;
    public function __construct( )
    {
        
        $this->connection = DBConnection::connect();
        
    }

    public function insert($title, $description, $image){

        $sql = "INSERT INTO services (title,description,image) VALUES (:title,:description,:image)";

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":title", $title);
        $statement->bindParam(":description", $description);
        $statement->bindParam(":image", $image);
      

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

    
        $servicesQuery = 'SELECT * FROM services';
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
