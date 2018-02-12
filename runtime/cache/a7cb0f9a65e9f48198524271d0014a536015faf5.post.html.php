<?php
/* Smarty version 3.1.31, created on 2018-02-11 19:04:12
  from "/mnt/hgfs/share/jiswoole/app/view/templates/post.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a80232c698016_86964523',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '995857af95ba8e4e16212dcc32a3929ed043518c' => 
    array (
      0 => '/mnt/hgfs/share/jiswoole/app/view/templates/post.html',
      1 => 1518341510,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 120,
),true)) {
function content_5a80232c698016_86964523 (Smarty_Internal_Template $_smarty_tpl) {
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
			<li><a href="#">文章管理</a></li>
			<li class="active">文章发布</li>
		</ol> 
									
	</div>
    <div id="page-inner">
        <form action="doPost" method="post" id="ajax-form">
                <div class="form-group">
                    <input type="text" class="form-control" id="title" name="title" placeholder="标题" autocomplete="on" required>
                </div>
                <div class="form-group">
	                <select class="form-control" name="class">
					  <option>PHP</option>
					  <option>随想</option>
					</select>
				</div>
                <div class="form-group">
                    <script id="container" name="content" type="text/plain"></script>
                </div>
                <div class="form-group">
                    <input type="submit" value="发布" class="btn btn-primary" id="ajax-submit">
                </div>                
        </form>
    </div>
</div>


<script src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"></script>
<script src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="/static/js/jquery.metisMenu.js"></script>
<script src="/static/js/custom-scripts.js"></script>
<script src="/static/umeditor/umeditor.config.js"></script>
<script src="/static/umeditor/umeditor.min.js"></script>
<script src="/static/js/jquery.form.min.js"></script>
<script src="/static/js/noty/jquery.noty.min.js"></script>
<script type="text/javascript">
    var um = UM.getEditor('container');
    (function(){
    	var options = {
				success:function(data,statusText){
					data = $.parseJSON(data);
					if(data.code>0){
						noty({
                            text: data.msg,
                            type: 'success',
                            layout: 'center',
                            timeout: 1000,                            
                            callback:{
                            	afterClose:function(){
                            		window.location.href = data.url;
                            	}
                            }
                        });
					}
					else{
						noty({
                            text: data.msg,
                            type: 'error',
                            layout: 'topCenter',
                            timeout: 1000,                            
                        });
					}
				}
		}
		$('#ajax-form').submit(function(){
			$(this).ajaxSubmit(options);
			return false;
		});
    	
    })();
</script>
</div>
</body>
</html><?php }
}
