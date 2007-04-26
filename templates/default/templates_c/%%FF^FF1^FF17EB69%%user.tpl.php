<?php /* Smarty version 2.6.16, created on 2007-04-26 19:49:23
         compiled from user.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'user.tpl', 1, false),array('function', 'html_options', 'user.tpl', 23, false),array('modifier', 'escape', 'user.tpl', 7, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => $this->_tpl_vars['fnLanguageTpl'],'section' => 'user'), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>
" id="frmUser" method="post" onsubmit="return frmUser_onsubmit(this, <?php if (! empty ( $this->_tpl_vars['booEdit'] )): ?>true<?php else: ?>false<?php endif; ?>);" autocomplete="off">
  <fieldset>    
    <?php if (! empty ( $this->_tpl_vars['booEdit'] )): ?>
    <legend><?php echo $this->_config[0]['vars']['editUser']; ?>
</legend>
    <input type="hidden" name="strUserId" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrUser']['strUserId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
    <input type="hidden" name="booEdit" value="true" />   
    <?php else: ?>
    <legend><?php echo $this->_config[0]['vars']['addUser']; ?>
</legend>
    <?php endif; ?>
    <label for="strUserId" accesskey="<?php echo $this->_config[0]['vars']['accLogin']; ?>
"><?php echo $this->_config[0]['vars']['labLogin']; ?>
</label><input type="text" id="strUserId" name="strUserId" <?php if (! empty ( $this->_tpl_vars['booEdit'] )): ?>disabled="disabled" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrUser']['strUserId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"<?php endif; ?> /><br />     
    <label for="strName" accesskey="<?php echo $this->_config[0]['vars']['accName']; ?>
"><?php echo $this->_config[0]['vars']['labName']; ?>
</label><input type="text" id="strName" name="strName"<?php if (! empty ( $this->_tpl_vars['booEdit'] )): ?> value="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrUser']['strName'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"<?php endif; ?> /><br />
    <label for="strFirstname" accesskey="<?php echo $this->_config[0]['vars']['accFirstname']; ?>
"><?php echo $this->_config[0]['vars']['labFirstname']; ?>
</label><input type="text" id="strFirstname" name="strFirstname"<?php if (! empty ( $this->_tpl_vars['booEdit'] )): ?> value="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrUser']['strFirstname'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"<?php endif; ?> /><br />
    <label for="strPassword" accesskey="<?php echo $this->_config[0]['vars']['accPassword']; ?>
"><?php echo $this->_config[0]['vars']['labPassword']; ?>
</label><input type="password" id="strPassword" name="strPassword" /><?php if (! empty ( $this->_tpl_vars['booEdit'] )): ?> <?php echo $this->_config[0]['vars']['notModifiedIfEmpty'];  endif; ?><br />
    <label for="strEmail" accesskey="<?php echo $this->_config[0]['vars']['accEmail']; ?>
" ><?php echo $this->_config[0]['vars']['labEmail']; ?>
</label><input type="text" id="strEmail" name="strEmail"<?php if (! empty ( $this->_tpl_vars['booEdit'] )): ?> value="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrUser']['strEmail'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"<?php endif; ?> /><br />
    <?php if (@BOO_ALLOW_EVERYONE_REPORT_SILLAJ): ?>
    <label for="cbxAllowOther" accesskey="<?php echo $this->_config[0]['vars']['accAllowOther']; ?>
"><input type="checkbox" id="cbxAllowOther" name="cbxAllowOther"<?php if (! empty ( $this->_tpl_vars['booEdit'] ) && $this->_tpl_vars['arrUser']['booAllowOther']): ?> checked="checked"<?php endif; ?> /> <?php echo $this->_config[0]['vars']['labAllowOther']; ?>
</label><br />
    <?php endif; ?>
    <label for="cbxUseShare" accesskey="<?php echo $this->_config[0]['vars']['accUseShare']; ?>
"><input id="cbxUseShare" name="cbxUseShare" type="checkbox"<?php if (! empty ( $this->_tpl_vars['booEdit'] ) && $this->_tpl_vars['arrUser']['booUseShare']): ?> checked="checked"<?php endif; ?> /><?php echo $this->_config[0]['vars']['labUseShare']; ?>
</label><br />  
    <label for="strLanguage" accesskey="<?php echo $this->_config[0]['vars']['accLanguage']; ?>
"><?php echo $this->_config[0]['vars']['labLanguage']; ?>
</label>
    <select id="strLanguage" name="strLanguage">
      <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrLanguage'],'selected' => $this->_tpl_vars['arrUser']['strLanguage']), $this);?>

    </select><br />
    <label for="strTemplate" accesskey="<?php echo $this->_config[0]['vars']['accTemplate']; ?>
"><?php echo $this->_config[0]['vars']['labTemplate']; ?>
</label>
    <select id="strTemplate" name="strTemplate">
      <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['arrTemplate'],'output' => $this->_tpl_vars['arrTemplate'],'selected' => $this->_tpl_vars['arrUser']['strTemplate']), $this);?>

    </select><br />
    <button type="submit" accesskey="<?php echo $this->_config[0]['vars']['accSubmit']; ?>
"><?php echo $this->_config[0]['vars']['inpSubmit']; ?>
</button>
    <button type="reset" accesskey="<?php echo $this->_config[0]['vars']['accReset']; ?>
"><?php echo $this->_config[0]['vars']['inpReset']; ?>
</button>
  </fieldset>
</form>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>