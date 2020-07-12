<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/2020/vanoa/controller/controller.php');

	class ShowRooms
	{

 	   	public function get_Rooms()
	    {
	        $controller = new Controller();
	        $rooms = $controller->get_rooms();
			return $rooms;
	    }
	
		}
	
	?>