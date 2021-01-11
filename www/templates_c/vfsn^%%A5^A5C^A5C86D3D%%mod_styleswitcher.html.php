<?php /* Smarty version 2.6.26, created on 2021-01-10 18:08:33
         compiled from /var/www/html/styles_default/templates/_module/mod_styleswitcher.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/var/www/html/styles_default/templates/_module/mod_styleswitcher.html', 16, false),)), $this); ?>
<?php if ($this->_tpl_vars['module_aktiv']['mod_styleswitcher']): ?>
	<!-- MODUL: styleswitcher -->

	<div class="modul span3" id="mod_styleswitcher">
		<h3><?php echo $this->_tpl_vars['message_2139']; ?>
</h3>
		<div class="inner_mod">
			<form action="" method="post">
				<fieldset>
										<legend><?php echo $this->_tpl_vars['message_2139']; ?>
</legend>
					<label for="style"><?php echo $this->_tpl_vars['message_2139']; ?>
</label>
					<select id="style" name="style" size="1">
												<option value="none" >(<?php echo $this->_tpl_vars['message_2140']; ?>
)</option>
						<?php $_from = $this->_tpl_vars['style_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['style']):
?>
							<option value="<?php echo ((is_array($_tmp=$this->_tpl_vars['style']['stylevalue'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" <?php echo $this->_tpl_vars['style']['selected']; ?>
 ><?php echo $this->_tpl_vars['style']['style_name']; ?>
</option>
						<?php endforeach; endif; unset($_from); ?>
					</select>
										<input type="submit" class="senden btn btn-info" value="<?php echo $this->_tpl_vars['message_2126']; ?>
" />
				</fieldset>
			</form>
		</div>
	</div>

	<!-- ENDE MODUL: styleswitcher -->
<?php endif; ?>