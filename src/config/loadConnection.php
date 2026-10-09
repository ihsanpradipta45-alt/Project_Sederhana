<?php
require_once __DIR__.'/Connection.php'; // sesuaikan nama file & lokasinya

class LoadConnection extends Connection{
// konstruktor untuk selalu digunakan karena dia mengisi param dari koneksi parent
public function __construct() {
        parent::__construct("localhost", "root", "", "projek_crud");
    }
}
?>