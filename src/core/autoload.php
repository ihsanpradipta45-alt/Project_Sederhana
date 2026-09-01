<?php
// kenapa arahnya ke core buat path file nya
// karena dari route->cek_logis->controller->menampilkan melalui APP.php
function loadCore($class){
    $path_to_file = '../src/core/'.$class.'.php';
    if(file_exists($path_to_file)){
        require_once($path_to_file);

    }

}

spl_autoload_register('loadCore');







?>