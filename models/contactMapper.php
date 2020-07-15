<?php
require_once ('DbConn.php');


class ContactMapper
{
   
    private $connection;

    public function __construct(){
        
        $this->connection = DBConnection::connect(); 
    }

    public function insert($name, $email, $subject,$message)
    {

        $sql = "INSERT INTO contact (name, email, subject,message) VALUES (:name,:email,:subject,:message)";

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":name", $name);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":subject", $subject);
        $statement->bindParam(":message", $message);

        $statement->execute();
    }

    public function update($contactID, $name, $email, $subject,$message){
        $sql = "UPDATE contact SET name=:name , email=:email , subject=:subject , message=:message  WHERE contact_id = :contact_id";

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":name", $name);
        $statement->bindParam(":email", $email);
        $statement->bindParam(":subject", $subject);
        $statement->bindParam(":message", $message);
        $statement->bindParam(":contact_id", $contactID);

        $statement->execute();
    }

    public function getContacts(){

        $contactQuery = 'SELECT * FROM contact';
        $sth = $this->connection->prepare($contactQuery);
        $sth->execute();
        $contact = $sth->fetchAll();
        DBConnection::disconnect(); 
    
        return $contact;
    }

    public function getContact($id){

        $contactQuery = 'SELECT * FROM users WHERE contact_id = :id';
        $sth = $this->connection->prepare($contactQuery);
        $sth->bindParam(':id', $id);
        $sth->execute();
        $user = $sth->fetchAll();
        
        if ($contact) {
            return $contact[0];
        }
    }

}
