<?php /* Smarty version Smarty-3.1.12, created on 2012-12-06 17:27:13
         compiled from "C:\xampp\htdocs\laugh\admin\themes\blue\index.html" */ ?>
<?php /*%%SmartyHeaderCode:719050c064f132e667-33461839%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7249e1ef188191a46d10deb239c0ffedf222d91f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\blue\\index.html',
      1 => 1354762152,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '719050c064f132e667-33461839',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50c064f13832f0_97564746',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50c064f13832f0_97564746')) {function content_50c064f13832f0_97564746($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<link rel="stylesheet" type="text/css" href="themes/blue/style/frame.css" />
<link rel="stylesheet" type="text/css" href="themes/blue/style/header.css" />
<div id="header">
	<?php echo $_smarty_tpl->getSubTemplate ("public/header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div id="menuTree">
	<?php echo $_smarty_tpl->getSubTemplate ("public/menu_index.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<div id="main">
	<iframe frameborder="0" name="main" src="__APP__/?s=public/welcome" scrolling="yes"></iframe>
</div>
<div id="bottom">
	<?php echo $_smarty_tpl->getSubTemplate ("public/bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>