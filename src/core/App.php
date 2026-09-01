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
        $this->handlers(self::DEFAULT_GET,$path,$handlers);



    }
    public function post($path,$handlers){
        $this->handlers(self::DEFAULT_POST,$path,$handlers);

    }

    public function handlers(String $method,String $path,$handlers){
        $this->handlers[$path.$handlers] = [
            'method'=> $method,
            'path'=> $path,
            'handler' => $handlers
        ];
    }

    public function run(){
        $excute = 0;
        $request_method = $_SERVER['REQUEST_METHOD'];
        //sekarang mau ambil path dari array supaya mudah buat nyocokin 
        //antara url dengan path yang sudah kita definiskan
        $url = $this->getUrl();
        foreach($this->handlers as $handler){
        $path = explode('/',ltrim(rtrim($handler['path'],'/'),'/'));
        //membuat key untuk url dan key untuk path supaya mudah untuk menyocokkan
        $kurl = (isset($url[0])? $url[0]:'').(isset($url[1])?$url[1]:'');
        $kpath = (isset($path[0])?$path[0]:'').(isset($path[1])?$path[1]:'');
        if($kurl != '' && $kurl == $kpath && $request_method == $handler['method']){
            if(isset($handler['handler'][0]) && file_exists('../src/controllers/'.$handler['handler'][0].'.php')){
                $this->controllerFile = $handler['path'][0];
                unset($url[0]);
            }
            //buat cek jalan atau enggaknya yang penting data itu update
            //require_once difungsikan selain untuk update file yang digunakam sebagai untuk pengecekan method
            require_once __DIR__.'../controllers/'.$this->controllerFile.'.php';
            $excute = 1;
            $this->controllerFile = new $this->controllerFile;
            if(isset($path[1])&& method_exists($this->controllerFile,$path[1])){
                $this->controllerMethod = $path[1];
                unset($url[1]);
            }

        }


        }
        if($excute == 0){
            require_once __DIR__.'/../controllers/'.$this->controllerFile.'.php';
            $this->controllerFile = new $this->controllerFile;
        }

        //if(isset($url)&& file_exists('../src/controllers/'.$url[0].'.php')){
            //$this->controllerFile = $url[0];
          //  unset($url[0]);
        //}
        //require_once '../src/controllers/'.$this->controllerFile.'.php';
        //$this->controllerFile = new $this->controllerFile;
        //if(isset($url[1])){
            //if(method_exists($this->controllerFile, $url[1])){
                //$this->controllerMethod = $url[1];
                //unset($url[1]);
        //}
        //kenapa saat memanggil harus [] karena ini adalah method khusus memanggil
        // objek dan nama method nya 
        //Method dari object  harus pakai array [$object, 'namaMethod']
        call_user_func_array([$this->controllerFile,$this->controllerMethod ], $this->param);
    }
    
    public function geturl(){
        $url = rtrim($_SERVER['QUERY_STRING'], '/');
        $url = filter_var($url,FILTER_SANITIZE_URL);
        $url = explode('/',$url);
        return $url;

    }
}    















?>

