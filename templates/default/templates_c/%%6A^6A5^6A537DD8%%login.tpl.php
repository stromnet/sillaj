<?php /* Smarty version 2.6.16, created on 2007-04-26 19:49:08
         compiled from login.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'login.tpl', 1, false),array('modifier', 'default', 'login.tpl', 9, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => $this->_tpl_vars['fnLanguageTpl'],'section' => 'login'), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<noscript><p class="info"><?php echo $this->_config[0]['vars']['javascriptNeeded']; ?>
</p></noscript>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>
" id="frmLogin" method="post" onsubmit="return frmLogin_onsubmit(this);">
  <fieldset>
    <legend><?php echo $this->_config[0]['vars']['login']; ?>
</legend>
    <label for="strUserId"><?php echo $this->_config[0]['vars']['labLogin']; ?>
</label><input type="text" id="strUserId" name="strUserId" accesskey="<?php echo $this->_config[0]['vars']['accLogin']; ?>
" /><br />
    <label for="strPassword"><?php echo $this->_config[0]['vars']['labPassword']; ?>
</label><input type="password" id="strPassword" name="strPassword" accesskey="<?php echo $this->_config[0]['vars']['accPassword']; ?>
" /><br />
    <input type="hidden" name="urlDest" value="<?php echo ((is_array($_tmp=@$this->_tpl_vars['urlDest'])) ? $this->_run_mod_handler('default', true, $_tmp, "") : smarty_modifier_default($_tmp, "")); ?>
" />
    <button type="submit" accesskey="<?php echo $this->_config[0]['vars']['accSubmit']; ?>
"><?php echo $this->_config[0]['vars']['inpSubmit']; ?>
</button>
    <button type="reset" accesskey="<?php echo $this->_config[0]['vars']['accReset']; ?>
"><?php echo $this->_config[0]['vars']['inpReset']; ?>
</button>
  </fieldset>
</form>
<p>
  <a href="user.php" title="<?php echo $this->_config[0]['vars']['aTitleCreateAccount']; ?>
"><?php echo $this->_config[0]['vars']['aCreateAccount']; ?>
</a><br />
  <a href="mail.php" title="<?php echo $this->_config[0]['vars']['aTitleForgotEmail']; ?>
"><?php echo $this->_config[0]['vars']['aForgotEmail']; ?>
</a>
</p>
<p class="webmaster">
  <a href="mailto:<?php echo @STR_ADMIN_EMAIL_SILLAJ; ?>
" title="<?php echo $this->_config[0]['vars']['aTitleWriteAdmin']; ?>
"><?php echo $this->_config[0]['vars']['aWriteAdmin']; ?>
</a>
</p>
<p class="standard">
  <a href="http://validator.w3.org/check?uri=referer" title="<?php echo $this->_config[0]['vars']['xhtmlValid']; ?>
"><img src="<?php echo $this->_tpl_vars['urlImgDir']; ?>
ico_xhtml.png" alt="XHTML 1.0 strict" height="15" width="80" /></a>
  <a href="http://jigsaw.w3.org/css-validator/" title="<?php echo $this->_config[0]['vars']['cssValid']; ?>
"><img src="<?php echo $this->_tpl_vars['urlImgDir']; ?>
ico_css.png" alt="CSS 3.0" height="15" width="80" /></a>
  <a href="http://www.w3.org/WAI/WCAG1AA-Conformance" title="<?php echo $this->_config[0]['vars']['accessValid']; ?>
"><img src="<?php echo $this->_tpl_vars['urlImgDir']; ?>
ico_wai.png" alt="WAI-AA" height="15" width="80" /></a>
</p>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>