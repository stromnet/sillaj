<?php
/**
 * Used by the OSX Widget
 */ 
header('Content-Type: text/javascript; charset=iso-8859-1');
require('./inc/config.php');
$project = new Project;
$smarty->assign_by_ref('arrProject', $project->get());
$smarty->display('frmEvent_projectOption.tpl');
?>
