<?php
//file yang digunakan untuk menghapus sebuah item pada barang di folder produk
require_once __DIR__.'/../../config/loadConnection.php';

class hapusBarang{
    private $koneksi;

    public function __construct(){
        $db = new loadConnection();
        $this->koneksi = $db->connect();
    }

    public function delete($product_id){
        // alasan  setelah where yang buat nyocokin itu kosong karena mau digunakan di bind_param
        $sql = 'SELECT * FROM product WHERE product_id = ?';
        $stmt = mysqli_prepare($this->koneksi,$sql);
        mysqli_stmt_bind_param($stmt , 'i' , $product_id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);
        $rowInBarang = mysqli_fetch_assoc($result);
        if(!$rowInBarang){
            die("barang tidak ada");
        }else{
            $sql = 'DELETE FROM product WHERE product_id = ?';
            $stmt = mysqli_prepare($this->koneksi,$sql);
            mysqli_stmt_bind_param($stmt , 'i' , $product_id);
            $hasil = mysqli_stmt_execute($stmt);
            if(!$hasil){
                die("barang tidak berhasil dihapus");
            }
            if(!empty($rowInBarang['image'])){
                $path = __DIR__ .'/../../../public/uploads/'.basename($rowInBarang['image']);
                unlink($path);
            }
            return $hasil;
        }



        
    }

}







?>