<?php /* Smarty version 2.6.26, created on 2021-01-10 18:08:33
         compiled from _fuss.html */ ?>
<!-- TEMPLATE: _fuss.html -->
<div class="large-12 columns">
			<?php $_from = $this->_tpl_vars['module']['5']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['modul']):
?>
												<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => $this->_tpl_vars['modul']['mod_template'], 'smarty_include_vars' => array('tvar' => $this->_tpl_vars['modul']['mod_id'])));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endforeach; endif; unset($_from); ?>
			<?php echo $this->_tpl_vars['message_2155']; ?>

</div>
        <div class="clear_fix break_artikel"></div>
<!-- ENDE TEMPLATE: _fuss.html -->