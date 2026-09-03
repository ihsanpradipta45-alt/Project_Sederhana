<?php

class LoadConnection extends Connection{
    public function __construct() {
        parent::__construct("localhost", "root", "", "projek_sederhana");
    }
}
$connection = new LoadConnection();
$connection->connect();
?>