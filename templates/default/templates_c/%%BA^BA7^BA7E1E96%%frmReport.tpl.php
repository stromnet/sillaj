<?php /* Smarty version 2.6.16, created on 2007-04-26 19:54:33
         compiled from frmReport.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'frmReport.tpl', 2, false),array('function', 'html_options', 'frmReport.tpl', 14, false),array('modifier', 'date_format', 'frmReport.tpl', 48, false),array('modifier', 'escape', 'frmReport.tpl', 59, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => $this->_tpl_vars['fnLanguageTpl'],'section' => 'report'), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<form action="<?php echo $_SERVER['PHP_SELF']; ?>
" id="frmReport" method="get" onsubmit="return frmReport_onsubmit(this);">    
  
  
  
  <fieldset id="fldDate">  
    <?php if (@BOO_ALLOW_EVERYONE_REPORT_SILLAJ): ?>
    <fieldset id="fldUser">
      <legend><?php echo $this->_config[0]['vars']['user']; ?>
</legend>
      <label for="strUserId" accesskey="<?php echo $this->_config[0]['vars']['accFor']; ?>
"><?php echo $this->_config[0]['vars']['labFor']; ?>
</label>
      <select id="strUserId" name="strUserId">
        <?php echo smarty_function_html_options(array('options' => $this->_tpl_vars['arrUser'],'selected' => $_SESSION['strUserId']), $this);?>

      </select>
    </fieldset>
    <?php endif; ?>
    
    <fieldset id="fldReportType">
      <legend><?php echo $this->_config[0]['vars']['reportType']; ?>
</legend>
      <label for="radProject" accesskey="<?php echo $this->_config[0]['vars']['accProject']; ?>
">
        <input id="radProject" name="radType" type="radio" value="project" checked="checked" />
        <?php echo $this->_config[0]['vars']['labProject']; ?>

      </label>
      <label for="radTask" accesskey="<?php echo $this->_config[0]['vars']['accTask']; ?>
">
        <input id="radTask" name="radType" type="radio" value="task" />
        <?php echo $this->_config[0]['vars']['labTask']; ?>

      </label><br />
      <label for="cbxDetail" accesskey="<?php echo $this->_config[0]['vars']['accDetail']; ?>
" >
        <input id="cbxDetail" name="cbxDetail" type="checkbox" checked="checked"/>
        <?php echo $this->_config[0]['vars']['labDetail']; ?>

      </label>
    </fieldset>
    
    <fieldset id="fldSort">
      <legend><?php echo $this->_config[0]['vars']['sort']; ?>
</legend>
      <label for="radTime" accesskey="<?php echo $this->_config[0]['vars']['accTime']; ?>
">
        <input id="radTime" name="radSort" type="radio" value="time" checked="checked" />
        <?php echo $this->_config[0]['vars']['labTime']; ?>

      </label>
      <label for="radAlpha" accesskey="<?php echo $this->_config[0]['vars']['accAlpha']; ?>
">
        <input id="radAlpha" name="radSort" type="radio" value="alpha" />
        <?php echo $this->_config[0]['vars']['labAlpha']; ?>

      </label>    
    </fieldset>
  
    <legend><?php echo $this->_config[0]['vars']['timeInterval']; ?>
</legend>
    <button type="button" onclick="frmReport_updateDates('<?php echo ((is_array($_tmp=$this->_tpl_vars['datStartPreviousWeek'])) ? $this->_run_mod_handler('date_format', true, $_tmp, @STR_DATE_FORMAT_SILLAJ) : smarty_modifier_date_format($_tmp, @STR_DATE_FORMAT_SILLAJ)); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['datEndPreviousWeek'])) ? $this->_run_mod_handler('date_format', true, $_tmp, @STR_DATE_FORMAT_SILLAJ) : smarty_modifier_date_format($_tmp, @STR_DATE_FORMAT_SILLAJ)); ?>
')"><?php echo $this->_config[0]['vars']['previousWeek']; ?>
</button>
    <button type="button" onclick="frmReport_updateDates('<?php echo ((is_array($_tmp=$this->_tpl_vars['datStartCurrentWeek'])) ? $this->_run_mod_handler('date_format', true, $_tmp, @STR_DATE_FORMAT_SILLAJ) : smarty_modifier_date_format($_tmp, @STR_DATE_FORMAT_SILLAJ)); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['datEndCurrentWeek'])) ? $this->_run_mod_handler('date_format', true, $_tmp, @STR_DATE_FORMAT_SILLAJ) : smarty_modifier_date_format($_tmp, @STR_DATE_FORMAT_SILLAJ)); ?>
')"><?php echo $this->_config[0]['vars']['currentWeek']; ?>
</button>
    <button type="button" onclick="frmReport_updateDates('<?php echo ((is_array($_tmp=$this->_tpl_vars['datStartPreviousMonth'])) ? $this->_run_mod_handler('date_format', true, $_tmp, @STR_DATE_FORMAT_SILLAJ) : smarty_modifier_date_format($_tmp, @STR_DATE_FORMAT_SILLAJ)); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['datEndPreviousMonth'])) ? $this->_run_mod_handler('date_format', true, $_tmp, @STR_DATE_FORMAT_SILLAJ) : smarty_modifier_date_format($_tmp, @STR_DATE_FORMAT_SILLAJ)); ?>
')"><?php echo $this->_config[0]['vars']['previousMonth']; ?>
</button>
    <button type="button" onclick="frmReport_updateDates('<?php echo ((is_array($_tmp=$this->_tpl_vars['datStartCurrentMonth'])) ? $this->_run_mod_handler('date_format', true, $_tmp, @STR_DATE_FORMAT_SILLAJ) : smarty_modifier_date_format($_tmp, @STR_DATE_FORMAT_SILLAJ)); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['datEndCurrentMonth'])) ? $this->_run_mod_handler('date_format', true, $_tmp, @STR_DATE_FORMAT_SILLAJ) : smarty_modifier_date_format($_tmp, @STR_DATE_FORMAT_SILLAJ)); ?>
')"><?php echo $this->_config[0]['vars']['currentMonth']; ?>
</button>
    <button type="button" onclick="frmReport_updateDates('<?php echo ((is_array($_tmp=$this->_tpl_vars['datStartPreviousYear'])) ? $this->_run_mod_handler('date_format', true, $_tmp, @STR_DATE_FORMAT_SILLAJ) : smarty_modifier_date_format($_tmp, @STR_DATE_FORMAT_SILLAJ)); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['datEndPreviousYear'])) ? $this->_run_mod_handler('date_format', true, $_tmp, @STR_DATE_FORMAT_SILLAJ) : smarty_modifier_date_format($_tmp, @STR_DATE_FORMAT_SILLAJ)); ?>
')"><?php echo $this->_config[0]['vars']['previousYear']; ?>
</button>
    <button type="button" onclick="frmReport_updateDates('<?php echo ((is_array($_tmp=$this->_tpl_vars['datStartCurrentYear'])) ? $this->_run_mod_handler('date_format', true, $_tmp, @STR_DATE_FORMAT_SILLAJ) : smarty_modifier_date_format($_tmp, @STR_DATE_FORMAT_SILLAJ)); ?>
', '<?php echo ((is_array($_tmp=$this->_tpl_vars['datEndCurrentYear'])) ? $this->_run_mod_handler('date_format', true, $_tmp, @STR_DATE_FORMAT_SILLAJ) : smarty_modifier_date_format($_tmp, @STR_DATE_FORMAT_SILLAJ)); ?>
')"><?php echo $this->_config[0]['vars']['currentYear']; ?>
</button><br />    
    
    <script type="text/javascript">
      var cal1 = new CalendarPopup('divcal');
      cal1.setMonthNames(<?php $_from = $this->_tpl_vars['arrMonthNames']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fem'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fem']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['m']):
        $this->_foreach['fem']['iteration']++;
?>'<?php echo $this->_tpl_vars['m']; ?>
'<?php if (! ($this->_foreach['fem']['iteration'] == $this->_foreach['fem']['total'])): ?>,<?php endif;  endforeach; endif; unset($_from); ?>);
      cal1.setDayHeaders(<?php $_from = $this->_tpl_vars['arrDayIni']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fed'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fed']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['d']):
        $this->_foreach['fed']['iteration']++;
?>'<?php echo $this->_tpl_vars['d']; ?>
'<?php if (! ($this->_foreach['fed']['iteration'] == $this->_foreach['fed']['total'])): ?>,<?php endif;  endforeach; endif; unset($_from); ?>);
      cal1.setTodayText('<?php echo ((is_array($_tmp=$this->_config[0]['vars']['liToday'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'quotes') : smarty_modifier_escape($_tmp, 'quotes')); ?>
');
      cal1.setWeekStartDay(<?php echo @INT_START_WEEK_DAY_SILLAJ; ?>
);
      cal1.setCssPrefix('CAL');
      cal1.showNavigationDropdowns();
    </script>    
    <div id="divcal" style="position:absolute;visibility:hidden;background-color:white;layer-background-color:white;"></div>
    
    <label for="datStart" accesskey="<?php echo $this->_config[0]['vars']['accDatStart']; ?>
"><?php echo $this->_config[0]['vars']['labDatStart']; ?>
</label>
    <input type="text" id="datStart" name="datStart" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['datStartCurrentMonth'])) ? $this->_run_mod_handler('date_format', true, $_tmp, @STR_DATE_FORMAT_SILLAJ) : smarty_modifier_date_format($_tmp, @STR_DATE_FORMAT_SILLAJ)); ?>
" maxlength="10" size="10" />    
    <a href="#" onclick="cal1.select(document.forms['frmReport'].datStart, 'anchor2', '<?php echo $this->_tpl_vars['strDateFormatCal']; ?>
'); return false;" title="<?php echo $this->_config[0]['vars']['choseDate']; ?>
" name="anchor2" id="anchor2">
      <img src="<?php echo $this->_tpl_vars['urlImgDir']; ?>
ico_cal.gif" id="ico_cal2" alt="<?php echo $this->_config[0]['vars']['choseDate']; ?>
" />
    </a>        
    <br />
    
    <label for="datEnd" accesskey="<?php echo $this->_config[0]['vars']['accDatEnd']; ?>
"><?php echo $this->_config[0]['vars']['labDatEnd']; ?>
</label>
    <input type="text" id="datEnd" name="datEnd" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['datEndCurrentMonth'])) ? $this->_run_mod_handler('date_format', true, $_tmp, @STR_DATE_FORMAT_SILLAJ) : smarty_modifier_date_format($_tmp, @STR_DATE_FORMAT_SILLAJ)); ?>
" maxlength="10" size="10" /> 
    <a href="#" onclick="cal1.select(document.forms['frmReport'].datEnd, 'anchor1', '<?php echo $this->_tpl_vars['strDateFormatCal']; ?>
'); return false;" title="<?php echo $this->_config[0]['vars']['choseDate']; ?>
" name="anchor1" id="anchor1">
      <img src="<?php echo $this->_tpl_vars['urlImgDir']; ?>
ico_cal.gif" id="ico_cal1" alt="<?php echo $this->_config[0]['vars']['choseDate']; ?>
" />
    </a>    
       
    <div>
      <button type="submit" accesskey="<?php echo $this->_config[0]['vars']['accSubmit']; ?>
"><?php echo $this->_config[0]['vars']['inpSubmit']; ?>
</button>
      <button type="reset" accesskey="<?php echo $this->_config[0]['vars']['accReset']; ?>
"><?php echo $this->_config[0]['vars']['inpReset']; ?>
</button>
    </div>     
  </fieldset>    
</form>
<?php if (@BOO_ENABLE_GRAPH_SILLAJ): ?>
<form action="gantt.php" id="frmReportGantt" method="get" onsubmit="return frmReportGantt_onsubmit(this);">    
  <fieldset id="fldReportGantt">
    <legend><?php echo $this->_config[0]['vars']['aGantt']; ?>
</legend>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'frmProjectTask.tpl', 'smarty_include_vars' => array('booNoXhr' => true)));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <div>
      <button type="submit" accesskey="<?php echo $this->_config[0]['vars']['accSubmit']; ?>
"><?php echo $this->_config[0]['vars']['inpSubmit']; ?>
</button>
      <button type="reset" accesskey="<?php echo $this->_config[0]['vars']['accReset']; ?>
"><?php echo $this->_config[0]['vars']['inpReset']; ?>
</button>
    </div>  
  </fieldset>    
</form>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>