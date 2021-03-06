<?php

// Your application parameters                                                        Allowed              Default
//                                                                                    =======              =======
define(               'STR_LOCALE_SILLAJ', 'en');         // . default language       'fr', 'sv', 'de',   'en'
                                                          //   see ISO 639-1          'en', 'nl'
                                                          //                          see /lang/ folder                                                          
define(             'STR_TEMPLATE_SILLAJ', 'default');    // . default theme          dir from /templates  'default'
define(       'INT_START_WEEK_DAY_SILLAJ', 1);            // . week starts on :       0 sunday,            1
                                                          //                          1 monday,...                                                          
define(         'INT_RSS_MAX_ITEM_SILLAJ', 20);           // . max items in           integer              20
                                                          //   RSS/Atom feed
define('BOO_ALLOW_EVERYONE_REPORT_SILLAJ', false);        // . allow to see other     true/false           false
                                                          //   people's reports ?                                                                                                                   
define(          'STR_DATE_FORMAT_SILLAJ', '%Y-%m-%d');   // . default short date     '%d/%m/%Y' or        '%Y-%m-%d'
                                                          //   format                 '%m/%d/%Y' or  
                                                          //                          '%Y-%m-%d'                                                          
define(     'STR_LONG_DATE_FORMAT_SILLAJ', '%A %d %B %Y');// . default long date      '%A %d %B %Y' or     '%A %d %B %Y'
                                                          //   format                 '%A %B %d, %Y'                                                                                                                     
define(         'BOO_ENABLE_GRAPH_SILLAJ', true);         // . build graph ?          true/false           true
                                                          //   (and GD must be 
                                                          //   enabled in php.ini)                                                          
define(                  'STR_SEP_SILLAJ', ' &gt; ');     // . Separator in page      string               ' &gt; '    
                                                          //   titles                                                          
define(            'INT_GANTT_SPAN_SILLAJ', 3);           // . default gantt span     months (int)         3
$arrGanttSpan = array(1, 2, 3, 6, 12);                    // . Available gantt span   array of number      array(1, 2, 3, 6, 12)
                                                          //                          of months (int)   
date_default_timezone_set('Europe/Paris');                // . Time zone (for PHP 5.1+)
                                                          //   see http://php.net/manual/en/timezones.php

// Site Description
define(        'STR_SITE_NAME_SILLAJ', 'Sillaj :: Stromnet');                 // site name
define( 'STR_META_DESCRIPTION_SILLAJ', 'Time tracking for your projects');// site description (for meta tags)
define(    'STR_META_KEYWORDS_SILLAJ', 'time,tracker,project,task');      // site keywords (for meta tags)
define(      'STR_ADMIN_EMAIL_SILLAJ', 'johan@stromnet.se');                // Admin email

// database parameters
define(          'STR_DB_TYPE_SILLAJ', 'mysql');
define(          'STR_DB_USER_SILLAJ', 'sillaj');
define(          'STR_DB_PASS_SILLAJ', 'bolpEess');
define(      'STR_DB_DATABASE_SILLAJ', 'sillaj');
define(          'STR_DB_HOST_SILLAJ', '172.28.10.2');

// Mail parameters ; used to send a new password if the user forgot his.
define(       'STR_MAIL_SERVER_SILLAJ', 'mail.stromnet.se'); // The mail server used to send mail
define(        'STR_MAIL_PORT_SILLAJ', '587'); 					 // The server port used to send mail
define( 'BOO_MAIL_SMTP_AUTHENT_SILLAJ', false);              // The mail server needs SMTP authentication ?
define(   'STR_MAIL_SMTP_LOGIN_SILLAJ', 'login');            // SMTP authentication login (if BOO_MAIL_SMTP_LOGIN_SILLAJ == true)
define('STR_MAIL_SMTP_PASSWORD_SILLAJ', 'password');         // SMTP authentication password (if BOO_MAIL_SMTP_LOGIN_SILLAJ == true)

/*-------No need to change below----------------------------------------------*/

// a list of ISO 639-1 codes and language full names ; we should have at least 
// the directories listed in the /lang/ folder
// Don't worry about sort order, it's sorted in Sillaj::getLanguage()
$arrLanguageNameLookup = array(
    'de' => 'Deutsch',    
    'en' => 'English',
    'fr' => 'Fran�ais',
    'nl' => 'Dutch',
    'sv' => 'Svensk'
);

// Application internals 
define(        'BOO_DEBUG_SILLAJ', true);
define(      'FN_ROOT_DIR_SILLAJ', dirname($_SERVER['SCRIPT_FILENAME']) .'/');
define(         'FN_CACHE_SILLAJ', FN_ROOT_DIR_SILLAJ .'cache/');
// finding public path. It takes care if installed directly in the documentroot whereas in a subdir
define(     'URL_ROOT_DIR_SILLAJ', dirname($_SERVER['PHP_SELF']) == '/' ? '/' : dirname($_SERVER['PHP_SELF']) .'/');
define(        'URL_CACHE_SILLAJ', URL_ROOT_DIR_SILLAJ .'cache/');
define(   'STR_APPLI_NAME_SILLAJ', 'Sillaj');
define('STR_APPLI_VERSION_SILLAJ', '0.2.19');
define(       'STR_AUTHOR_SILLAJ', 'Micha�l Delorme');
define( 'STR_AUTHOR_EMAIL_SILLAJ', 'sillaj@gmail.com');
define(       'BOO_OS_WIN_SILLAJ', strtoupper(substr(PHP_OS, 0, 3)) == 'WIN');  // find OS so we can chose which locale format to use
define(      'STR_CHARSET_SILLAJ', 'iso-8859-1');

header('X-Powered-By:'. STR_APPLI_NAME_SILLAJ .'/'. STR_APPLI_VERSION_SILLAJ);

// if pear is not found globally (in the include_path) we can try to add 
// the bundled version to the include_path :
set_include_path(get_include_path() . PATH_SEPARATOR . FN_ROOT_DIR_SILLAJ . 'lib/pear'); 

// Compress output
ob_start('ob_gzhandler');

// Debug option
if (BOO_DEBUG_SILLAJ) {
    ini_set('display_errors', 'on');
    error_reporting(E_ALL);
}
else {
    error_reporting(0);
}

function exc_handler($ex){
	raiseError($ex->getMessage());
}
set_exception_handler('exc_handler');

// Main classes
require("Smarty.class.php");
//require(FN_ROOT_DIR_SILLAJ .'lib/smarty/Smarty.class.php');
require('sillaj.class.php');

// Start the session and will populate the $_SESSION variable with information on the
// user (name, lang, template...) when login
$user = new User;

$want_json = !empty($_SERVER['HTTP_ACCEPT']) && $_SERVER['HTTP_ACCEPT'] == 'application/json';

// Set default theme
if (empty($_SESSION['strThemeName'])) {
    $_SESSION['strThemeName'] = STR_TEMPLATE_SILLAJ; 
}

// Set default language
if (empty($_SESSION['strLocale'])) {
    $_SESSION['strLocale'] = STR_LOCALE_SILLAJ; 
}

// Prepare display (Smarty instance from sillaj.class.php)
$smarty = new smartySillaj($_SESSION['strThemeName']);

// Application parameters (find available templates, languages and themes)
$sillaj = new Sillaj;
 
// Load PHP messages translations (application logic messages) from /lang/??/lang.php
$fnLanguageMsg = FN_ROOT_DIR_SILLAJ .'lang/'. $_SESSION['strLocale'] .'/lang.php';
if (file_exists($fnLanguageMsg)) {
    require($fnLanguageMsg);
}
else {
    $strLocaleNotSupported = $_SESSION['strLocale'];
    $_SESSION['strLocale'] = '';  // on error, allow to revert to the default language on next page
    die ('Error: Language "'. $strLocaleNotSupported .'" not supported ; missing '. $fnLanguageMsg);
}

// To display localized dates - should work for win32 and UNIX (not sure for OSX or others)
// see /lang/??/php.php for constant definitions
define('STR_PHP_LOCALE_SILLAJ', BOO_OS_WIN_SILLAJ ? STR_PHP_LOCALE_WIN_SILLAJ : STR_PHP_LOCALE_NIX_SILLAJ);
setlocale(LC_ALL, STR_PHP_LOCALE_SILLAJ);

// check templates translations (for HTML display) in /lang/??/lang.txt
$fnLanguageTpl = $smarty->config_dir . $_SESSION['strLocale'] .'/lang.txt';
if (!file_exists($fnLanguageTpl)) {
    $strLocaleNotSupported = $_SESSION['strLocale'];
    $_SESSION['strLocale'] = ''; // on error, allow to revert to the default language on next page 
    die ('Error: Language "'. $strLocaleNotSupported .'" not supported ; missing '. $fnLanguageTpl);
}

// Automagically assign page title from the menu array in /lang/??/php.php ; could be overwritten later
if (key_exists(basename($_SERVER['PHP_SELF']), $arrMenu)) { 
    $smarty->assign('strPageTitle', $arrMenu[basename($_SERVER['PHP_SELF'])]['strMenu']);
}

// Available default smarty variable in all templates (other constants too can be used directly via {$smarty.const.MYCONSTANT}) :
$smarty->assign(       'urlThemeDir', URL_ROOT_DIR_SILLAJ .'templates/'. $_SESSION['strThemeName'] .'/');      // Theme directory 
$smarty->assign(         'urlImgDir', URL_ROOT_DIR_SILLAJ .'templates/'. $_SESSION['strThemeName'] .'/img/');
$smarty->assign(     'fnLanguageTpl', $_SESSION['strLocale'] .'/lang.txt');     // Language config file
$smarty->assign_by_ref(    'arrMenu', $arrMenu);                                // Menu elements from lang/??/php.php
$smarty->assign(    'booDisplayMenu', true);                                    // no menu on login, error, signup pages (see these pages)
$smarty->assign(     'arrCss', $sillaj->getCss());                       // list of availble CSS

// display error if template does not exist
if (BOO_TEMPLATE_NOT_FOUND_SILLAJ) { // defined in SmartySillaj::smartySillaj()
    raiseError('Error: Template "'. STR_BAD_TEMPLATE_SILLAJ .'" does not exist ; reverting to default theme');
}

// Database connectivity with PEAR::DB
// the $db variable will be used as a global variable in all functions in 
// sillaj.class.php
try {
	$db = new PDO(STR_DB_TYPE_SILLAJ .':host=' .STR_DB_HOST_SILLAJ .';dbname='. STR_DB_DATABASE_SILLAJ,
		STR_DB_USER_SILLAJ, STR_DB_PASS_SILLAJ);
   $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    raiseError($e->getMessage());
}

/**
* Simple error manager
* Display an error page with a message and exit
*/
function raiseError($strErrorMessage) {
    global $want_json;
    if($want_json) {
        print json_encode(array("error"=> $strErrorMessage));
        exit;
    }

    global $smarty;

    $smarty->assign('strContent', '<p class="error">'. $strErrorMessage .'</p>');
    
    // display a menu bar only if we're authenticated. eg not when creating an account
    if (empty($_SESSION['booIsAuthent'])) {
        $smarty->assign('booDisplayMenu', false);
    }
    
    // use a default page title if not assigned before
    if (is_null($smarty->get_template_vars('strPageTitle'))) {
        $smarty->assign('strPageTitle', STR_ERROR_TITLE_SILLAJ);
    } 
    
    $smarty->display('default.tpl');
    exit;
}

/** 
* Simple message manager
* Display a page with a message and exit
*/
function displayMessage($strMessage) {
    global $smarty;
    
    $smarty->assign('strContent', '<p class="info">'.$strMessage.'</p>');

    // use a default page title if not assigned before
    if (is_null($smarty->get_template_vars('strPageTitle'))) {
        $smarty->assign('strPageTitle', STR_MESSAGE_TITLE_SILLAJ);
    } 
    
    $smarty->display('default.tpl');  
    exit;
}

/**
 * Check ISO date as valid
 */
function validIsoDate($datIso) {
	if (!preg_match("/([0-9]{4})-([0-9]{1,2})-([0-9]{1,2})/", $datIso, $arrIso) ||
		 !checkdate($arrIso[2], $arrIso[3], $arrIso[1])) {
	    raiseError(STR_BAD_DATE_SILLAJ .' : '. $datIso);
	}
	else {
		return $arrIso;
	}
}

/** 
* Convert locally formatted numeric date to ISO date
* Used when submitting report form where dates are formatted by calendarPopup.js
* See the allowed formats in STR_DATE_FORMAT_SILLAJ at the top of this file
*/
function localDateToIso($datLocal) {
    switch (STR_DATE_FORMAT_SILLAJ) { 
        case '%m/%d/%Y':
            $arrDateLocal = explode('/', $datLocal); 
            return sprintf('%04d-%02d-%02d', $arrDateLocal[2], $arrDateLocal[0], $arrDateLocal[1]);
        case '%d/%m/%Y': 
            $arrDateLocal = explode('/', $datLocal); 
            return sprintf('%04d-%02d-%02d', $arrDateLocal[2], $arrDateLocal[1], $arrDateLocal[0]);
        case '%Y-%m-%d': 
            return $datLocal;
        default:
            raiseError(STR_BAD_DATE_FORMAT_SILLAJ .' : '. STR_DATE_FORMAT_SILLAJ);   
    } 
}

/**
 * Convert PHP date() format strings to a string usable for the javascript 
 * calendar. see /scripts/calendarPopup.js
 * ex '%d/%m/%Y' -> 'dd/mm/yyyy'
 * should be more generic
 * See the allowed formats in STR_DATE_FORMAT_SILLAJ at the top of this file
 */
function dateFormatPhpToJsCal($strDateFormat) {
    switch ($strDateFormat) { 
        case '%m/%d/%Y':            
            return 'MM/dd/yyyy';
        case '%d/%m/%Y': 
            return 'dd/MM/yyyy';
        case '%Y-%m-%d': 
            return 'yyyy-MM-dd';
        default:
            raiseError(STR_BAD_DATE_FORMAT_SILLAJ .' : '. $strDateFormat);   
    } 
}

/**
 * Create a Smarty "modifier" to convert, in Smarty templates,
 * a UNIX timestamp into W3CDTF date format YYYY-MM-DDThh:mm:ssTZD 
 * eg: 2005-08-26T10:59:42+02:00
 * Use in Smarty template : {$myTimestamp|date_format_w3cdtf}
 * or in PHP code like the date() function
 */
define('TS_NOW_SILLAJ', time());
function date_format_w3cdtf($ts = TS_NOW_SILLAJ) {
    return date("Y-m-d\\TH:i:s", $ts) . substr_replace(date('O', $ts), ':', 3, 0);  // calcul du d�calage GMT    
}
$smarty->register_modifier('date_format_w3cdtf', 'date_format_w3cdtf');
