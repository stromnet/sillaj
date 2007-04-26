<?php /* Smarty version 2.6.16, created on 2007-04-25 20:18:25
         compiled from header.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'header.tpl', 1, false),array('modifier', 'date_format_w3cdtf', 'header.tpl', 17, false),array('modifier', 'date_format', 'header.tpl', 28, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => $this->_tpl_vars['fnLanguageTpl']), $this);?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php echo $_SESSION['strLocale']; ?>
" lang="<?php echo $_SESSION['strLocale']; ?>
">
<head>
<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-language" content="<?php echo $_SESSION['strLocale']; ?>
" />
<meta name="revisit-after" content="7 days" />
<meta name="description" content="<?php echo @STR_META_DESCRIPTION_SILLAJ; ?>
" />
<meta name="keywords" content="<?php echo @STR_META_KEYWORDS_SILLAJ; ?>
" />
<meta name="author" content="<?php if (empty ( $_SESSION['strEmail'] )):  echo @STR_ADMIN_EMAIL_SILLAJ;  else:  echo $_SESSION['strEmail'];  endif; ?>" />
<meta name="robots" content="index,follow" />
<meta name="generator" content="<?php echo @STR_APPLI_NAME_SILLAJ; ?>
 - <?php echo @STR_APPLI_VERSION_SILLAJ; ?>
" />
<meta name="DC.Language" content="<?php echo $_SESSION['strLocale']; ?>
" scheme="RFC1766" />
<meta name="DC.Publisher" content="<?php echo @STR_ADMIN_EMAIL_SILLAJ; ?>
" />
<meta name="DC.Creator" content="<?php echo @STR_AUTHOR_SILLAJ; ?>
 - <?php echo @STR_AUTHOR_EMAIL_SILLAJ; ?>
" />
<meta name="DC.Date.created" content="2005-02-02" scheme="W3CDTF" />
<meta name="DC.Date.issued" content="<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format_w3cdtf', true, $_tmp) : date_format_w3cdtf($_tmp)); ?>
" scheme="W3CDTF" />
<title><?php echo @STR_SITE_NAME_SILLAJ;  echo @STR_SEP_SILLAJ;  echo $this->_tpl_vars['strPageTitle']; ?>
</title>
<link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" />
<link rel="shortcut icon" type="image/x-icon" href="<?php echo @URL_ROOT_DIR_SILLAJ; ?>
favicon.ico" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['urlThemeDir']; ?>
styles/default.css" media="all" title="<?php echo $this->_config[0]['vars']['defaultTheme']; ?>
" />
<?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['arrCss']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
<link rel="alternate stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['urlThemeDir']; ?>
styles/<?php echo $this->_tpl_vars['arrCss'][$this->_sections['i']['index']]['fnCss']; ?>
" media="all" title="<?php echo $this->_config[0]['vars']['theme']; ?>
 <?php echo $this->_tpl_vars['arrCss'][$this->_sections['i']['index']]['strNameCss']; ?>
" />
<?php endfor; endif; ?>
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['urlThemeDir']; ?>
styles/print.css" media="print" />
<?php if (basename ( $_SERVER['SCRIPT_NAME'] ) != 'login.php'): ?><link rel="alternate" type="text/xml" href="<?php echo @URL_ROOT_DIR_SILLAJ; ?>
rss.php?strUserId=<?php echo $_SESSION['strUserId']; ?>
" title="RSS" />
<?php endif;  if (basename ( $_SERVER['SCRIPT_NAME'] ) == 'index.php'): ?>
<link rel="start" href="?datEvent=<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
" title="<?php echo $this->_config[0]['vars']['liToday']; ?>
" />
<link rel="prev" href="?datEvent=<?php echo $this->_tpl_vars['datYesterday']; ?>
" title="<?php echo $this->_config[0]['vars']['dayPrev']; ?>
" />
<link rel="next" href="?datEvent=<?php echo $this->_tpl_vars['datTomorrow']; ?>
" title="<?php echo $this->_config[0]['vars']['dayNext']; ?>
" />
<?php endif; ?><script type="text/javascript" src="<?php echo @URL_ROOT_DIR_SILLAJ; ?>
lang/<?php echo $_SESSION['strLocale']; ?>
/lang.js"></script>    
<script type="text/javascript" src="<?php echo @URL_ROOT_DIR_SILLAJ; ?>
scripts/sillaj.js"></script>
<?php if (! empty ( $this->_tpl_vars['booCal'] )): ?><script type="text/javascript" src="<?php echo @URL_ROOT_DIR_SILLAJ; ?>
scripts/CalendarPopup.js"></script>
<!-- compliance patch for microsoft browsers --><!--[if lt IE 7]><script src="<?php echo @URL_ROOT_DIR_SILLAJ; ?>
scripts/ie7/ie7-standard-p.js" type="text/javascript"></script><![endif]-->
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['urlThemeDir']; ?>
styles/calendar.css" media="screen" /><?php endif; ?>
</head>
<body<?php if ($this->_tpl_vars['strOnload']): ?> onload="<?php echo $this->_tpl_vars['strOnload']; ?>
"<?php endif; ?>>
  <div id="header">
    <a href="<?php echo @URL_ROOT_DIR_SILLAJ; ?>
" title="<?php echo $this->_config[0]['vars']['appliHome']; ?>
">
      <img src="<?php echo $this->_tpl_vars['urlImgDir']; ?>
logo_sillaj.png" width="64" height="70" id="logo" alt="<?php echo @STR_APPLI_NAME_SILLAJ; ?>
" />
    </a>
    <h1><a href="<?php echo @URL_ROOT_DIR_SILLAJ; ?>
" title="<?php echo $this->_config[0]['vars']['appliHome']; ?>
"><?php echo @STR_SITE_NAME_SILLAJ; ?>
</a></h1>    
    <?php if ($this->_tpl_vars['booDisplayMenu']): ?>
    <div id="toolbar">
      <ul id="menu">     
        <?php $_from = $this->_tpl_vars['arrMenu']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['urlFile'] => $this->_tpl_vars['arrDetail']):
?>
        <?php if ($this->_tpl_vars['arrDetail']['booDisplay']): ?><li<?php if ($this->_tpl_vars['urlFile'] == basename ( $_SERVER['SCRIPT_NAME'] )): ?> id="menuTabSelected"<?php endif; ?>><a href="<?php echo $this->_tpl_vars['urlFile']; ?>
" title="<?php echo $this->_tpl_vars['arrDetail']['strTip']; ?>
"><?php echo $this->_tpl_vars['arrDetail']['strMenu']; ?>
</a></li><?php endif; ?>
        <?php endforeach; endif; unset($_from); ?>      
      </ul>
      <form action="search.php" method="get" id="frmSearch" onsubmit="return frmSearch_onsubmit(this);">
        <div>
          <input type="text" id="strKeyword" name="strKeyword" accesskey="<?php echo $this->_config[0]['vars']['accKeyword']; ?>
"<?php if (! empty ( $this->_tpl_vars['strKeyword'] )): ?> value="<?php echo $this->_tpl_vars['strKeyword']; ?>
"<?php endif; ?> />
          <button type="submit" accesskey="<?php echo $this->_config[0]['vars']['accSubmit']; ?>
"><?php echo $this->_config[0]['vars']['labKeyword']; ?>
</button>
        </div>
      </form>
      <!-- <a href="tool.php" title="<?php echo $this->_config[0]['vars']['aTitleTools']; ?>
"><img src="<?php echo $this->_tpl_vars['urlImgDir']; ?>
ico_tools.png" alt="<?php echo $this->_config[0]['vars']['altTools']; ?>
" width="22" height="22" /></a> -->
    </div>    
    <?php endif; ?>
    <h2><?php echo $this->_tpl_vars['strPageTitle']; ?>
</h2>
  </div>