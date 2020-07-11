<?php
 require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/models/userMapper.php');
 require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/models/user.php');
 require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/models/DBConn.php');
  require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/models/roomsMapper.php');

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

  
    	
}
