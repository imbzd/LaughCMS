<?php /* Smarty version Smarty-3.1.12, created on 2013-12-29 21:39:04
         compiled from "F:\website\laugh\admin\themes\blue\Public\menu.html" */ ?>
<?php /*%%SmartyHeaderCode:3086252c025f88b54b9-59190434%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ef20c721df5ee61dd543d84f7ec15a9a9ff94dcd' => 
    array (
      0 => 'F:\\website\\laugh\\admin\\themes\\blue\\Public\\menu.html',
      1 => 1367154234,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3086252c025f88b54b9-59190434',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'menu' => 0,
    'm' => 0,
    'm1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52c025f893bd10_84491355',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52c025f893bd10_84491355')) {function content_52c025f893bd10_84491355($_smarty_tpl) {?><!-- menu -->
<div class="menu">
    <ul>
        <?php  $_smarty_tpl->tpl_vars['m'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['menu']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m']->key => $_smarty_tpl->tpl_vars['m']->value){
$_smarty_tpl->tpl_vars['m']->_loop = true;
?>
		<li class="menulist">
			<div class="menutree1"><a target="main" hidefocus="true" href="javascript:;" class="mius"><?php echo $_smarty_tpl->tpl_vars['m']->value['title'];?>
</a></div>
			<?php if (array_key_exists('cnode',$_smarty_tpl->tpl_vars['m']->value)){?>
			<ul class="menusub">
				<?php  $_smarty_tpl->tpl_vars['m1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['m1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['m']->value['cnode']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['m1']->key => $_smarty_tpl->tpl_vars['m1']->value){
$_smarty_tpl->tpl_vars['m1']->_loop = true;
?>
				<li><a target="main" hidefocus="true" href="__APP__/index.php?s=<?php echo $_smarty_tpl->tpl_vars['m1']->value['control'];?>
/<?php echo $_smarty_tpl->tpl_vars['m1']->value['action'];?>
" class=""><?php echo html_entity_decode($_smarty_tpl->tpl_vars['m1']->value['title']);?>
</a></li>
				<?php } ?>
			</ul>
			<?php }?>
		</li>
        <?php } ?>
    </ul>
</div>
<div id="menuSlide" class="menuSlide">
	<div class="menuSlidebg menuSlidebg1"></div>
</div><?php }} ?>