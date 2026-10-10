<?php
require_once __DIR__.'/../../config/loadConnection.php';

class menampilkanBarang{
    private $koneksi;
    public function __construct(){
        $db = new loadConnection();
        $this -> koneksi = $db->connect();
    }

    public function getBarang(){
    $sql = "SELECT p.product_id,p.nama_produk,p.stok_produk,p.deskripsi_produk,
    p.photo,p.harga_jual,c.name AS nama_kategori_barang
    FROM product p
    INNER JOIN category c ON c.category_id = p.category_id
    ORDER BY p.product_id DESC";
    $result = mysqli_query($this->koneksi,$sql);
    //1.mysqli_fetch_all menentukan berapa baris yang diambil: semua sekaligus, hasilnya satu array besar.
    //2.MYSQLI_ASSOC menentukan bentuk tiap baris di dalam array itu: kuncinya nama kolom.
    return mysqli_fetch_all($result,MYSQLI_ASSOC);
    }

}






?>