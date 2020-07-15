
<?php
require_once ('DbConn.php');

class PagesMapper
{
   
    private $connection;

    public function __construct(){
        
        $this->connection = DBConnection::connect(); 
    }

	public function insert($title,$description,$image,$excerpt){
        
        $sql = "INSERT INTO pages (title,description,image,excerpt,user_id) values (:title,:description,:image,:excerpt, :user_id)";
        
        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":title", $title);
        $statement->bindParam(":description", $description);
        $statement->bindParam(":image", $image);
        $statement->bindParam(":excerpt", $excerpt);

        session_start();
        $statement->bindParam(":user_id", $_SESSION['user_id']);
      
        $statement->execute();
    }


     public function update($title, $description,$excerpt,$id){

        $sql = "UPDATE pages SET title=:title, description =:description , excerpt = :excerpt WHERE id = :id";

        $statement = $this->connection->prepare($sql);
        $statement->bindParam(":title", $title);
        $statement->bindParam(":description", $description);
        $statement->bindParam(":excerpt", $excerpt);
        $statement->bindParam(":id", $id);
       

        $statement->execute();
    }



    public function getPages(){
    
    	$pagesQuery = 'SELECT p.*, u.username FROM pages p LEFT JOIN users u ON p.user_id = u.user_id';
    	$sth = $this->connection->prepare($pagesQuery);
    	$sth->execute();	
    	$pages = $sth->fetchAll();
    	DBConnection::disconnect(); 
    
        	return $pages;
    }

    public function getPage($id){

    
        $pagesQuery = 'SELECT * FROM pages WHERE id = :id';
        $sth = $this->connection->prepare($pagesQuery);
        $sth->bindParam(':id', $id);
        $sth->execute();
        $page = $sth->fetchAll();
        
        if ($page) {
            return $page[0];
        }
    }
    


}

