<?php

class App{
    private $controllerFile = 'cekRoutes';
    private $controllerMethod = 'index';
    private $param = [];
    private const DEFAULT_GET = 'GET';
    private const DEFAULT_POST = 'POST';
    private $handlers = [];

    public function defaultController($controllerFile){
        $this->controllerFile = $controllerFile;
    }

    public function defaultMethod($controllerMethod){
        $this->controllerMethod = $controllerMethod;
    }

    public function get($path, $handlers){
        $this->handlers(self::DEFAULT_GET, $path, $handlers);
    }

    public function post($path, $handlers){
        $this->handlers(self::DEFAULT_POST, $path, $handlers);
    }

    public function handlers(String $method, String $path, $handlers){
        // key dibentuk dari method + path -> unik per kombinasi, tanpa nyentuh array $handlers
        //sama aja concat $this->handlers[$path.$handlers] = []
        $key = $method.trim($path, '/'); 
        // $this->handlers = ['GETcekRoutes/index' => ['cekRoutes', 'index']];
        //intinya sama menyimpan antara key dan index daripada handlers
        $this->handlers[$key] = [
            'method'  => $method,
            'path'    => $path,
            'handler' => $handlers
        ];
    }

    public function run(){
        $excute = 0;
        $request_method = $_SERVER['REQUEST_METHOD'];
        $url = $this->getUrl();

        // gabungkan array segmen URL jadi string, biar formatnya sama kayak path yang didaftarkan manual
        $urlPath = implode('/', array_filter($url, fn($seg) => $seg !== ''));
        // $requestkey = GET.cekRoutes/index
        $requestKey = $request_method.$urlPath;
        //konsep foreach sama dengan
        //$this->handlers = ['GETcekRoutes/index' => ['cekRoutes', 'index']];
        foreach($this->handlers as $key => $handler){
            if($key == $requestKey){
                if(isset($handler['handler'][0]) && file_exists(__DIR__.'/../controllers/'.$handler['handler'][0].'.php')){
                    $this->controllerFile = $handler['handler'][0];
                    unset($url[0]);
                }
                require_once __DIR__.'/../controllers/'.$this->controllerFile.'.php';
                $excute = 1;
                $this->controllerFile = new $this->controllerFile;

                if(isset($handler['handler'][1]) && method_exists($this->controllerFile, $handler['handler'][1])){
                    $this->controllerMethod = $handler['handler'][1];
                    unset($url[1]);
                }
                break; // udah ketemu match, gak perlu cek handler lain
            }
        }

        if($excute == 0){
            require_once __DIR__.'/../controllers/'.$this->controllerFile.'.php';
            $this->controllerFile = new $this->controllerFile;
        }

        call_user_func_array([$this->controllerFile, $this->controllerMethod], $this->param);
    }

    public function getUrl(){
        $url = rtrim($_SERVER['QUERY_STRING'], '/');
        $url = filter_var($url, FILTER_SANITIZE_URL);
        $url = explode('/', $url);
        return $url;
    }
}