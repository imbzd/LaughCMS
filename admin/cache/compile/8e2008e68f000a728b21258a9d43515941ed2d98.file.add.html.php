<?php /* Smarty version Smarty-3.1.11, created on 2012-10-11 16:51:52
         compiled from "C:\xampp\htdocs\laugh\admin\themes\default\node\add.html" */ ?>
<?php /*%%SmartyHeaderCode:1698507688a8282440-66018788%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e2008e68f000a728b21258a9d43515941ed2d98' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\default\\node\\add.html',
      1 => 1349574506,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1698507688a8282440-66018788',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'perstatus' => 0,
    'groupTree' => 0,
    'g' => 0,
    'nodeTree' => 0,
    'n' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.11',
  'unifunc' => 'content_507688a830bef5_08698919',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_507688a830bef5_08698919')) {function content_507688a830bef5_08698919($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="perstatus" pers="<?php echo $_smarty_tpl->tpl_vars['perstatus']->value;?>
"></div>
<div id="control">
	<div class="control_nav">
		<h3>添加模块</h3>
		<!--
		<ul class="control_nav_tab">
			<li><a href="__APP__/?r=system/role"><span>角色列表</span></a></li>
			<li class="current"><a href="__APP__/?r=system/newRole"><span>新角色</span></a></li>
		</ul>
		-->
	</div>
	<div class="captitle"><h5>新节点表单</h5></div>
	<form name="newform" action="__APP__/?s=Node/nodeSave" method="post" id="addajaxform">
		<input type="hidden" name="" />
		<ul class="formbody">
			<li class="formblock colorblock">
				<span>组: </span>
				<select name="groupid" class="input" style="width:150px;">
					<option value="" >|-顶级菜单</option>
					<?php  $_smarty_tpl->tpl_vars['g'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['g']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['groupTree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['g']->key => $_smarty_tpl->tpl_vars['g']->value){
$_smarty_tpl->tpl_vars['g']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['g']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['g']->value['title'];?>
</option>
					<?php } ?>
				</select>
			</li>
			<li class="formblock colorblock">
				<span>父节点: </span>
				<select name="pid" class="input" style="width:150px;">
					<option value="" >|-顶级菜单</option>
					<?php  $_smarty_tpl->tpl_vars['n'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['n']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['nodeTree']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['n']->key => $_smarty_tpl->tpl_vars['n']->value){
$_smarty_tpl->tpl_vars['n']->_loop = true;
?>
					<option value="<?php echo $_smarty_tpl->tpl_vars['n']->value['id'];?>
"><?php echo $_smarty_tpl->tpl_vars['n']->value['title'];?>
</option>
					<?php } ?>
				</select>
			</li>
			<li class="formblock colorblock">
				<span>名称:</span>
				<input type="text" name="title" value="" class="input" style="width:150px;" />
			</li>
			<li class="formblock colorblock">
				<span>描述: </span>
				<input type="text" name="remark" value="" class="input" style="width:150px;" />
			</li>
			<li class="formblock colorblock">
				<span>Control: </span>
				<input type="text" name="control" value="" class="input" style="width:150px;" />
			</li>
			<li class="formblock colorblock">
				<span>Action: </span>
				<input type="text" name="action" value="" class="input" style="width:150px;" />
			</li>
			<li class="formblock">
				<input type="submit" name="subut" class="button" value="完成提交" />
			</li>
		</ul>
	</form>
</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>