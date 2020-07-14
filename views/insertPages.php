<?php

require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/controller/controller.php');

    

class InsertPages
{
    public function insertPage($title,$description,$image,$excerpt){

        $controller = new Controller();
        $response = $controller->pageInsert($title,$description,$image,$excerpt);
    }


    public function editPage($title, $description,$excerpt,$id){
        $controller = new Controller();
        $response = $controller->pageEdit($title, $description,$excerpt,$id);
    }
}
?>
