<?php
//file ini berfungsi untuk pengecekan authentication ulang
class routeVerification extends baseController{
    public function dashboard(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        if(!isset($_SESSION['user_id'])){
            $this->redirect('/routeDashboard/dashboardPage');
            return;
        }
    }

    public function adminDashboard(){
        if(session_status() == PHP_SESSION_NONE){
            session_start();
        }
        if(!isset($_SESSION['user_id'])){
            $this->redirect('/cekRoutes/index');
            return;
        }
        if($_SESSION['role'] !== 'admin'){
            $this->redirect('/routeDashboard/dashboardPage');
            return;
        }
        $this->redirect('/routeDashboard/dashboardAdmin');
    }
}






?>
