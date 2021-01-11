<?php /* Smarty version 2.6.26, created on 2021-01-10 17:41:36
         compiled from /var/www/html/styles_default/templates/_module/mod_menue_ebenen_links.inc.html */ ?>
<!-- MODUL: MENULINK -->
<?php if ($this->_tpl_vars['menu']['menuname'] && ! $this->_tpl_vars['menu']['link_aktiv']): ?>
	<?php if ($this->_tpl_vars['menu']['extern']): ?>
		<a href="<?php echo $this->_tpl_vars['menu']['menulink']; ?>
"  class="<?php echo $this->_tpl_vars['menu']['menuklasse']; ?>
" id="<?php echo $this->_tpl_vars['menu']['htmltag_id']; ?>
" title="<?php echo $this->_tpl_vars['menu']['lang_title']; ?>
">
			<?php if ($this->_tpl_vars['menu']['menu_image']): ?><img src="<?php echo $this->_tpl_vars['slash']; ?>
images/<?php echo $this->_tpl_vars['menu']['menu_image']; ?>
" alt="<?php echo $this->_tpl_vars['menu']['menuname']; ?>
"/><?php endif; ?><?php echo $this->_tpl_vars['menu']['menuname']; ?>
</a>
		<span class="ignore">&nbsp;</span>
	<?php else: ?>
		<?php if (! $this->_tpl_vars['usability']): ?>
			<!--<span class="span_<?php echo $this->_tpl_vars['menu']['menuklasse']; ?>
">-->
			<?php if ($this->_tpl_vars['sp_urls'] == 'ok' || $this->_tpl_vars['free_sp_urls']): ?>
				<a href="<?php echo $this->_tpl_vars['slash']; ?>
<?php if ($this->_tpl_vars['free_sp_urls'] == 'ok'): ?><?php echo $this->_tpl_vars['menu']['menuname_free_url']; ?>
<?php else: ?><?php echo $this->_tpl_vars['menu']['menuname_url']; ?>
<?php endif; ?>" class="<?php echo $this->_tpl_vars['menu']['menuklasse']; ?>
" id="<?php echo $this->_tpl_vars['menu']['htmltag_id']; ?>
" title="<?php echo $this->_tpl_vars['menu']['lang_title']; ?>
">
					<?php if ($this->_tpl_vars['menu']['menu_image']): ?><img src="<?php echo $this->_tpl_vars['slash']; ?>
images/<?php echo $this->_tpl_vars['menu']['menu_image']; ?>
" alt="<?php echo $this->_tpl_vars['menu']['menuname']; ?>
"/><?php endif; ?><?php echo $this->_tpl_vars['menu']['menuname']; ?>
</a>
			<?php else: ?>
				<a href="<?php echo $this->_tpl_vars['slash']; ?>
<?php echo $this->_tpl_vars['menu']['menulink']; ?>
<?php echo $this->_tpl_vars['frag_connect']; ?>
menuid<?php echo $this->_tpl_vars['gleich_connect']; ?>
<?php echo $this->_tpl_vars['menu']['menuid']; ?>
<?php echo $this->_tpl_vars['menu']['template']; ?>
" class="<?php echo $this->_tpl_vars['menu']['menuklasse']; ?>
" id="<?php echo $this->_tpl_vars['menu']['htmltag_id']; ?>
" title="<?php echo $this->_tpl_vars['menu']['lang_title']; ?>
">
					<?php if ($this->_tpl_vars['menu']['menu_image']): ?><img src="<?php echo $this->_tpl_vars['slash']; ?>
images/<?php echo $this->_tpl_vars['menu']['menu_image']; ?>
" alt="<?php echo $this->_tpl_vars['menu']['menuname']; ?>
"/><?php endif; ?><?php echo $this->_tpl_vars['menu']['menuname']; ?>
</a>
				<?php endif; ?>
			<span class="ignore">&nbsp;</span>
		<?php else: ?>
			<span class="<?php echo $this->_tpl_vars['menu']['menuklasse']; ?>
" id="<?php echo $this->_tpl_vars['menu']['htmltag_id']; ?>
" title="<?php echo $this->_tpl_vars['menu']['lang_title']; ?>
">
				<?php if ($this->_tpl_vars['menu']['menu_image']): ?><img src="<?php echo $this->_tpl_vars['slash']; ?>
images/<?php echo $this->_tpl_vars['menu']['menu_image']; ?>
" alt="<?php echo $this->_tpl_vars['menu']['menuname']; ?>
"/><?php endif; ?><?php echo $this->_tpl_vars['menu']['menuname']; ?>

			</span>
			<span class="ignore">&nbsp;</span>
		<?php endif; ?>
	<?php endif; ?>
<?php else: ?>
	<?php if ($this->_tpl_vars['menu']['extern']): ?>
		<a href="<?php echo $this->_tpl_vars['menu']['menulink']; ?>
"  class="<?php echo $this->_tpl_vars['menu']['menuklasse']; ?>
" id="<?php echo $this->_tpl_vars['menu']['htmltag_id']; ?>
" title="<?php echo $this->_tpl_vars['menu']['lang_title']; ?>
">
			<?php if ($this->_tpl_vars['menu']['menu_image']): ?><img src="<?php echo $this->_tpl_vars['slash']; ?>
images/<?php echo $this->_tpl_vars['menu']['menu_image']; ?>
" alt="<?php echo $this->_tpl_vars['menu']['menuname']; ?>
"/><?php endif; ?><?php echo $this->_tpl_vars['menu']['menuname']; ?>
</a>
		<span class="ignore">&nbsp;</span>
	<?php else: ?>
	<?php if ($this->_tpl_vars['sp_urls'] == 'ok' || $this->_tpl_vars['free_sp_urls']): ?>
	<a <?php if ($this->_tpl_vars['menu']['has_sub'] == 1): ?>class="dropdown-toggle <?php echo $this->_tpl_vars['menu']['menuklasse']; ?>
" data-toggle="dropdown"<?php else: ?>class="<?php echo $this->_tpl_vars['menu']['menuklasse']; ?>
"<?php endif; ?> href="<?php echo $this->_tpl_vars['slash']; ?>
<?php if ($this->_tpl_vars['free_sp_urls'] == 'ok'): ?><?php echo $this->_tpl_vars['menu']['menuname_free_url']; ?>
<?php else: ?><?php echo $this->_tpl_vars['menu']['menuname_url']; ?>
<?php endif; ?>" id="<?php echo $this->_tpl_vars['menu']['htmltag_id']; ?>
" title="<?php echo $this->_tpl_vars['menu']['lang_title']; ?>
">
			<?php if ($this->_tpl_vars['menu']['menu_image']): ?><img src="<?php echo $this->_tpl_vars['slash']; ?>
images/<?php echo $this->_tpl_vars['menu']['menu_image']; ?>
" alt="<?php echo $this->_tpl_vars['menu']['menuname']; ?>
"/><?php endif; ?><?php echo $this->_tpl_vars['menu']['menuname']; ?>
</a>
	<?php else: ?>
		<a href="<?php echo $this->_tpl_vars['slash']; ?>
<?php echo $this->_tpl_vars['menu']['menulink']; ?>
<?php echo $this->_tpl_vars['frag_connect']; ?>
menuid<?php echo $this->_tpl_vars['gleich_connect']; ?>
<?php echo $this->_tpl_vars['menu']['menuid']; ?>
<?php echo $this->_tpl_vars['menu']['template']; ?>
" class="<?php echo $this->_tpl_vars['menu']['menuklasse']; ?>
" id="<?php echo $this->_tpl_vars['menu']['htmltag_id']; ?>
" title="<?php echo $this->_tpl_vars['menu']['lang_title']; ?>
">
			<?php if ($this->_tpl_vars['menu']['menu_image']): ?><img src="<?php echo $this->_tpl_vars['slash']; ?>
images/<?php echo $this->_tpl_vars['menu']['menu_image']; ?>
" alt="<?php echo $this->_tpl_vars['menu']['menuname']; ?>
"/><?php endif; ?><?php echo $this->_tpl_vars['menu']['menuname']; ?>
</a>
	<?php endif; ?>
		<span class="ignore">&nbsp;</span>
	<?php endif; ?>
<?php endif; ?>
<!-- ENDE MODUL: MENULINK -->