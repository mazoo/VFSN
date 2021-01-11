<?php /* Smarty version 2.6.26, created on 2021-01-10 18:08:33
         compiled from /var/www/html/styles_default/templates/_module/mod_suchbox.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/var/www/html/styles_default/templates/_module/mod_suchbox.html', 12, false),)), $this); ?>
<?php if ($this->_tpl_vars['module_aktiv']['mod_suchbox']): ?>
	<!-- MODUL: suchbox -->
	<div class="modul" id="mod_suchbox" >
		<a  id="suchen"></a>

		<div class="inner_mod">
			<form id="suche" method="get" action="<?php echo $this->_tpl_vars['slash']; ?>
index.php">

					
										<input type="text" id="search" name="search" size="20" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['search'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"
						onblur="if(this.value=='')this.value='<?php echo ((is_array($_tmp=$this->_tpl_vars['search'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
';"
						onfocus="if(this.value=='<?php echo $this->_tpl_vars['search']; ?>
')this.value='';"
						title="<?php echo $this->_tpl_vars['message_2136']; ?>
"
						<?php echo $this->_tpl_vars['searchneu']; ?>
 />
										<input  type="hidden" name="erw_suchbereich" value="<?php echo $this->_tpl_vars['is_shop']; ?>
" />
                    <input  type="hidden" name="getlang" value="<?php echo $this->_tpl_vars['lang_short']; ?>
" />
                    <?php if ($this->_tpl_vars['menu_dat_show_search_aktuell']): ?>
                    <input  type="hidden" name="menuid_search" value="<?php echo $this->_tpl_vars['menuid_aktuell']; ?>
" />
                    <?php endif; ?>
                    <input  type="hidden" name="menuid" value="<?php echo $this->_tpl_vars['menuid_aktuell']; ?>
" />
					<input class="senden" type="submit" name="find" value="<?php echo $this->_tpl_vars['message_2138']; ?>
" />

			</form>
		</div>
	</div>
	<!-- ENDE MODUL: suchbox -->
<?php endif; ?>