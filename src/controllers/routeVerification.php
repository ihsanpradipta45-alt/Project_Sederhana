<?php
class routeVerification extends baseController{
    public function dashboard(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        if(!isset($_SESSION['user_id'])){
            $this->redirect('/routeDashboard/dashboardPage');
            return;
        }
        $this->view('dashboardPage/dashboard.php');
    }

    public function adminDashboard(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        if(!isset($_SESSION['user_id']) || $_SESSION['role'] !== 'admin'){
            $this->view('dashboardPage/dashboard');
            return; //biar stop disini ketika salah
        }
        $this->view('dashboardPage/adminDashboard');
    }
}






?>
