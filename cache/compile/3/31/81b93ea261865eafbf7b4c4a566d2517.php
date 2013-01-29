<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="">
<link type="text/css" rel="stylesheet" href="themes/default/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/frame.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/global.css" media="screen">
<script type="text/javascript" src="public/js/jquery.js"></script>
<script type="text/javascript" src="themes/default/js/common.js"></script>
<script type="text/javascript" src="themes/default/js/frame.js"></script>
<title>Laugh CMS - 内容管理系统</title>
<script type="text/javascript">
var JS_APP = '/laugh';
</script>
</head>

<body>
<div id="Top">
	
</div>
<div id="Header">
	<div id="HeaderMain">
		<div id="HeaderStatus">
			<div class="Logo">
				<a href="/laugh"><img src="/laugh/themes/default/images/logo.png" /></a>
			</div>
			<div class="Center">
				内容管理系统
			</div>
			<div class="Operate">
				<div class="OpTop">
					<a href="javascript:;" id="setHome">设为首页</a> | <a href="javascript:;" id="addFavorite">收藏本站</a>
				</div>
				<div class="Search">
					<form method="POST" action="/laugh/index.php?s=Search">
						<input type="text" onfocus="if (this.value=='Search...') this.value='';" onblur="if (this.value=='') this.value='搜索...';" value="搜索..." size="20" class="sinput" name="keyword">
						<input type="submit" class="sbutton" value="GO">
					</form>
				</div>
			</div>
		</div>
		<link type="text/css" rel="stylesheet" href="public/plugin/superfish/css/superfish.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/navigation.css" media="screen">
<ul class="headerNavigation">
	<li>
		<a href="#a" class="navon">网站首页</a>
	</li>
	<li>
		<a href="#">新闻资讯</a>
		<ul class="SubNavigation">
			<li>
				<a href="#ab">子菜单一</a>
			</li>
			<li>
				<a href="#">子菜单一二三</a>
				<ul>
					<li><a href="#">子子栏目一</a></li>
					<li><a href="#">子子栏目一</a></li>
					<li><a href="#">子子栏目一</a></li>
					<li><a href="#">子子栏目一</a></li>
					<li><a href="#">子子栏目一</a></li>
				</ul>
			</li>
			<li>
				<a href="#">子菜单三</a>
				<ul>
					<li><a href="#">子子栏目一</a></li>
					<li><a href="#">子子栏目一</a></li>
					<li><a href="#">子子栏目一</a></li>
					<li><a href="#">子子栏目一</a></li>
					<li><a href="#">子子栏目一</a></li>
				</ul>
			</li>
		</ul>
	</li>
	<li>
		<a href="#">产品展示</a>
	</li>
	<li>
		<a href="#">下载中心</a>
	</li>
	<li>
		<a href="#">客户案例</a>
	</li>
	<li>
		<a href="#">招贤纳士</a>
	</li>
	<li>
		<a href="#">关于我们</a>
	</li>
	<li>
		<a href="#">联系我们</a>
	</li>
</ul>
<script type="text/javascript" src="public/plugin/superfish/js/hoverIntent.js"></script>
<script type="text/javascript" src="public/plugin/superfish/js/superfish.js"></script>
<script type="text/javascript">
	$('ul.headerNavigation').superfish();
</script>
	</div>
</div>
<script type="text/javascript">
//加入收藏 <a onclick="AddFavorite(window.location,document.title)">加入收藏</a>
function AddFavorite(sURL, sTitle)
{
    try {
        window.external.addFavorite(sURL, sTitle);
    } catch(e) {
        try {
            window.sidebar.addPanel(sTitle, sURL, "");
        } catch(e) {
            alert("加入收藏失败，请使用Ctrl+D进行添加");
        }
    }
}

//设为首页 <a onclick="SetHome(this,window.location)">设为首页</a>
function SetHome(obj,vrl){
    try {
        obj.style.behavior = 'url(#default#homepage)';
        obj.setHomePage(vrl);
    } catch(e) {
        if(window.netscape) {
            try {
                netscape.security.PrivilegeManager.enablePrivilege("UniversalXPConnect");

	            var prefs = Components.classes['@mozilla.org/preferences-service;1'].getService(Components.interfaces.nsIPrefBranch);
	            prefs.setCharPref('browser.startup.homepage',vrl);
            } catch (e) {
                alert("此操作被浏览器拒绝！\n请在浏览器地址栏输入“about:config”并回车\n然后将 [signed.applets.codebase_principal_support]的值设置为'true',双击即可。");
            }
        }
    }
}
$(document).ready(function (){
	$("#setHome").click(function (){
		SetHome(this,window.location.href);
	});
	$("#addFavorite").click(function (){
		AddFavorite(window.location.href,$("title").text());
	});
});
</script>
<div id="WrapContainer" class="wrap">
	<div id="ImageFlash" class="block">
		<div id="SImageContainer">
			滑动图片
		</div>
		<div id="SImageCaption">
			固定图片或者描述介绍
		</div>
	</div>
	<div id="CenterShow" class="block">
		关于我们 公司新闻
	</div>
	<div class="adBanner block">
		广告banner图片1000*80
	</div>
	<div id="BottomShow" class="block">
		产品展示 联系我们
	</div>
	<div id="Flink" class="block">
		友情链接
	</div>
</div>
<div id="Footer">
	
</div>
</body>
</html>