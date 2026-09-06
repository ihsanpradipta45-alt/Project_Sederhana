<?php
require_once __DIR__.'/../config/loadConnection.php';
if(session_status() == PHP_SESSION_NONE){
    session_start();
}

class loginConfiguration extends baseController {

    private $koneksi;

    public function __construct(){
        $connection = new LoadConnection();
        $this->koneksi = $connection->connect();
    }

    public function login(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = $_POST['email'];
            $password = $_POST['password'];
            require_once __DIR__.'/../models/login/modelLogin.php';

            $model = new modelLogin();
            $user = $model->login($email);

            if($user && password_verify($password, $user['password'])){
                $_SESSION['role'] = $user['role'];
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];

                if($user['role'] == 'admin'){
                    $this->redirect('/routeVerification/adminDashboard');
                } else {
                    $this->redirect('/cekRoutes/index');
                }
            } else {
                $_SESSION['error'] = 'Email atau password salah';
                $this->redirect('/routeAddUser/loginPage');
            }
        }
    }
}
?>