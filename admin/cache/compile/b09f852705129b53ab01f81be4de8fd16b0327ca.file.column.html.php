<?php /* Smarty version Smarty-3.1.12, created on 2013-01-14 22:22:52
         compiled from "G:\website\laugh\admin\themes\green\Column\column.html" */ ?>
<?php /*%%SmartyHeaderCode:3243850f414bc3b8377-33602309%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b09f852705129b53ab01f81be4de8fd16b0327ca' => 
    array (
      0 => 'G:\\website\\laugh\\admin\\themes\\green\\Column\\column.html',
      1 => 1358173074,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3243850f414bc3b8377-33602309',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'dataList' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50f414bc4578a7_85156443',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50f414bc4578a7_85156443')) {function content_50f414bc4578a7_85156443($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="captitle"><h5>栏目列表</h5></div>
<div id="columnList">
	<div class="ul columnListTitle">
		<div class="li columnListd700" flag="columnListTitle" style="text-indent:0;">栏目名称</div>
		<div class="li columnListd300" flag="columnListTitle">操作</div>
	</div>
	<div class="ul columnListTable">
		<?php if ($_smarty_tpl->tpl_vars['dataList']->value){?>
		<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['dataList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
		<div class="ul columnlistd">
			<div class="li columnplusmius columnplus" columnid="<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
"></div>
			<div class="li columnListd700" flag="columnTableList">
				<a href="__APP__/index.php?s=Column/columnContent"><?php echo $_smarty_tpl->tpl_vars['d']->value['columnname'];?>
</a>
				<?php if ($_smarty_tpl->tpl_vars['d']->value['isshow']==1){?><font color="green"></font><?php }else{ ?><font color="red">[隐]</font><?php }?>
			</div>
			<div class="li columnListd300" flag="columnTableList">
				<a href="javascript:;">预览</a> |
				<a href="javascript:;">栏目文档</a> |
				<a href="javascript:;">增加子栏目</a> |
				<a href="javascript:;">编辑</a> |
				<a delurl="__APP__/index.php?s=Column/deleteColumn&columnid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" href="javascript:;" name="del" msg="确定删除该栏目吗？">删除</a>
			</div>
		</div>
		<div class="ul columnSubList"></div>
		<?php } ?>
		<?php }?>
	</div>
	<div class="columnList">
	</div>
</div>
<link rel="stylesheet" type="text/css" href="themes/green/style/column.css" media="screen" />
<script type="text/javascript">
$(document).ready(function(){
	var column = function (){
		var columnObj = {
			columnplusmius: $("#columnList .columnListTable .columnlistd div.columnplusmius"),
			columnmius: $("#columnList .columnListTable .columnlistd div.columnmius"),
		}

		columnObj.showSubColumn = function (){
			columnObj.columnplusmius.live("click", function (){
				var that = $(this);
				var subthat = that.parent().next();
				if (subthat.css("display") == 'block') {
					that.removeClass("columnmius");
					that.addClass("columnplus");
					subthat.css("display","none");
				} else {
					that.removeClass("columnplus");
					that.addClass("columnmius");
					subthat.css("display","block");
					if (!subthat.text().trim()) {
						var d = {
							columnid: $(this).attr("columnid")
						}
						$.post(JS_APP+"/index.php?s=Column/getSubColumn",d,function(data){
							if (!data.status) {
								subthat.html(data.data);
							} else {
								alert(data.info);
							}
						},'json')
					}
				}
			});
		}(window)
	}
	if ($("#columnList .columnListTable .columnlistd").length) {
		column();
	}
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>