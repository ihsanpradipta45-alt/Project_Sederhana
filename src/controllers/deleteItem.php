<?php
require_once __DIR__.'/../config/loadConnection.php';

if(session_status() == PHP_SESSION_NONE){
    session_start();
}

class deleteItem extends baseController{
    private $koneksi;
    public function __construct(){
        $db = new loadConnection;
        $this->koneksi = $db->connect();

    }
public function hapus(){
    $user_id = (int)($_SESSION['user_id'] ?? 0);
    if($user_id < 0){
        $this->redirect('cekRoutes/index');
    $barang_id = (int)($_POST['product_id']);
    if(!isset($barang_id)){
        die('barang tidak di temukan');
    }else{
        require_once __DIR__.'/../models/hapusBarang/hapusBarang.php';
        $hapus = new hapusBarang();
        $barang = $hapus->delete($barang_id);
        

    }
    }

    
    
}
        
    

}



?>