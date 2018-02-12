<?php
/* Smarty version 3.1.31, created on 2018-02-11 18:50:27
  from "/mnt/hgfs/share/jiswoole/app/view/templates/index.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5a801ff347ab83_76090518',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f9dd10aaf557b1bb168bceab41bcf7d81c04e0c6' => 
    array (
      0 => '/mnt/hgfs/share/jiswoole/app/view/templates/index.html',
      1 => 1518346212,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.html' => 1,
  ),
),false)) {
function content_5a801ff347ab83_76090518 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->compiled->nocache_hash = '3643073625a801ff33e43b2_57365677';
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
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'item');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
?>
        <div class="panel">
	        <div class="panel-body border-bottom">      
	            <div class="row">
	                <div class="col-lg-12 btn-group">
	                    <h3><a href="view?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['item']->value['title'];?>
</a></h3>                    
	                    <p class="post-content"><?php echo $_smarty_tpl->tpl_vars['item']->value['content'];?>
</p>
	                    <a href="view?id=<?php echo $_smarty_tpl->tpl_vars['item']->value['id'];?>
"><button class="btn btn-warning no-radius btn-sm pull-right">阅读全文</button></a>
	                </div>
	            </div>
	        </div>
        </div>
        <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>

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
