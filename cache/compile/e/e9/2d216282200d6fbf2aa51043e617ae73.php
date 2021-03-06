<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="keywords" content="Laugh,CMS,LaughCMS,内容,管理,系统">
<meta name="description" content="Laugh CMS内容管理系统" />
<link type="image/ico" rel="shortcut icon" href="favicon.ico">
<link type="text/css" rel="stylesheet" href="themes/default/style/common.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/frame.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/global.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/style.css" media="screen">
<script type="text/javascript" src="public/js/jquery.js"></script>
<script type="text/javascript" src="public/js/jquery.idTabs.min.js"></script>
<script type="text/javascript" src="themes/default/js/common.js"></script>
<script type="text/javascript" src="themes/default/js/frame.js"></script>
<title>Laugh CMS内容管理系统</title>
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
				<a href="/laugh/"><img src="/laugh/themes/default/images/logo.png" /></a>
			</div>
			<div class="Center">
				Laugh CMS内容管理系统
			</div>
			<div class="Operate">
				<div class="OpTop">
					<a href="javascript:;" id="setHome">设为首页</a> | <a href="javascript:;" id="addFavorite">收藏本站</a>
				</div>
				<div class="Search">
					<form method="POST" action="/laugh/index.php?s=Search">
						<input type="text" onfocus="if (this.value=='搜索...') this.value='';" onblur="if (this.value=='') this.value='搜索...';" value="搜索..." size="20" class="sinput" name="keyword">
						<input type="submit" class="sbutton" value="GO">
					</form>
				</div>
			</div>
		</div>
		<link type="text/css" rel="stylesheet" href="public/plugin/superfish/css/superfish.css" media="screen">
<link type="text/css" rel="stylesheet" href="themes/default/style/navigation.css" media="screen">
<ul class="headerNavigation">
		<li>
		<a href="/laugh/index.php?s=Index/index&columnid=1" class="navon">网站首页</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Article/lists&columnid=2" class="">新闻资讯</a>
				<ul class="SubNavigation">
						<li>
				<a href="/laugh/index.php?s=Article/lists&columnid=3">IT知识</a>
								<ul>
										<li><a href="/laugh/index.php?s=Article/lists&columnid=12">PHP知识</a></li>
									</ul>
							</li>
						<li>
				<a href="/laugh/index.php?s=Article/lists&columnid=4">网络知识</a>
								<ul>
										<li><a href="/laugh/index.php?s=Article/lists&columnid=5">前端知识</a></li>
									</ul>
							</li>
						<li>
				<a href="/laugh/index.php?s=Article/lists&columnid=13">数据库知识</a>
							</li>
					</ul>
			</li>
		<li>
		<a href="/laugh/index.php?s=Product/lists&columnid=6" class="">产品展示</a>
				<ul class="SubNavigation">
						<li>
				<a href="/laugh/index.php?s=Product/lists&columnid=14">网络产品</a>
							</li>
						<li>
				<a href="/laugh/index.php?s=Product/lists&columnid=15">电子产品</a>
							</li>
					</ul>
			</li>
		<li>
		<a href="/laugh/index.php?s=Image/lists&columnid=7" class="">客户案例</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Download/lists&columnid=8" class="">下载中心</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Plugin/Cooperate&columnid=9" class="">招贤纳士</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Public/index&columnid=10" class="">关于我们</a>
			</li>
		<li>
		<a href="/laugh/index.php?s=Public/index&columnid=11" class="">联系我们</a>
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
		<link media="screen" href="public/plugin/xslider/xslider.css" rel="stylesheet" type="text/css">
<div id="SImageContainer" class="slider">
	<div class="conbox">
				<div><a href="#" title="1"><img src="/laugh/uploads/ScrollImage/1381906619_jcpao4_791_1364279943_qg83i3_3808.jpg" alt="1" width="730" height="300"></a></div>
				<div><a href="#" title="2"><img src="/laugh/uploads/ScrollImage/1381906636_divy61_1524_1364280038_2l6n4e_8019.jpg" alt="2" width="730" height="300"></a></div>
				<div><a href="#" title="3"><img src="/laugh/uploads/ScrollImage/1381906650_bz59w8_6658_1364280067_duvmp8_5013.jpg" alt="3" width="730" height="300"></a></div>
			</div>
	<div class="switcher">
				<a href="javascript:;" class="cur">1</a>
				<a href="javascript:;" >2</a>
				<a href="javascript:;" >3</a>
			</div>
</div><!--slider end-->
<script type="text/javascript" src="public/plugin/xslider/jquery.Xslider.js"></script>
<script type="text/javascript">
$(document).ready(function(){
// 焦点图片淡隐淡现
$("#SImageContainer").Xslider({
	affect: 'fade', //效果  有scrollx|scrolly|fade|none
	speed: 800, //动画速度
	space: 6000, //时间间隔
	auto: true, //自动滚动
	trigger: 'mouseover', //触发事件 注意用mouseover代替hover
	conbox: '.conbox', //内容容器id或class
	ctag: 'div', //内容标签 默认为<a>
	switcher: '.switcher', //切换触发器id或class
	stag: 'a', //切换器标签 默认为a
	current:'cur', //当前切换器样式名称
	rand:false //是否随机指定默认幻灯图片
});
});
</script>
		<div id="SImageCaption">
			<h1>Laugh CMS 正式版</h1>
			<h2 class="mtop5">LaughCMS企业网站管理系统,是一款代码完全开源免费PHP+MYSQL系统.系统安全,效率,易用并且可扩展性非常好。
			</h2>
			<h3 class="mtop10">系统版本: Laugh CMS 正式版</h3>
			<h4>软件语言: 简体中文UTF-8</h4>
			<h4>环境要求: IIS/Apache/Nginx + PHP5 + MySQL5</h4>
			<h4>用户手册: <a href="javascript:;" target="_blank">在线手册</a></h4>
			<h4>在线演示: <a href="javascript:;" target="_blank">演示地址</a></h4>
			<a id="downloadbtn" href="javascript:;" target="_blank"></a>
		</div>
		<div class="clear"></div>
	</div>
	<div id="CenterShow" class="block">
		<div class="boxBlock fleft w350">
			<div class="boxBlockTitle">
				<span class="title">新闻资讯</span>
				<span class="link"><a href="/laugh/index.php?s=Article/index&columnid=2">更多>></a></span>
			</div>
			<div class="boxBlockBody h170">
				<ul class="articleList">
					
				</ul>
			</div>
		</div>
		<div class="boxBlock fleft w640 mleft10">
			<div class="boxBlockTitle">
				<span class="title">关于我们</span>
			</div>
			<div class="boxBlockBody h170">
				<div class="boxBlockImg fleft">
					<img src="themes/default/images/aboutus_img.png" width="130" height="150" />
				</div>
				<div class="boxBlockText fleft w450">
					<p style="line-height:1.5em;"><span class="text"><span style="font-size:13px;"> &nbsp; &nbsp; &nbsp; LaughCMS企业网站管理系统，是一款代码完全开源免费的PHP+MYSQL系统。</span></span></p><p><br /></p><p style="line-height:1.5em;"><span style="font-size:13px;" class="text"> &nbsp; &nbsp; &nbsp; 程序内置SEO优化机制，使企业网站更容易被推广。拥有企业网站常用的模块功能（企业简介模块、新闻模块、产品模块、下载模块、图片模块、招聘模块、在线留言、友情链接、会员与权限管理）。强大灵活的后台管理功能、静态页面生成功能、自定义模型功能、自制插件安装管...</span></p>
					<a href="/laugh/index.php?s=Public/index&columnid=10" class="viewbtn">阅读全文</a>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div class="adBanner block">
		<a href="#" target="_blank"><img src="/laugh/uploads/AdImage/1381906677_6kn443_3809_1368168836_w2hsg2_8994_ad_banner2.png" width="1000" height="80" /></a>
	</div>
	<div id="BottomShow" class="block">
		<div id="ImgListBlock" class="boxBlock fleft w740">
	<div class="boxBlockTitle">
		<span class="title">产品展示</span>
		<span class="link"><a href="/laugh/index.php?s=Product/index&columnid=6">更多>></a></span>
		<ul id="ImgboxTab" class="boxTab fleft">
									<li><a tabid="#boxTab1" href="javascript:;">网络产品</a></li>
						<li><a tabid="#boxTab2" href="javascript:;">电子产品</a></li>
								</ul>
	</div>
	<div class="boxBlockBody h350">
						<div id="boxTab1" class="boxTabContent">
			<ul class="ProductList h335">
							</ul>
		</div>
				<div id="boxTab2" class="boxTabContent">
			<ul class="ProductList h335">
							</ul>
		</div>
					</div>
</div>
<script type="text/javascript">
$(document).ready(function() {
//图片切换tab
$("#ImgListBlock ul#ImgboxTab").idTabs(function(id,list,set){ 
	$("a",set).removeClass("selected").filter("[tabid='"+id+"']",set).addClass("selected"); 
	for(i in list) $(list[i]).hide(); 
	$(id).fadeIn(); 
	return false; 
});
});
</script>
		<div class="boxBlock fleft w250 mleft10">
			<div class="boxBlockTitle">
				<span class="title">联系我们</span>
			</div>
			<div class="boxBlockBody">
				<div class="contactUS">
					<h5><font color="#FF6600"><b>Laugh CMS内容管理系统</b></font></h5>
<h5><font color="#FF6600">Laugh CMS</font></h5>
<h5>电 话: 0512-36607986 15962257765</h5>
<h5>传 真: 0512-36607986</h5>
<h5>网 址: www.laughcms.net</h5>
<h5>地 址: 江苏省苏州市</h5>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
	<div id="Flink" class="boxBlock block">
	<div class="FlinkTitle">
		<span class="title">友情链接</span>
		<ul id="FlinkboxTab" class="boxTab fleft">
					</ul>
	</div>
	<div class="FlinkBody">
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
</script>
</div>
<div id="Footer">
	<ul id="Link">
						<li class="bordernone"><a href="http://localhost:82/laugh/index.php?s=Plugin/Cooperate&amp;columnid=9">招贤纳士</a></li>
				<li ><a href="http://localhost:82/laugh/index.php?s=Public/AboutUS&amp;columnid=10">关于我们</a></li>
				<li ><a href="http://localhost:82/laugh/index.php?s=Public/ContactUS&amp;columnid=11">联系我们</a></li>
				<li ><a href="javascript:;">在线手册</a></li>
				<li ><a href="javascript:;">帮助中心</a></li>
					</ul>
	<div id="copyright">
		Laugh CMS内容管理系统
		<br/>
		Powered by <a target="_blank" href="javascript:;">LaughCMS v1.0 Released</a> 版权所有 © 2012-2013, All right reserved. 
	</div>
</div>
<script type="text/javascript" src="public/js/scrollToTop.js"></script>
<!-- Baidu Button BEGIN -->
<script type="text/javascript" id="bdshare_js" data="type=slide&amp;img=1&amp;pos=left&amp;uid=6599680" ></script>
<script type="text/javascript" id="bdshell_js"></script>
<script type="text/javascript">
var bds_config = {
	"bdTop": 170
};
document.getElementById("bdshell_js").src = "http://bdimg.share.baidu.com/static/js/shell_v2.js?cdnversion=" + Math.ceil(new Date()/3600000);
</script>
<!-- Baidu Button END -->
</body>
</html>