<?php /* Smarty version Smarty-3.1.12, created on 2012-11-08 17:29:30
         compiled from "C:\xampp\htdocs\laugh\admin\themes\smooth\index.html" */ ?>
<?php /*%%SmartyHeaderCode:9524509b7b7a89eaa2-97667916%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a875a68efbc1fa1e954cb731464c750ace3709de' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\smooth\\index.html',
      1 => 1352362039,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9524509b7b7a89eaa2-97667916',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_509b7b7a8ea536_45599957',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509b7b7a8ea536_45599957')) {function content_509b7b7a8ea536_45599957($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("sitemap.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="colors-switcher" class="color">
	<a href="" class="blue" title="Blue"></a>
	<a href="" class="green" title="Green"></a>
	<a href="" class="brown" title="Brown"></a>
	<a href="" class="purple" title="Purple"></a>
	<a href="" class="red" title="Red"></a>
	<a href="" class="greyblue" title="GreyBlue"></a>
</div>
<iframe frameborder="0" id="head" name="head" src="__APP__/?s=public/head" scrolling="no" style="position:absolute; width:100%; height:110px; visibility:inherit; z-index:1; overflow:auto;">
</iframe>
<iframe frameborder="0" id="body" name="body" src="__APP__/?s=public/body" scrolling="no" style="width:100%; height:100%; z-index:1; overflow:auto;">
</iframe>
<style>
body {
	padding: 0;
	margin: 0;
    overflow:hidden;
}
</style>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>