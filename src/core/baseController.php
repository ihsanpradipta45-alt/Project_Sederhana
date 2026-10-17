<?php

//file ini digunakan untuk menampilkan sebuah view
class baseController{
    // $view untuk menampilkan view nya
    // $data [] untuk parameter data yang dikirimkan
    //view disini cuma berfungsi untuk 
    public function view($view, $data = []){
    // kalo misal ada file nya maka akan mengarahlan ke file tsb
        extract($data);
        require_once __DIR__ .'/../view/'.$view.'.php';
    }
    

    public function redirect($url){
        // ini yang menyebabkan setiap action harus ada location index nya
            header('Location:index.php?url='.ltrim($url,'/'));// disamakan wkatu kirim action pada html
            exit();
        }
}






?>