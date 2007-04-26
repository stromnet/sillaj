<?php /* Smarty version 2.6.16, created on 2007-04-26 19:49:39
         compiled from project.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'project.tpl', 1, false),array('modifier', 'escape', 'project.tpl', 11, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => $this->_tpl_vars['fnLanguageTpl'],'section' => 'project'), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if (! empty ( $this->_tpl_vars['strMessage'] )): ?><p class="info"><?php echo $this->_tpl_vars['strMessage']; ?>
</p><?php endif; ?>
<p><a href="project.php?add=1" title="<?php echo $this->_config[0]['vars']['aTitleAddProject']; ?>
"><?php echo $this->_config[0]['vars']['aAddProject']; ?>
</a></p>
<?php if (count ( $this->_tpl_vars['arrProject'] ) == 0): ?>
<p class="info"><?php echo @STR_PROJECT_NOT_FOUND_SILLAJ; ?>
</p>
<?php else: ?>
<ul>
  <?php $_from = $this->_tpl_vars['arrProject']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['intProjectId'] => $this->_tpl_vars['strProject']):
?>
  <li>
   <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?intProjectId=<?php echo $this->_tpl_vars['intProjectId']; ?>
" title="<?php echo $this->_config[0]['vars']['titleEdit']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['strProject'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</a>
  </li>
  <?php endforeach; endif; unset($_from); ?>
</ul>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>