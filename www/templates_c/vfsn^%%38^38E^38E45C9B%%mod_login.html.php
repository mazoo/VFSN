<?php /* Smarty version 2.6.26, created on 2021-01-10 18:08:33
         compiled from /var/www/html/styles_default/templates/_module/mod_login.html */ ?>
<?php if ($this->_tpl_vars['module_aktiv']['mod_login']): ?>
	<!-- MODUL: login -->
	<div class="modul" id="mod_login">
		<a name="einloggen" id="einloggen"></a>
		<?php if (! $this->_tpl_vars['loggedin']): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_module_intern/mod_loginform.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php else: ?>
									<h3><?php echo $this->_tpl_vars['message_2128']; ?>
</h3>
			<div class="inner_mod">
				<ul>
					<?php if ($this->_tpl_vars['user_dzvhae_id']): ?>
						<li><a class="loginlink" href="<?php echo $this->_tpl_vars['slash']; ?>
plugin.php?menuid=<?php echo $this->_tpl_vars['menuid_aktuell']; ?>
&template=mv/templates/mv_edit_front.html&mv_id=1&mv_content_id=<?php echo $this->_tpl_vars['user_dzvhae_id']; ?>
"><?php echo $this->_tpl_vars['message_2133']; ?>
</a></li>
					<?php elseif ($this->_tpl_vars['user_extern_id']): ?>
						<li><a class="loginlink" target="blank" href="<?php echo $this->_tpl_vars['site_name']; ?>
"><?php echo $this->_tpl_vars['message_2133']; ?>
</a></li>
					<?php else: ?>
						<li><a class="loginlink" href="<?php echo $this->_tpl_vars['slash']; ?>
account.php?menuid=2"><?php echo $this->_tpl_vars['message_2133']; ?>
</a></li>
					<?php endif; ?>
										<li><a class="loginlink" href="<?php echo $this->_tpl_vars['slash']; ?>
index.php?logoff=1"><?php echo $this->_tpl_vars['message_2134']; ?>
</a></li>
					</ul>
			</div>
					<?php endif; ?>
	</div>
	<!-- ENDE MODUL: login -->
<?php endif; ?>