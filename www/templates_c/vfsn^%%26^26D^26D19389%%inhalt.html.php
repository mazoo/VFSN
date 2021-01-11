<?php /* Smarty version 2.6.26, created on 2021-01-10 17:29:17
         compiled from /var/www/html/styles_default/templates/inhalt.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/var/www/html/styles_default/templates/inhalt.html', 19, false),)), $this); ?>

<!-- TEMPLATE: inhalt.html -->

<div id="inhalt_sitemap" class="artikel_details">

    <h1><?php echo $this->_tpl_vars['message_2197']; ?>
</h1>
    <a  id="artikel"></a>
<?php $_from = $this->_tpl_vars['catlist_data']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['kat']):
?>		
				<!-- -->		
	<?php if ($this->_tpl_vars['kat']['cat_id'] >= 1): ?><h1 class="sitemap_menucat"><?php echo $this->_tpl_vars['kat']['cat_text']; ?>
</h1>	<?php endif; ?>	
	<ul>
		<?php $_from = $this->_tpl_vars['table_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['table']):
?>
		 <?php if ($this->_tpl_vars['kat']['cat_id'] == $this->_tpl_vars['table']['cat_cid'] || $this->_tpl_vars['no_categories'] == 1): ?>
			<?php echo $this->_tpl_vars['table']['shift_anfang']; ?>


			<?php if ($this->_tpl_vars['table']['extern']): ?>
				<h2><a href="<?php echo $this->_tpl_vars['table']['link']; ?>
"><?php echo $this->_tpl_vars['table']['text']; ?>
</a></h2>
			<?php else: ?>
				<h2><?php if ($this->_tpl_vars['sp_urls'] == 'ok' || $this->_tpl_vars['free_sp_urls']): ?><a href="<?php echo $this->_tpl_vars['slash']; ?>
<?php if ($this->_tpl_vars['free_sp_urls'] == 'ok'): ?><?php echo $this->_tpl_vars['table']['menuname_free_url']; ?>
<?php else: ?><?php echo $this->_tpl_vars['table']['menuname_url']; ?>
<?php endif; ?>" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['table']['lang_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"><?php echo $this->_tpl_vars['table']['text']; ?>
</a><?php else: ?><a href="<?php echo $this->_tpl_vars['slash']; ?>
<?php echo $this->_tpl_vars['table']['link']; ?>
<?php echo $this->_tpl_vars['frag_connect']; ?>
menuid<?php echo $this->_tpl_vars['gleich_connect']; ?>
<?php echo $this->_tpl_vars['table']['menuid']; ?>
<?php echo $this->_tpl_vars['table']['template']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['table']['lang_title'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"><?php echo $this->_tpl_vars['table']['text']; ?>
</a>
				<?php endif; ?></h2>
			<?php endif; ?>

						<?php if ($this->_tpl_vars['table']['artikel_anzahl'] > 1 || $this->_tpl_vars['table']['produkte'] || $this->_tpl_vars['table']['flex']): ?>
				<ul class="ul_artikel">
					<?php $_from = $this->_tpl_vars['table']['artikel']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['artikel']):
?>
						<li>
							<?php if ($this->_tpl_vars['sp_urls'] == 'ok' || $this->_tpl_vars['free_sp_urls']): ?>
								<a href="<?php echo $this->_tpl_vars['slash']; ?>
<?php if ($this->_tpl_vars['free_sp_urls'] == 'ok'): ?><?php echo $this->_tpl_vars['artikel']['arturl']; ?>
<?php else: ?><?php echo $this->_tpl_vars['table']['menuname_art_url']; ?>
<?php echo $this->_tpl_vars['artikel']['arturl']; ?>
<?php endif; ?>" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['artikel']['text'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
									<?php echo $this->_tpl_vars['artikel']['text']; ?>

								</a>
							<?php else: ?>
								<a href="<?php echo $this->_tpl_vars['slash']; ?>
<?php echo $this->_tpl_vars['table']['link']; ?>
<?php echo $this->_tpl_vars['frag_connect']; ?>
menuid<?php echo $this->_tpl_vars['gleich_connect']; ?>
<?php echo $this->_tpl_vars['table']['menuid']; ?>
<?php echo $this->_tpl_vars['plus_connect']; ?>
reporeid<?php echo $this->_tpl_vars['gleich_connect']; ?>
<?php echo $this->_tpl_vars['artikel']['reporeid']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['artikel']['text'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" >
									<?php echo $this->_tpl_vars['artikel']['text']; ?>

								</a>
							<?php endif; ?>
						</li>
					<?php endforeach; endif; unset($_from); ?>
					<?php $_from = $this->_tpl_vars['table']['produkte']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['produkte']):
?>
						<li>
							<?php if ($this->_tpl_vars['sp_urls'] == 'ok' || $this->_tpl_vars['free_sp_urls']): ?>
								<a href="<?php echo $this->_tpl_vars['slash']; ?>
<?php echo $this->_tpl_vars['table']['menuname_url']; ?>
<?php echo $this->_tpl_vars['produkte']['produkte_lang_produkt_surl']; ?>
.html" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['produkte']['produkte_lang_produktename'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
">
									<?php echo $this->_tpl_vars['produkte']['produkte_lang_produktename']; ?>

								</a>
							<?php else: ?>
								<a href="<?php echo $this->_tpl_vars['slash']; ?>
shop.php<?php echo $this->_tpl_vars['frag_connect']; ?>
menuid<?php echo $this->_tpl_vars['gleich_connect']; ?>
<?php echo $this->_tpl_vars['table']['menuid']; ?>
<?php echo $this->_tpl_vars['plus_connect']; ?>
produkt_id<?php echo $this->_tpl_vars['gleich_connect']; ?>
<?php echo $this->_tpl_vars['produkte']['produkte_lang_id']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['produkte']['produkte_lang_produktename'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" >
									<?php echo ((is_array($_tmp=$this->_tpl_vars['produkte']['produkte_lang_produktename'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

								</a>
							<?php endif; ?>
						</li>
					<?php endforeach; endif; unset($_from); ?>


					<?php $_from = $this->_tpl_vars['table']['flex']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['flex']):
?>
						<?php if ($this->_tpl_vars['sp_urls'] == 'ok' || $this->_tpl_vars['free_sp_urls']): ?>
							<li>
								<a href="<?php echo $this->_tpl_vars['slash']; ?>
<?php echo $this->_tpl_vars['flex']['sprechendeurl_feld']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['flex']['name_feld'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" >
								<?php echo ((is_array($_tmp=$this->_tpl_vars['flex']['name_feld'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

								</a>
							</li>
						<?php else: ?>
							<li>
								<a href="<?php echo $this->_tpl_vars['slash']; ?>
plugin.php?menuid=<?php echo $this->_tpl_vars['flex']['menuid']; ?>
&template=mv/templates/mv_show_front.html&mv_id=<?php echo $this->_tpl_vars['flex']['mv_id']; ?>
&mv_content_id=<?php echo $this->_tpl_vars['flex']['mv_content_id']; ?>
" title="<?php echo ((is_array($_tmp=$this->_tpl_vars['flex']['name_feld'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" >
								<?php echo ((is_array($_tmp=$this->_tpl_vars['flex']['name_feld'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>

								</a>
							</li>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
			<?php endif; ?>

			<?php echo $this->_tpl_vars['table']['shift_ende']; ?>

			<?php endif; ?>
		<?php endforeach; endif; unset($_from); ?>
		
	</ul>
<?php endforeach; endif; unset($_from); ?>
</div>
<!-- ENDE TEMPLATE: inhalt.html -->