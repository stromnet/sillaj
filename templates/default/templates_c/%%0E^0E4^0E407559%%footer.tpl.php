<?php /* Smarty version 2.6.16, created on 2007-04-25 20:18:26
         compiled from footer.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', 'footer.tpl', 3, false),)), $this); ?>
    <div id="footer">
      <hr />
      <?php echo ((is_array($_tmp=time())) ? $this->_run_mod_handler('date_format', true, $_tmp, @STR_DATE_FORMAT_SILLAJ) : smarty_modifier_date_format($_tmp, @STR_DATE_FORMAT_SILLAJ)); ?>
<br />
      <a href="http://sillaj.sourceforge.net/" title="<?php echo $this->_config[0]['vars']['sillajHomepage']; ?>
"<?php if ($_SESSION['strLocale'] != 'en'): ?> lang="en"<?php endif; ?>>
        <?php echo @STR_APPLI_NAME_SILLAJ; ?>

      </a> - <?php echo @STR_APPLI_VERSION_SILLAJ; ?>

    </div>
  </body>
</html>

