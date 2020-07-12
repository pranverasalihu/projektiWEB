<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/controller/controller.php');

	class ShowServices
	{

 	   	public function get_Services()
	    {
	        $controller = new Controller();
	        $services = $controller->get_services();
			return $services;
	    }

	
		}
	
	?>