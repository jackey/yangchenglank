<?php
include_once( 'config.php' );
include_once( 'saetv2.ex.class.php' );

$cwd = getcwd();
define('DRUPAL_ROOT', dirname($cwd));
require_once DRUPAL_ROOT . '/includes/bootstrap.inc';
drupal_bootstrap(DRUPAL_BOOTSTRAP_FULL);
menu_execute_active_handler();
// if (!user_is_logged_in()) {
// 	header("Location: ". WB_URL.'?q=user', TRUE, 302);
// }

$o = new SaeTOAuthV2( WB_AKEY , WB_SKEY );

$code_url = $o->getAuthorizeURL( WB_CALLBACK_URL );

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Yangcheng Lank Weibo</title>
</head>

<body>
    <p><a href="<?php print $code_url?>"><img src="weibo_login.png" title="点击进入授权页面" alt="点击进入授权页面" border="0" /></a></p>
</body>
</html>
