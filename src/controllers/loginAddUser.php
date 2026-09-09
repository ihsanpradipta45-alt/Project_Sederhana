<?php
//alur logika yang digunakaan saat ingin mena=daftarkan sebagai user maupun sebabagai admin
require_once __DIR__.'/../config/loadConnection.php';
class loginAddUser extends baseController{
    private $koneksi;
    public function __construct() {
        $db = new loadConnection();
        $this->koneksi = $db->connect();

    }
    public function addUser(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $firstName = $_POST['firstName'];
        $lastName = $_POST['lastName'];
        $role = $_POST['role'];
        //$photo = null;
        //if(isset($_FILES['photo']) && $_FILES['photo']['error']=== 0){
            //$path = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
            //$photo = uniqid() . '.' . $path;
            //$target_path = __DIR__.'/../uploads/'.$photo;
            //move_uploaded_file($_FILES['photo']['tmp_name'], $target_path);
            //}
        //kalo misal foto ditaruh diluar maka tanpa upload photo pun bisa akses
        require_once __DIR__.'/../models/login/addUser.php';
        $db = new addUser();
        $user = $db->addUser($email, $password, $firstName, $lastName, $role);
        if($user === True){
        $this->redirect('/routeAddUser/loginPage');
        }else{
            echo "email telah digunakan";
        }
        }
    }
}















?>