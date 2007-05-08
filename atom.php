<?php
/**
* Build an Atom feed
*/
header('Content-Type: application/atom+xml');

if (empty($_GET['strUserId'])) {
    exit;
}

require('./inc/config.php');

$smarty->caching = true;
if(!$smarty->is_cached('atom.tpl', $_GET['strUserId'])) {
    $event = new Event;
    
    $smarty->assign_by_ref('strUserId', $_GET['strUserId']);
    $smarty->assign_by_ref(  'arrAtom', $event->getLastItems($_GET['strUserId']));
}
$smarty->display('atom.tpl', $_GET['strUserId']);

?>
