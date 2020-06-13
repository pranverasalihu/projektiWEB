<?php 	
require_once('connection.php'); 


 if ( !empty($_POST)) {
        // keep track validation errors
        $errors = [];
         
        // keep track post values
        $name = $_POST['name'];
        $id = $_POST['id'];
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
    		echo '<a href="editCategory.php?id='.$id.'">Back</a>';
        }else{
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE `categories` SET `name`=? WHERE `id` = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($name,$id));
            Database::disconnect();
            header("Location: indexCategory.php");
        }
    }
