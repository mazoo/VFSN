<?php /* Smarty version 2.6.26, created on 2021-01-08 19:20:18
         compiled from /var/www/html/styles_default/templates/_module_intern/mod_loginform.html */ ?>
<h3><?php echo $this->_tpl_vars['message_2128']; ?>
</h3>
<div class="inner_mod">
<form method="post" action="">
		<fieldset>
		<legend><?php echo $this->_tpl_vars['message_2128']; ?>
</legend>
		<?php if ($this->_tpl_vars['sperre']): ?>
			<p><?php echo $this->_tpl_vars['message_2156']; ?>
</p>
		<?php endif; ?>
				<label for="username"><?php echo $this->_tpl_vars['message_2129']; ?>
</label>
		<input type="text" class="input" id="username" name="username" size="20" maxlength="50" value="<?php echo $this->_tpl_vars['message_2174']; ?>
"
			onblur="if(this.value=='')this.value='<?php echo $this->_tpl_vars['message_2174']; ?>
';" onfocus="if(this.value=='<?php echo $this->_tpl_vars['message_2174']; ?>
')this.value='';" />
				<label for="password"><?php echo $this->_tpl_vars['message_2130']; ?>
</label>
		<input type="password" class="input" id="password" name="password" size="20" maxlength="50" value="" />
		<input type="submit" class="senden btn btn-info" value="<?php echo $this->_tpl_vars['message_2131']; ?>
" name="login" />
		<div class="clearfix"></div>
				<a class="loginlink" href="<?php echo $this->_tpl_vars['slash']; ?>
account.php?menuid=2" title="<?php echo $this->_tpl_vars['message_2132']; ?>
"><?php echo $this->_tpl_vars['message_2067']; ?>
</a><br /><span class="ignore">.</span><div class="clearfix"></div>
				<a class="loginlink" href="<?php echo $this->_tpl_vars['slash']; ?>
login.php?forgot=1&menuid=2"><?php echo $this->_tpl_vars['message_passwort_vergessen']; ?>
</a><br /><span class="ignore">.</span>
		<?php if ($this->_tpl_vars['logfalse']): ?>
			<h2 class="ignore"><?php echo $this->_tpl_vars['message_2127']; ?>
</h2>
						<p style="background:#fff;"><?php echo $this->_tpl_vars['message_2141']; ?>
  <?php if ($this->_tpl_vars['loggedin_false_pass'] == 1): ?><?php echo $this->_tpl_vars['message_2141a']; ?>
<?php endif; ?></p>
		<?php endif; ?>
	</fieldset>
</form>
</div>