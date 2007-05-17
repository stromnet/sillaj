<?php
/**
 * Used by the OSX Widget to get the list of projects
 */ 
header('Content-Type: text/javascript; charset='. STR_CHARSET_SILLAJ);
require('./inc/config.php');
$project = new Project;
$smarty->assign_by_ref('arrProject', $project->get());
$smarty->display('frmEvent_projectOption.tpl');
?>
