<?php /* Smarty version Smarty-3.1.12, created on 2012-11-08 23:18:37
         compiled from "/usr/local/webserver/site/laugh/admin/themes/smooth/public/body.html" */ ?>
<?php /*%%SmartyHeaderCode:1260986286509bcd4d18fda6-13394323%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '87764153e51375410ad4d4f0c7d4d2e04c381445' => 
    array (
      0 => '/usr/local/webserver/site/laugh/admin/themes/smooth/public/body.html',
      1 => 1352383070,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1260986286509bcd4d18fda6-13394323',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groupid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_509bcd4d1d51f3_82428763',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_509bcd4d1d51f3_82428763')) {function content_509bcd4d1d51f3_82428763($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<table border="0" cellPadding="0" cellSpacing="0" style="width:100%; height:100%; table-layout:fixed;">
 <tr><td width="280" height="110"></td><td></td></tr>
 <tr>
  <td valign="top">
   <iframe frameborder="0" id="menu" name="menu" width="280px" height="100%" src="__APP__/?s=public/menu&groupid=<?php echo $_smarty_tpl->tpl_vars['groupid']->value;?>
" scrolling="none" class="iframe"></iframe>
  </td>
  <td valign="top">
   <iframe frameborder="0" id="main" name="main" width="100%" height="100%" src="__APP__/?s=public/welcome" scrolling="auto" class="iframe"></iframe>
  </td>
 </tr>
</table>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>