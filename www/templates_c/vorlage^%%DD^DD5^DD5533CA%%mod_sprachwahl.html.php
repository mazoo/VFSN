<?php /* Smarty version 2.6.26, created on 2021-01-10 17:41:36
         compiled from /var/www/html/styles_default/templates/_module/mod_sprachwahl.html */ ?>
<?php if ($this->_tpl_vars['module_aktiv']['mod_sprachwahl']): ?>
<!-- MODUL: sprachwahl -->
<div class="modul" id="mod_sprachwahl">
<ul>
	 
	<?php $_from = $this->_tpl_vars['languageget']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang']):
?>
	<li class="languageli"><a class="toplink"
				
		href="<?php echo $this->_tpl_vars['lang']['lang_link']; ?>
" rel="alternate" hreflang="<?php echo $this->_tpl_vars['lang']['lang_short']; ?>
" <?php if ($this->_tpl_vars['aktulanglong'] == $this->_tpl_vars['lang']['language']): ?>id="aktulang"<?php endif; ?>>
	<img src="<?php echo $this->_tpl_vars['slash']; ?>
bilder/<?php echo $this->_tpl_vars['lang']['lang_bild']; ?>
" width="20" height="14" style="margin-top:0px;" alt="<?php echo $this->_tpl_vars['lang']['lang_title']; ?>
" /> <?php echo $this->_tpl_vars['lang']['language']; ?>
</a>
	<span class="ignore">.</span></li>
	<?php endforeach; endif; unset($_from); ?>
</ul>
</div>
<!-- ENDE MODUL: sprachwahl -->
<?php endif; ?>