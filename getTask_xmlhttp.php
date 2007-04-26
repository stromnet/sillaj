<?php
/**
* called by /js/sillaj.js by frmEvent_intProjectId_onchange() (xmlhttprequest) from index.tpl
* to produce a javascript array of all tasks depending on the currently selected project
*/
header('Content-Type: text/javascript; charset=iso-8859-1');
require('./inc/config.php');
$project = new Project;
$smarty->assign_by_ref('arrTask', $project->getTask($_GET['intProjectId'], true));
$smarty->display('frmEvent_taskOption.tpl');
?>