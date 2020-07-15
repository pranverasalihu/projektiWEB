<?php
 require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/models/userMapper.php');
 require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/models/user.php');
 require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/models/DBConn.php');
 require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/models/roomsMapper.php');
 require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/models/servicesMapper.php');
 require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/models/pagesMapper.php');
 require_once ($_SERVER['DOCUMENT_ROOT'].'/projektiWEB-master/models/contactMapper.php');

class Controller{   


    //Insert user
    public function userInsert($username, $email, $password,$role){
        $userMapper = new UserMapper();
        $userMapper->insert($username, $email, $password,$role);
        return true;
    }

    //update user
    public function userEdit($userId,$username, $email, $password,$role){
        $userMapper = new UserMapper();
        $userMapper->update($userId, $username, $email, $password,$role);
        return true;
    }


    //insert service
    public function serviceInsert($title, $description, $image){
       
        $serviceMapper = new ServiceMapper();
        $serviceMapper->insert($title, $description, $image);
        return true;
       
    }

    //update service
    public function serviceEdit($title, $description, $id){
        $serviceMapper = new ServiceMapper();
        $serviceMapper->update($title, $description, $id);
        return true;
    }


    //insert page
    public function pageInsert($title,$description,$image,$excerpt){
       
        $pagesMapper = new PagesMapper();
        $pagesMapper->insert($title,$description,$image,$excerpt);
        return true;
       
    }

    //update user
    public function pageEdit($title, $description,$excerpt,$id){
        $pagesMapper = new PagesMapper();
        $pagesMapper->update($title, $description,$excerpt,$id);
        return true;
    }


    //insert room
    public function roomInsert($title, $description, $image,$price){
       
        $roomsMapper = new RoomsMapper();
        $roomsMapper->insert($title,$description,$image,$excerpt);
        return true;
       
    }

    //update room
    public function roomEdit($title, $description,$price,$id){
        $roomsMapper = new RoomsMapper();
        $roomsMapper->update($title, $description,$price,$id);
        return true;
    }


    //return all rooms
    public function get_rooms(){
    	$roomsMapper = new RoomsMapper();
    	$rooms = $roomsMapper->getRooms();
    	return $rooms;
    }

    //return a room with specific id
    public function get_room($id){
        $roomsMapper = new RoomsMapper();
        $room = $roomsMapper->getRoom($id);
        return $room;
    }

    //return all services
     public function get_services(){
    	$servicesMapper = new ServiceMapper();
    	$services = $servicesMapper->getServices();
    	return $services;
    }

    //return a service with specific id
    public function get_service($id){
        $servicesMapper = new ServiceMapper();
        $service = $servicesMapper->getService($id);
        return $service;
    }

    //return all users
     public function get_users(){
        $usersMapper = new UserMapper();
        $users = $usersMapper->getUsers();
        return $users;
    }

    //return an user with specific id
    public function get_user($id){
        $usersMapper = new UserMapper();
        $user = $usersMapper->getUser($id);
        return $user;
    }


     //return all pages
     public function get_pages(){
        $pagesMapper = new PagesMapper();
        $pages = $pagesMapper->getPages();
        return $pages;
    }

    //return a page with specific id
    public function get_page($id){
        $pagesMapper = new PagesMapper();
        $page = $pagesMapper->getPage($id);
        return $page;
    }

    public function get_contacts(){
        $contactMapper = new ContactMapper();
        $contact = $contactMapper->getContacts();
        return $contact;
    }

  
    	
}
