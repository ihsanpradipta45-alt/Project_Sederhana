<?php
require_once __DIR__.'/../config/loadConnection.php';

if(session_status() == PHP_SESSION_NONE){
    session_start();
}

class hapusBarang extends baseController{
    private $koneksi;
    public function __construct(){
        $db = new loadConnection;
        $this->koneksi = $db->connect();

    }
public function hapus(){
    
}
        
    

}



?>