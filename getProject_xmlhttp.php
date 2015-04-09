<?php
/**
 * Used by the OSX Widget to get the list of projects
 */ 
require('./inc/config.php');
$user->checkAuthent();
header('Content-Type: text/javascript; charset='. STR_CHARSET_SILLAJ);

$project = new Project;
$smarty->assign('arrProject', $project->get());
$smarty->display('frmEvent_projectOption.tpl');
