<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiweb-master/controller/controller.php');

	class ShowContact
	{

 	   	public function get_Contacts()
	    {
	        $controller = new Controller();
	        $contact = $controller->get_contacts();
			return $contact;
	    }

	    public function get_Contact($id)
	    {
	        $controller = new Controller();
			$contact = $controller->get_contact($id);
			return $contact;
	    }
	
	}
	
	?>