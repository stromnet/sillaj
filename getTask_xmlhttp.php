<?php
/**
* called in /js/sillaj.js by frmEvent_intProjectId_onchange() (xmlhttprequest) from index.tpl
* to produce a javascript array of all tasks depending on the currently selected project
*/

require('./inc/config.php');
$user->checkAuthent();
header('Content-Type: application/json; charset='. STR_CHARSET_SILLAJ);

$project = new Project;
print json_encode($project->getTask($_GET['intProjectId'], true));

