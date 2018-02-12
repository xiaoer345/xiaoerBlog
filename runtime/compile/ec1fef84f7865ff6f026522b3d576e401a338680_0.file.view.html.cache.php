<?php
/* Smarty version 3.1.31, created on 2018-02-11 19:03:48
  from "/mnt/hgfs/share/jiswoole/app/view/templates/view.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a8023146e0215_32845662',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ec1fef84f7865ff6f026522b3d576e401a338680' => 
    array (
      0 => '/mnt/hgfs/share/jiswoole/app/view/templates/view.html',
      1 => 1518347006,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5a8023146e0215_32845662 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '5153203015a80231464ed48_96686532';
$_smarty_tpl->_subTemplateRender("file:header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 9999, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



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
	                    <h3><a href="view?id=<?php echo $_smarty_tpl->tpl_vars['post']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['post']->value['title'];?>
</a></h3>                    
	                    <p class="post-content"><?php echo $_smarty_tpl->tpl_vars['post']->value['content'];?>
</p>
	                </div>
	            </div>
	        </div>
        </div>
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
</div>
</body>
</html>
<?php }
}
