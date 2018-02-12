# xiaoerBlog

![image](https://github.com/jitaoneng/xiaoerBlog/raw/master/login.png)
![image](https://github.com/jitaoneng/xiaoerBlog/raw/master/index.png)
![image](https://github.com/jitaoneng/xiaoerBlog/raw/master/post.png)
![image](https://github.com/jitaoneng/xiaoerBlog/raw/master/view.png)

环境配置：
win10+vmware workstation ubuntu16.04
nginx+mysql+swoole+smarty+umeditor
具体环境安装可百度
项目地址：https://github.com/jitaoneng/xiaoerBlog
项目主要探索一下swoole如何开发网站，当然swoole相较于开发网站更适合于做后端api服务，不过道理都是一样的。
项目中用nginx做了反向代理，静态资源类似js、css、jpg之类的交由nginx自己处理，遇到php代理到swoole服务器处理，配置如下
```
server {
        listen       80;
        server_name  localhost;

        set $web /mnt/hgfs/share/jiswoole/web;
        root $web;

        location / {
            proxy_http_version 1.1;
            proxy_set_header Connection "keep-alive";
            proxy_set_header X-Real-IP $remote_addr;
            proxy_pass http://127.0.0.1:9501;
        }

        location ~* .(ico|gif|bmp|jpg|png|swf|js|css|mp3)$ {
            root $web;
        }
}
```
路由做了最简处理，只支持http://localhost/controller/action 这类
入口文件web/index.php，该文件开启了swoole http server，用于处理请求
数据库用的也是最简单的
```
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增id',
  `username` varchar(255) NOT NULL COMMENT '用户名',
  `password_hash` varchar(255) NOT NULL COMMENT '加密密码',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COMMENT='会员表';

CREATE TABLE `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT '自增ID',
  `title` varchar(255) DEFAULT NULL COMMENT '标题',
  `content` text COMMENT '内容',
  PRIMARY KEY (`id`),
) ENGINE=InnoDB AUTO_INCREMENT=117 DEFAULT CHARSET=utf8 COMMENT='文章主表';
```
umeditor配置图片上传时需要注意的是，上传请求地址为http://localhost/index/imageUp
项目控制器文件在app/controller中，视图文件在app/view/template中

可通过 php ./web/index.php运行swoole服务器
