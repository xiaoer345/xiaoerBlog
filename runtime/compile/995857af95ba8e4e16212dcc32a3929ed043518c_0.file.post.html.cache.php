<?php
/* Smarty version 3.1.31, created on 2018-02-11 17:32:00
  from "/mnt/hgfs/share/jiswoole/app/view/templates/post.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a800d90242b10_69489491',
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
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5a800d90242b10_69489491 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '20420065175a800d901aa5a6_41060893';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>


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
                    <?php echo '<script'; ?>
 id="container" name="content" type="text/plain"><?php echo '</script'; ?>
>
                </div>
                <div class="form-group">
                    <input type="submit" value="发布" class="btn btn-primary" id="ajax-submit">
                </div>                
        </form>
    </div>
</div>


<?php echo '<script'; ?>
 src="https://cdn.bootcss.com/jquery/3.3.1/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="https://cdn.bootcss.com/bootstrap/4.0.0/js/bootstrap.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/static/js/jquery.metisMenu.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/static/js/custom-scripts.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/static/umeditor/umeditor.config.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/static/umeditor/umeditor.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/static/js/jquery.form.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 src="/static/js/noty/jquery.noty.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript">
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
<?php echo '</script'; ?>
>
</div>
</body>
</html><?php }
}
