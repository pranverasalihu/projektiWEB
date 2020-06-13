<?php 	
require_once('connection.php'); 


 if ( !empty($_POST)) {
        // keep track validation errors
        $errors = [];
         
        // keep track post values
        $name = $_POST['name'];
         
        // validate input
        $valid = true;
        if (empty($name)) {
        	array_push($errors, 'Please enter Name');
            $valid = false;
        }
         
        if(!$valid){
        	foreach($errors as $err){
    			echo '<p style="color:red">'.$err.'</p>';
    		}
    		echo '<a href="addCategory.php">Back</a>';
    	}else{
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO categories (name) values (?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($name));
            Database::disconnect();
            header("Location: indexCategory.php");
        }
    }
