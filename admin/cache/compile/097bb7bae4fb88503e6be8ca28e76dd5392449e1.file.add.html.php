<?php /* Smarty version Smarty-3.1.12, created on 2013-11-24 17:52:06
         compiled from "F:\website\laugh\admin\themes\blue\Topic\add.html" */ ?>
<?php /*%%SmartyHeaderCode:102985291cc46c36254-38558463%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '097bb7bae4fb88503e6be8ca28e76dd5392449e1' => 
    array (
      0 => 'F:\\website\\laugh\\admin\\themes\\blue\\Topic\\add.html',
      1 => 1381140859,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '102985291cc46c36254-38558463',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'columnid' => 0,
    'accessStatus' => 0,
    'columnTree' => 0,
    'adminInfo' => 0,
    'timestamp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_5291cc46d08d70_44647054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5291cc46d08d70_44647054')) {function content_5291cc46d08d70_44647054($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("Public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div class="opTop">
	<a href="__APP__/index.php?s=Topic/index&columnid=<?php echo $_smarty_tpl->tpl_vars['columnid']->value;?>
">专题列表</a> |
	<a href="__APP__/index.php?s=Topic/add&columnid=<?php echo $_smarty_tpl->tpl_vars['columnid']->value;?>
" class="opTopOn">发布新专题</a> |
	<a href="__APP__/index.php?s=Topic/recover&columnid=<?php echo $_smarty_tpl->tpl_vars['columnid']->value;?>
">回收站</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>创建新专题</h5></div>
	<form name="newform" action="__APP__/index.php?s=Topic/save" enctype="multipart/form-data" method="post" class="newform">
		<ul class="formbody">
			<div class="shtabtitlec">
				<div class="shtabtitle shtabcurrent"><a href="javascript:;"><span>常规内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>高级内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>专题描述</span></a></div>
			</div>
			<div class="shtabcontentc">
			<div class="shtabcontent shtabcontentcurrent">
				<li class="formblock">
					<span>专题标题:</span>
					<input type="text" name="title" value="" class="input w300" />
				</li>
				<li class="formblock">
					<span>专题标签:</span>
					<input type="text" name="tag" value="" class="input w300" /> (','号分开)
				</li>
				<li class="formblock">
					<span>专题所在栏目: </span>
					<select id="select" name="columnid" style="width:230px;">
						<?php echo $_smarty_tpl->tpl_vars['columnTree']->value;?>

					</select>
				</li>
				<li class="formblock">
					<span>专题缩略图:</span>
					<input type="file" name="image" value="" class="input w150 inputfile" />
				</li>
				<li class="formblock displaynone">
					<span>专题来源:</span>
					<input type="text" name="source" value="" class="input w200" />
				</li>
				<li class="formblock">
					<span>作者:</span>
					<input type="text" name="author" value="<?php echo $_smarty_tpl->tpl_vars['adminInfo']->value['adminname'];?>
" class="input w150" />
				</li>
				<li class="formblock">
					<span>发布时间:</span>
					<input type="text" id="dpicker0" name="publishtime" value="<?php echo mkdate($_smarty_tpl->tpl_vars['timestamp']->value);?>
" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="input w150" />
					<img width="16" height="22" align="absmiddle" onclick="WdatePicker({el:'dpicker0',dateFmt:'yyyy-MM-dd HH:mm:ss'})" style="cursor:pointer" src="public/plugin/My97DatePicker/skin/datePicker.gif">
				</li>
				<li class="formblock">
					<span>是否允许评论: </span>
					<div class="item_list fleft">
						<label><input type="radio" name="status" value="1" class="radio" checked="checked" />允许</label>
						<label><input type="radio" name="status" value="0" class="radio" />禁止</label>
					</div>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formblock">
					<span>SEO标题:</span>
					<input type="text" name="seotitle" value="" class="input w300" />
				</li>
				<li class="formautoblock">
					<span>关键字:</span>
					<textarea name="keyword" rows="1" cols="47"></textarea>
				</li>
				<li class="formautoblock">
					<span>摘要内容:</span>
					<textarea name="description" rows="2" cols="47"></textarea>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formautoblock">
					<span>专题描述:</span>
					<div class="FullTextEditor">
						<textarea name="content" id="myEditor" rows="3" cols="50"></textarea>
					</div>
				</li>
			</div>
			</div>
			<li class="formblock bordernone bgf6">
				<input type="submit" name="subut" class="button btnblue2" value="添加" />
			</li>
		</ul>
	</form>
</div>
<?php }?>
<script src="public/plugin/UEditor/editor_config.js" type="text/javascript"></script>
<script src="public/plugin/UEditor/editor_all_min.js" type="text/javascript"></script>
<script src="public/plugin/My97DatePicker/WdatePicker.js" type="text/javascript"></script>
<script type="text/javascript">
UE.getEditor('myEditor',{
});
$("form[name=newform]").submit(function(){
	var title = $(this).find("input[name=title]").val();
	if (!title) {
		alert("请填写文档标题!");
		return false;
	}
	var columnid = $(this).find("select[name=columnid]").val();
	if (!columnid) {
		alert("请选择文档所在主栏目!");
		return false;
	}
});
</script>
<?php echo $_smarty_tpl->getSubTemplate ("Public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>