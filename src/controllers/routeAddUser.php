<?php

class routeAddUser extends baseController{
    public function loginPage(){
        $this->view("loginPage/login.php");
        
    }
    public function addUser(){
        $this->view("loginPage/addAccount");
    }

}








?>