<?php /* Smarty version 2.6.26, created on 2021-01-08 18:33:09
         compiled from _module/mod_menue_top.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '_module/mod_menue_top.html', 8, false),)), $this); ?>
<?php if ($this->_tpl_vars['module_aktiv']['mod_menue_top']): ?>
	<!-- MODUL: menue_top -->
	<div class="large-4 medium-4 columns" id="mod_menue_top">
        <h2><i class="fa fa-info-circle"></i> <?php echo $this->_tpl_vars['weitere_informationen']; ?>
</h2>
		<ul class=" left">
			<?php $_from = $this->_tpl_vars['menutop']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['mod_menutop'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['mod_menutop']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['menutop']):
        $this->_foreach['mod_menutop']['iteration']++;
?><?php echo $this->_tpl_vars['nl']; ?>

				<li>
					<a <?php echo $this->_tpl_vars['menutop']['mtlang_class']; ?>
 href="<?php if ($this->_tpl_vars['menutop']['mtlang_link']): ?><?php echo $this->_tpl_vars['menutop']['mtlang_link']; ?>
<?php else: ?><?php echo $this->_tpl_vars['menutop']['menutop_link']; ?>
<?php endif; ?>" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['menutop']['mtlang_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" id="mod_menue_top_link_<?php echo $this->_tpl_vars['menutop']['menutop_id']; ?>
" <?php if ($this->_tpl_vars['menutop']['menutop_extern']): ?> target="_blank"<?php endif; ?>>
						<span class="ignore"><?php echo $this->_foreach['mod_menutop']['iteration']; ?>
.: </span>
						<?php echo ((is_array($_tmp=$this->_tpl_vars['menutop']['mtlang_name'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<span class="ignore">.</span>
					</a>
					<?php echo $this->_tpl_vars['nl']; ?>

				</li>
			<?php endforeach; endif; unset($_from); ?><?php echo $this->_tpl_vars['nl']; ?>

		</ul>
	</div>

	<!-- ENDE MODUL: menue_top -->
<?php endif; ?>