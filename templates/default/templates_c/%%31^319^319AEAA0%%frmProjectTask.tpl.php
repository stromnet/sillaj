<?php /* Smarty version 2.6.16, created on 2007-04-25 20:18:26
         compiled from frmProjectTask.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'html_options', 'frmProjectTask.tpl', 9, false),)), $this); ?>
<label for="intProjectId" accesskey="<?php echo $this->_config[0]['vars']['accProject']; ?>
"><?php echo $this->_config[0]['vars']['labProject']; ?>
</label>
<?php if (! count ( $this->_tpl_vars['arrProject'] )): ?>
  <span class="info"><?php echo $this->_config[0]['vars']['noProject']; ?>
 <a href="project.php?add=1" title="<?php echo $this->_config[0]['vars']['aProject']; ?>
">+</a></span>
<?php else: ?>
<select id="intProjectId" name="intProjectId" <?php if (empty ( $this->_tpl_vars['booNoXhr'] )): ?>onchange="frmEvent_intProjectId_onchange(this)"<?php endif; ?>>
  <option value="0" label=""></option>
  <?php if (! empty ( $this->_tpl_vars['booEdit'] )): ?>
  <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrProject'],'selected' => $this->_tpl_vars['arrCurrentEvent']['intProjectId']), $this);?>

  <?php else: ?>
  <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrProject'],'selected' => $this->_tpl_vars['intLastProjectId']), $this);?>

  <?php endif; ?>
</select>
<?php endif; ?>
<br />
<label for="intTaskId" accesskey="<?php echo $this->_config[0]['vars']['accTask']; ?>
"><?php if (! empty ( $this->_tpl_vars['booNoXhr'] )):  echo $this->_config[0]['vars']['or']; ?>
 <?php endif;  echo $this->_config[0]['vars']['labTask']; ?>
</label>
<?php if (! count ( $this->_tpl_vars['arrTask'] )): ?>
  <span class="info"><?php echo $this->_config[0]['vars']['noTask']; ?>
 <a href="task.php?add=1" title="<?php echo $this->_config[0]['vars']['aTask']; ?>
">+</a></span>
<?php else: ?>
<select id="intTaskId" name="intTaskId">
  <option value="0" label=""></option>
  <?php if (! empty ( $this->_tpl_vars['booEdit'] )): ?>
  <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrTask'],'selected' => $this->_tpl_vars['arrCurrentEvent']['intTaskId']), $this);?>

  <?php else: ?>
  <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrTask'],'selected' => $this->_tpl_vars['intLastTaskId']), $this);?>

  <?php endif; ?>
</select>
<?php endif; ?>