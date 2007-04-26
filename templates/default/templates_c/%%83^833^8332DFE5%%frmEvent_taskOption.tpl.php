<?php /* Smarty version 2.6.16, created on 2007-04-26 19:52:48
         compiled from frmEvent_taskOption.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'addslashes', 'frmEvent_taskOption.tpl', 4, false),)), $this); ?>
var arrXmlhttp = new Array(
<?php $_from = $this->_tpl_vars['arrTask']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['i'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['i']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['intTaskId'] => $this->_tpl_vars['strTask']):
        $this->_foreach['i']['iteration']++;
?>
  Array(<?php echo $this->_tpl_vars['intTaskId']; ?>
, '<?php echo ((is_array($_tmp=$this->_tpl_vars['strTask'])) ? $this->_run_mod_handler('addslashes', true, $_tmp) : addslashes($_tmp)); ?>
')<?php if (! ($this->_foreach['i']['iteration'] == $this->_foreach['i']['total'])): ?>,<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
);