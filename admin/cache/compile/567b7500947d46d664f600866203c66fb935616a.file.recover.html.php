<?php /* Smarty version Smarty-3.1.12, created on 2013-04-01 11:55:21
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\Article\recover.html" */ ?>
<?php /*%%SmartyHeaderCode:3119551590529b908a7-85717346%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '567b7500947d46d664f600866203c66fb935616a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\Article\\recover.html',
      1 => 1364788364,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3119551590529b908a7-85717346',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'accessStatus' => 0,
    'dataList' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51590529cb2dd7_08389752',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51590529cb2dd7_08389752')) {function content_51590529cb2dd7_08389752($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="captitle"><h5>文档回收站 【目前共有<?php if ($_smarty_tpl->tpl_vars['total']->value){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>条文档】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l30"></li>
	<li class="table_list_l table_list_l50">ID</li>
	<li class="table_list_l table_list_l300">文档标题</li>
	<li class="table_list_l table_list_l150">更新时间</li>
	<li class="table_list_l table_list_l120">所属栏目</li>
	<li class="table_list_l table_list_l100">文档作者</li>
	<li class="table_list_l table_list_l80">点击数</li>
	<li class="table_list_l table_list_l80">评论数</li>
	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
	<li class="table_list_l table_list_l120" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>操作</li>
	<?php }?>
</ul>
<div class="contentTableList">
    <?php if ($_smarty_tpl->tpl_vars['dataList']->value){?>
    <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dataList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
    <ul class="table_list">
		<li class="table_list_l table_list_l30">
			<input type="checkbox" name="archiveid[]" value="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" flag="archiveID" class="checkbox" />
		</li>
		<li class="table_list_l table_list_l50"><?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
</li>
		<li class="table_list_l table_list_l300" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
">
			<?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>

		</li>
    	<li class="table_list_l table_list_l150"><?php echo mkdate($_smarty_tpl->tpl_vars['d']->value['updatetime']);?>
</li>
    	<li class="table_list_l table_list_l120"><?php echo $_smarty_tpl->tpl_vars['d']->value['columnname'];?>
</li>
		<li class="table_list_l table_list_l100"><?php echo $_smarty_tpl->tpl_vars['d']->value['author'];?>
</li>
		<li class="table_list_l table_list_l80"><?php echo $_smarty_tpl->tpl_vars['d']->value['clicknum'];?>
</li>
		<li class="table_list_l table_list_l80"><?php echo $_smarty_tpl->tpl_vars['d']->value['commentnum'];?>
</li>
    	<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
    	<li class="table_list_l table_list_l120" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
    		<a href="__APP__/index.php?s=Article/edit&archiveid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">修改</a>
    		<a delurl="__APP__/index.php?s=Archive/backArchive&archiveid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" href="javascript:;" name="del" msg="确定还原吗？">还原</a>
    		<a delurl="__APP__/index.php?s=Archive/deleteArchive&archiveid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
    	<?php }?>
    </ul>
    <?php } ?>
    <?php }else{ ?>
    <ul class="table_list"><li class="table_list_center">空</li></ul>
    <?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("public/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Archive/recoverOpBottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>