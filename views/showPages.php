<?php
require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/controller/controller.php');

	class ShowPages
	{

 	   	public function get_Pages()
	    {
	        $controller = new Controller();
	        $pages = $controller->get_pages();
			return $pages;
	    }

	    public function get_Page($id)
	    {
	        $controller = new Controller();
	        $page = $controller->get_page($id);
			return $page;
	    }
	
	}
	
	?>