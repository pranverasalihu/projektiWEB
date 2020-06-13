<?php 	
require_once('connection.php'); 


 if ( !empty($_POST)) {
        // keep track validation errors
        $errors = [];
         
        // keep track post values
        $title = $_POST['title'];
		$description = $_POST['description'];
		$category_id = $_POST['category_id'];
         
        // validate input
        $valid = true;
        if (empty($title)) {
        	array_push($errors, 'Please enter the title');
            $valid = false;
        }
         
        if (empty($description)) {
        	array_push($errors, 'Please enter Description');
            $valid = false;
        } 
        if(!$valid){
        	foreach($errors as $err){
    			echo '<p style="color:red">'.$err.'</p>';
    		}
    		echo '<a href="addArticle.php">Back</a>';
    	}elseif($_FILES['image']['name'] !== ''){
	        $target_dir = "images/uploads/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["image"]["tmp_name"]);
			    if($check !== false) {
			        echo "File is an image - " . $check["mime"] . ".";
			        echo '<a href="addArticle.php">Back</a>';
			        $uploadOk = 1;
			    } else {
			        echo "File is not an image.";
			        echo '<a href="addArticle.php">Back</a>';
			        $uploadOk = 0;
			    }
			}
			// Check if file already exists
			// if (file_exists($target_file)) {
			//     echo "Sorry, file already exists.";
			//     echo '<a href="addArticle.php">Back</a>';
			//     $uploadOk = 0;
			// }
			// Check file size
			if ($_FILES["image"]["size"] > 500000) {
			    echo "Sorry, your file is too large.";
			    echo '<a href="addArticle.php">Back</a>';
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				echo '<a href="addArticle.php">Back</a>';
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			    echo '<a href="addArticle.php">Back</a>';
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
			        // insert data
		            $pdo = Database::connect();
		            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		            $sql = "INSERT INTO articles (title,description,image_path,category_id) values (?, ?, ?,?)";
		            $q = $pdo->prepare($sql);
		            $q->execute(array($title,$description,$target_file,$category_id));
		            Database::disconnect();
		            header("Location: indexArticle.php");
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			        echo '<a href="addArticle.php">Back</a>';
			    }
			}
        }else{
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO articles (title,description,image_path,category_id) values (?, ?, ?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($title,$description,'',$category_id));
            Database::disconnect();
            header("Location: indexArticle.php");
        }
    }
