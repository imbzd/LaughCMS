<?php /* Smarty version Smarty-3.1.11, created on 2012-10-15 09:22:17
         compiled from "C:\xampp\htdocs\laugh\admin\themes\default\public\body.html" */ ?>
<?php /*%%SmartyHeaderCode:4988507b6549b970a4-73354795%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '54a51c1a40a938beca605e41ad271323ff45128d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\default\\public\\body.html',
      1 => 1349574506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4988507b6549b970a4-73354795',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'groupid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_507b6549bdd3c2_98166106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507b6549bdd3c2_98166106')) {function content_507b6549bdd3c2_98166106($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<table border="0" cellPadding="0" cellSpacing="0" style="width:100%; height:100%; table-layout:fixed;">
 <tr><td width="160" height="90"></td><td></td></tr>
 <tr>
  <td valign="top">
   <iframe frameborder="0" id="menu" name="menu" width="160px" height="100%" src="__APP__/?s=public/menu&groupid=<?php echo $_smarty_tpl->tpl_vars['groupid']->value;?>
" scrolling="auto" class="iframe"></iframe>
  </td>
  <td valign="top">
   <iframe frameborder="0" id="main" name="main" width="100%" height="100%" src="__APP__/?s=public/welcome" scrolling="yes" class="iframe"></iframe>
  </td>
 </tr>
</table>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>