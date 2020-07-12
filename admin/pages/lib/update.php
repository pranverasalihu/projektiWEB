<?php 	
// require_once __DIR__ . './connection.php';
require_once('./../../connection.php');

if ( !empty($_POST)) {
        // keep track validation errors
        $errors = [];
         
        // keep track post values
		$id = $_POST['id'];
        $title = $_POST['title'];
		$excerpt = $_POST['excerpt'];
		$description = $_POST['description'];
         
        // validate input
        $valid = true;
        if (empty($title)) {
        	array_push($errors, 'Please enter the title');
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
    		echo '<a href="../edit.php?id='.$id.'">Back</a>';
        }
        elseif($_FILES['image']['name'] !== ''){
	        $target_dir = $_SERVER['DOCUMENT_ROOT'] . "/2020/vanoa/admin/images/uploads/";
			$target_file = $target_dir . basename($_FILES["image"]["name"]);
			$uploadOk = 1;
			$imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
			// Check if image file is a actual image or fake image
			if(isset($_POST["submit"])) {
			    $check = getimagesize($_FILES["image"]["tmp_name"]);
			    if($check !== false) {
			        echo "File is an image - " . $check["mime"] . ".";
			        $uploadOk = 1;
			    } else {
			        echo "File is not an image.";
			        $uploadOk = 0;
			    }
			}
			// Check file size
			if ($_FILES["image"]["size"] > 5000000) {
			    echo "Sorry, your file is too large.";
			    echo '<a href="../edit.php?id='.$id.'">Back</a>';
			    $uploadOk = 0;
			}
			// Allow certain file formats
			if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
			&& $imageFileType != "gif" ) {
			    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
				echo '<a href="../edit.php?id='.$id.'">Back</a>';
			    $uploadOk = 0;
			}
			// Check if $uploadOk is set to 0 by an error
			if ($uploadOk == 0) {
			    echo "Sorry, your file was not uploaded.";
			    echo '<a href="../edit.php?id='.$id.'">Back</a>';
			// if everything is ok, try to upload file
			} else {
			    if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
			        // insert data
			        if ($valid) {
			        	if (array_key_exists('delete_file', $_POST)) {
						  	$filename = $_POST['delete_file'];
						  	if (file_exists($filename)) {
						   		unlink($filename);
						    	echo 'File '.$filename.' has been deleted';
						  	} else {
						    	echo 'Could not delete '.$filename.', file does not exist';
						  	}
						}
			            $pdo = Database::connect();
			            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			            
			            $sql = "UPDATE `pages` SET `title`=?,`description`=?,`excerpt`=?,`image`=? WHERE `id` = ?";
						$q = $pdo->prepare($sql);
						$domain = sprintf( "%s://%s", isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http', $_SERVER['SERVER_NAME']);
                        $target_file = str_replace($_SERVER['DOCUMENT_ROOT'], $domain, $target_file);
			            $q->execute(array($title,$description,$excerpt,$target_file,$id));
			            Database::disconnect();
            			header("Location: ../index.php");
			        }
			    } else {
			        echo "Sorry, there was an error uploading your file.";
			        echo '<a href="../edit.php?id='.$id.'">Back</a>';
			    }
			}
        }else{
            $pdo = Database::connect();
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $sql = "UPDATE `pages` SET `title`=?,`description`=?,`excerpt`=? WHERE `id` = ?";
            $q = $pdo->prepare($sql);
            $q->execute(array($title,$description,$excerpt,$id));
            Database::disconnect();
            header("Location: ../index.php");
        }
    }
