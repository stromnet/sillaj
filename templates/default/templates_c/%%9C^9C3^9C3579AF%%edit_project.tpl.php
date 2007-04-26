<?php /* Smarty version 2.6.16, created on 2007-04-26 19:49:46
         compiled from edit_project.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'edit_project.tpl', 2, false),array('function', 'html_options', 'edit_project.tpl', 29, false),array('modifier', 'escape', 'edit_project.tpl', 22, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => $this->_tpl_vars['fnLanguageTpl'],'section' => 'edit_project'), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if (! empty ( $this->_tpl_vars['booEdit'] )): ?>
<p>
  <a href="event.php?intProjectId=<?php echo $this->_tpl_vars['intProjectId']; ?>
" title="<?php echo $this->_config[0]['vars']['aTitleEventForProject']; ?>
"><?php echo $this->_config[0]['vars']['aEventForProject']; ?>
</a>
  <?php if (@BOO_ENABLE_GRAPH_SILLAJ): ?>
  <br />
  <a href="gantt.php?intProjectId=<?php echo $this->_tpl_vars['intProjectId']; ?>
" title="<?php echo $this->_config[0]['vars']['aTitleGanttForProject']; ?>
"><?php echo $this->_config[0]['vars']['aGantt']; ?>
</a>
  <?php endif; ?>
</p>
<?php endif; ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>
" id="frmProject" method="post" onsubmit="return frmProject_onsubmit(this);">
  <fieldset>        
    <?php if (! empty ( $this->_tpl_vars['booEdit'] )): ?>
    <legend><?php echo $this->_config[0]['vars']['editProject']; ?>
</legend>
    <input type="hidden" name="intProjectId" value="<?php echo $this->_tpl_vars['intProjectId']; ?>
" />
    <input type="hidden" name="booEdit" value="true" />
    <?php else: ?>
    <legend><?php echo $this->_config[0]['vars']['addProject']; ?>
</legend>    
    <?php endif; ?>    
    <label for="strProject"><?php echo $this->_config[0]['vars']['labProject']; ?>
</label><input type="text" id="strProject" name="strProject"<?php if (! empty ( $this->_tpl_vars['booEdit'] )): ?> value="<?php echo ((is_array($_tmp=$this->_tpl_vars['strProject'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"<?php endif; ?> accesskey="<?php echo $this->_config[0]['vars']['accProject']; ?>
" /><br />
    <label for="strRem"><?php echo $this->_config[0]['vars']['labRem']; ?>
</label><input type="text" id="strRem" name="strRem"<?php if (! empty ( $this->_tpl_vars['booEdit'] )): ?> value="<?php echo ((is_array($_tmp=$this->_tpl_vars['strRem'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"<?php endif; ?> accesskey="<?php echo $this->_config[0]['vars']['accRem']; ?>
" /><br />
    <label for="arrTask" accesskey="<?php echo $this->_config[0]['vars']['accTask']; ?>
"><?php echo $this->_config[0]['vars']['labTask']; ?>
</label>
    <?php if (! count ( $this->_tpl_vars['arrTask'] )): ?>
      <span class="info"><?php echo $this->_config[0]['vars']['noTask']; ?>
</span>
    <?php else: ?>
    <select id="arrTask" name="arrTask[]" multiple="multiple">
      <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrTask'],'selected' => $this->_tpl_vars['arrTaskSelected']), $this);?>

    </select>
    <?php endif; ?>
    <br />
    <label for="cbxShare" accesskey="<?php echo $this->_config[0]['vars']['accShare']; ?>
">
      <input id="cbxShare" name="cbxShare" type="checkbox"<?php if (! empty ( $this->_tpl_vars['booEdit'] ) && $this->_tpl_vars['booShare']): ?> checked="checked"<?php endif; ?> />
      <?php echo $this->_config[0]['vars']['labShare']; ?>

    </label><br />
    <label for="cbxUseInReport" accesskey="<?php echo $this->_config[0]['vars']['accUseInReport']; ?>
">
      <input id="cbxUseInReport" name="cbxUseInReport" type="checkbox"<?php if (( ! empty ( $this->_tpl_vars['booEdit'] ) && $this->_tpl_vars['booUseInReport'] ) || ! isset ( $this->_tpl_vars['booUseInReport'] )): ?> checked="checked"<?php endif; ?> />
      <?php echo $this->_config[0]['vars']['labUseInReport']; ?>

    </label>
    <br />
    <button type="submit" accesskey="<?php echo $this->_config[0]['vars']['accSubmit']; ?>
"><?php echo $this->_config[0]['vars']['inpSubmit']; ?>
</button>
    <button type="reset" accesskey="<?php echo $this->_config[0]['vars']['accReset']; ?>
"><?php echo $this->_config[0]['vars']['inpReset']; ?>
</button>
  </fieldset>
</form>
<?php if (! empty ( $this->_tpl_vars['booEdit'] )): ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>
" id="frmDeleteProject" method="post" onsubmit="return frmDeleteProject_onsubmit();">
  <p>
    <input type="hidden" name="intProjectId" value="<?php echo $this->_tpl_vars['intProjectId']; ?>
" />
    <input type="hidden" name="booDelete" value="1" />
    <button type="submit" accesskey="<?php echo $this->_config[0]['vars']['accDelete']; ?>
"><?php echo $this->_config[0]['vars']['inpDelete']; ?>
</button>
  </p>
</form>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "footer.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>