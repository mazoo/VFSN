<?php /* Smarty version 2.6.26, created on 2021-01-08 18:33:09
         compiled from /var/www/html/styles_default/templates/_module_intern/mod_menue_sprung.html */ ?>
<!-- MODUL: menue_sprung (intern) -->
<div id="menue_sprung">
	<ul id="skiplinks">
				<li><a href="#artikel" class="skip" accesskey="8" ><?php echo $this->_tpl_vars['message_2120']; ?>
</a><span class="ignore">. </span></li>
				<?php if ($this->_tpl_vars['suchbox']): ?>
						<li><a href="#suchen" class="skip" accesskey="6"><?php echo $this->_tpl_vars['message_2122']; ?>
</a><span class="ignore">. </span></li>
		<?php endif; ?>
		<?php if ($this->_tpl_vars['module_aktiv']['mod_loginform']): ?>
						<li><a href="#einloggen" class="skip"><?php echo $this->_tpl_vars['message_2123']; ?>
</a><span class="ignore">. </span></li>
		<?php endif; ?>
	</ul>
</div>
<!-- ENDE MODUL: menue_sprung (intern) -->