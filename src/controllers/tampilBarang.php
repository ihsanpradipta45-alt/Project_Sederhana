<?php
require_once __DIR__.'/../models/tambahBarang/menampilkanBarang.php';
//digunakan untuk menampilkan sebuah nama barang
class tampilBarang extends baseController{
    public function produk(){
        $barang = new menampilkanBarang();
        // daftarBarang menangkap hasil sql yang dibuat namanya
        $daftarBarang = $barang ->getBarang();
        // menggunakan require karena digunakan untuk menampilkan page html
        // dan dijalankan secara berulang-ulang
        $this->view("dashboardPage/products",['daftarBarang' =>$daftarBarang]);
    }

}





?>