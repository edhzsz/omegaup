<?php
require_once( "../server/bootstrap.php" );
if (isset($_GET['email']) && isset($_GET['reset_token'])) {
	$smarty->assign('EMAIL', $_GET['email']);
	$smarty->assign('RESET_TOKEN', $_GET['reset_token']);
} else {
	die(header('Location: index.php'));
}

$smarty->display('../templates/reset_password.tpl');