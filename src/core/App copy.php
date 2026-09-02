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
    $url = $this->getUrl();

    foreach($this->handlers as $handler){
        $path = explode('/', ltrim(rtrim($handler['path'],'/'),'/'));
        $kurl  = (isset($url[0])? $url[0]:'').(isset($url[1])?$url[1]:'');
        $kpath = (isset($path[0])?$path[0]:'').(isset($path[1])?$path[1]:'');

        if($kurl != '' && $kurl == $kpath && $request_method == $handler['method']){
            if(isset($handler['handler'][0]) && file_exists(__DIR__.'/../controllers/'.$handler['handler'][0].'.php')){
                $this->controllerFile = $handler['handler'][0]; // ✅ fix: handler bukan path
                unset($url[0]);
            }
            require_once __DIR__.'/../controllers/'.$this->controllerFile.'.php'; // ✅ fix: tambah slash
            $excute = 1;
            $this->controllerFile = new $this->controllerFile;
            if(isset($handler['handler'][1]) && method_exists($this->controllerFile,$handler['handler'][1])){
                $this->controllerMethod = $handler['handler'][1]; // ✅ fix juga: sebelumnya pakai $path[1] (dari URL), harusnya dari handler
                unset($url[1]);
            }
        }
    }

    if($excute == 0){
        require_once __DIR__.'/../controllers/'.$this->controllerFile.'.php';
        $this->controllerFile = new $this->controllerFile;
    }

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

