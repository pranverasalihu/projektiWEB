<?php
 require_once ($_SERVER['DOCUMENT_ROOT'].'/2020/vanoa/models/userMapper.php');
 require_once ($_SERVER['DOCUMENT_ROOT'].'/2020/vanoa/models/user.php');
 require_once ($_SERVER['DOCUMENT_ROOT'].'/2020/vanoa/models/DBConn.php');
  require_once ($_SERVER['DOCUMENT_ROOT'].'/2020/vanoa/models/roomsMapper.php');

class Controller
{
    public function userInsert($username, $email, $password,$role)
    {
       
        $user = new User($username, $email, $password,$role);
        $userMapper = new UserMapper($user);
        $userMapper->insert($username, $email, $password,$role);
        return true;
       
    }

    public function get_rooms(){
    	$roomsMapper = new RoomsMapper();
    	$rooms = $roomsMapper->getRooms();
    	return $rooms;
    }

     public function get_services(){
    	$servicesMapper = new ServicesMapper();
    	$services = $servicesMapper->getServices();
    	return $services;
    }

  
    	
}
