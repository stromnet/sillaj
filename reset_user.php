<?php
/**
* reset test user on sourceforge (if someone changed it)
*/

require('./inc/config.php');
$intRes = $db->query("
  UPDATE sillaj_user 
  SET strPassword = MD5('test')
  WHERE strUserId  = 'test'
");

displayMessage('Password reset for user "Test"');
?>
