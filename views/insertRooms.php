<?php

require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/controller/controller.php');

    

class InsertRooms
{
    public function insertRoom($title, $description, $image,$price)
    {

        $controller = new Controller();
        $response = $controller->roomInsert($title, $description, $image,$price);


    }

    public function editRoom($title,$description,$price,$id){
        $controller = new Controller();
        $response = $controller->roomEdit($title,$description,$price,$id);
    }
}
?>
