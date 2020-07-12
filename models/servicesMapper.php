<?php
require_once ('DbConn.php');


class ServicesMapper
{
   
    private $connection;
    public function __construct( )
    {
        
        $this->connection = DBConnection::connect();
        
    }

    public function getServices()
    {

    
    $servicesQuery = 'SELECT * FROM services';
    $sth = $this->connection->prepare($servicesQuery);
    $sth->execute();
    $services = $sth->fetchAll();
    DBConnection::disconnect(); 
    
        return $services;
    }

    


}
