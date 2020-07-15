<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/2020/vanoa/controller/controller.php');

	class ShowServices
	{

 	   	public function get_Services(){
	        $controller = new Controller();
	        $services = $controller->get_services();
			return $services;
	    }

	    public function get_Service($id){
	        $controller = new Controller();
	        $service = $controller->get_service($id);
			return $service;
	    }

	
		}
	
	?>