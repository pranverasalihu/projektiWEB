<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiweb-master/controller/controller.php');

	class ShowUsers
	{

 	   	public function get_Users()
	    {
	        $controller = new Controller();
	        $users = $controller->get_users();
			return $users;
	    }

	    public function get_User($id)
	    {
	        $controller = new Controller();
			$user = $controller->get_user($id);
			return $user;
	    }
	
	}
	
	?>