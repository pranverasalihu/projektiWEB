<?php
require_once('./../../connection.php');

if ( !empty($_GET['id'])) {
	$dbh = Database::connect();	
	$service = 'SELECT * FROM contact WHERE `contact_id` ='.$id;
    $sth = $dbh->prepare($contact);
	$sth->execute();
	$p = $sth->fetchAll();
    $id = $_REQUEST['id'];
    // delete data
    $pdo = Database::connect();
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "DELETE FROM comtact  WHERE id = ?";
    $q = $pdo->prepare($sql);
    $q->execute(array($id));
    Database::disconnect();
    header("Location: ../index.php");
}