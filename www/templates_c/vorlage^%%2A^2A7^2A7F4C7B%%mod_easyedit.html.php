<?php /* Smarty version 2.6.26, created on 2021-01-10 17:41:36
         compiled from /var/www/html/styles_default/templates/_module_intern/mod_easyedit.html */ ?>
<?php if ($this->_tpl_vars['easyeditok'] == 'ok'): ?>
	<!-- MODUL (intern): mod_easyedit  -->
	<?php if ($this->_foreach['artikel']['iteration'] < 2): ?>
		<div class="modulint" id="mod_easyedit" style="float:right;width:100px;padding:5px;<?php if ($this->_foreach['artikel']['total'] <= 1): ?>margin-top:30px;<?php endif; ?>">
						<a href="<?php echo $this->_tpl_vars['slash']; ?>
index.php?menuid=<?php echo $this->_tpl_vars['menuid_aktuell']; ?>
&amp;edit=new&getlang=<?php echo $this->_tpl_vars['lang_short']; ?>
"><img src="<?php echo $this->_tpl_vars['slash']; ?>
plugins/easyedit/bilder/new.gif" alt="<?php echo $this->_tpl_vars['plugin']['easyedit']['neueasy']; ?>
" title="<?php echo $this->_tpl_vars['plugin']['easyedit']['neueasy']; ?>
"/></a>
			<?php if ($this->_tpl_vars['reporeid_print']): ?>
				<a href="<?php echo $this->_tpl_vars['slash']; ?>
index.php?menuid=<?php echo $this->_tpl_vars['menuid_aktuell']; ?>
&amp;easyid=<?php echo $this->_tpl_vars['reporeid_print']; ?>
&amp;edit=easy&getlang=<?php echo $this->_tpl_vars['lang_short']; ?>
"><img src="<?php echo $this->_tpl_vars['slash']; ?>
plugins/easyedit/bilder/edit.gif" alt="<?php echo $this->_tpl_vars['plugin']['easyedit']['easyedit']; ?>
" title="<?php echo $this->_tpl_vars['plugin']['easyedit']['easyedit']; ?>
"/></a>
			<?php endif; ?>
		</div>
	<?php endif; ?>
	<!-- ENDE MODUL (intern): mod_easyedit  -->
<?php endif; ?>