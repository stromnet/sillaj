<?php /* Smarty version 2.6.16, created on 2007-04-25 20:18:26
         compiled from tabEvent.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'tabEvent.tpl', 6, false),array('modifier', 'escape', 'tabEvent.tpl', 13, false),)), $this); ?>
<table id="eventsTable" summary="<?php echo $this->_config[0]['vars']['sumEvent']; ?>
">
  <?php unset($this->_sections['i']);
$this->_sections['i']['name'] = 'i';
$this->_sections['i']['loop'] = is_array($_loop=$this->_tpl_vars['arrEvent']) ? count($_loop) : max(0, (int)$_loop); unset($_loop);
$this->_sections['i']['show'] = true;
$this->_sections['i']['max'] = $this->_sections['i']['loop'];
$this->_sections['i']['step'] = 1;
$this->_sections['i']['start'] = $this->_sections['i']['step'] > 0 ? 0 : $this->_sections['i']['loop']-1;
if ($this->_sections['i']['show']) {
    $this->_sections['i']['total'] = $this->_sections['i']['loop'];
    if ($this->_sections['i']['total'] == 0)
        $this->_sections['i']['show'] = false;
} else
    $this->_sections['i']['total'] = 0;
if ($this->_sections['i']['show']):

            for ($this->_sections['i']['index'] = $this->_sections['i']['start'], $this->_sections['i']['iteration'] = 1;
                 $this->_sections['i']['iteration'] <= $this->_sections['i']['total'];
                 $this->_sections['i']['index'] += $this->_sections['i']['step'], $this->_sections['i']['iteration']++):
$this->_sections['i']['rownum'] = $this->_sections['i']['iteration'];
$this->_sections['i']['index_prev'] = $this->_sections['i']['index'] - $this->_sections['i']['step'];
$this->_sections['i']['index_next'] = $this->_sections['i']['index'] + $this->_sections['i']['step'];
$this->_sections['i']['first']      = ($this->_sections['i']['iteration'] == 1);
$this->_sections['i']['last']       = ($this->_sections['i']['iteration'] == $this->_sections['i']['total']);
?>
  <tr<?php if (! empty ( $this->_tpl_vars['booEdit'] ) && ( $this->_tpl_vars['arrEvent'][$this->_sections['i']['index']]['intEventId'] == $this->_tpl_vars['intEventId'] )): ?> class="eventEdited"<?php endif; ?>>    
    <?php if (( basename ( $_SERVER['PHP_SELF'] ) == 'event.php' ) || ( basename ( $_SERVER['PHP_SELF'] ) == 'search.php' )): ?>
    <td class="date"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrEvent'][$this->_sections['i']['index']]['datEvent'])) ? $this->_run_mod_handler('date_format', true, $_tmp, @STR_DATE_FORMAT_SILLAJ) : smarty_modifier_date_format($_tmp, @STR_DATE_FORMAT_SILLAJ)); ?>
</td>
    <?php endif; ?>
    <td class="interval"><?php if (( $this->_tpl_vars['arrEvent'][$this->_sections['i']['index']]['timStart'] != '' ) || ( $this->_tpl_vars['arrEvent'][$this->_sections['i']['index']]['timEnd'] != '' )):  echo $this->_tpl_vars['arrEvent'][$this->_sections['i']['index']]['timStart']; ?>
 - <?php echo $this->_tpl_vars['arrEvent'][$this->_sections['i']['index']]['timEnd'];  endif; ?></td>     
    <td class="duration"><?php if ($this->_tpl_vars['arrEvent'][$this->_sections['i']['index']]['timDuration'] != ''):  echo $this->_tpl_vars['arrEvent'][$this->_sections['i']['index']]['timDuration'];  endif; ?></td>            
    <td class="occupation">
       <input type="radio" id="event<?php echo $this->_tpl_vars['arrEvent'][$this->_sections['i']['index']]['intEventId']; ?>
" name="intEventId" value="<?php echo $this->_tpl_vars['arrEvent'][$this->_sections['i']['index']]['intEventId']; ?>
"<?php if (! empty ( $this->_tpl_vars['booEdit'] ) && ( $this->_tpl_vars['arrEvent'][$this->_sections['i']['index']]['intEventId'] == $this->_tpl_vars['intEventId'] )): ?> checked="checked"<?php endif; ?> />
       <label for="event<?php echo $this->_tpl_vars['arrEvent'][$this->_sections['i']['index']]['intEventId']; ?>
">             
         <span class="project" id="project<?php echo $this->_tpl_vars['arrEvent'][$this->_sections['i']['index']]['intEventId']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrEvent'][$this->_sections['i']['index']]['strMain'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span>
         <?php if (( basename ( $_SERVER['PHP_SELF'] ) == 'index.php' ) || ( basename ( $_SERVER['PHP_SELF'] ) == 'search.php' )): ?><br />
         <span class="task" id="task<?php echo $this->_tpl_vars['arrEvent'][$this->_sections['i']['index']]['intEventId']; ?>
"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrEvent'][$this->_sections['i']['index']]['strSub'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</span>
         <?php endif; ?>
       </label>
       <?php if ($this->_tpl_vars['arrEvent'][$this->_sections['i']['index']]['strRem'] != ''): ?>
       <p class="rem">
         <label for="event<?php echo $this->_tpl_vars['arrEvent'][$this->_sections['i']['index']]['intEventId']; ?>
">
           <?php echo ((is_array($_tmp=$this->_tpl_vars['arrEvent'][$this->_sections['i']['index']]['strRem'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

         </label>      
       </p> 
      <?php endif; ?>
    </td>
    <?php if ($_SESSION['booUseShare'] && isset ( $this->_tpl_vars['arrEvent'][$this->_sections['i']['index']]['strUserId'] )): ?><td class="user"><?php echo ((is_array($_tmp=$this->_tpl_vars['arrEvent'][$this->_sections['i']['index']]['strUserId'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</td><?php endif; ?>
  </tr>
  <?php endfor; endif; ?>
</table>    