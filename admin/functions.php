<?php 
//DB Connection 
require_once('connection.php');  

function get_admin_url(){
	$url = sprintf(
	    "%s://%s%s",
	    isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
	    $_SERVER['SERVER_NAME'],
	    $_SERVER['REQUEST_URI']
  	);
  	$url = explode('/admin', $url)[0] . '/admin';
  	return $url;
}

// This function renders site header
function get_header(){
	require_once __DIR__ . './parts/header.php';
}

// This function renders site footer
function get_footer(){
	require_once __DIR__ . './parts/footer.php';
}

//This function return all rooms from db
/*function get_rooms(){
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

//This function return all pages from db
function get_pages(){
	$pdo = Database::connect(); 
    $pagesQuery = 'SELECT * FROM pages';
    $sth = $pdo->prepare($pagesQuery);
	$sth->execute();
	$pages = $sth->fetchAll();
	Database::disconnect();	
	return $pages;
}

//This function return a single page data from db by given :ID 
function get_page($id){
	$pdo = Database::connect(); 
    $pageQuery = 'SELECT * FROM pages WHERE `id` ='.$id;
    $sth = $pdo->prepare($pageQuery);
	$sth->execute();
	$page = $sth->fetchAll();
	Database::disconnect();	
	if ($page) {
		return $page[0];
	}
}

//This function return all users from db
function get_users(){
	$pdo = Database::connect(); 
    $usersQuery = 'SELECT * FROM users';
    $sth = $pdo->prepare($usersQuery);
	$sth->execute();
	$users = $sth->fetchAll();
	Database::disconnect();	
	return $users;
}

//This function return a single user data from db by given :ID 
function get_user($id){
	$pdo = Database::connect(); 
    $userQuery = 'SELECT * FROM users WHERE `id` ='.$id;
    $sth = $pdo->prepare($userQuery);
	$sth->execute();
	$user = $sth->fetchAll();
	Database::disconnect();	
	if ($user) {
		return $user[0];
	}

	}

	//This function return all services from db
function get_services(){
	$pdo = Database::connect(); 
    $servicesQuery = 'SELECT * FROM services';
    $sth = $pdo->prepare($servicesQuery);
	$sth->execute();
	$services = $sth->fetchAll();
	Database::disconnect();	
	return $services;
}

//This function returns a single service data from db by given :ID 
function get_service($id){
	$pdo = Database::connect(); 
    $serviceQuery = 'SELECT * FROM services WHERE `id` ='.$id;
    $sth = $pdo->prepare($serviceQuery);
	$sth->execute();
	$service = $sth->fetchAll();
	Database::disconnect();	
	if ($service) {
		return $service[0];
	}*/

	function roomLink($roomTitle){
      
        if($roomTitle == 'Single Room'){
            echo'singleRoom.php';
        }if($roomTitle == 'Double Room'){
            echo'doubleRoom.php';
        }elseif($roomTitle == 'Master Suit'){
            echo'masterSuit.php';
        }elseif($roomTitle == 'Premium Suit'){
            echo'premiumSuit.php';
        }
    }



  



