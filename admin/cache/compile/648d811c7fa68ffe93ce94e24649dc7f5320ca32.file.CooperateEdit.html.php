<?php /* Smarty version Smarty-3.1.12, created on 2013-04-15 09:31:42
         compiled from "C:\xampp\htdocs\laugh\admin\themes\green\Plugin\CooperateEdit.html" */ ?>
<?php /*%%SmartyHeaderCode:26585516b587ec172b9-09460109%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '648d811c7fa68ffe93ce94e24649dc7f5320ca32' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\admin\\themes\\green\\Plugin\\CooperateEdit.html',
      1 => 1365752166,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26585516b587ec172b9-09460109',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'accessStatus' => 0,
    'CooperateInfo' => 0,
    'columnTree' => 0,
    'timestamp' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_516b587ed03dc5_87737687',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_516b587ed03dc5_87737687')) {function content_516b587ed03dc5_87737687($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("public/control_top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php if ($_smarty_tpl->tpl_vars['accessStatus']->value==1){?>
<div class="formContainer" accessStatus=<?php echo $_smarty_tpl->tpl_vars['accessStatus']->value;?>
>
	<div class="formtitle"><h5>编辑新招聘信息</h5></div>
	<form name="newform" action="__APP__/index.php?s=Plugin/CooperateEditSave" enctype="multipart/form-data" method="post" class="newform" id="ajaxform">
		<input type="hidden" name="cooperateid" value="<?php echo $_smarty_tpl->tpl_vars['CooperateInfo']->value['id'];?>
" />
		<ul class="formbody">
			<div class="shtabtitlec">
				<div class="shtabtitle shtabcurrent"><a href="javascript:;"><span>常规内容</span></a></div>
				<div class="shtabtitle"><a href="javascript:;"><span>职位描述</span></a></div>
			</div>
			<div class="shtabcontentc">
			<div class="shtabcontent shtabcontentcurrent">
				<li class="formblock">
					<span>招聘职位:</span>
					<input type="text" name="position" value="<?php echo $_smarty_tpl->tpl_vars['CooperateInfo']->value['position'];?>
" class="input w300" />
				</li>
				<li class="formblock">
					<span>选择发布栏目: </span>
					<select id="select" name="columnid" style="width:230px;">
						<?php echo $_smarty_tpl->tpl_vars['columnTree']->value;?>

					</select>
				</li>
				<li class="formblock">
					<span>招聘人数:</span>
					<input type="text" name="quantity" value="<?php echo $_smarty_tpl->tpl_vars['CooperateInfo']->value['quantity'];?>
" class="input w100" /> 人
				</li>
				<li class="formblock">
					<span>学历要求:</span>
					<select name="education" style="width:100px;">
						<option value="" selected>--请选择--</option>
						<option value="初中">初中</option>
						<option value="高中">高中</option>
						<option value="中技">中技</option>
						<option value="中专">中专</option>
						<option value="大专">大专</option>
						<option value="本科">本科</option>
						<option value="硕士">硕士</option>
						<option value="博士">博士</option>
						<option value="其他">其他</option>
					</select>
				</li>
				<li class="formblock">
					<span>工作经验:</span>
					<select name="experience" style="width:120px;">
						<option value="" selected>--请选择--</option>
						<option value="在读学生">在读学生</option>
						<option value="应届毕业生">应届毕业生</option>
						<option value="一年以上">一年以上</option>
						<option value="二年以上">二年以上</option>
						<option value="三年以上">三年以上</option>
						<option value="五年以上">五年以上</option>
						<option value="八年以上">八年以上</option>
						<option value="十年以上">十年以上</option>
						<option value="不限">不限</option>
					</select>
				</li>
				<li class="formblock">
					<span>工作地点:</span>
					<input type="text" name="place" value="<?php echo $_smarty_tpl->tpl_vars['CooperateInfo']->value['place'];?>
" class="input w300" />
				</li>
				<li class="formblock">
					<span>工作性质:</span>
					<select name="nature" style="width:100px;">
						<option value="" selected>--请选择--</option>
						<option value="全职">全职</option>
						<option value="兼职">兼职</option>
					</select>
				</li>
				<li class="formblock">
					<span>工资待遇:</span>
					<select name="salary" style="width:150px;">
						<option value="" selected>--请选择--</option>
						<option value="面议">面议</option>
						<option value="1500以下">1500以下</option>
						<option value="1500-1999">1500-1999</option>
						<option value="2000-2999">2000-2999</option>
						<option value="3000-4499">3000-4499</option>
						<option value="4500-5999">4500-5999</option>
						<option value="6000-7999">6000-7999</option>
						<option value="8000-9999">8000-9999</option>
						<option value="10000-14999">10000-14999</option>
						<option value="15000-19999">15000-19999</option>
						<option value="20000-29999">20000-29999</option>
						<option value="30000-49999">30000-49999</option>
						<option value="50000及以上">50000及以上</option>
					</select>
				</li>
				<li class="formblock">
					<span>发布者:</span>
					<input type="text" name="author" value="<?php echo $_smarty_tpl->tpl_vars['CooperateInfo']->value['author'];?>
" class="input w150" />
				</li>
				<li class="formblock">
					<span>更新时间:</span>
					<input type="text" id="dpicker0" name="updatetime" value="<?php echo mkdate($_smarty_tpl->tpl_vars['timestamp']->value);?>
" onClick="WdatePicker({dateFmt:'yyyy-MM-dd HH:mm:ss'})" class="input w150" />
					<img width="16" height="22" align="absmiddle" onclick="WdatePicker({el:'dpicker0',dateFmt:'yyyy-MM-dd HH:mm:ss'})" style="cursor:pointer" src="public/plugin/My97DatePicker/skin/datePicker.gif">
				</li>
				<li class="formblock">
					<span>有效期:</span>
					<input type="text" name="validitytime" value="<?php echo $_smarty_tpl->tpl_vars['CooperateInfo']->value['validitytime'];?>
" class="input w150" />
					<select name="validitytimeSelect" style="width:100px;">
						<option value="" selected>--请选择--</option>
						<option value="一个周">一个周</option>
						<option value="两个周">两个周</option>
						<option value="一个月">一个月</option>
						<option value="两个月">两个月</option>
						<option value="三个月">三个月</option>
						<option value="四个月">四个月</option>
						<option value="五个月">五个月</option>
						<option value="六个月">六个月</option>
						<option value="长期有效">长期有效</option>
					</select>
				</li>
			</div>
			<div class="shtabcontent">
				<li class="formautoblock">
					<span>职位描述:</span>
					<div class="FullTextEditor">
						<textarea name="description" id="myEditor" rows="3" cols="50"><?php echo $_smarty_tpl->tpl_vars['CooperateInfo']->value['description'];?>
</textarea>
					</div>
				</li>
			</div>
			<li class="formblock bordernone">
				<input type="submit" name="subut" class="button btngreen2" value="确定" />
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
    $("select[name=validitytimeSelect]").change(function (){
    	$("input[name=validitytime]").val($(this).val());
    });
    $("form[name=newform]").submit(function(){
    	var position = $(this).find("input[name=position]").val();
    	if (!position) {
    		alert("请填写招聘职位!");
    		return false;
    	}
    	var columnid = $(this).find("select[name=columnid]").val();
    	if (!columnid) {
    		alert("请选择发布栏目!");
    		return false;
    	}
    });
    //栏目列表选中
    $("select[name=columnid]").find("option").each(function (){
    	if ($(this).val()=="<?php echo $_smarty_tpl->tpl_vars['CooperateInfo']->value['columnid'];?>
") $(this).attr("selected",true);
    });
    //学历要求列表选中
    $("select[name=education]").find("option").each(function (){
    	if ($(this).val()=="<?php echo $_smarty_tpl->tpl_vars['CooperateInfo']->value['education'];?>
") $(this).attr("selected",true);
    });
    //工作经验列表选中
    $("select[name=experience]").find("option").each(function (){
    	if ($(this).val()=="<?php echo $_smarty_tpl->tpl_vars['CooperateInfo']->value['experience'];?>
") $(this).attr("selected",true);
    });
    //工作性质列表选中
    $("select[name=nature]").find("option").each(function (){
    	if ($(this).val()=="<?php echo $_smarty_tpl->tpl_vars['CooperateInfo']->value['nature'];?>
") $(this).attr("selected",true);
    });
    //工资待遇列表选中
    $("select[name=salary]").find("option").each(function (){
    	if ($(this).val()=="<?php echo $_smarty_tpl->tpl_vars['CooperateInfo']->value['salary'];?>
") $(this).attr("selected",true);
    });
</script>
<?php echo $_smarty_tpl->getSubTemplate ("public/control_bottom.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>