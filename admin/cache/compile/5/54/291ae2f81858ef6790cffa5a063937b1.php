<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/default/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/base.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/global.css" media="screen">
<script type="text/javascript" src="themes/default/js/jquery.js"></script>
<title>管理中心</title>
</head>

<body>
<div id="perstatus" pers="<pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'&lt;font color=red&gt;127.0.0.1 系统发生错误: Undefined index: perstatus, in C:\xampp\htdocs\laugh\admin\cache\compile\8e2008e68f000a728b21258a9d43515941ed2d98.file.add.html.php on line 32&lt;/font&gt;'</font> <i>(length=195)</i>
</pre><pre class='xdebug-var-dump' dir='ltr'><small>string</small> <font color='#cc0000'>'&lt;font color=red&gt;127.0.0.1 系统发生错误: Trying to get property of non-object, in C:\xampp\htdocs\laugh\admin\cache\compile\8e2008e68f000a728b21258a9d43515941ed2d98.file.add.html.php on line 32&lt;/font&gt;'</font> <i>(length=205)</i>
</pre>"></div>
<div id="control">
	<div class="control_nav">
		<h3>添加模块</h3>
		<!--
		<ul class="control_nav_tab">
			<li><a href="/laugh/admin/?r=system/role"><span>角色列表</span></a></li>
			<li class="current"><a href="/laugh/admin/?r=system/newRole"><span>新角色</span></a></li>
		</ul>
		-->
	</div>
	<div class="captitle"><h5>新节点表单</h5></div>
	<form name="newform" action="/laugh/admin/?s=Node/nodeSave" method="post" id="addajaxform">
		<input type="hidden" name="" />
		<ul class="formbody">
			<li class="formblock colorblock">
				<span>组: </span>
				<select name="groupid" class="input" style="width:150px;">
					<option value="" >|-顶级菜单</option>
										<option value="1">系统管理</option>
										<option value="2">用户中心</option>
										<option value="3">文章管理</option>
										<option value="4">网站设置</option>
										<option value="5">系统工具</option>
									</select>
			</li>
			<li class="formblock colorblock">
				<span>父节点: </span>
				<select name="pid" class="input" style="width:150px;">
					<option value="" >|-顶级菜单</option>
										<option value="1">注册与访问控制</option>
										<option value="5">用户搜索</option>
										<option value="2">角色管理</option>
										<option value="3">日志管理</option>
										<option value="4">节点管理</option>
										<option value="6">管理员用户管理</option>
										<option value="7">添加节点</option>
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
</body>
<script type="text/javascript" src="themes/default/js/public.js"></script>
<script type="text/javascript" src="themes/default/js/common.js"></script>
</html>