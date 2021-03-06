<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/blue/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/blue/style/global.css" media="screen">
<script type="text/javascript" src="public/js/jquery.js"></script>
<link type="text/css" rel="stylesheet" href="public/plugin/colorbox/colorbox.css" media="screen">
<script type="text/javascript" src="public/plugin/colorbox/jquery.colorbox.js"></script>
<title>LaughCMS网站管理系统</title>
<script type="text/javascript">
var JS_APP = '/laugh/admin';
var JS_APPM = 'http://localhost/laugh';
function colorboxAjaxHtml(url) {
	$.post(url,{},function (data){
		$.colorbox({ html: data });
	});
}
function colorboxHtml(url) {
	$.colorbox({ href: url });
}
function colorboxImage(url) {
	$.colorbox({ href: url });
}
</script>
</head>

<body>
<style type="text/css">
	body { background: none; }
</style>
<div id="control">
	<div id="controlContent">
<!-- <div class="control_nav">
	<h3>添加组</h3>
</div> -->
<div class="formContainer" accessStatus=1>
	<div class="formtitle"><h5>新操作节点表单</h5></div>
	<form name="newform" action="/laugh/admin/index.php?s=Node/saveNode" method="post" id="ajaxform" class="newform">
		<ul class="formbody">
			<li class="formblock">
				<span>组: </span>
				<select id="select" name="groupid" style="width:150px;">
					<option value="">|-组菜单</option>
										<option value="1">&nbsp;|-系统管理</option>
										<option value="2">&nbsp;|-会员中心</option>
										<option value="3">&nbsp;|-核心内容</option>
										<option value="4">&nbsp;|-网站更新</option>
										<option value="5">&nbsp;|-系统插件</option>
										<option value="6">&nbsp;|-系统设置</option>
									</select>
			</li>
			<li class="formblock">
				<span>父节点: </span>
				<select name="pid" flag="nodepid" style="width:150px;">
					<option value="">|-节点菜单</option>
				</select>
			</li>
			<li class="formblock">
				<span>名称: </span>
				<input type="text" name="title" autocomplete="off" value="" class="input w150" />
			</li>
			<li class="formblock">
				<span>描述: </span>
				<input type="text" name="remark" autocomplete="off" value="" class="input w250" />
			</li>
			<li class="formblock">
				<span>Control: </span>
				<input type="text" name="control" autocomplete="off" value="" class="input w100" />
			</li>
			<li class="formblock">
				<span>Action: </span>
				<input type="text" name="action" autocomplete="off" value="" class="input w150" />
			</li>
			<li class="formblock bordernone bgf6">
				<input type="submit" name="subut" class="button btnblue2" value="添加" />
			</li>
		</ul>
	</form>
</div>
    </div>
</div>
</body>
<script type="text/javascript" src="themes/blue/js/jquery.corner.js"></script>
<script type="text/javascript" src="themes/blue/js/public.js"></script>
<script type="text/javascript" src="themes/blue/js/common.js"></script>
<script type="text/javascript" src="themes/blue/js/ajax.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
</html>