<?php /* Smarty version Smarty-3.1.12, created on 2013-04-01 16:42:59
         compiled from "C:\xampp\htdocs\laugh\themes\default\Product\index.html" */ ?>
<?php /*%%SmartyHeaderCode:2948751594893e3e3d8-77692863%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80e5206bd9c3ade278fa605e7fbefac65e63eca2' => 
    array (
      0 => 'C:\\xampp\\htdocs\\laugh\\themes\\default\\Product\\index.html',
      1 => 1364805778,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2948751594893e3e3d8-77692863',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'CurrentPosition' => 0,
    'Column' => 0,
    'ArchiveList' => 0,
    'd' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_51594893f01a35_68100972',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51594893f01a35_68100972')) {function content_51594893f01a35_68100972($_smarty_tpl) {?><?php echo $_smarty_tpl->getSubTemplate ("include/head.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Common/Top.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<?php echo $_smarty_tpl->getSubTemplate ("Common/Header.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

<div id="WrapContainer" class="wrap">
	<div class="adBanner block">
		<a href="javascript:;" target="_blank"><img src="themes/default/images/ad_banner.png" width="1000" height="80" /></a>
	</div>
	<div class="CurPosition mtop5">
		当前位置: <?php echo $_smarty_tpl->tpl_vars['CurrentPosition']->value;?>

	</div>
	<div id="CenterShow" class="block mtop5">
		<div id="mainBlock" class="fleft w740">
			<div id="ImgListBlock" class="boxBlock">
				<div class="boxBlockTitle">
					<span class="title"><?php echo $_smarty_tpl->tpl_vars['Column']->value['columnname'];?>
</span>
				</div>
				<div class="boxBlockBody">
					<ul class="ProductList">
						<?php if (isset($_smarty_tpl->tpl_vars['ArchiveList']->value)&&!empty($_smarty_tpl->tpl_vars['ArchiveList']->value)){?>
						<?php  $_smarty_tpl->tpl_vars['d'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['d']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['ArchiveList']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['d']->key => $_smarty_tpl->tpl_vars['d']->value){
$_smarty_tpl->tpl_vars['d']->_loop = true;
?>
						<li>
							<a href="__APP__/index.php?s=Product/view&archiveid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
">
								<img src="__APP__<?php echo $_smarty_tpl->tpl_vars['d']->value['thumbimage'];?>
" />
							</a>
							<a href="__APP__/index.php?s=Product/view&archiveid=<?php echo $_smarty_tpl->tpl_vars['d']->value['id'];?>
" class="title"><?php echo $_smarty_tpl->tpl_vars['d']->value['title'];?>
</a>
						</li>
						<?php } ?>
						<?php }?>
					</ul>
					<?php echo $_smarty_tpl->getSubTemplate ("common/Page.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

				</div>
			</div>
		</div>
		<?php echo $_smarty_tpl->getSubTemplate ("Common/SideBlock.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

		<div class="clear"></div>
	</div>
	<?php echo $_smarty_tpl->getSubTemplate ("Common/Flink.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>

</div>
<?php echo $_smarty_tpl->getSubTemplate ("include/foot.html", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
<?php }} ?>