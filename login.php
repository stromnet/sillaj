<?php
/**
* login the user
*/

require('./inc/config.php');

// Validate form
if (count($_POST) != 0) {
    $user->execAuthent();
}

// else display form
$smarty->caching = true;
if (!empty($_GET['urlDest'])) {
    $smarty->assign('urlDest', $_GET['urlDest']);
}
if(!$smarty->is_cached('login.tpl', $_GET['urlDest'])) {               
    $smarty->assign('booDisplayMenu', false);
    $smarty->assign(  'strPageTitle', STR_LOGIN_PAGE_TITLE_SILLAJ);
}
$smarty->display('login.tpl', $_GET['urlDest']);
?>