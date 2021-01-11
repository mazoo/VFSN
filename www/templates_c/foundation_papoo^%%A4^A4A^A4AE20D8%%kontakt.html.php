<?php /* Smarty version 2.6.26, created on 2021-01-10 17:23:48
         compiled from /var/www/html/styles_default/templates/kontakt.html */ ?>
<!-- TEMPLATE: kontakt.html -->
<?php if ($this->_tpl_vars['system_show_template_comment']): ?><!-- START Template kontakt.html --><?php endif; ?>
<div class="floatbox artikel_details">
<a  id="artikel"></a>
<?php if ($this->_tpl_vars['fehlerliste']): ?>
		 	<div class="fehlerliste">
			 <h2><?php echo $this->_tpl_vars['plugin']['form_manager']['bitte_korrek']; ?>
</h2>
			 <ul>
			 <?php $_from = $this->_tpl_vars['fehlerliste']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['dat']):
?>
			 	<li><?php echo $this->_tpl_vars['dat']; ?>
</li>
			 <?php endforeach; endif; unset($_from); ?>
		
			 </ul>
			 </div>
		 <?php endif; ?>
		 <?php if ($this->_tpl_vars['__spamschutz__']): ?>
		 <div class="fehlerliste">
		 <?php echo $this->_tpl_vars['message_bitte_spam_schutz_korrigieren']; ?>

		 </div>
		 <?php endif; ?>
	<a  id="artikel"></a>
		
<?php if ($this->_tpl_vars['geschickt']): ?>
		<?php echo $this->_tpl_vars['message_2094']; ?>

	<?php echo $this->_tpl_vars['text']; ?>

	<?php else: ?>
	
	<?php if ($this->_tpl_vars['cxyxyformular'] == 'ok'): ?>
		<?php echo $this->_tpl_vars['text_kontakt']; ?>

		<br />
		
				<form id="formk" action="" method="post">
			<fieldset>
								<legend><?php echo $this->_tpl_vars['message_2086']; ?>
 <?php echo $this->_tpl_vars['site_name']; ?>
</legend>
				<?php $_from = $this->_tpl_vars['formdat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['feld']):
?>
					<?php echo $this->_tpl_vars['feld']; ?>

				<?php endforeach; endif; unset($_from); ?>
				</fieldset>
					<?php if ($this->_tpl_vars['stamm_kontakt_spamschutz']): ?>
					<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_module_intern/mod_spamschutz.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
					<?php endif; ?>
				
				<fieldset>
				<legend><?php echo $this->_tpl_vars['message_2008']; ?>
</legend>
				<input type="submit" class="cformsenden btn btn-info" value="<?php echo $this->_tpl_vars['message_2008']; ?>
" name="kontakt_senden"  />
			</fieldset>
		
		</form>
	<?php endif; ?>
<?php endif; ?>
</div>
<?php if ($this->_tpl_vars['system_show_template_comment']): ?><!-- STOP Template kontakt.html --><?php endif; ?>
<!-- ENDE TEMPLATE: kontakt.html -->