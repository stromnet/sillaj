216
a:5:{s:8:"template";a:3:{s:9:"login.tpl";b:1;s:10:"header.tpl";b:1;s:10:"footer.tpl";b:1;}s:6:"config";a:1:{s:11:"en/lang.txt";b:1;}s:9:"timestamp";i:1177609749;s:7:"expires";i:1177613349;s:13:"cache_serials";a:0:{}}<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-type" content="text/html; charset=iso-8859-1" />
<meta http-equiv="Content-language" content="en" />
<meta name="revisit-after" content="7 days" />
<meta name="description" content="Time tracking for your projects" />
<meta name="keywords" content="time,tracker,project,task" />
<meta name="author" content="you@example.com" />
<meta name="robots" content="index,follow" />
<meta name="generator" content="Sillaj - 0.2.13" />
<meta name="DC.Language" content="en" scheme="RFC1766" />
<meta name="DC.Publisher" content="you@example.com" />
<meta name="DC.Creator" content="Michaël Delorme - sillaj@gmail.com" />
<meta name="DC.Date.created" content="2005-02-02" scheme="W3CDTF" />
<meta name="DC.Date.issued" content="2007-04-26T19:49:09+02:00" scheme="W3CDTF" />
<title>Sillaj :: Demo &gt; Login</title>
<link rel="schema.DC" href="http://purl.org/dc/elements/1.1/" />
<link rel="shortcut icon" type="image/x-icon" href="/sillaj/favicon.ico" />
<link rel="stylesheet" type="text/css" href="/sillaj/templates/default/styles/default.css" media="all" title="Default theme" />
<link rel="alternate stylesheet" type="text/css" href="/sillaj/templates/default/styles/rose.css" media="all" title="Theme rose" />
<link rel="stylesheet" type="text/css" href="/sillaj/templates/default/styles/print.css" media="print" />
<script type="text/javascript" src="/sillaj/lang/en/lang.js"></script>    
<script type="text/javascript" src="/sillaj/scripts/sillaj.js"></script>
</head>
<body>
<div id="header">
<a href="/sillaj/" title="Home">
<img src="/sillaj/templates/default/img/logo_sillaj.png" width="64" height="70" id="logo" alt="Sillaj" />
</a>
<h1><a href="/sillaj/" title="Home">Sillaj :: Demo</a></h1>    
<h2>Login</h2>
</div><noscript><p class="info">Javascript must be activated to enjoy all features</p></noscript>
<form action="/sillaj/login.php" id="frmLogin" method="post" onsubmit="return frmLogin_onsubmit(this);">
<fieldset>
<legend>Login</legend>
<label for="strUserId"><span class="accesskey">L</span>ogin</label><input type="text" id="strUserId" name="strUserId" accesskey="l" /><br />
<label for="strPassword"><span class="accesskey">P</span>assword</label><input type="password" id="strPassword" name="strPassword" accesskey="p" /><br />
<input type="hidden" name="urlDest" value="/sillaj/index.php" />
<button type="submit" accesskey="o"><span class="accesskey">O</span>K</button>
<button type="reset" accesskey="r"><span class="accesskey">R</span>eset</button>
</fieldset>
</form>
<p>
<a href="user.php" title="New users must create an account before accessing the service">Create an account</a><br />
<a href="mail.php" title="Get a new password by email">Forgot your password ?</a>
</p>
<p class="webmaster">
<a href="mailto:you@example.com" title="Send an email to the webmaster">Webmaster</a>
</p>
<p class="standard">
<a href="http://validator.w3.org/check?uri=referer" title="Valid XHTML 1.1"><img src="/sillaj/templates/default/img/ico_xhtml.png" alt="XHTML 1.0 strict" height="15" width="80" /></a>
<a href="http://jigsaw.w3.org/css-validator/" title="Valid CSS 3.0"><img src="/sillaj/templates/default/img/ico_css.png" alt="CSS 3.0" height="15" width="80" /></a>
<a href="http://www.w3.org/WAI/WCAG1AA-Conformance" title="Accessibility checked"><img src="/sillaj/templates/default/img/ico_wai.png" alt="WAI-AA" height="15" width="80" /></a>
</p>
<div id="footer">
<hr />
2007-04-26<br />
<a href="http://sillaj.sourceforge.net/" title="Go to sillaj home page">
Sillaj
</a> - 0.2.13
</div>
</body>
</html>