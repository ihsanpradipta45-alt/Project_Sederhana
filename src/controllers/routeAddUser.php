<?php

class routeAddUser extends baseController{
    public function loginPage(){
        $this->view("loginPage/login");
        
    }
    public function addUser(){
        $this->view("loginAddUser/addUser");
    }

}








?>