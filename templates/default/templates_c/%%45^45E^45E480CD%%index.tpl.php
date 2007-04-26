<?php /* Smarty version 2.6.16, created on 2007-04-25 20:18:24
         compiled from index.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'config_load', 'index.tpl', 1, false),array('function', 'calendar', 'index.tpl', 6, false),array('modifier', 'date_format', 'index.tpl', 10, false),array('modifier', 'escape', 'index.tpl', 25, false),)), $this); ?>
<?php echo smarty_function_config_load(array('file' => $this->_tpl_vars['fnLanguageTpl'],'section' => 'index'), $this);?>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'header.tpl', 'smarty_include_vars' => array('strOnload' => "document.getElementById('timStart').focus();")));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<div id="formAndCalendar">
  <?php if (! empty ( $this->_tpl_vars['strMessage'] )): ?><p class="info"><?php echo $this->_tpl_vars['strMessage']; ?>
</p><?php endif; ?>
  <div id="calendarBox">
    <?php echo smarty_function_calendar(array('year' => $this->_tpl_vars['intYearEvent'],'month' => $this->_tpl_vars['intMonthEvent'],'day' => $this->_tpl_vars['intDayEvent'],'events' => $this->_tpl_vars['arrEventMonth']), $this);?>

  </div>
  <ul id="calendarKey">
    <li class="daySelected"><?php echo $this->_config[0]['vars']['liDaySelected']; ?>
</li>
    <li><a href="?datEvent=<?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, '%Y-%m-%d') : smarty_modifier_date_format($_tmp, '%Y-%m-%d')); ?>
"><span class="today"><?php echo $this->_config[0]['vars']['liToday']; ?>
</span></a></li>    
    <li class="dayEvent"><?php echo $this->_config[0]['vars']['liDayEvent']; ?>
</li>
  </ul>
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>
" id="frmEvent" method="post" onsubmit="return frmEvent_onsubmit(this);">
    <fieldset>
      <legend><?php if (! empty ( $this->_tpl_vars['booEdit'] )):  echo $this->_config[0]['vars']['legEditEvent'];  else:  echo $this->_config[0]['vars']['legAddEvent'];  endif; ?></legend>
      <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'frmProjectTask.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
      <br />
      <div class="intervalInput">
        <label for="timDuration"><?php echo $this->_config[0]['vars']['labTimDuration']; ?>
</label><input type="text" id="timDuration" name="timDuration" accesskey="<?php echo $this->_config[0]['vars']['accTimDuration']; ?>
"<?php if (! empty ( $this->_tpl_vars['booEdit'] )): ?> value="<?php echo $this->_tpl_vars['arrCurrentEvent']['timDuration']; ?>
"<?php endif; ?> /> hh:mm<br />
      </div>                  
      <div class="intervalInput">
        <label for="timStart"><?php echo $this->_config[0]['vars']['or']; ?>
 <?php echo $this->_config[0]['vars']['labTimStart']; ?>
</label><input type="text" id="timStart" name="timStart" accesskey="<?php echo $this->_config[0]['vars']['accTimStart']; ?>
"<?php if (! empty ( $this->_tpl_vars['booEdit'] )): ?> value="<?php echo $this->_tpl_vars['arrCurrentEvent']['timStart']; ?>
"<?php endif; ?> /> hh:mm<br />
        <label for="timEnd"><?php echo $this->_config[0]['vars']['labTimEnd']; ?>
</label><input type="text" id="timEnd" name="timEnd" accesskey="<?php echo $this->_config[0]['vars']['accTimEnd']; ?>
"<?php if (! empty ( $this->_tpl_vars['booEdit'] )): ?> value="<?php echo $this->_tpl_vars['arrCurrentEvent']['timEnd']; ?>
"<?php endif; ?> /> hh:mm<br />
      </div>
      <label for="strRem"><?php echo $this->_config[0]['vars']['labRem']; ?>
</label><input type="text" id="strRem" name="strRem" accesskey="<?php echo $this->_config[0]['vars']['accRem']; ?>
"<?php if (! empty ( $this->_tpl_vars['booEdit'] )): ?> value="<?php echo ((is_array($_tmp=$this->_tpl_vars['arrCurrentEvent']['strRem'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"<?php endif; ?> /><br />
      <button type="submit" accesskey="<?php echo $this->_config[0]['vars']['accSubmit']; ?>
"><?php echo $this->_config[0]['vars']['inpSubmit']; ?>
</button>
      <button type="reset" accesskey="<?php echo $this->_config[0]['vars']['accReset']; ?>
"><?php echo $this->_config[0]['vars']['inpReset']; ?>
</button>
      <input type="hidden" name="datEvent" value="<?php echo $this->_tpl_vars['datEvent']; ?>
" />
      <?php if (! empty ( $this->_tpl_vars['booEdit'] )): ?>
      <input type="hidden" name="booEdit" value="true" />
      <input type="hidden" name="intEventId" value="<?php echo $this->_tpl_vars['intEventId']; ?>
" />
      <?php endif; ?>
    </fieldset>
  </form>
</div>
<?php if (count ( $this->_tpl_vars['arrEvent'] ) > 0): ?>
<div id="events">
  <form action="<?php echo $_SERVER['PHP_SELF']; ?>
" method="post" id="frmEvents" onsubmit="return frmEvents_onsubmit(this);">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'tabEvent.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    <p><?php if ($this->_tpl_vars['strSum'] != '00:00:00'):  echo $this->_config[0]['vars']['sumByDay']; ?>
 : <?php echo $this->_tpl_vars['strSum']; ?>
<br /><?php endif; ?>
      <input type="hidden" name="datEvent" value="<?php echo $this->_tpl_vars['datEvent']; ?>
" />
      <script type="text/javascript">
        <!--
        strIniEdit = '<?php echo $this->_config[0]['vars']['inpEdit']; ?>
';
        strIniDelete = '<?php echo $this->_config[0]['vars']['inpDelete']; ?>
';
        // -->
      </script>
      <button type="submit" name="inpEdit" id="inpEdit" value="edit" accesskey="<?php echo $this->_config[0]['vars']['accEdit']; ?>
" onclick="this.setAttribute('value', 'edit');assignSubmitButton(this)"><?php echo $this->_config[0]['vars']['inpEdit']; ?>
</button>
      <button type="submit" name="inpDelete" id="inpDelete" value="delete" accesskey="<?php echo $this->_config[0]['vars']['accDelete']; ?>
" onclick="this.setAttribute('value', 'delete');assignSubmitButton(this)"><?php echo $this->_config[0]['vars']['inpDelete']; ?>
</button>
    </p>
  </form>
</div>
<?php endif; ?>
<p class="standard">
  <a href="rss.php?strUserId=<?php echo $_SESSION['strUserId']; ?>
" title="<?php echo @STR_SITE_NAME_SILLAJ; ?>
 <?php echo $this->_config[0]['vars']['for']; ?>
 <?php echo $_SESSION['strUserId']; ?>
 (<?php echo $this->_config[0]['vars']['rssFeed']; ?>
)">
    <img src="<?php echo $this->_tpl_vars['urlImgDir']; ?>
ico_rss.png" alt="RSS" height="15" width="80" />
  </a>
</p>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => 'footer.tpl', 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>