<?php
//file yang menjalankan hasil dari routing
//dan pengecekan file pada controller
if(!session_id()){
    session_start();
}

require_once '../src/config/default.php';
require_once '../src/core/autoload.php';

$routes = new Routes();
$routes->run();









?>