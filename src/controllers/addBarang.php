<?php

require_once __DIR__.'/../config/loadConnection.php';
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
class addBarang extends baseController{
    private $koneksi;
    public function __construct(){
        $db = new LoadConnection();
        $this->koneksi= $db->connect(); 
    }
    public function logicAddBarang(){
    $user_id = (int)($_SESSION['user_id'] ?? 0);
    if ($user_id <= 0) {
        die('Silakan login terlebih dahulu');
    }

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        //nama post disini disesuaikan dengan name pada html
        $namaProduk      = $_POST['namaProduk'] ?? '';
        $kategori_id     = (int)($_POST['kategori_id'] ?? 0);
        $pemasok         = $_POST['namaPemasok'] ?? '';
        $hargaBeli       = (int)($_POST['hargaBeli'] ?? 0);
        $hargaJual       = (int)($_POST['hargaJual'] ?? 0);
        $jumlahAwal      = (int)($_POST['jumlahStokAwal'] ?? 0);
        $stok            = $jumlahAwal;
        $deskripsiProduk = $_POST['deskripsiProduk'] ?? '';
        $fotoProduk      = $_FILES['fotoProduk'] ?? null;

        // validasi data dulu, sebelum menyentuh file
        if ($namaProduk === '' || $kategori_id <= 0) {
            die('Nama produk dan kategori wajib diisi');
        }
        if ($hargaBeli < 0 || $hargaJual < 0 || $jumlahAwal < 0) {
            die('Harga dan jumlah tidak boleh negatif');
        }

        // validasi foto
        if ($fotoProduk === null || $fotoProduk['error'] !== UPLOAD_ERR_OK) {
            die('gagal upload foto');
        }
        $extension = strtolower(pathinfo($fotoProduk['name'], PATHINFO_EXTENSION));
        $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif'];
        if(!in_array($extension, $allowedExtensions)){
            die('format file tidak didukung');
        }
        if($fotoProduk['size'] > 2 * 1024 * 1024){
            die('ukuran file terlalu besar');
        }

        // pindahkan file
        $namaBaru   = uniqid('brg_',true) . '.' . $extension;
        $targetPath = __DIR__.'/../uploads/'.$namaBaru;
        if(!move_uploaded_file($fotoProduk['tmp_name'], $targetPath)){
            die('gagal memindahkan file');
        }

        // simpan ke database
        require_once __DIR__.'/../models/tambahBarang/modelsTambahBarang.php';
        $modelsBarang = new modelsTambahBarang();
        $barang = $modelsBarang->tambahBarang(
            $kategori_id, $user_id, $namaProduk, $stok, $pemasok,
            $hargaBeli, $hargaJual, $jumlahAwal, $deskripsiProduk, $namaBaru
        );

        if($barang){
            $this->redirect('/routeDashboard/dashboardPage');
        } else {
            unlink($targetPath);   // hapus foto kalau data gagal disimpan
            die('gagal menyimpan ke database');
        }
    }
}
    
} 








?>