<?php
// class ini berfungsi untuk menjalankan ketika user menekan pada sebuah tombol
class routeDashboard extends baseController {

public function dashboardPage(){
    $this->view("dashboardPage/dashboard");
}
public function dashboardAddUser(){
    $this->view("loginPage/addAccount");

}
public function dashboardAdmin(){

    $this->view("dashboardPage/adminDashboard");
}
public function addProduct(){
    $this->view("dashboardPage/addProduct");
}




}


?>