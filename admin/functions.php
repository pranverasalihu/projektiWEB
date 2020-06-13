<?php 
//DB Connection 
require_once('connection.php');  

// This function renders site header
function get_header(){
	require_once __DIR__ . './parts/header.php';
}

// This function renders site footer
function get_footer(){
	require_once __DIR__ . './parts/footer.php';
}

//This function return all rooms from db
function get_rooms(){
	$pdo = Database::connect(); 
    $roomsQuery = 'SELECT * FROM rooms';
    $sth = $pdo->prepare($roomsQuery);
	$sth->execute();
	$rooms = $sth->fetchAll();
	Database::disconnect();	
	return $rooms;
}

//This function return a single room data from db by given :ID 
function get_room($id){
	$pdo = Database::connect(); 
    $roomQuery = 'SELECT * FROM rooms WHERE `id` ='.$id;
    $sth = $pdo->prepare($roomQuery);
	$sth->execute();
	$room = $sth->fetchAll();
	Database::disconnect();	
	if ($room) {
		return $room[0];
	}
}