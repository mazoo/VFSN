<?php /* Smarty version 2.6.26, created on 2021-01-10 17:41:36
         compiled from /var/www/html/styles_default/templates/_head.html */ ?>
<!-- TEMPLATE: _head.html -->
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_module_intern/mod_menue_sprung.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php $_from = $this->_tpl_vars['module']['1']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['modul']):
?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['modul']['mod_template'], 'smarty_include_vars' => array('tvar' => $this->_tpl_vars['modul']['mod_id'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
	<?php endforeach; endif; unset($_from); ?>
<!-- ENDE TEMPLATE: _head.html -->