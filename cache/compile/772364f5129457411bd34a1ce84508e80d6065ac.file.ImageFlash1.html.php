<?php /* Smarty version Smarty-3.1.12, created on 2013-04-08 17:40:39
         compiled from "C:\xampp\htdocs\laugh\themes\default\Common\ImageFlash1.html" */ ?>
<?php /*%%SmartyHeaderCode:291865162909727afc9-90742321%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '772364f5129457411bd34a1ce84508e80d6065ac' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Common\\ImageFlash1.html',
      1 => 1364281562,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '291865162909727afc9-90742321',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'HomeScrollIMageList' => 0,
    'd' => 0,
    'HomeScrollIMageListCount' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_516290972d9d38_88542381',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516290972d9d38_88542381')) {function content_516290972d9d38_88542381($_smarty_tpl) {?><link media="screen" href="public/plugin/xslider/xslider.css" rel="stylesheet" type="text/css">
<div id="SImageContainer" class="slider">
	<div class="conbox">
		<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['HomeScrollIMageList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
		<div><a href="<?php echo $_smarty_tpl->tpl_vars['d']->value['link'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
"><img src="__APP__<?php echo $_smarty_tpl->tpl_vars['d']->value['path'];?>
" alt="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
" width="730" height="300"></a></div>
		<?php } ?>
	</div>
	<div class="switcher">
		<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['HomeScrollIMageListCount']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
		<a href="javascript:;" <?php if ($_smarty_tpl->tpl_vars['d']->value==1){?>class="cur"<?php }?>><?php echo $_smarty_tpl->tpl_vars['d']->value;?>
</a>
		<?php } ?>
	</div>
</div><!--slider end-->
<script type="text/javascript" src="public/plugin/xslider/jquery.Xslider.js"></script>
<script type="text/javascript">
$(document).ready(function(){
// 焦点图片淡隐淡现
$("#SImageContainer").Xslider({
	affect: 'fade', //效果  有scrollx|scrolly|fade|none
	speed: 800, //动画速度
	space: 6000, //时间间隔
	auto: true, //自动滚动
	trigger: 'mouseover', //触发事件 注意用mouseover代替hover
	conbox: '.conbox', //内容容器id或class
	ctag: 'div', //内容标签 默认为<a>
	switcher: '.switcher', //切换触发器id或class
	stag: 'a', //切换器标签 默认为a
	current:'cur', //当前切换器样式名称
	rand:false //是否随机指定默认幻灯图片
});
});
</script><?php }} ?>