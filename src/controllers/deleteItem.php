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
    if($_SERVER['REQUEST_METHOD'] === 'POST'){
        $user_id = (int)($_SESSION['user_id'] ?? 0);
        $product_id = (int)($_POST['product_id'] ?? 0);

        if($user_id <= 0 || $product_id <= 0){
            $this->redirect('cekRoutes/index');
            return;
        }

        require_once __DIR__ .'/../models/hapusBarang/hapusBarang.php';
        $barang = new hapusBarang();
        $berhasil = $barang->delete($product_id);

        if($berhasil){
            $this->redirect('routeDashboard/dashboardPage');
        } else {
            die('barang gagal dihapus');
        }
    } else {
        $this->redirect('cekRoutes/index');
    }
}

    
    
}
        
    





?>