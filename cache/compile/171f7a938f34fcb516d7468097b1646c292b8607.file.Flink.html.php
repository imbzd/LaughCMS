<?php /* Smarty version Smarty-3.1.12, created on 2013-05-09 17:40:50
         compiled from "C:\xampp\htdocs\laugh\themes\default\Common\Flink.html" */ ?>
<?php /*%%SmartyHeaderCode:30630518b6f22aed1b6-09656431%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '171f7a938f34fcb516d7468097b1646c292b8607' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Common\\Flink.html',
      1 => 1367142638,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30630518b6f22aed1b6-09656431',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'FlinkList' => 0,
    'd' => 0,
    'd1' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_518b6f22babe79_24498343',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_518b6f22babe79_24498343')) {function content_518b6f22babe79_24498343($_smarty_tpl) {?><div id="Flink" class="boxBlock block">
	<div class="FlinkTitle">
		<span class="title">友情链接</span>
		<ul id="FlinkboxTab" class="boxTab fleft">
			<?php if (isset($_smarty_tpl->tpl_vars['FlinkList']->value)&&!empty($_smarty_tpl->tpl_vars['FlinkList']->value)){?>
			<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FlinkList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
			<li><a tabid="#flinkboxTab<?php echo $_smarty_tpl->tpl_vars['d']->value['autoIndex'];?>
" href="javascript:;" <?php if ($_smarty_tpl->tpl_vars['d']->value['autoIndex']==1){?>class="bordernone"<?php }?>><?php echo $_smarty_tpl->tpl_vars['d']->value['catalogname'];?>
</a></li>
			<?php } ?>
			<?php }?>
		</ul>
	</div>
	<div class="FlinkBody">
		<?php if (isset($_smarty_tpl->tpl_vars['FlinkList']->value)&&!empty($_smarty_tpl->tpl_vars['FlinkList']->value)){?>
		<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['FlinkList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
		<div id="flinkboxTab<?php echo $_smarty_tpl->tpl_vars['d']->value['autoIndex'];?>
" class="boxTabContent">
			<ul class="flinkList">
				<?php if (isset($_smarty_tpl->tpl_vars['d']->value['flinklist'])&&!empty($_smarty_tpl->tpl_vars['d']->value['flinklist'])){?>
				<?php  $_smarty_tpl->tpl_vars['d1'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d1']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['d']->value['flinklist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d1']->key => $_smarty_tpl->tpl_vars['d1']->value){
$_smarty_tpl->tpl_vars['d1']->_loop = true;
?>
				<li><a href="<?php echo $_smarty_tpl->tpl_vars['d1']->value['linkurl'];?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['d1']->value['linkname'];?>
</a></li>
				<?php } ?>
				<?php }?>
			</ul>
		</div>
		<?php } ?>
		<?php }?>
	</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
//友情链接切换tab
$("#Flink ul#FlinkboxTab").idTabs(function(id,list,set){
	$("a",set).removeClass("selected").filter("[tabid='"+id+"']",set).addClass("selected"); 
	for(i in list) $(list[i]).hide();
	$(id).fadeIn();
	return false;
});
});
</script><?php }} ?>