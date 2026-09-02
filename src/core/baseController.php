<?php

//file ini digunakan untuk menampilkan sebuah view
class baseController{
    // $view untuk menampilkan view nya
    // $data [] untuk parameter data yang dikirimkan
    public function view($view, $data = []){
    // kalo misal ada file nya maka akan mengarahlan ke file tsb
    if(count($data)){
        extract($data);
    }
    require_once __DIR__ .'/../view/'.$view.'.php';
    }

    public function redirect($url){
        header('location:'.$url);
        exit();
    }
    public function model($model){
        require_once __DIR__.'/../models/'.$model.'.php';
        return new $model;
    }
}





?>