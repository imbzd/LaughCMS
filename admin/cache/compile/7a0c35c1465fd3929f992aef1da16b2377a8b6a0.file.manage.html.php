<?php /* Smarty version Smarty-3.1.12, created on 2013-12-28 22:12:41
         compiled from "F:\website\laugh\admin\themes\blue\Role\manage.html" */ ?>
<?php /*%%SmartyHeaderCode:1916052bedc5906c8a4-69000151%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a0c35c1465fd3929f992aef1da16b2377a8b6a0' => 
    array (
      0 => 'F:\\website\\laugh\\admin\\themes\\blue\\Role\\manage.html',
      1 => 1381140859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1916052bedc5906c8a4-69000151',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'total' => 0,
    'accessStatus' => 0,
    'roleList' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_52bedc59225822_49008163',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_52bedc59225822_49008163')) {function content_52bedc59225822_49008163($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="captitle"><h5>角色列表 【目前共有<?php if ($_smarty_tpl->tpl_vars['total']->value){?><?php echo $_smarty_tpl->tpl_vars['total']->value;?>
<?php }else{ ?>0<?php }?>条数据】</h5></div>
<ul class="table_list_title">
	<li class="table_list_l table_list_l150">角色名</li>
	<li class="table_list_l table_list_l200">描述</li>
	<li class="table_list_l table_list_l150">创建时间</li>
    <?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
	<li class="table_list_l table_list_l100" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>状态</li>
	<li class="table_list_l table_list_l150" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>操作</li>
    <?php }?>
</ul>
<div class="contentTableList">
    <?php if ($_smarty_tpl->tpl_vars['roleList']->value){?>
    <?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['roleList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
    <ul class="table_list">
		<li class="table_list_l table_list_l150"><?php echo $_smarty_tpl->tpl_vars['d']->value['name'];?>
</li>
		<li class="table_list_l table_list_l200" title="<?php echo $_smarty_tpl->tpl_vars['d']->value['remark'];?>
"><?php echo $_smarty_tpl->tpl_vars['d']->value['remark'];?>
</li>
    	<li class="table_list_l table_list_l150"><?php echo mkdate($_smarty_tpl->tpl_vars['d']->value['createtime']);?>
</li>
        <?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
    	<li class="table_list_l table_list_l100" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
    		<a delurl="__APP__/index.php?s=Role/upRoleStatus&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
&status=<?php if ($_smarty_tpl->tpl_vars['d']->value['status']){?>0<?php }else{ ?>1<?php }?>" href="javascript:;" name="del" msg="确定<?php if ($_smarty_tpl->tpl_vars['d']->value['status']){?>禁用<?php }else{ ?>启用<?php }?>吗？"><?php if ($_smarty_tpl->tpl_vars['d']->value['status']){?>启用<?php }else{ ?>禁用<?php }?></a>
    	</li>
    	<li class="table_list_l table_list_l150" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
    		<a href="__APP__/index.php?s=Role/newRole&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">修改</a>&nbsp;&nbsp;
    		<a delurl="__APP__/index.php?s=Role/deleteRole&id=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" href="javascript:;" name="del" msg="确定删除吗？">删除</a>
    	</li>
        <?php }?>
    </ul>
    <?php } ?>
    <?php }else{ ?>
    <ul class="table_list"><li class="table_list_center">空</li></ul>
    <?php }?>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("Public/page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>