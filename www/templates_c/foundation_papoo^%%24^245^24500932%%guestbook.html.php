<?php /* Smarty version 2.6.26, created on 2021-01-10 17:23:46
         compiled from /var/www/html/styles_default/templates/guestbook.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'date_format', '/var/www/html/styles_default/templates/guestbook.html', 25, false),array('modifier', 'escape', '/var/www/html/styles_default/templates/guestbook.html', 53, false),)), $this); ?>
<!-- TEMPLATE: guestbook.html -->
<h2 class="ignore"><?php echo $this->_tpl_vars['message_2193']; ?>
</h2>
<a  id="artikel"></a>

<?php $_from = $this->_tpl_vars['table_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['table']):
?>
	<?php if ($this->_tpl_vars['table']['islink']): ?><h1><?php echo $this->_tpl_vars['table']['islink']; ?>
</h1><?php endif; ?>
	<?php echo $this->_tpl_vars['table']['text']; ?>

			<?php if ($this->_tpl_vars['table']['author'] && 1 == 0): ?><p><?php echo $this->_tpl_vars['message_2069']; ?>
 <?php echo $this->_tpl_vars['table']['wie_oft']; ?>
 <?php echo $this->_tpl_vars['message_2070']; ?>
</p><?php endif; ?>
	<?php if ($this->_tpl_vars['table']['islinktext']): ?>
						<a href="<?php echo $this->_tpl_vars['slash']; ?>
index.php?menuid=<?php echo $this->_tpl_vars['table']['cattextid']; ?>
&reporeid=<?php echo $this->_tpl_vars['table']['reporeid']; ?>
"  title="<?php echo $this->_tpl_vars['message_2071']; ?>
<?php echo $this->_tpl_vars['table']['islink']; ?>
<?php echo $this->_tpl_vars['message_2072']; ?>
"><?php echo $this->_tpl_vars['table']['islinktext']; ?>
<?php echo $this->_tpl_vars['table']['islink']; ?>
</a> <br class="break_artikel" /><br />
	<?php endif; ?>

<?php endforeach; endif; unset($_from); ?>

<?php if ($this->_tpl_vars['article']): ?>
	<?php if ($this->_tpl_vars['comment_ok']): ?>
		<?php $_from = $this->_tpl_vars['comment_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
?>
			<div class="comment_inhalt">
												<p><?php echo $this->_tpl_vars['message_2073']; ?>
   <?php echo $this->_tpl_vars['comment']['username_comment']; ?>
 am <?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['date_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['lang_dateformat']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['lang_dateformat'])); ?>
</p>
				<h3><?php echo $this->_tpl_vars['comment']['thema']; ?>
<?php echo $this->_tpl_vars['comment']['sprechomatlink']; ?>
</h3>
				<?php echo $this->_tpl_vars['comment']['text']; ?>

				<br /><br />
			</div>
			<br />
			<br />
		<?php endforeach; endif; unset($_from); ?>

				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_module_intern/mod_weiter.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<br />
	<?php endif; ?>

	<?php if ($this->_tpl_vars['eintrag']): ?>
		<div class="formwrap_guest">
			<div class="form">
								<h3><?php echo $this->_tpl_vars['message_2074']; ?>
 <?php echo $this->_tpl_vars['comment_title']; ?>
 <?php echo $this->_tpl_vars['article']['schreiben']; ?>
</h3>
				<form method="post" id="formk" action="">
					<fieldset>
						<?php if ($this->_tpl_vars['fehler']): ?><?php echo $this->_tpl_vars['fehler']; ?>
<br /><?php endif; ?>
												<legend><?php echo $this->_tpl_vars['message_2075']; ?>
</legend>
												<?php if ($this->_tpl_vars['usernameid']): ?>
							<p><?php echo $this->_tpl_vars['message_2076']; ?>
:
							-<?php echo $this->_tpl_vars['usernameid']; ?>
-</p>
							<input type="hidden" name="author" id="author" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['usernameid'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
						<?php else: ?>
							<label for="author"> <?php echo $this->_tpl_vars['message_2076']; ?>
</label><br />
							<input type="text" class="inpt" name="author" id="author" size="30" maxlength="78" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['author'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /><br />
						<?php endif; ?>
												<label for="thema"><?php echo $this->_tpl_vars['message_2077']; ?>
</label><br />
						<input type="text" class="inpt" name="thema" id="thema" size="30" maxlength="78" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['thema'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /><br />
												<br />
						<label for="inhalt"><?php echo $this->_tpl_vars['message_2078']; ?>
</label><br />
						<textarea class="txt" id="inhalt"  name="inhalt"  rows="10" cols="30"><?php echo ((is_array($_tmp=$this->_tpl_vars['inhalt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
</textarea><br />
						<br />
						</fieldset>
						<?php if ($this->_tpl_vars['spamschutz_modus']): ?>
							<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_module_intern/mod_spamschutz.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<?php endif; ?>
						<fieldset>
						<legend><?php echo $this->_tpl_vars['message_2079']; ?>
</legend>
												<input type="submit" value="<?php echo $this->_tpl_vars['message_2079']; ?>
" class="btn btn-info" name="uebermittelformular" />
						<input type="hidden" name="reporeid" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['reporeid_print'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
					</fieldset>
				</form>
			</div>
		</div>
	<?php endif; ?>
<?php endif; ?>
<!-- ENDE TEMPLATE: guestbook.html -->