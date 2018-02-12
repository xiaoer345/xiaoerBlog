<?php
namespace JiSwoole;

class Controller
{
    private $_smarty;
    private $_request;
    private $_response;
    
    public function __construct($request,$response){
        $this->_request = $request;
        $this->_response = $response;
    }
    
    public function getResquest(){
        return $this->_request;
    }
    public function getResponse(){
        return $this->_response;
    }
    
    public function getSmarty(){
        if($this->_smarty==null){
            $this->_smarty = Server::$smarty;
        }
        return $this->_smarty;
    }
    
    public function assign($key,$val){
        $this->getSmarty()->assign($key,$val);
    }
    
    public function render($temp){
        return $this->getSmarty()->fetch($temp);
    }
}