<?php

class App{
    private $controllerFile = 'cekRoutes';
    private $controllerMethod = 'index';
    private $param = [];
    private const DEFAULT_GET = 'GET';
    private const DEFAULT_POST = 'POST';
    private $handlers = [];

    public function defaultController($controllerFile){
        $this->controllerFile= $controllerFile;
    }
    public function defaultMethod($controllerMethod){
        $this->controllerMethod = $controllerMethod;
    }

    public function get($path,$handlers){



    }
    public function post($path,$handlers){

    }

    public function handlers(String $method,String $path,$handlers){
        $this->handlers[$path.$handlers] = [
            'method'=> $method,
            'path'=> $path,
            'handler' => $handlers
        ];
    }

    public function run(){
        echo '<pre>';
        var_dump($_SERVER);
        echo '</pre>';    
        require_once '../src/controllers/'.$this->controllerFile.'.php';
        $this->controllerFile = new $this->controllerFile;
        //kenapa saat memanggil harus [] karena ini adalah method khusus memanggil
        // objek dan nama method nya 
        //Method dari object  harus pakai array [$object, 'namaMethod']
        call_user_func_array([$this->controllerFile,$this->ControllerMethod ], $this->param);
    }
    public function url(){


    }

}











?>

