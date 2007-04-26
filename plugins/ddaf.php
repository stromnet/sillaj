<?php
// <DDAF>
if ($_SESSION['strUserId'] == 'delormem') {
    $db2 = DB::connect('mysql://internet:cbnm@localhost/agenda');
    if (DB::isError($db2)) {
        raiseError($db2->getMessage());
    }
    $db2->setFetchMode(DB_FETCHMODE_ASSOC);
    
    if ($arrInput['timStart'] == 'NULL') {
        $tmpTime = -1;
        $tmpDur = 0;
    }
    else {
        $tmpTime = str_replace("'", '', str_replace(':', '', $arrInput['timStart']));
        $tmpDur = $arrInput['timDuration'];
    }
    
    $p = new Project;
    $t = new Task;
    $arrP = $p->get($_POST['intProjectId']);
    $arrT = $t->get($_POST['intTaskId']);
    $strRem = $arrInput['strRem'] != '' ? "\n". $arrInput['strRem'] : '';

    // pas très sûr... (il faudrait un lock)
    $id = $db2->getOne('SELECT MAX(cal_id) AS maxid FROM webcal_entry');
    if (DB::isError($id)) {
        raiseError($id->getMessage());
    }
    $id++;
    
    $res = $db2->query("
      INSERT INTO webcal_entry_user 
        (cal_id, cal_login, cal_status, cal_category)
      VALUES (
        $id,
        '". $_SESSION['strUserId'] ."',
        'A',
        NULL
      )
    ");
    if (DB::isError($res)) {
        raiseError($res->getMessage());
    }
    
    $res = $db2->query("
      INSERT INTO webcal_entry
        (cal_id, cal_create_by, cal_date, cal_time, cal_duration, cal_priority, cal_type, cal_access, cal_name, cal_description, cal_mod_date, cal_mod_time)
      VALUES (
        $id,
        '". $_SESSION['strUserId'] ."',
        ". str_replace('-', '', $_POST['datEvent']) .",
        $tmpTime,
        TIME_TO_SEC(".$tmpDur.") / 60,
        2,
        'E',
        'P',
        '". addslashes($arrP[$_POST['intProjectId']]) ."',
        '". addslashes($arrT[$_POST['intTaskId']]) . $strRem ."',
        CURDATE() + 0,
        CURTIME() + 0
      )  
    ");
     if (DB::isError($res)) {
        raiseError($res->getMessage());
    }
    
}
// </DDAF>
?>