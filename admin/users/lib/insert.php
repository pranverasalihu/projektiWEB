<?php 	
require_once('./../../connection.php');
require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/views/insertUser.php');

if ( !empty($_POST)) {
        // keep track validation errors
        $errors = [];
         
        // keep track post values
        $username = $_POST['username'];
		$email = $_POST['email'];
		$password = password_hash($_POST['password'], PASSWORD_BCRYPT);
        $role = $_POST['role'];
         
        // validate input
        $valid = true;
        if (empty($username)) {
        	array_push($errors, 'Please enter username');
            $valid = false;
        }
         
        if (empty($email)) {
        	array_push($errors, 'Please enter email');
            $valid = false;
        } 
         
        if (empty($password)) {
        	array_push($errors, 'Please enter password');
            $valid = false;
        } 
        if (empty($role)) {
            array_push($errors, 'Please enter role');
            $valid = false;
         
        } 

        if(!$valid){
        	foreach($errors as $err){
    			echo '<p style="color:red">'.$err.'</p>';
    		}
    		echo '<a href="../create.php">Back</a>';
    	}else{
            /*$pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO users (username,email,password,role) values (?, ?,?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($username,$email,$password,$role));
            Database::disconnect();
            */
            $u = new InsertUserForm();
            $user = $u->insertUser($username,$email,$password,$role);

			header("Location: ../index.php");		            
        }
    }
