<?php /* Smarty version 2.6.26, created on 2021-01-08 18:33:09
         compiled from /var/www/html/styles/foundation_papoo/templates/plugins/bootstrapdropdown/templates/mod_menue.html */ ?>
<?php if ($this->_tpl_vars['module_aktiv']['mod_menue']): ?>
	<nav class="top-bar" data-topbar>
	  
    <ul class="title-area">
      <!-- Title Area -->
      <li class="name">
        <strong>
          <a href="<?php echo $this->_tpl_vars['slash']; ?>
" accesskey="0" title="<?php echo $this->_tpl_vars['message_2000']; ?>
 <?php echo $this->_tpl_vars['link']; ?>
">
            <?php echo $this->_tpl_vars['top_title']; ?>

          </a>
        </strong>
      </li>
      <li class="toggle-topbar menu-icon"><a href="#"><span>menu</span></a></li>
    </ul>
	  
	  <section class="top-bar-section">
		<?php $_from = $this->_tpl_vars['catlist_data']['0']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['kat']):
?>
		<div id="cat_<?php echo $this->_tpl_vars['kat']['cat_id']; ?>
" <?php if ($this->_tpl_vars['aktumenu_cat'] == $this->_tpl_vars['kat']['cat_id']): ?>class="cat_aktiv"<?php else: ?>class="cat_inaktiv"<?php endif; ?> >	
			<?php if ($this->_tpl_vars['kat']['cat_id'] >= 1): ?><h4 class="menucat"><?php echo $this->_tpl_vars['kat']['cat_text']; ?>
</h4>	<?php endif; ?>	
			
				<ul class="mod_menue_ul left">
					<?php $_from = $this->_tpl_vars['menu_data_mit_fly']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
						<?php if ($this->_tpl_vars['kat']['cat_id'] == $this->_tpl_vars['menu']['cat_cid'] || $this->_tpl_vars['no_categories'] == 1): ?>
							<?php if ($this->_tpl_vars['menu']['shift_anfang_bootstrap']): ?><?php echo $this->_tpl_vars['menu']['shift_anfang_bootstrap']; ?>
<?php else: ?><?php echo $this->_tpl_vars['menu']['shift_anfang']; ?>
<?php endif; ?>
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_module/mod_menue_ebenen_links.inc.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
							<?php if ($this->_tpl_vars['menu']['shift_ende_bootstrap']): ?><?php echo $this->_tpl_vars['menu']['shift_ende_bootstrap']; ?>
<?php else: ?><?php echo $this->_tpl_vars['menu']['shift_ende']; ?>
<?php endif; ?>
						<?php endif; ?>
					<?php endforeach; endif; unset($_from); ?>
				</ul>
				
			</div>
		<?php endforeach; endif; unset($_from); ?>
		</section>
	</nav>
	<!-- ENDE MODUL: menue -->
<?php endif; ?>