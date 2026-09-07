<?php
class routeDashboard extends baseController {

public function dashboardPage(){
    $this->view("dashboardPage/dashboard");
}
public function dashboardAddUser(){
    $this->view("loginPage/addAccount");

}
public function dashboardAdmin(){
    echo('halo admin');
    //$this->view("dashboardPage/adminDashboard");
}
}


?>