<?php /* Smarty version 2.6.26, created on 2021-01-08 18:33:09
         compiled from /var/www/html/plugins/freiemodule/templates/freiemodule_front.html */ ?>
<?php $_from = $this->_tpl_vars['freiemodule_result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['banner']):
?>
<?php if ($this->_tpl_vars['tvar'] > 10): ?>
<?php if ($this->_tpl_vars['banner']['freiemodule_modulid'] == $this->_tpl_vars['tvar']): ?>
			<?php if ($this->_tpl_vars['banner']['freiemodule_raw_output']): ?>
				<?php echo $this->_tpl_vars['banner']['freiemodule_code']; ?>

			<?php else: ?>
	<div id="mod_freiemodule_<?php echo $this->_tpl_vars['banner']['freiemodule_id']; ?>
" class="freie_module">
	<?php echo $this->_tpl_vars['banner']['freiemodule_code']; ?>

	</div>
			<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>