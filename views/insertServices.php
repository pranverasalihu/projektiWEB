<?php

require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiweb-master/2020/vanoa/controller/controller.php');

    

class InsertServices
{
    public function insertService($title, $description, $image)
    {

        $controller = new Controller();
        $response = $controller->serviceInsert($title, $description, $image);


    }

    public function editService($title, $description, $id){
        $controller = new Controller();
        $response = $controller->serviceEdit($title, $description, $id);
    }
}
?>
