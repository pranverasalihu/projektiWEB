<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiweb-master/controller/controller.php');

	class ShowRooms
	{

 	   	public function get_Rooms(){
	        $controller = new Controller();
	        $rooms = $controller->get_rooms();
			return $rooms;
	    }

	    public function get_Room($id)
	    {
	        $controller = new Controller();
	        $room = $controller->get_room($id);
			return $room;
	    }
	
	}
	
	?>