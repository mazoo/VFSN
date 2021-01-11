<?php /* Smarty version 2.6.26, created on 2021-01-10 18:08:33
         compiled from /var/www/html/styles_default/templates/_module/mod_menue.html */ ?>
<?php if ($this->_tpl_vars['module_aktiv']['mod_menue']): ?>
	<!-- MODUL: menue -->
	<nav class="modul" id="mod_menue">
		<a name="menux" id="menux"></a>
		<?php $_from = $this->_tpl_vars['catlist_data']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['kat']):
?>
		<div id="cat_<?php echo $this->_tpl_vars['kat']['cat_id']; ?>
" <?php if ($this->_tpl_vars['aktumenu_cat'] == $this->_tpl_vars['kat']['cat_id']): ?>class="cat_aktiv"<?php else: ?>class="cat_inaktiv"<?php endif; ?> >	
			<?php if ($this->_tpl_vars['kat']['cat_id'] >= 1): ?><h4 class="menucat"><?php echo $this->_tpl_vars['kat']['cat_text']; ?>
</h4>	<?php endif; ?>	
				<ul class="mod_menue_ul">
					<?php $_from = $this->_tpl_vars['menu_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
						<?php if ($this->_tpl_vars['kat']['cat_id'] == $this->_tpl_vars['menu']['cat_cid'] || $this->_tpl_vars['no_categories'] == 1): ?>
							<?php echo $this->_tpl_vars['menu']['shift_anfang']; ?>

							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_module/mod_menue_ebenen_links.inc.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							<?php echo $this->_tpl_vars['menu']['shift_ende']; ?>

						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			</div>
		<?php endforeach; endif; unset($_from); ?>
	</nav>
	<!-- ENDE MODUL: menue -->
<?php endif; ?>