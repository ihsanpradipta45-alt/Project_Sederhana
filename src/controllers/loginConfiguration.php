<?php
require_once __DIR__.'/../config/loadConnection.php';
session_start();

class loginController extends baseController {

    private $koneksi;

    public function __construct(){
        $connection = new LoadConnection();
        $this->koneksi = $connection->connect();
    }

    public function login(){
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $email = $_POST['email'];
            $password = $_POST['password'];
            require_once __DIR__.'/../models/modelLogin.php';

            $model = new modelLogin();
            $user = $model->login($email);

            if($user && password_verify($password, $user['password'])){
                $_SESSION['role'] = $user['role'];
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['email'] = $user['email'];
                if($user['role'] == 'admin'){
                $this->redirect('/dashboardPage/adminDashboard.php');
            }else{
                $this->redirect('/dashboardPage/dashboard.php');
            }
        }
    }
}
}
?>