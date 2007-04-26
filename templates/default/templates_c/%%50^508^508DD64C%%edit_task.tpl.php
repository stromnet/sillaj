<?php /* Smarty version 2.6.16, created on 2007-04-26 19:50:44
         compiled from edit_task.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'edit_task.tpl', 2, false),array('function', 'html_options', 'edit_task.tpl', 29, false),array('modifier', 'escape', 'edit_task.tpl', 22, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => $this->_tpl_vars['fnLanguageTpl'],'section' => 'edit_task'), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "header.tpl", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php if (! empty ( $this->_tpl_vars['booEdit'] )): ?>
<p>
  <a href="event.php?intTaskId=<?php echo $this->_tpl_vars['intTaskId']; ?>
" title="<?php echo $this->_config[0]['vars']['aTitleEventForTask']; ?>
"><?php echo $this->_config[0]['vars']['aEventForTask']; ?>
</a>
  <?php if (@BOO_ENABLE_GRAPH_SILLAJ): ?>
  <br />
  <a href="gantt.php?intTaskId=<?php echo $this->_tpl_vars['intTaskId']; ?>
" title="<?php echo $this->_config[0]['vars']['aTitleGanttForTask']; ?>
"><?php echo $this->_config[0]['vars']['aGantt']; ?>
</a>
  <?php endif; ?>
</p>
<?php endif; ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>
" id="frmTask" method="post" onsubmit="return frmTask_onsubmit(this);">
  <fieldset>    
    <?php if (! empty ( $this->_tpl_vars['booEdit'] )): ?>
    <legend><?php echo $this->_config[0]['vars']['editTask']; ?>
</legend>    
    <input type="hidden" name="intTaskId" value="<?php echo $this->_tpl_vars['intTaskId']; ?>
" />
    <input type="hidden" name="booEdit" value="true" />
    <?php else: ?>
    <legend><?php echo $this->_config[0]['vars']['addTask']; ?>
</legend>  
    <?php endif; ?>
    <label for="strTask"><?php echo $this->_config[0]['vars']['labTask']; ?>
</label><input type="text" id="strTask" name="strTask"<?php if (! empty ( $this->_tpl_vars['booEdit'] )): ?> value="<?php echo ((is_array($_tmp=$this->_tpl_vars['strTask'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"<?php endif; ?> accesskey="<?php echo $this->_config[0]['vars']['accTask']; ?>
" /><br />
    <label for="strRem"><?php echo $this->_config[0]['vars']['labRem']; ?>
</label><input type="text" id="strRem" name="strRem"<?php if (! empty ( $this->_tpl_vars['booEdit'] )): ?> value="<?php echo ((is_array($_tmp=$this->_tpl_vars['strRem'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"<?php endif; ?> accesskey="<?php echo $this->_config[0]['vars']['accRem']; ?>
" /><br />
    <label for="arrProject" accesskey="<?php echo $this->_config[0]['vars']['accProject']; ?>
"><?php echo $this->_config[0]['vars']['labProject']; ?>
</label>
    <?php if (! count ( $this->_tpl_vars['arrProject'] )): ?>
      <span class="info"><?php echo $this->_config[0]['vars']['noProject']; ?>
</span>
    <?php else: ?>
    <select id="arrProject" name="arrProject[]" multiple="multiple">
      <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrProject'],'selected' => $this->_tpl_vars['arrProjectSelected']), $this);?>

    </select>
    <?php endif; ?>
    <br />
    <label for="cbxShare" accesskey="<?php echo $this->_config[0]['vars']['accShare']; ?>
">
      <input id="cbxShare" name="cbxShare" type="checkbox"<?php if (! empty ( $this->_tpl_vars['booEdit'] ) && $this->_tpl_vars['booShare']): ?> checked="checked"<?php endif; ?> />
      <?php echo $this->_config[0]['vars']['labShare']; ?>

    </label>
    <br />
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
" id="frmDeleteTask" method="post" onsubmit="return frmDeleteTask_onsubmit();">
  <p>
    <input type="hidden" name="intTaskId" value="<?php echo $this->_tpl_vars['intTaskId']; ?>
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