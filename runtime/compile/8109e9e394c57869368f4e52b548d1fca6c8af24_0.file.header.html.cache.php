<?php
/* Smarty version 3.1.31, created on 2018-02-11 16:31:24
  from "/mnt/hgfs/share/jiswoole/app/view/templates/header.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a7fff5cc17ca0_40517860',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8109e9e394c57869368f4e52b548d1fca6c8af24' => 
    array (
      0 => '/mnt/hgfs/share/jiswoole/app/view/templates/header.html',
      1 => 1518337782,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a7fff5cc17ca0_40517860 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '9406506805a7fff5cbabf29_45340045';
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
                        <i class="fa fa-user fa-fw"></i> <?php echo $_smarty_tpl->tpl_vars['username']->value;?>
 <i class="fa fa-caret-down"></i>
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
<?php }
}
