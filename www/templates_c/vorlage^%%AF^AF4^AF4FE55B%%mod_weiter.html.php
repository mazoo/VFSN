<?php /* Smarty version 2.6.26, created on 2021-01-10 17:41:37
         compiled from /var/www/html/styles_default/templates/_module_intern/mod_weiter.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'is_array', '/var/www/html/styles_default/templates/_module_intern/mod_weiter.html', 4, false),)), $this); ?>
<!-- MODUL: weiter -->
<?php if ($this->_tpl_vars['weiter']): ?>
	    <?php if (((is_array($_tmp=$this->_tpl_vars['weiter_array'])) ? $this->_run_mod_handler('is_array', true, $_tmp) : smarty_modifier_is_array($_tmp))): ?>
	<div id="weiter" class="weiter pagination-left">
		<ul class="weiterul pagination" role="menubar" aria-label="Pagination">
			<?php if ($this->_tpl_vars['hrefruck']): ?>
												<li class="weiterli">
					<a href="<?php echo $this->_tpl_vars['slash']; ?>
<?php echo $this->_tpl_vars['hrefruck']; ?>
" class="arrow" rel="prev" title="<?php echo $this->_tpl_vars['message_2114']; ?>
"><?php echo $this->_tpl_vars['message_73']; ?>
</a><span class="ignore">. |</span>
				</li>
			<?php endif; ?>
			
			<?php $_from = $this->_tpl_vars['weiter_array']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['weiter']):
?>
				<?php if (@ $this->_tpl_vars['weiter']['aktivhref']): ?>
										<li class="current" rel="self" aria-disabled="true">
						<a title="<?php echo $this->_tpl_vars['message_2115']; ?>
" href="" ><?php echo $this->_tpl_vars['weiter']['linknummer']; ?>
</a><span class="ignore">. |</span>
					</li>
				<?php else: ?>
															<li class="weiterli">
						<a href="<?php echo $this->_tpl_vars['slash']; ?>
<?php echo $this->_tpl_vars['weiter']['linkname']; ?>
" title="<?php echo $this->_tpl_vars['message_2116']; ?>
 <?php echo $this->_tpl_vars['weiter']['linknummer']; ?>
. <?php echo $this->_tpl_vars['message_2117']; ?>
 "><?php if (@ $this->_tpl_vars['weiter']['last'] == 'ok'): ?>...<?php endif; ?> <?php echo $this->_tpl_vars['weiter']['linknummer']; ?>
 <?php if (@ $this->_tpl_vars['weiter']['first'] == 'ok'): ?>...<?php endif; ?></a>
					</li>
				<?php endif; ?>
			<?php endforeach; endif; unset($_from); ?>

			<?php if ($this->_tpl_vars['hrefweiter']): ?>
												<li class="weiterli">
					<a class="current" href="<?php echo $this->_tpl_vars['slash']; ?>
<?php echo $this->_tpl_vars['hrefweiter']; ?>
" rel="next" title="<?php echo $this->_tpl_vars['message_2119']; ?>
"><?php echo $this->_tpl_vars['message_86']; ?>
</a><span class="ignore">. </span>
				</li>
			<?php endif; ?>
		</ul>
	</div>
<?php endif; ?>
<?php endif; ?>
<!-- ENDE MODUL: weiter (intern) -->