<?php
/**
 * Used by the OSX Widget to get the list of projects
 */ 
require('./inc/config.php');
$user->checkAuthent();
header('Content-Type: application/json; charset='. STR_CHARSET_SILLAJ);

$project = new Project;
print json_encode($project->get());
