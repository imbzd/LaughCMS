<?php /* Smarty version Smarty-3.1.12, created on 2013-10-04 23:06:56
         compiled from "F:\website\laugh\themes\default\Article\article.html" */ ?>
<?php /*%%SmartyHeaderCode:15907524ed990346cd9-91700021%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8e20f3bdd429d0041c4a0b1af233b54144bf2e9c' => 
    array (
      0 => 'F:\\website\\laugh\\themes\\default\\Article\\article.html',
      1 => 1366899154,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '15907524ed990346cd9-91700021',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'archiveInfo' => 0,
    'columnid' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_524ed9903ff661_87498626',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_524ed9903ff661_87498626')) {function content_524ed9903ff661_87498626($_smarty_tpl) {?><div class="articleTpl">
	<h2 class="title"><?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['title'];?>
</h2>
	<div class="status">
		<span class="title">点击次数:</span>
		<span class="content"><?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['clicknum'];?>
 次</span>
		<span class="title">发布时间:</span>
		<span class="content"><?php echo mkdate($_smarty_tpl->tpl_vars['archiveInfo']->value['publishtime']);?>
</span>
		<span class="title">作者:</span>
		<span class="content"><?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['author'];?>
</span>
	</div>
	<div class="body">
		<div class="articleContent">
			<?php echo html_entity_decode($_smarty_tpl->tpl_vars['archiveInfo']->value['content']);?>

		</div>
	</div>
	<div class="operate">
		<?php echo $_smarty_tpl->getSubTemplate ("include/share0.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div class="operateLink"><a href="javascript:;">[打印此页]</a>&nbsp;&nbsp;&nbsp;<a href="javascript:self.close();">[关闭]</a></div>
	</div>
	<div class="about">
		<dl>
			<dt>上一篇:</dt>
			<dd>
				<?php if (!empty($_smarty_tpl->tpl_vars['archiveInfo']->value['prev'])){?>
				<a href="__APP__/index.php?s=article/view&columnid=<?php echo $_smarty_tpl->tpl_vars['columnid']->value;?>
&archiveid=<?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['prev']['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['prev']['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['prev']['title'];?>
</a>
				<?php }else{ ?>
				<font color="grey">没有了！</font>
				<?php }?>
			</dd>
		</dl>
		<dl>
			<dt>下一篇:</dt>
			<dd>
				<?php if (!empty($_smarty_tpl->tpl_vars['archiveInfo']->value['next'])){?>
				<a href="__APP__/index.php?s=article/view&columnid=<?php echo $_smarty_tpl->tpl_vars['columnid']->value;?>
&archiveid=<?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['next']['id'];?>
" title="<?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['next']['title'];?>
"><?php echo $_smarty_tpl->tpl_vars['archiveInfo']->value['next']['title'];?>
</a>
				<?php }else{ ?>
				<font color="grey">没有了！</font>
				<?php }?>
			</dd>
		</dl>
	</div>
</div>
<link type="text/css" rel="stylesheet" href="themes/default/style/shCoreDefault.css" media="screen">
<script type="text/javascript" src="themes/default/js/shCore.js"></script>
<script type="text/javascript">
//为了在编辑器之外能展示高亮代码
SyntaxHighlighter.highlight();
//调整左右对齐
for(var i=0,di;di=SyntaxHighlighter.highlightContainers[i++];){
    var tds = di.getElementsByTagName('td');
    for(var j=0,li,ri;li=tds[0].childNodes[j];j++){
        ri = tds[1].firstChild.childNodes[j];
        ri.style.height = li.style.height = ri.offsetHeight + 'px';
    }
}
</script><?php }} ?>