<?php /* Smarty version 2.6.26, created on 2021-01-10 17:23:46
         compiled from /var/www/html/styles_default/templates/_module_intern/mod_spamschutz.html */ ?>
<!-- MODUL: spamschutz (intern) -->
<div id="spamschutz">
	<fieldset>
		<legend><?php echo $this->_tpl_vars['mensch']; ?>
</legend>
		
		<?php if ($this->_tpl_vars['__spamschutz__']): ?>
			<p class="error">
				<?php echo $this->_tpl_vars['message_2141']; ?>

			</p>
		<?php else: ?>
			<p>
				<?php echo $this->_tpl_vars['message_2177']; ?>

			</p>
		<?php endif; ?>
		

		<?php if ($this->_tpl_vars['spamschutz_modus'] == 1): ?>
		
				<?php echo $this->_tpl_vars['message_2178']; ?>

		
			<img src="<?php echo $this->_tpl_vars['slash']; ?>
images/_spamcode_image.php" width="200" height="50" alt="<?php echo $this->_tpl_vars['message_2179']; ?>
" title="<?php echo $this->_tpl_vars['message_2179']; ?>
" /><br />
			<label for="spamcode"><?php echo $this->_tpl_vars['message_2180']; ?>
:</label>
			<input type="text" name="spamcode" id="spamcode" size="10" maxlength="10" value="" /><br />
		<?php endif; ?>

		<?php if ($this->_tpl_vars['spamschutz_modus'] == 2): ?>
			<p>
				<?php echo $this->_tpl_vars['message_2181']; ?>

			</p>
			<label for="spamcode"><?php echo $this->_tpl_vars['spamschutz_aufgabe']; ?>
</label>
			<input type="text" name="spamcode" id="spamcode" size="4" maxlength="10" value="" /><br />
		<?php endif; ?>

		<?php if ($this->_tpl_vars['spamschutz_modus'] == 3): ?>
		
			<?php echo $this->_tpl_vars['message_2182']; ?>

			<?php $_from = $this->_tpl_vars['spamschutz_codearray']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['zeichen']):
?>
				 <?php echo $this->_tpl_vars['zeichen']['stelle']; ?>
. <?php echo $this->_tpl_vars['spamschutz_zeichen']; ?>
: <?php echo $this->_tpl_vars['zeichen']['zeichen']; ?>
;
			<?php endforeach; endif; unset($_from); ?>
			<label for="spamcode"><?php echo $this->_tpl_vars['spamschutz_aufgabe']; ?>
</label>
			<input type="text" name="spamcode" id="spamcode" size="4" maxlength="10" value="" /><br />
		<?php endif; ?>

		<?php if ($this->_tpl_vars['spamschutz_modus'] == 4): ?>
		<div class="g-recaptcha" data-sitekey="<?php echo $this->_tpl_vars['captcha_sitekey']; ?>
"></div>
		<?php endif; ?>
	</fieldset>
</div>
<!-- ENDE MODUL: spamschutz (intern) -->