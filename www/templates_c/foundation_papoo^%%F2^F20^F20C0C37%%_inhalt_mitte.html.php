<?php /* Smarty version 2.6.26, created on 2021-01-08 18:33:09
         compiled from /var/www/html/styles_default/templates/_inhalt_mitte.html */ ?>
<!-- TEMPLATE: _inhalt_mitte.html -->
<!-- ### start_of_content -->
<?php $_from = $this->_tpl_vars['module']['3']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['modul']):
?>
								<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['modul']['mod_template'], 'smarty_include_vars' => array('tvar' => $this->_tpl_vars['modul']['mod_id'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endforeach; endif; unset($_from); ?>
<!-- ### end_of_content -->
<?php if ($this->_tpl_vars['anzeig_versende'] || $this->_tpl_vars['anzeig_drucken'] || $this->_tpl_vars['editlink']): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_module_intern/mod_artikel_optionen.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php endif; ?>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_module_intern/mod_back_top.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<!-- TEMPLATE: _inhalt_mitte.html -->