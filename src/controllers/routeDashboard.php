<?php
//file ini digunakan untuk mengatur routing

class routeDashboard extends baseController{
    public function dashboard(){
        $this->view('dashboardPage/dashboard.php');
    }
}






?>