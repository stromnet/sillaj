<?php
/**
* report form and build report
*/

require('./inc/config.php');

// Allowed ?
$user->checkAuthent();

// No $_GET data -> display the form
if (count($_GET) == 0) {
    $project = new Project;
    $task = new Task;    
    
    if (BOO_ALLOW_EVERYONE_REPORT_SILLAJ) {
        $smarty->assign_by_ref('arrUser', $user->get());
    }        
    
    // prepare the list of months name (for js calendar)
    $arrMonthNames = array();
    for($i=2;$i<=13;$i++) { 
        $arrMonthNames[] = strftime('%B', mktime(0, 0, 0, $i, 0, 0));
    }

    // prepare the list of weekday first letters (for js calendar)
    $arrDayIni = array();
    for($i=0;$i<=6;$i++) { 
        $arrDayIni[] = strtoupper(substr(strftime('%A', mktime(0, 0, 0, 2, $i - 1 + INT_START_WEEK_DAY_SILLAJ, 0)), 0, 1));
    }
    
    // Prepare dates to populate date field according to the buttons click
    $smarty->assign_by_ref( 'datStartPreviousWeek', mktime(0, 0, 0, date('n'), date('j') - date('w') + INT_START_WEEK_DAY_SILLAJ - 7, date('Y')));
    $smarty->assign_by_ref(   'datEndPreviousWeek', mktime(23, 59, 59, date('n'), date('j') + (6 - date('w')) + INT_START_WEEK_DAY_SILLAJ - 7, date('Y')));
    $smarty->assign_by_ref(  'datStartCurrentWeek', mktime(0, 0, 0, date('n'), date('j') - date('w') + INT_START_WEEK_DAY_SILLAJ, date('Y')));
    $smarty->assign_by_ref(    'datEndCurrentWeek', mktime(23, 59, 59, date('n'), date('j') + (6 - date('w')) + INT_START_WEEK_DAY_SILLAJ, date('Y')));
    $smarty->assign_by_ref('datStartPreviousMonth', mktime(0, 0, 0, date('m') - 1, 1, date('Y')));
    $smarty->assign_by_ref(  'datEndPreviousMonth', mktime(0, 0, 0, date('m'), 0, date('Y')));
    $smarty->assign_by_ref( 'datStartCurrentMonth', mktime(0, 0, 0, date('m'), 1, date('Y')));
    $smarty->assign_by_ref(   'datEndCurrentMonth', mktime(0, 0, 0, date('m') + 1, 0, date('Y')));
    $smarty->assign_by_ref( 'datStartPreviousYear', mktime(0, 0, 0, 1, 1, date('Y') - 1));
    $smarty->assign_by_ref(   'datEndPreviousYear', mktime(0, 0, 0, 12, 31, date('Y') - 1));
    $smarty->assign_by_ref(  'datStartCurrentYear', mktime(0, 0, 0, 1, 1, date('Y')));
    $smarty->assign_by_ref(    'datEndCurrentYear', mktime(0, 0, 0, 12, 31, date('Y')));
    $smarty->assign(                      'booCal', true); // use js calendar : call the js in the header
    $smarty->assign_by_ref(        'arrMonthNames', $arrMonthNames);
    $smarty->assign_by_ref(            'arrDayIni', $arrDayIni);
    $smarty->assign_by_ref(     'strDateFormatCal', dateFormatPhpToJsCal(STR_DATE_FORMAT_SILLAJ));
    $smarty->assign_by_ref(           'arrProject', $project->get()); // list of all projects (for gantt form)
    $smarty->assign_by_ref(              'arrTask', $task->get());    // list of all tasks (for gantt form)
 
    $smarty->display('frmReport.tpl', $_SESSION['strUserId'] . $_SESSION['strLocale']);
}

// else $_GET data -> create the report
else {
    // Sort type
    if (empty($_GET['radSort']) || ($_GET['radSort'] == 'time')) {
        $strSort = 'time';
    }
    else {
        $strSort = 'alpha';
    }
    
    // who are we making a report on ? by default, the authenticated one.
    $strUserId = $_SESSION['strUserId'];
     
    // get user name if we make a report on another user (not the current authenticated one)
    // if we are in the "allow each other to see their reports" mode
    if (BOO_ALLOW_EVERYONE_REPORT_SILLAJ) {
        if (!empty($_GET['strUserId'])) {
            $strUserId = $_GET['strUserId'];
            
            // check that the selected user allowed other people to see his reports (if he is not the same as the authent one)
            $arrUser = $user->get($strUserId);
            if (!$arrUser['booAllowOther'] && ($strUserId != $_SESSION['strUserId'])) {
                raiseError(STR_ERROR_USER_NOT_ALLOWED_SILLAJ);            
            }
        }
    }
    
    // check date input
    if (empty($_GET['datStart']) || empty($_GET['datEnd'])) {
        raiseError(STR_ERROR_MISSING_DATE_SILLAJ);
    }    
    
    // convert local date to ISO date
    $datStart = localDateToIso($_GET['datStart']);
    $datEnd = localDateToIso($_GET['datEnd']);    
    
    // check date validity
    validIsoDate($datStart);
    validIsoDate($datEnd);
    
    // Create the report
    $report = new Report;
    
    if (empty($_GET['radType']) || ($_GET['radType'] == 'project')) {
        $smarty->assign_by_ref(  'arrReport', $report->getProject($strUserId, $strSort, $datStart, $datEnd));
        $smarty->assign(      'booByProject', true);
    }
    else {
        $smarty->assign_by_ref(  'arrReport', $report->getTask($strUserId, $strSort, $datStart, $datEnd));
        $smarty->assign(      'booByProject', false);
    }
    
    // assign some more useful variables
    $smarty->assign_by_ref(      'arrUser', $user->get($strUserId)); // to get the real name of the user 
    $smarty->assign_by_ref(     'datStart', $datStart);       
    $smarty->assign_by_ref(       'datEnd', $datEnd);    
    $smarty->assign_by_ref( 'strSumWorked', $report->getSumWorked($strUserId, $datStart, $datEnd));
    $smarty->assign(           'booDetail', !empty($_GET['cbxDetail']));
    $smarty->assign(        'booOtherUser', $strUserId != $_SESSION['strUserId']);
        
    // Normal (HTML) display or export to Excel (specific HTTP header, and HTML header too : header_xls.tpl)
    if (!empty($_GET['cbxExcel']) && ($_GET['cbxExcel'] == 'on')) {
        $smarty->assign('booExcel', true);
        header('Content-Disposition: attachement; filename="sillaj_'. $strUserId .'_'. $datStart .'_'. $datEnd .'.xls"');
        header('Content-Type: application/x-msexcel');       
    }
    else {
        $smarty->assign('booExcel', false);
    }

    $smarty->display('report.tpl');
}

?>
