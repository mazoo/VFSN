<?php /* Smarty version 2.6.26, created on 2021-01-10 18:08:33
         compiled from /var/www/html/styles_default/templates/_module/mod_dritte_spalte.html */ ?>
<?php if ($this->_tpl_vars['module_aktiv']['mod_dritte_spalte']): ?>
	<!-- MODUL: dritte_spalte -->
	<div class="modul" id="mod_dritte_spalte">
		<?php $_from = $this->_tpl_vars['right_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['right']):
?>
			<div class="rightitem">
				<?php echo $this->_tpl_vars['right']['inhalt_right']; ?>

				<?php if ($this->_tpl_vars['has_collum_write_rights']): ?>
					<a href="<?php echo $this->_tpl_vars['webverzeichnis']; ?>
interna/spalte.php?menuid=17&amp;col3_id=<?php echo $this->_tpl_vars['right']['column_id']; ?>
&amp;action_edit=1&amp;extern=<?php echo $this->_tpl_vars['menuid_aktuell']; ?>
" style="float: right;"><?php echo $this->_tpl_vars['message_2061']; ?>
</a>
				<?php endif; ?>
			</div>
		<?php endforeach; endif; unset($_from); ?>
	</div>
	<!-- ENDE MODUL: dritte_spalte -->
<?php endif; ?>