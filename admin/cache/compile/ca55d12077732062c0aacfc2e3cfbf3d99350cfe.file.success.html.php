<?php /* Smarty version Smarty-3.1.12, created on 2013-05-07 16:30:49
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\Common\success.html" */ ?>
<?php /*%%SmartyHeaderCode:98455188bbb9a66da7-52333268%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca55d12077732062c0aacfc2e3cfbf3d99350cfe' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\Common\\success.html',
      1 => 1367914862,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '98455188bbb9a66da7-52333268',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'NextOperation' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5188bbb9afb886_18114379',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5188bbb9afb886_18114379')) {function content_5188bbb9afb886_18114379($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="control_nav"><h3>系统提示</h3></div>
<div class="opinfo">
	<div class="opinfo_msg">操作成功！</div>
	<div class="opinfo_Link">
		<?php if (isset($_smarty_tpl->tpl_vars['NextOperation']->value)&&is_array($_smarty_tpl->tpl_vars['NextOperation']->value)&&!empty($_smarty_tpl->tpl_vars['NextOperation']->value)){?>
		<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['NextOperation']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
		<a href="<?php echo $_smarty_tpl->tpl_vars['d']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['name'];?>
</a>&nbsp;&nbsp;&nbsp;
		<?php } ?>
		<?php }?>
	</div>
</div>
<style type="text/css">
#control #controlContent {
    border: 1px solid #3A6EA5;
}
.opinfo {
	height: auto;
	overflow: hidden;
	padding: 10px 21px 20px 21px;
	border-top: 1px solid #3A6EA5;
}
.opinfo .opinfo_msg {
	padding: 10px 0;
	color: #006600;
	font-weight: 600;
	border-bottom: 1px dashed #E2E9EA;
}
.opinfo .opinfo_Link {
	padding-top: 10px;
}
</style>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>