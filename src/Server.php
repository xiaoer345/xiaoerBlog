<?php
namespace JiSwoole;

class Server
{
    private $server_conf;
    private $db_conf;
    private $server = null;
    public static $smarty;
    public static $db;
    
    public function __construct($conf){
        $this->server_conf = $conf['server'];
        $this->db_conf = $conf['db'];
        
        self::$smarty = new \Smarty();
        self::$smarty->setTemplateDir(TEMP_ROOT);
        self::$smarty->setCacheDir(CACHE_PATH);
        self::$smarty->setCompileDir(COMPILE_PATH);
        
        self::$smarty->caching = false;
        //self::$smarty->cache_lifetime = 120;               
    }
    
    public function __destruct(){
        $this->server->stop();
    }
    
    public function stop(){
        $this->server->stop();
    }
    
    public function run(){
        $host = $this->server_conf['host'];
        $port = $this->server_conf['port'];
        $run_model = $this->server_conf['run_model'];
        $type = $this->server_conf['type'];
        $setting = $this->server_conf['setting'];
        
        $this->server = new \swoole_http_server($host,$port,$run_model,$type);
        $this->server->set($setting);
        
        $this->server->on('WorkerStart',function ($server, $worker_id){
            self::$db = new \swoole_mysql();
            self::$db->connect($this->db_conf,function($db,$r){
                if ($r === false) {
                    var_dump($db->connect_errno, $db->connect_error);
                    die;
                }
            });
        });
        
        $this->server->on('request',function($request, $response){
            $this->dispatch($request, $response);
        });
        $this->server->start();
    }
    
    public function dispatch($request,$response){
        $path = $request->server['path_info'];
        $path_info = explode('/',$path);
        print_r($path_info);
        $controller = !empty($path_info[1])?ucfirst($path_info[1]):'Index';
        $action = !empty($path_info[2])?$path_info[2]:'index';
        
        $finalClass = 'app\\controller\\'.$controller;
        
        if(class_exists($finalClass)){
            $con = new $finalClass($request,$response);
            $res = $con->$action();
            $response->write($res);
        }else{
            echo 'class not found\n';
        }
    }
}