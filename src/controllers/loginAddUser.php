<?php
require_once __DIR__.'/../config/loadConnection';
class loginAddUser extends baseController{
    private $koneksi;
    public function __construct() {
        $db = new loadConnection();
        $this->koneksi = $db->connect();

    }
    public function addUser($username, $password ,$firstName , $lastName, $role){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $role = $_POST['role'];
        $excute = 0; 
        require_once __DIR__.'/../login/addUser';
        $db = new addUser();
        $user = $db->addUser($username, $password, $firstName, $lastName, $role);
        if($user === True){
            $this->redirect('routeAddUser/addUser');

        }
        }


    }

}










?>