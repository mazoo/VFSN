<?php /* Smarty version 2.6.26, created on 2021-01-08 19:20:17
         compiled from _module/mod_menue_sub.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'counter', '_module/mod_menue_sub.html', 4, false),)), $this); ?>
<?php if ($this->_tpl_vars['module_aktiv']['mod_menue_sub']): ?>
	<!-- START MODUL: _module/mod_menue_sub.html -->
	<?php if ($this->_tpl_vars['menu_level'][$this->_tpl_vars['menu_front_sub_aktiv']]): ?>
		<?php echo smarty_function_counter(array('name' => 'submenucounter','start' => 0,'step' => 1,'assign' => 'submenucounter','print' => false), $this);?>

		<?php $_from = $this->_tpl_vars['catlist_data']['1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['kat']):
?>
			<?php $_from = $this->_tpl_vars['menu_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
				<?php if ($this->_tpl_vars['menu']['level'] >= $this->_tpl_vars['menu_front_sub_startlevel']): ?>
					<?php if ($this->_tpl_vars['kat']['cat_id'] == $this->_tpl_vars['menu']['cat_cid'] || $this->_tpl_vars['no_categories'] == 1): ?>
						<?php echo smarty_function_counter(array('name' => 'submenucounter','assign' => 'submenucounter','print' => false), $this);?>

					<?php endif; ?>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>
		<?php endforeach; endif; unset($_from); ?>
		<?php if ($this->_tpl_vars['submenucounter'] > 0): ?>
			<div class="modul" id="mod_menue_sub">
				<h2><i class="fa fa-th"></i> <?php echo $this->_tpl_vars['submenu_headline']; ?>
</h2>
				<a name="menu_sub" id="menu_sub"></a>
				<?php $_from = $this->_tpl_vars['catlist_data']['1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['kat']):
?>
					<?php if ($this->_tpl_vars['kat']['cat_id'] > 1): ?><h2 class="menucat" id="catid_<?php echo $this->_tpl_vars['kat']['cat_id']; ?>
"><?php echo $this->_tpl_vars['kat']['cat_text']; ?>
</h2><?php endif; ?>
					<?php $_from = $this->_tpl_vars['menu_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
						<?php if ($this->_tpl_vars['menu']['level'] >= $this->_tpl_vars['menu_front_sub_startlevel']): ?>
							<?php if ($this->_tpl_vars['kat']['cat_id'] == $this->_tpl_vars['menu']['cat_cid'] || $this->_tpl_vars['no_categories'] == 1): ?>
								<?php echo $this->_tpl_vars['menu']['shift_anfang_sub']; ?>

								<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_module/mod_menue_ebenen_links.inc.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
								<?php echo $this->_tpl_vars['menu']['shift_ende_sub']; ?>

							<?php endif; ?>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				<?php endforeach; endif; unset($_from); ?>
			</div>
		<?php endif; ?>
	<?php endif; ?>
	<!-- END MODUL: _module/mod_menue_sub.html -->
<?php endif; ?>