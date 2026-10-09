<?php
require_once __DIR__.'/../../config/loadConnection.php';
class modelsTambahBarang{
    private $koneksi;
    public function __construct(){
        $db = new LoadConnection();
        $this->koneksi= $db->connect(); 
    }
    public function tambahBarang($category_id, $user_id, $nama_produk, $stok_produk, $nama_pemasok, $harga_beli, $harga_jual, $jumlah_stok_awal, $deskripsi_produk, $photo){
        $sql = "INSERT INTO product(category_id, user_id, nama_produk, stok_produk, nama_pemasok, harga_beli, harga_jual, jumlah_stok_awal, deskripsi_produk, photo) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $insertStmt = mysqli_prepare($this->koneksi,$sql);
        mysqli_stmt_bind_param($insertStmt,'iisisiiiss',$category_id, $user_id, $nama_produk, $stok_produk, $nama_pemasok, $harga_beli, $harga_jual, $jumlah_stok_awal, $deskripsi_produk, $photo);
        $result = mysqli_stmt_execute($insertStmt);
        return $result;
        // return disini digunakan ketika nanti di php mau menampilkan produk barang melalui sistem database
    }

}
?>