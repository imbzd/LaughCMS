<?php /* Smarty version Smarty-3.1.12, created on 2013-01-21 09:58:15
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\public\menu_index.html" */ ?>
<?php /*%%SmartyHeaderCode:2283050fca0b7eb27f9-63171383%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bae36965c3c10c6c8ed039ae9178ff98831d6d9e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\public\\menu_index.html',
      1 => 1358318502,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2283050fca0b7eb27f9-63171383',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50fca0b7eb77f4_11491291',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50fca0b7eb77f4_11491291')) {function content_50fca0b7eb77f4_11491291($_smarty_tpl) {?><!-- menu -->
<div class="menu">
    <ul>
        <li class="menulist">
			<div class="menutree1"><a target="main" hidefocus="true" href="javascript:;" class="plus">基本信息</a></div>
			<ul class="menusub">
				<li class="menuTopLine"></li>
				<li><a hidefocus="true" href="__APP__/index.php?s=Public/welcome" target="main">系统主页</a></li>
				<li><a hidefocus="true" href="__APP__/index.php?s=Admin/profile" target="main">个人信息</a></li>
			</ul>
		</li>
    </ul>
</div>
<script type="text/javascript">
$(document).ready(function (){
	$("li.menulist:eq(0) > div.menutree1 > a").addClass("mius");
	$("li.menulist > ul.menusub").css("display","block");
	// $("li.menulist:eq(0) > ul.menusub > li:eq(1) > a").addClass('tabon');
});
</script><?php }} ?>