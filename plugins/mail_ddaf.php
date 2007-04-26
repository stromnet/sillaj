<?php
/**
* Send mail if login/password forgotten
*/

require_once('./inc/config.php');

$smarty->assign('booDisplayMenu', false);
    
// No $_POST data -> display the blank form
if (count($_POST) == 0) {
    $smarty->caching = true;
    if(!$smarty->is_cached('mail.tpl')) {
        $smarty->assign('strPageTitle', STR_MAIL_PAGE_TITLE_SILLAJ);
    }
    $smarty->display('mail.tpl');
}
// else $_POST data -> validate the form : update db and send the mail
else {    
    // check validity and if email exists in the database 
    $user->checkEmail($_POST['strEmail']);
    
    // Update the password in the database ; begin a db transaction
    // so if the mail fails we can rollback
    
    $arrNewLogin = $user->resetPassword($_POST['strEmail'], false);
    

       $from = STR_SITE_NAME_SILLAJ .'<'. STR_ADMIN_EMAIL_SILLAJ .'>';
            $to = $_POST['strEmail'];
       $subject = '['. STR_SITE_NAME_SILLAJ .'] '. STR_MAIL_SUBJECT_SILLAJ;
       
    // loop through all accounts if the same email address has been used for several accounts
    for ($i=0;$i<count($arrNewLogin);$i++) {
        $strBody .= sprintf(STR_MAIL_BODY_SILLAJ, $arrNewLogin[$i]['strUserId'], $arrNewLogin[$i]['strPassword']) ."\n\n";
    }
       
     $strMessage = $strBody ."\nhttp://". $_SERVER['SERVER_NAME'] . URL_ROOT_DIR_SILLAJ;
      $boundary  = '--'. md5(uniqid('myboundary'));
        $charset = 'iso-8859-1';
     $ctencoding = '8bit';
            $sep = chr(13) . chr(10);
    $disposition = 'inline';

    $header = 'From: "'. preg_replace("/([\x80-\xFF])/e", "chr(0xC0|ord('\\1')>>6).chr(0x80|ord('\\1')&0x3F)", STR_NOM_SITE_RDV) ."\" <$from>". $sep;
    $header .= "Mime-Version: 1.0". $sep;
    $header .= "To: $to". $sep;
    if (!empty($pcc)) {
        $header .= "Cc: $pcc". $sep;
    }
    $str_utf8 = preg_replace("/([\x80-\xFF])/e", "chr(0xC0|ord('\\1')>>6).chr(0x80|ord('\\1')&0x3F)", $subject);
    $header .= "Subject: $str_utf8". $sep;
    $header .= "Content-Type: multipart/mixed; boundary=\"$boundary\"". $sep;
    
    $message = "--$boundary". $sep;
    $message .= "Content-Type: text/plain; charset=$charset". $sep;
    $message .= "Content-Transfer-Encoding: $ctencoding". $sep . $sep;
    $message .= $strMessage . $sep;
      
    $nf = tempnam('', 'MAIL');
    $fp = fopen($nf, 'w');
    if (file_exists($nf)) {
        fwrite($fp, $header . $message);
        fclose($fp);
        $ressys = system("TYPE \"$nf\" | MSMTP.EXE $to");            
        echo $strEmailPro .'<br />';
        unlink($nf);
    } 
    else {
        out('Fichier temporaire absent');
    }

    

    $db->query('COMMIT');
    $smarty->assign(  'strPageTitle', STR_MAIL_PAGE_TITLE_SILLAJ);
    displayMessage(STR_MAIL_SUCCESS_SILLAJ .' '. $_POST['strEmail']);

}

?>
