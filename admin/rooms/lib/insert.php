<?php 	
require_once('./../../connection.php');
<<<<<<< HEAD
require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiweb-master/views/insertRooms.php');
=======
require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/views/insertRooms.php');
>>>>>>> 98723a13d7013c3919d5a6734f01032a15a995ad

if ( !empty($_POST)) {
        // keep track validation errors
        $errors = [];
         
        // keep track post values
        $title = $_POST['title'];
		$price = $_POST['price'];
		$description = $_POST['description'];
         
        // validate input
        $valid = true;
        if (empty($title)) {
        	array_push($errors, 'Please enter the title');
            $valid = false;
        }
         
        if (empty($price)) {
        	array_push($errors, 'Please enter price');
            $valid = false;
        } 
         
        if (empty($description)) {
        	array_push($errors, 'Please enter description');
            $valid = false;
        } 

        if(!$valid){
        	foreach($errors as $err){
    			echo '<p style="color:red">'.$err.'</p>';
    		}
    		echo '<a href="../create.php">Back</a>';
    	}elseif($_FILES['image']['name'] !== ''){
<<<<<<< HEAD
	        $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/projektiweb-master/admin/images/uploads/";
=======
	        $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/projektiWEB-master/admin/images/uploads/";
>>>>>>> 98723a13d7013c3919d5a6734f01032a15a995ad
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["image"]["tmp_name"]);
			    if($check !== false) {
			        echo "File is an image - " . $check["mime"] . ".";
			        echo '<a href="../create.php">Back</a>';
			        $uploadOk = 1;
			    } else {
			        echo "File is not an image.";
			        echo '<a href="../create.php">Back</a>';
			        $uploadOk = 0;
			    }
			}
			// Check file size
			if ($_FILES["image"]["size"] > 5000000) {
			    echo "Sorry, your file is too large.";
			    echo '<a href="../create.php">Back</a>';
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				echo '<a href="../create.php">Back</a>';
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			    echo '<a href="../create.php">Back</a>';
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
			        // insert data
		            $pdo = Database::connect();
		            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		            $sql = "INSERT INTO rooms (title,description,image,price, user_id) values (?, ?, ?,?,?)";
					$q = $pdo->prepare($sql);
					$domain = sprintf( "%s://%s", isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http', $_SERVER['SERVER_NAME']);
					$target_file = str_replace($_SERVER['DOCUMENT_ROOT'], $domain, $target_file);
					session_start();
		            $q->execute(array($title,$description,$target_file,$price, $_SESSION['user_id']));
		            Database::disconnect();
        			header("Location: ../index.php");		            
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			        echo '<a href="../create.php">Back</a>';
			    }
			}
        }else{
            /*$pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "INSERT INTO rooms (title,description,image,price) values (?, ?, ?,?)";
            $q = $pdo->prepare($sql);
            $q->execute(array($title,$description,'',$price));
            Database::disconnect();*/

            $r = new InsertRooms();
            $rooms= $r->insertRoom($title, $description, $price);
			header("Location: ../index.php");		            
        }
    }
