<?php
/* Smarty version 3.1.31, created on 2018-02-11 19:06:06
  from "/mnt/hgfs/share/jiswoole/app/view/templates/view.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a80239e6d29d9_41659837',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec1fef84f7865ff6f026522b3d576e401a338680' => 
    array (
      0 => '/mnt/hgfs/share/jiswoole/app/view/templates/view.html',
      1 => 1518347006,
      2 => 'file',
    ),
    '8109e9e394c57869368f4e52b548d1fca6c8af24' => 
    array (
      0 => '/mnt/hgfs/share/jiswoole/app/view/templates/header.html',
      1 => 1518337782,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5a80239e6d29d9_41659837 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta content="" name="description" />
    <title>小二博客</title>
    <link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" />
    <link href="https://cdn.bootcss.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />
    <link href="/static/css/custom-styles.css" rel="stylesheet" />
    <link href="/static/umeditor/themes/default/css/umeditor.min.css" rel="stylesheet" />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index"><strong><i class="icon fa fa-bolt"></i> 小二博客</strong></a>				
				<div id="sideNav">
				    <i class="fa fa-bars icon"></i> 
				</div>
            </div>

            <ul class="nav navbar-top-links navbar-right">              
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false" style="color:#000">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> 个人中心</a>
                        </li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> 退出</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li>
                        <a class="active-menu" href="index"><i class="fa fa-dashboard"></i> 首页</a>
                    </li> 
					 
					<li>
                        <a href="#"><i class="fa fa-book"></i> 文章管理<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="post"><i class="fa fa-pencil"></i>文章发布</a>
                            </li>
                            <li>
                                <a href="cat"><i class="fa fa-star"></i>文章分类</a>
                            </li>
						</ul>
					</li>	
							
                    <li>
                        <a href="user"><i class="fa fa-user"></i> 个人中心</a>
                    </li>
                </ul>
            </div>
        </nav>



<div id="page-wrapper" style="margin-left:260px">
    <div class="header"> 
	    <ol class="breadcrumb">
			<li><a href="index">首页</a></li>
			<li class="active">文章</li>
		</ol> 
									
	</div>
    <div id="page-inner">        
        <div class="panel">
	        <div class="panel-body border-bottom">      
	            <div class="row">
	                <div class="col-lg-12 btn-group">
	                    <h3><a href="view?id=112">swoole简介</a></h3>                    
	                    <p class="post-content"><p><img src="http://192.168.40.129/upload/20180211/15183399537580.png"/><img src="http://192.168.40.129/upload/20180211/15183400008251.png"/><img src="http://192.168.40.129/upload/20180211/15183400401350.png"/><img src="http://192.168.40.129/upload/20180211/15183400926682.png"/><img src="http://192.168.40.129/upload/20180211/15183401058223.png"/></p><p style="margin-top: 15px; margin-bottom: 15px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 15px; white-space: normal;">PHP的异步、并行、高性能网络通信引擎，使用纯C语言编写，提供了<a href="http://undefined" style="color: rgb(66, 139, 202);">PHP语言的异步多线程服务器</a>，<a href="http://undefined" style="color: rgb(66, 139, 202);">异步TCP/UDP网络客户端</a>，<a href="http://undefined" style="color: rgb(66, 139, 202);">异步MySQL</a>，<a href="http://undefined" style="color: rgb(66, 139, 202);">异步Redis</a>，<a href="http://undefined" target="_blank" style="color: rgb(66, 139, 202);">数据库连接池</a>，<a href="http://undefined" style="color: rgb(66, 139, 202);">AsyncTask</a>，<a href="http://undefined" target="_blank" style="color: rgb(66, 139, 202);">消息队列</a>，<a href="http://undefined" style="color: rgb(66, 139, 202);">毫秒定时器</a>，<a href="http://undefined" style="color: rgb(66, 139, 202);">异步文件读写</a>，<a href="http://undefined" style="color: rgb(66, 139, 202);">异步DNS查询</a>。 Swoole内置了<a href="http://undefined" style="color: rgb(66, 139, 202);">Http/WebSocket服务器端</a>/<a href="http://undefined" style="color: rgb(66, 139, 202);">客户端</a>、<a href="http://undefined" style="color: rgb(66, 139, 202);">Http2.0服务器端</a>/<a href="http://undefined" style="color: rgb(66, 139, 202);">客户端</a>。</p><p style="margin-top: 15px; margin-bottom: 15px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 15px; white-space: normal;">Swoole底层内置了异步非阻塞、多线程的网络IO服务器。PHP程序员仅需处理事件回调即可，无需关心底层。与<code style="font-family: Consolas, &quot;Liberation Mono&quot;, Courier, monospace; font-size: 12px; padding: 0px 5px; color: rgb(51, 51, 51); white-space: nowrap; background: rgb(248, 248, 248); border-radius: 3px; border: 1px solid rgb(221, 221, 221); margin: 0px 2px;">Nginx</code>/<code style="font-family: Consolas, &quot;Liberation Mono&quot;, Courier, monospace; font-size: 12px; padding: 0px 5px; color: rgb(51, 51, 51); white-space: nowrap; background: rgb(248, 248, 248); border-radius: 3px; border: 1px solid rgb(221, 221, 221); margin: 0px 2px;">Tornado</code>/<code style="font-family: Consolas, &quot;Liberation Mono&quot;, Courier, monospace; font-size: 12px; padding: 0px 5px; color: rgb(51, 51, 51); white-space: nowrap; background: rgb(248, 248, 248); border-radius: 3px; border: 1px solid rgb(221, 221, 221); margin: 0px 2px;">Node.js</code>等全异步的框架不同，Swoole既支持全异步，也支持同步。</p><p style="margin-top: 15px; margin-bottom: 15px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 15px; white-space: normal;">除了异步IO的支持之外，Swoole为PHP多进程的模式设计了多个并发数据结构和IPC通信机制，可以大大简化多进程并发编程的工作。其中包括了<a href="http://undefined" style="color: rgb(66, 139, 202);">并发原子计数器</a>，<a href="http://undefined" style="color: rgb(66, 139, 202);">并发HashTable</a>，<a href="http://undefined" style="color: rgb(66, 139, 202);">Channel</a>，<a href="http://undefined" style="color: rgb(66, 139, 202);">Lock</a>，<a href="http://undefined" style="color: rgb(66, 139, 202);">进程间通信IPC</a>等丰富的功能特性。</p><p style="margin-top: 15px; margin-bottom: 15px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 15px; white-space: normal;">Swoole从2.0版本开始支持了<strong><a href="http://undefined" style="color: rgb(66, 139, 202);">内置协程</a></strong>，可以使用完全同步的代码实现异步程序。PHP代码无需额外增加任何关键词，底层自动进行协程调度，实现异步。</p><p style="margin-top: 15px; margin-bottom: 15px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 15px; white-space: normal;"><strong>Swoole</strong>可以广泛应用于互联网、移动通信、企业软件、网络游戏、物联网、车联网、智能家庭等领域。 使用<code style="font-family: Consolas, &quot;Liberation Mono&quot;, Courier, monospace; font-size: 12px; padding: 0px 5px; color: rgb(51, 51, 51); white-space: nowrap; background: rgb(248, 248, 248); border-radius: 3px; border: 1px solid rgb(221, 221, 221); margin: 0px 2px;">PHP+Swoole</code>作为网络通信框架，可以使企业IT研发团队的效率大大提升，更加专注于开发创新产品。</p><p style="margin-top: 15px; margin-bottom: 15px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 15px; white-space: normal;">Swoole是开源免费的自由软件，授权协议是<code style="font-family: Consolas, &quot;Liberation Mono&quot;, Courier, monospace; font-size: 12px; padding: 0px 5px; color: rgb(51, 51, 51); white-space: nowrap; background: rgb(248, 248, 248); border-radius: 3px; border: 1px solid rgb(221, 221, 221); margin: 0px 2px;">Apache2.0</code>。企业和个人开发者均可免费使用Swoole的代码，并且在Swoole之上所作的修改可用于商业产品，无需开源（注：必须保留原作者的版权声明）。</p><blockquote style="padding: 0px 15px; border-left-width: 4px; border-left-color: green; color: green; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 15px; white-space: normal;"><p style="margin-top: 0px; margin-bottom: 0px; font-size: 14px; line-height: 25.2px;"><code style="font-family: Consolas, &quot;Liberation Mono&quot;, Courier, monospace; font-size: 12px; padding: 0px 5px; color: rgb(51, 51, 51); white-space: nowrap; background: rgb(248, 248, 248); border-radius: 3px; border: 1px solid rgb(221, 221, 221); margin: 0px 2px;">1.8.7</code>或更高版本已完全兼容<code style="font-family: Consolas, &quot;Liberation Mono&quot;, Courier, monospace; font-size: 12px; padding: 0px 5px; color: rgb(51, 51, 51); white-space: nowrap; background: rgb(248, 248, 248); border-radius: 3px; border: 1px solid rgb(221, 221, 221); margin: 0px 2px;">PHP7</code><br/><code style="font-family: Consolas, &quot;Liberation Mono&quot;, Courier, monospace; font-size: 12px; padding: 0px 5px; color: rgb(51, 51, 51); white-space: nowrap; background: rgb(248, 248, 248); border-radius: 3px; border: 1px solid rgb(221, 221, 221); margin: 0px 2px;">2.0.12</code>版本开始不再支持<code style="font-family: Consolas, &quot;Liberation Mono&quot;, Courier, monospace; font-size: 12px; padding: 0px 5px; color: rgb(51, 51, 51); white-space: nowrap; background: rgb(248, 248, 248); border-radius: 3px; border: 1px solid rgb(221, 221, 221); margin: 0px 2px;">PHP5</code></p></blockquote><ul style="padding: 0px 0px 0px 30px; margin: 15px 0px; font-family: &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-size: 15px; white-space: normal;"><li>国内Git镜像：<a href="http://undefined" target="_blank" style="color: rgb(66, 139, 202);">https://gitee.com/swoole/swoole</a></li><li>新手入门教程：<a href="http://undefined" target="_blank" style="color: rgb(66, 139, 202);">https://www.gitbook.com/book/linkeddestiny/easy-swoole/details</a></li><li>IDE自动提示工具 php-reflection-code：<a href="http://undefined" target="_blank" style="color: rgb(66, 139, 202);">https://github.com/flyhope/php-reflection-code</a></li><li>IDE自动提示工具 swoole-ide-helper：<a href="http://undefined" target="_blank" style="color: rgb(66, 139, 202);">https://github.com/eaglewu/swoole-ide-helper</a></li><li>下载离线CHM文档：&nbsp;<a href="http://undefined" target="_blank" style="color: rgb(66, 139, 202);">https://github.com/smalleyes/swoole-chm</a></li><li>HHVM-Swoole：<a href="http://undefined" target="_blank" style="color: rgb(66, 139, 202);">https://github.com/swoole/hhvm-swoole</a></li><li>C++-Swoole：<a href="http://undefined" target="_blank" style="color: rgb(66, 139, 202);">https://github.com/swoole/cpp-swoole</a></li><li>Swoole Docset:&nbsp;<a href="http://undefined" target="_blank" style="color: rgb(66, 139, 202);">https://github.com/halfstring/swoole-chinese-docset</a></li></ul><p><br/></p></p>
	                </div>
	            </div>
	        </div>
        </div>
    </div>
</div>

    <script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="/static/js/jquery.metisMenu.js"></script>
    <script src="/static/js/custom-scripts.js"></script>
</div>
</body>
</html>
<?php }
}
