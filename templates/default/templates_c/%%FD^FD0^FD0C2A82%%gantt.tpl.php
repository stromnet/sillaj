<?php /* Smarty version 2.6.16, created on 2007-04-26 19:54:46
         compiled from gantt.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'gantt.tpl', 1, false),array('function', 'html_options', 'gantt.tpl', 12, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => $this->_tpl_vars['fnLanguageTpl'],'section' => 'gantt'), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div><!-- Due to technical restrictions Sillaj can't render Gantt charts on Sourceforge. Sorry -->
  <img src="<?php echo @URL_CACHE_SILLAJ;  echo $this->_tpl_vars['fnImage']; ?>
" ismap="ismap" usemap="#gantt" alt="Gantt" />
  <?php echo $this->_tpl_vars['strCsim']; ?>

</div>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>
" id="frmGanttNav" method="get" class="noprint">
  <div>
    <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?<?php echo $this->_tpl_vars['strMain']; ?>
=<?php echo $this->_tpl_vars['intObjId']; ?>
&amp;datEndGantt=<?php echo $this->_tpl_vars['datPrev']; ?>
&amp;intSpan=<?php echo $this->_tpl_vars['intSpan']; ?>
" title="<?php echo $this->_config[0]['vars']['aPrevGantt']; ?>
"><?php echo $this->_config[0]['vars']['aPrevGantt']; ?>
 &lt;</a>  
    
    <select name="intSpan" id="intSpan" title="<?php echo $this->_config[0]['vars']['selSpan']; ?>
" onchange="frmGanttNav_intSpan_onchange(this)">
      <?php echo smarty_function_html_options(array('values' => $this->_tpl_vars['arrGanttSpan'],'selected' => $this->_tpl_vars['intSpan'],'output' => $this->_tpl_vars['arrGanttSpan']), $this);?>

    </select>
    <input type="hidden" name="<?php echo $this->_tpl_vars['strMain']; ?>
" value="<?php echo $this->_tpl_vars['intObjId']; ?>
" />
    <input type="hidden" name="datEnd" value="<?php echo $this->_tpl_vars['datEnd']; ?>
" />      
    
    <a href="<?php echo $_SERVER['PHP_SELF']; ?>
?<?php echo $this->_tpl_vars['strMain']; ?>
=<?php echo $this->_tpl_vars['intObjId']; ?>
&amp;datEndGantt=<?php echo $this->_tpl_vars['datNext']; ?>
&amp;intSpan=<?php echo $this->_tpl_vars['intSpan']; ?>
" title="<?php echo $this->_config[0]['vars']['aNextGantt']; ?>
">&gt; <?php echo $this->_config[0]['vars']['aNextGantt']; ?>
</a>
  </div>
</form>  

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>