<?php /* Smarty version Smarty-3.1.12, created on 2013-09-15 16:55:42
         compiled from "F:\website\laugh\themes\default\include\foot.html" */ ?>
<?php /*%%SmartyHeaderCode:234385235760e322299-30851436%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '28a0e019233b9070f0b0fb71f449b813559a1035' => 
    array (
      0 => 'F:\\website\\laugh\\themes\\default\\include\\foot.html',
      1 => 1369103280,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '234385235760e322299-30851436',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FootNavigationList' => 0,
    'd' => 0,
    'Config' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5235760e36a701_31737722',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5235760e36a701_31737722')) {function content_5235760e36a701_31737722($_smarty_tpl) {?><div id="Footer">
	<ul id="Link">
		<?php if (isset($_smarty_tpl->tpl_vars['FootNavigationList']->value)&&!empty($_smarty_tpl->tpl_vars['FootNavigationList']->value)){?>
		<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FootNavigationList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
		<li <?php if ($_smarty_tpl->tpl_vars['d']->value['AutoIndex']==1){?>class="bordernone"<?php }?>><a href="<?php echo $_smarty_tpl->tpl_vars['d']->value['link'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</a></li>
		<?php } ?>
		<?php }?>
	</ul>
	<div id="copyright">
		<?php echo $_smarty_tpl->tpl_vars['Config']->value['sitename'];?>

		<br/>
		Powered by <a target="_blank" href="javascript:;">LaughCMS v1.0 Released</a> 版权所有 © 2012-2013, All right reserved. 
	</div>
</div>
<script type="text/javascript" src="public/js/scrollToTop.js"></script>
<?php echo $_smarty_tpl->getSubTemplate ("include/share1.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</body>
</html><?php }} ?>