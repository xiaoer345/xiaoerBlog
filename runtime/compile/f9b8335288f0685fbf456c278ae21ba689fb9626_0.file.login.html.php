<?php
/* Smarty version 3.1.31, created on 2018-02-11 19:53:00
  from "/mnt/hgfs/share/jiswoole/app/view/templates/login.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a802e9c80f515_65539199',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9b8335288f0685fbf456c278ae21ba689fb9626' => 
    array (
      0 => '/mnt/hgfs/share/jiswoole/app/view/templates/login.html',
      1 => 1518265634,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a802e9c80f515_65539199 (Smarty_Internal_Template $_smarty_tpl) {
?>
<!DOCTYPE html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>小二论坛/登录</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<link href="https://cdn.bootcss.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="/static/css/animate.css">
	<link rel="stylesheet" href="/static/css/style.css">

	</head>
	<body class="style-3">
		<div class="container">
			<div class="row">
				<div class="col-md-4 col-md-offset-4">
					<form action="handleLogin" class="fh5co-form animate-box" id="ajax-form" data-animate-effect="fadeIn" method="post">
						<h2 style="text-align:center;">登录小二博客</h2>
						<div class="form-group">
							<label for="username" class="sr-only">用户名</label>
							<input type="text" class="form-control" id="username" name="username" placeholder="用户名或邮箱" autocomplete="on" required>
						</div>
						<div class="form-group">
							<label for="password" class="sr-only">密码</label>
							<input type="password" class="form-control" id="password" name="password" placeholder="密码" autocomplete="off" required>
						</div>						
						<div class="form-group">
							<input type="submit" value="登录" class="btn btn-primary" id="ajax-submit" style="width:100%">
						</div>
					</form>
				</div>
			</div>
		</div>	
	<?php echo '<script'; ?>
 src="/static/js/jquery.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/static/js/bootstrap.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/static/js/jquery.form.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
 src="/static/js/noty/jquery.noty.min.js"><?php echo '</script'; ?>
>
	<?php echo '<script'; ?>
>
	    ;(function(){	    	
	    	//异步提交表单信息
			var options = {
				success:function(data,statusText){
					
					data = $.parseJSON(data);
					if(data.code>0){
						noty({
                            text: data.msg,
                            type: 'success',
                            layout: 'topCenter',
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
                            callback:{
                            	afterClose:function(){
                            	}
                            }
                        });
					}
				}
			}
			$('#ajax-form').submit(function(){
				$(this).ajaxSubmit(options);
				return false;
			})
	    })();
	<?php echo '</script'; ?>
>
	</body>
</html>

<?php }
}
