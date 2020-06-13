<?php
    require_once('connection.php'); 
    if ( !empty($_GET['id'])) {
    	$dbh = Database::connect();	
    	$product = 'SELECT * FROM articles WHERE `id` ='.$id;
	    $sth = $dbh->prepare($product);
		$sth->execute();
		$p = $sth->fetchAll();
	  	$filename = $p[0]['image_path'];
	  	if (file_exists($filename)) {
	   		unlink($filename);
	    	echo 'File '.$filename.' has been deleted';
	  	} else {
	    	echo 'Could not delete '.$filename.', file does not exist';
	  	}
        $id = $_REQUEST['id'];
        // delete data
        $pdo = Database::connect();
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "DELETE FROM articles  WHERE id = ?";
        $q = $pdo->prepare($sql);
        $q->execute(array($id));
        Database::disconnect();
        header("Location: indexArticle.php");
    }
