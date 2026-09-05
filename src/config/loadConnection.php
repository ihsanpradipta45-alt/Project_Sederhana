<?php

class LoadConnection extends Connection{
    public function __construct() {
        parent::__construct("localhost", "root", "", "projek_sederhana");
    }
}
// tidak perlu membuat objek baru karena ini inheritance
// dipanggil hanya seperti di file model karena butuh koneksi
?>