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
        $this->redirect('cekRoutes/index');
        return;
    }

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        return;
    }

    $data = [
        'namaProduk'      => trim($_POST['namaProduk'] ?? ''),
        'kategori_id'     => (int)($_POST['kategori_id'] ?? 0),
        'pemasok'         => trim($_POST['namaPemasok'] ?? ''),
        'hargaBeli'       => (int)($_POST['hargaBeli'] ?? 0),
        'hargaJual'       => (int)($_POST['hargaJual'] ?? 0),
        'jumlahAwal'      => (int)($_POST['jumlahStokAwal'] ?? 0),
        'deskripsiProduk' => trim($_POST['deskripsiProduk'] ?? ''),
    ];
    $fotoProduk = $_FILES['fotoProduk'] ?? null;

    $pesanError = $this->validasiProduk($data, $fotoProduk);
    if ($pesanError !== null) {
        $this->gagal($pesanError);
        return;
    }

    // data sudah valid, baru sentuh file
    $extension  = strtolower(pathinfo($fotoProduk['name'], PATHINFO_EXTENSION));
    $namaBaru   = uniqid('brg_', true) . '.' . $extension;
    $targetPath = __DIR__.'/../../public/uploads/'.$namaBaru;

    if (!move_uploaded_file($fotoProduk['tmp_name'], $targetPath)) {
        $this->gagal('Gagal memindahkan file');
        return;
    }

    require_once __DIR__.'/../models/tambahBarang/modelsTambahBarang.php';
    $modelsBarang = new modelsTambahBarang();
    $barang = $modelsBarang->tambahBarang(
        $data['kategori_id'], $user_id, $data['namaProduk'], $data['jumlahAwal'],
        $data['pemasok'], $data['hargaBeli'], $data['hargaJual'],
        $data['jumlahAwal'], $data['deskripsiProduk'], $namaBaru
    );

    if ($barang) {
        $_SESSION['flash'] = ['tipe' => 'sukses', 'pesan' => 'Barang berhasil ditambahkan'];
        $this->redirect('routeDashboard/dashboardPage');
    } else {
        unlink($targetPath);   // hapus foto kalau data gagal disimpan
        $this->gagal('Gagal menyimpan ke database');
    }
}

private function validasiProduk($data, $fotoProduk){
    if ($data['namaProduk'] === '' || $data['kategori_id'] <= 0) {
        return 'Nama produk dan kategori wajib diisi';
    }
    if ($data['hargaBeli'] < 0 || $data['hargaJual'] < 0 || $data['jumlahAwal'] < 0) {
        return 'Harga dan jumlah tidak boleh negatif';
    }
    if ($fotoProduk === null || $fotoProduk['error'] !== UPLOAD_ERR_OK) {
        return 'Gagal upload foto';
    }

    $extension = strtolower(pathinfo($fotoProduk['name'], PATHINFO_EXTENSION));
    $allowedExtension = ['jpg', 'jpeg', 'png', 'gif'];
    if (!in_array($extension,$allowedExtension)) {
        return 'Format file tidak didukung';
    }
    if ($fotoProduk['size'] > 2 * 1024 * 1024) {
        return 'Ukuran file terlalu besar (maks 2 MB)';
    }

    return null;   // lolos semua
}

// pembantu supaya tidak mengulang 3 baris yang sama
private function gagal($pesan){
    $_SESSION['flash'] = ['tipe' => 'error', 'pesan' => $pesan];
    $this->redirect('routeDashboard/addProduct');
}
} 








?>