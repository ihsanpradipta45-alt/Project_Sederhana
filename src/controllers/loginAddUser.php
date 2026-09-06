<?php
require_once __DIR__.'/../config/loadConnection';
class loginAddUser extends baseController{
    private $koneksi;
    public function __construct() {
        $db = new loadConnection();
        $this->koneksi = $db->connect();

    }
    public function addUser($email,$password ,$firstName , $lastName, $role,$photo){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $firstName = $_POST['first_name'];
        $lastName = $_POST['last_name'];
        $role = $_POST['role'];
        $photo = $_POST['photo'];
        if(isset($_FILES['photo']) && $_FILES['photo']['error']=== 0 ){
        $path = pathinfo($_FILES['photo']['name'], PATHINFO_EXTENSION);
        $photo = uniqid() . '.' . $path;
        $target_path = __DIR__.'/../uploads/'.$path;
        if(file_exists( $target_path )){
            move_uploaded_file($_FILES['photo']['tmp_name'], $target_path);
        }
        require_once __DIR__.'/../login/addUser';
        $db = new addUser();
        $user = $db->addUser($email, $password, $firstName, $lastName, $role,$photo);
        if($user === True){
            $this->redirect('routeDashboard/dashboardAddUser');

        }
        }

        }


    }

}










?>