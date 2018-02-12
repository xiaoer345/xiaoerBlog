<?php

namespace app\controller;
use JiSwoole\Controller;
use JiSwoole\Server;



class Index extends Controller
{
    public function index(){        
        $request = $this->getResquest();
        $response = $this->getResponse();        
        
        Server::$db->query("select * from post",function($link,$res)use($response){
            if($res===false){
                var_dump($link->error);
            }else{
                if(!empty($res)){
                    foreach($res as &$item){
                        $item['content'] = substr(str_replace('&nbsp;','',strip_tags($item['content'])),0,320);
                    }
                    var_dump($res);
                    $this->assign('list', $res);                   
                    $response->write($this->render('index.html'));
                }else{
                    var_dump('error');
                }
            }
        });
    }
    
    public function login(){
        return $this->render('login.html');
    }
    public function logout(){
        $response = $this->getResponse();
        $response->cookie('username',time()-60);
        return $this->render('login.html');
    }
    public function handleLogin(){
        $request = $this->getResquest();
        $response = $this->getResponse();
        $username = $request->post['username'];
        $password = $request->post['password'];
        $ret = [];
        
        Server::$db->query('select * from `user` where username=\''.$username.'\'',function($link,$res) use($ret,$password,$response,$username){
            if($res===false){
                var_dump($link->error);
            }else{
                if(!empty($res)){
                    var_dump($res);
                    if($res[0]['password_hash']===$password){
                        $ret['code'] = 1;
                        $ret['msg'] = 'login success';
                        $ret['url'] = 'index';
                        $response->cookie('username',$username,time()+60*60*24*5);
                        $response->write(json_encode($ret));
                        $user = $res[0];
                    }else{
                        $ret['code'] = 0;
                        $ret['msg'] = 'password not right';
                        $response->write(json_encode($ret));
                    }
                }else{
                    $ret['code'] = 0;
                    $ret['msg'] = 'user not exists';
                    $response->write(json_encode($ret));
                }
            }
        });
    }
    
    public function post(){
        return $this->render('post.html');
    }
    
    public function doPost(){
        $request = $this->getResquest();
        $response = $this->getResponse();
        $title = $request->post['title'];
        $content = $request->post['content'];
        
        Server::$db->query("insert into post (title,content) values "."('$title','$content')",function($link,$res)use($response){
            if($res===false){
                var_dump($link->error);
            }else{
                if($res>0){
                    $ret = [
                        'code' => 1,
                        'msg'  => 'post success',
                        'url'  => 'post'
                    ];
                    $response->write(json_encode($ret));
                }else{
                    $ret = [
                        'code' => 0,
                        'msg'  => 'post failed',
                        'url'  => 'post'
                    ];
                    $response->write(json_encode($ret));
                }
            }
        });
    }
    

    public function view(){
        $request = $this->getResquest();
        $response = $this->getResponse();
        $id = $request->get['id'];
        
        var_dump($id);
        
        Server::$db->query("select * from post where id=$id",function($link,$res)use($response){
            if($res===false){
                var_dump($link->error);
            }else{
                if(!empty($res)){
                    $this->assign('post', $res[0]);
                    $response->write($this->render('view.html'));
                }else{
                    var_dump('error');
                }
            }
        });
    }
    
    public function cat(){
        
    }
    
    public function imageUp(){
        $request = $this->getResquest();
        $response = $this->getResponse();
        include "Uploader.class.php";
        //上传配置
        $config = array(
            "savePath" => "upload/" ,             //存储文件夹
            "maxSize" => 2000 ,                   //允许的文件最大尺寸，单位KB
            "allowFiles" => array( ".gif" , ".png" , ".jpg" , ".jpeg" , ".bmp" )  //允许的文件格式
        );
        //上传文件目录
        $Path = "upload/";
        
        //背景保存在临时目录中
        $config[ "savePath" ] = $Path;
        $up = new \Uploader( "upfile" , $config,$request );
        $type = $request->post['type'];
        $callback=$request->get['callback'];
        
        $info = $up->getFileInfo();
        /**
         * 返回数据
         */
        if($callback) {
            $response->write('<script>'.$callback.'('.json_encode($info).')</script>');
        } else {
            $response->write(json_encode($info));
        }
        
    }
}