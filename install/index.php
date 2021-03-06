<?php
/**
 * LaughCMS安装向导
 * 2013-09-16 baoqing wang
 */
error_reporting(E_ERROR | E_WARNING | E_PARSE);
@set_time_limit(1000);
@set_magic_quotes_runtime(0);

define('IN_LAUGH', TRUE);
define('ROOT_PATH', dirname(__FILE__).'/../');

//加载安装文件
require ROOT_PATH.'./install/include/install_var.php';
require ROOT_PATH.'./install/include/install_mysql.php';
require ROOT_PATH.'./install/include/install_function.php';
require ROOT_PATH.'./install/include/install_lang.php';

$view_off = getgpc('view_off');

define('VIEW_OFF', $view_off ? TRUE : FALSE);

$allow_method = array('show_license', 'env_check', 'app_reg', 'db_init', 'install_ok', 'install_check', 'tablepre_check');

$step = intval(getgpc('step', 'R')) ? intval(getgpc('step', 'R')) : 0;
$method = getgpc('method');

if(empty($method) || !in_array($method, $allow_method)) {
	$method = isset($allow_method[$step]) ? $allow_method[$step] : '';
}

if(empty($method)) {
	show_msg('method_undefined', $method, 0);
}

if(file_exists($lockfile) && $method != 'install_ok') {
	show_msg('install_locked', '', 0);
} elseif(!class_exists('dbstuff')) {
	show_msg('database_nonexistence', '', 0);
}

if(in_array($method, array('app_reg', 'install_ok'))) {
	$isHTTPS = ($_SERVER['HTTPS'] && strtolower($_SERVER['HTTPS']) != 'off') ? true : false;
	$PHP_SELF = $_SERVER['PHP_SELF'] ? $_SERVER['PHP_SELF'] : $_SERVER['SCRIPT_NAME'];
	$bbserver = 'http'.($isHTTPS ? 's' : '').'://'.preg_replace("/\:\d+/", '', $_SERVER['HTTP_HOST']).($_SERVER['SERVER_PORT'] && $_SERVER['SERVER_PORT'] != 80 && $_SERVER['SERVER_PORT'] != 443 ? ':'.$_SERVER['SERVER_PORT'] : '');
	$default_ucapi = $bbserver.'/ucenter';
	$default_appurl = $bbserver.substr($PHP_SELF, 0, strrpos($PHP_SELF, '/') - 8);
}

//显示许可协议
if($method == 'show_license') {
	show_license();
} else if ($method == 'env_check') {

	VIEW_OFF && function_check($func_items);

	env_check($env_items);

	dirfile_check($dirfile_items);

	show_env_result($env_items, $dirfile_items, $func_items, $filesock_items);
} else if ($method == 'app_reg') {
	if (!defined('UC_API')) define('UC_API', '');

	if(getgpc('install_ucenter') == 'yes') {
		header("Location: index.php?step=3&install_ucenter=yes");
		die;
	}

	$submit = true;
	$error_msg = array();

	if(VIEW_OFF) {
		show_msg('missing_parameter', '', 0);
	} else {
		show_form($form_app_reg_items, $error_msg);
	}
} else if($method == 'db_init') {
	define(DZUCFULL,true);

	$submit = true;

	$default_config = $_config = array();
	$default_configfile = './data/config_default.php';

	if(!file_exists(ROOT_PATH.$default_configfile)) {
		exit('config_default.php was lost, please reupload this  file.');
	} else {
		include ROOT_PATH.$default_configfile;
		$default_config = $_config;
	}

	$dbhost = $_config['db'][1]['dbhost'];
	$dbport = $_config['db'][1]['dbport'];
	$dbuser = $_config['db'][1]['dbuser'];
	$dbpw   = $_config['db'][1]['dbpw'];
	$dbname = $_config['db'][1]['dbname'];
	$tablepre = $_config['db'][1]['tablepre'];

	$adminemail = 'admin@admin.com';

	$error_msg = array();
	if(isset($form_db_init_items) && is_array($form_db_init_items)) {
		foreach($form_db_init_items as $key => $items) {
			$$key = getgpc($key, 'p');
			if(!isset($$key) || !is_array($$key)) {
				$submit = false;
				break;
			}
			foreach($items as $k => $v) {
				$tmp = $$key;
				$$k = $tmp[$k];
				if(empty($$k) || !preg_match($v['reg'], $$k)) {
					if(empty($$k) && !$v['required']) {
						continue;
					}
					$submit = false;
					VIEW_OFF or $error_msg[$key][$k] = 1;
				}
			}
		}
	} else {
		$submit = false;
	}

	if($submit && !VIEW_OFF && $_SERVER['REQUEST_METHOD'] == 'POST') {
		if($password != $password2) {
			$error_msg['admininfo']['password2'] = 1;
			$submit = false;
		}
		$forceinstall = isset($_POST['dbinfo']['forceinstall']) ? $_POST['dbinfo']['forceinstall'] : '';
		$dbname_not_exists = true;
		if(!empty($dbhost) && empty($forceinstall)) {
			$dbname_not_exists = check_db($dbhost, $dbuser, $dbpw, $dbname, $tablepre);
			if(!$dbname_not_exists) {
				$form_db_init_items['dbinfo']['forceinstall'] = array('type' => 'checkbox', 'required' => 0, 'reg' => '/^.*+/');
				$error_msg['dbinfo']['forceinstall'] = 1;
				$submit = false;
				$dbname_not_exists = false;
			}
		}
	}

	if($submit) {
		$step = $step + 1;
		if(empty($dbname)) {
			show_msg('dbname_invalid', $dbname, 0);
		} else {
			$link = @mysql_connect($dbhost, $dbuser, $dbpw);
			if(!$link) {
				$errno = mysql_errno($link);
				$error = mysql_error($link);
				if($errno == 1045) {
					show_msg('database_errno_1045', $error, 0);
				} elseif($errno == 2003) {
					show_msg('database_errno_2003', $error, 0);
				} else {
					show_msg('database_connect_error', $error, 0);
				}
			}

			if(mysql_get_server_info() > '4.1') {
				mysql_query("CREATE DATABASE IF NOT EXISTS `$dbname` DEFAULT CHARACTER SET ".DBCHARSET, $link);
			} else {
				mysql_query("CREATE DATABASE IF NOT EXISTS `$dbname`", $link);
			}

			if(mysql_errno()) {
				show_msg('database_errno_1044', mysql_error(), 0);
			}
			mysql_close($link);
		}

		if(strpos($tablepre, '.') !== false || intval($tablepre{0})) {
			show_msg('tablepre_invalid', $tablepre, 0);
		}

		if($username && $email && $password) {
			if(strlen($username) > 15 || preg_match("/^$|^c:\\con\\con$|　|[,\"\s\t\<\>&]|^Guest/is", $username)) {
				show_msg('admin_username_invalid', $username, 0);
			} elseif(!strstr($email, '@') || $email != stripslashes($email) || $email != dhtmlspecialchars($email)) {
				show_msg('admin_email_invalid', $email, 0);
			} else {
				if(!DZUCFULL) {
					$adminuser = check_adminuser($username, $password, $email);
					if($adminuser['uid'] < 1) {
						show_msg($adminuser['error'], '', 0);
					}
				}
			}
		} else {
			show_msg('admininfo_invalid', '', 0);
		}

		$uid = DZUCFULL ? 1 : $adminuser['uid'];
		$authkey = substr(md5($_SERVER['SERVER_ADDR'].$_SERVER['HTTP_USER_AGENT'].$dbhost.$dbuser.$dbpw.$dbname.$username.$password.$pconnect.substr($timestamp, 0, 6)), 8, 6).random(10);
		$_config['db'][1]['dbhost'] = $dbhost;
		$_config['db'][1]['dbport'] = $dbport;
		$_config['db'][1]['dbuser'] = $dbuser;
		$_config['db'][1]['dbpw']   = $dbpw;
		$_config['db'][1]['dbname'] = $dbname;
		$_config['db'][1]['tablepre'] = $tablepre;

		save_config_file(ROOT_PATH.DBCONFIG, $_config, $default_config);

		$db = new dbstuff;
		$db->connect($dbhost, $dbuser, $dbpw, $dbname, DBCHARSET);

		if(!VIEW_OFF) {
			show_header();
			show_install();
		}

		$sql = file_get_contents($sqlfile);
		$sql = str_replace("\r\n", "\n", $sql);

		//执行安装sql
		runquery($sql);

		$yearmonth = date('Ym_', time());
		// loginit($yearmonth.'errorlog');

		dir_clear(ROOT_PATH.'./cache/compile');
		dir_clear(ROOT_PATH.'./data/log');
		dir_clear(ROOT_PATH.'./admin/data/compile');
		dir_clear(ROOT_PATH.'./admin/data/log');

		touch($lockfile);
		VIEW_OFF && show_msg('initdbresult_succ');

		if(!VIEW_OFF) {
			echo '<script type="text/javascript">function setlaststep() {document.getElementById("laststep").disabled=false;window.location=\'index.php?method=install_ok\';}</script><script type="text/javascript">setTimeout(function(){window.location=\'index.php?method=install_ok\'}, 10000);</script>'."\r\n";
			show_footer();
		}
	}

	if(VIEW_OFF) {
		show_msg('missing_parameter', '', 0);
	} else {
		show_form($form_db_init_items, $error_msg);
	}
} else if ($method == 'install_ok') {
	@touch($lockfile);
	if(VIEW_OFF) {
		show_msg('install_ok_succ');
	} else {
		show_header();
		show_step(4);
		echo '<div class="installoklink"><a href="../index.php" target="_blank">点击进入前台首页>></a></div>';
		echo '<div class="installoklink"><a href="../admin/index.php" target="_blank">点击进入后台首页>></a></div>';
		echo '<div class="blankblock"></div>';
		show_footer();
	}

} else if ($method == 'install_check') {

	if(file_exists($lockfile)) {
		show_msg('installstate_succ');
	} else {
		show_msg('lock_file_not_touch', $lockfile, 0);
	}

} else if ($method == 'tablepre_check') {

	$dbinfo = getgpc('dbinfo');
	extract($dbinfo);
	if(check_db($dbhost, $dbuser, $dbpw, $dbname, $tablepre)) {
		show_msg('tablepre_not_exists', 0);
	} else {
		show_msg('tablepre_exists', $tablepre, 0);
	}
}