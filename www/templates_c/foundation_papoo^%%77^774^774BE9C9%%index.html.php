<?php /* Smarty version 2.6.26, created on 2021-01-08 18:33:09
         compiled from index.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', 'index.html', 21, false),array('modifier', 'count', 'index.html', 55, false),array('modifier', 'date_format', 'index.html', 73, false),)), $this); ?>
<!-- TEMPLATE: index.html -->
<!--Artikelbereich, hier kommt der Inhalt-->
<?php if ($this->_tpl_vars['easyedit'] == 'edit'): ?>
	<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "../../plugins/easyedit/templates/easyedit_front.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
<?php else: ?>
	<?php if ($this->_tpl_vars['articlesend']): ?>
				<h1><?php echo $this->_tpl_vars['islink_send']; ?>
</h1>
		<?php echo $this->_tpl_vars['text_send']; ?>

		<?php if ($this->_tpl_vars['error_comment']): ?><strong class="error"><?php echo $this->_tpl_vars['error_comment']; ?>
</strong><?php endif; ?>
		<div class="floatbox">
						<form id="formk" action="" method="post">
				<fieldset>
										<legend><?php echo $this->_tpl_vars['message_2001']; ?>
</legend>
										<label for="empfang_mail"><?php echo $this->_tpl_vars['message_2002']; ?>
</label><br />
					<input type="text" class="inpt" id="empfang_mail" name="empfang_mail" size="30" maxlength="78" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['empfang_mail'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /><br />
										<label for="comment_mail"><?php echo $this->_tpl_vars['message_2003']; ?>
</label><br />
					<input type="text" class="inpt" id="comment_mail" name="comment_mail" size="30" maxlength="78" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['comment_mail'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /><br />
										<p><?php echo $this->_tpl_vars['message_2004']; ?>
</p>
										<input type="radio" id="link" name="what" value="link" <?php echo $this->_tpl_vars['checked_link']; ?>
 /> <label for="link"><?php echo $this->_tpl_vars['message_2005']; ?>
</label><br />
										<input type="radio" id="text" name="what" value="text" <?php echo $this->_tpl_vars['checked_text']; ?>
 /> <label for="text"><?php echo $this->_tpl_vars['message_2006']; ?>
</label><br /><br />
										<label for="comment_inhalt"><?php echo $this->_tpl_vars['message_2007']; ?>
</label><br />
					<textarea class="txt" id="comment_inhalt" name="comment_inhalt" rows="10" cols="40"><?php echo ((is_array($_tmp=$this->_tpl_vars['comment_inhalt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')); ?>
</textarea><br />
					<input type="hidden" name="reporeid" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['reporeid_print'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
					<input type="hidden" name="reporeid_print" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['reporeid_print'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" />
										<?php if ($this->_tpl_vars['spamschutz_modus']): ?>
						<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_module_intern/mod_spamschutz.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
						<br />
					<?php endif; ?>
					<input type="submit" class="senden" value="<?php echo $this->_tpl_vars['message_2008']; ?>
" name="send_artikel" />
				</fieldset>
			</form>
		</div>
	<?php else: ?>
		<a  id="artikel"></a><span class="ignore">.</span>
		<?php if ($this->_tpl_vars['such']): ?>
			 <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_module_intern/mod_search.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		<?php else: ?>
			<?php if (! $this->_tpl_vars['table_data']): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_module_intern/mod_easyedit.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endif; ?>
			
			<?php if (count($this->_tpl_vars['table_data']) > 1 && $this->_tpl_vars['menuid_aktuell'] > 1 || $this->_tpl_vars['bis_article'] || $this->_tpl_vars['filter_falsch'] == 'yes'): ?>
			<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_module_intern/filter_article.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php if ($this->_tpl_vars['filter_falsch'] == 'yes'): ?>
			<?php echo $this->_tpl_vars['filter_reset']; ?>

			<?php endif; ?>
			<?php endif; ?>
			<?php $_from = $this->_tpl_vars['table_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['artikel'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['artikel']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['table']):
        $this->_foreach['artikel']['iteration']++;
?>
				<?php if ($this->_foreach['artikel']['total'] <= 1): ?> <div class="floatbox artikel_details<?php if ($this->_tpl_vars['table']['reporeid']): ?> reporeid-<?php echo $this->_tpl_vars['table']['reporeid']; ?>
<?php endif; ?>">
				<?php else: ?> <div class="floatbox artikel_liste<?php if ($this->_tpl_vars['table']['reporeid']): ?> reporeid-<?php echo $this->_tpl_vars['table']['reporeid']; ?>
<?php endif; ?>">
				<?php endif; ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_module_intern/mod_easyedit.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
				<?php if ($this->_tpl_vars['gesendet']): ?>
					<strong><?php echo $this->_tpl_vars['message_2157']; ?>
</strong>
				<?php endif; ?>
				
				<?php if ($this->_tpl_vars['table']['uberschrift']): ?><h1><?php echo $this->_tpl_vars['table']['uberschrift']; ?>
<?php echo $this->_tpl_vars['table']['sprechomatlink']; ?>
 </h1><?php endif; ?>
    <?php if ($this->_tpl_vars['menuid_aktuell'] > 1): ?>

				<div class="date_article"><?php if ($this->_tpl_vars['anzeig_autor'] == 1): ?> <i class="fa fa-user"></i> <?php echo $this->_tpl_vars['message_2010']; ?>
 <?php echo $this->_tpl_vars['table']['author']; ?>
  <i class="fa fa-clock-o"></i> <?php echo ((is_array($_tmp=$this->_tpl_vars['table']['erstellungsdatum'])) ? $this->_run_mod_handler('date_format', true, $_tmp, "%d.%m.%Y") : smarty_modifier_date_format($_tmp, "%d.%m.%Y")); ?>

                    <?php endif; ?></div><?php endif; ?>
				<?php if (! $this->_tpl_vars['table']['linktext'] && $this->_tpl_vars['fb_like_me']): ?>
					<?php echo $this->_tpl_vars['fb_like_me_top']; ?>
 
				<?php endif; ?>

				<?php echo $this->_tpl_vars['table']['lan_teaser_img_fertig']; ?>


				 <?php if ($this->_tpl_vars['table']['teasertext']): ?>
					<?php echo $this->_tpl_vars['table']['teasertext']; ?>

				<?php endif; ?>
				
				<?php if ($this->_tpl_vars['table']['lan_teaser']): ?>
					<?php echo $this->_tpl_vars['table']['lan_teaser']; ?>

				<?php else: ?>
					<?php echo $this->_tpl_vars['table']['text']; ?>

				<?php endif; ?>
				
				<?php if (! $this->_tpl_vars['table']['linktext'] && $this->_tpl_vars['fb_like_me'] && $this->_tpl_vars['allow_comment2'] != 1): ?>
					<?php echo $this->_tpl_vars['fb_like_me']; ?>
 
				<?php endif; ?>
				
								<?php if ($this->_tpl_vars['table']['author'] && ! $this->_tpl_vars['table']['linktext']): ?>

					<?php if ($this->_tpl_vars['anzeig_pageviews']): ?>
												<p><?php echo $this->_tpl_vars['message_2011']; ?>
 <?php echo $this->_tpl_vars['table']['wie_oft']; ?>
 <?php echo $this->_tpl_vars['message_2025']; ?>
</p>
					<?php endif; ?>
				<?php endif; ?>
				
				<?php if ($this->_tpl_vars['table']['linktext'] && $this->_tpl_vars['table']['dok_show_teaser_link'] != 1): ?>
										<?php if ($this->_tpl_vars['free_sp_urls'] == 'ok'): ?>
						<a class="teaserlink" href="<?php echo $this->_tpl_vars['slash']; ?>
<?php echo $this->_tpl_vars['table']['url_header']; ?>
"  title="<?php echo $this->_tpl_vars['message_2012']; ?>
 &quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['table']['uberschrift'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&quot; <?php echo $this->_tpl_vars['message_2013']; ?>
"><?php echo $this->_tpl_vars['table']['islink']; ?>
</a>
						<?php if ($this->_tpl_vars['fb_like_me']): ?>
							<?php echo $this->_tpl_vars['fb_like_me_front']; ?>
http://<?php echo $this->_tpl_vars['site_name']; ?>
<?php echo $this->_tpl_vars['slash']; ?>
<?php echo $this->_tpl_vars['table']['url_header']; ?>
<?php echo $this->_tpl_vars['fb_like_me_back']; ?>

						<?php endif; ?>
					<?php else: ?>
						<?php if ($this->_tpl_vars['sp_urls'] == 'ok'): ?>
							<a class="teaserlink" href="<?php echo $this->_tpl_vars['slash']; ?>
<?php echo $this->_tpl_vars['sulrstrenner']; ?>
<?php echo $this->_tpl_vars['table']['url_header']; ?>
"  title="<?php echo $this->_tpl_vars['message_2012']; ?>
 &quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['table']['uberschrift'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&quot; <?php echo $this->_tpl_vars['message_2013']; ?>
"><?php echo $this->_tpl_vars['table']['islink']; ?>
</a>
							<?php if ($this->_tpl_vars['fb_like_me']): ?>
								<?php echo $this->_tpl_vars['fb_like_me_front']; ?>
http://<?php echo $this->_tpl_vars['site_name']; ?>
<?php echo $this->_tpl_vars['slash']; ?>
<?php echo $this->_tpl_vars['sulrstrenner']; ?>
<?php echo $this->_tpl_vars['table']['url_header']; ?>
<?php echo $this->_tpl_vars['fb_like_me_back']; ?>

							<?php endif; ?>
						<?php else: ?>
							<a  class="teaserlink" href="<?php echo $this->_tpl_vars['slash']; ?>
<?php echo $this->_tpl_vars['table']['linktext']; ?>
<?php echo $this->_tpl_vars['frag_connect']; ?>
menuid<?php echo $this->_tpl_vars['gleich_connect']; ?>
<?php echo $this->_tpl_vars['table']['cattextid']; ?>
<?php echo $this->_tpl_vars['plus_connect']; ?>
reporeid<?php echo $this->_tpl_vars['gleich_connect']; ?>
<?php echo $this->_tpl_vars['table']['reporeid']; ?>
"  title="<?php echo $this->_tpl_vars['message_2012']; ?>
 &quot;<?php echo ((is_array($_tmp=$this->_tpl_vars['table']['uberschrift'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
&quot; <?php echo $this->_tpl_vars['message_2013']; ?>
"><?php echo $this->_tpl_vars['table']['islink']; ?>
</a>
							<?php if ($this->_tpl_vars['fb_like_me']): ?>
								<?php echo $this->_tpl_vars['fb_like_me_front']; ?>
http://<?php echo $this->_tpl_vars['site_name']; ?>
<?php echo $this->_tpl_vars['slash']; ?>
<?php echo $this->_tpl_vars['webverzeichnis']; ?>
<?php echo $this->_tpl_vars['table']['linktext']; ?>
<?php echo $this->_tpl_vars['frag_connect']; ?>
menuid<?php echo $this->_tpl_vars['gleich_connect']; ?>
<?php echo $this->_tpl_vars['table']['cattextid']; ?>
<?php echo $this->_tpl_vars['plus_connect']; ?>
reporeid<?php echo $this->_tpl_vars['gleich_connect']; ?>
<?php echo $this->_tpl_vars['table']['reporeid']; ?>
<?php echo $this->_tpl_vars['fb_like_me_back']; ?>

							<?php endif; ?>
						<?php endif; ?>
					<?php endif; ?>

				<?php endif; ?>
				
				<?php if ($this->_tpl_vars['table']['dok_show_teaser_link'] != 1): ?>
					<?php if ($this->_tpl_vars['table']['comment_ok']): ?><?php echo $this->_tpl_vars['table']['comment']; ?>
 <?php echo $this->_tpl_vars['message_kommentare']; ?>
<?php endif; ?>
				<?php endif; ?>

</div>


			<?php endforeach; endif; unset($_from); ?>

    <?php if ($this->_tpl_vars['mit_cat'] == 'ok'): ?>
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_module_intern/mod_cat_teaser.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endif; ?>
		<?php endif; ?>
		
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_module_intern/mod_weiter.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
		
		<?php if ($this->_tpl_vars['article']): ?>
			<?php if ($this->_tpl_vars['comment_ok']): ?>
				<hr />
				<?php $_from = $this->_tpl_vars['comment_data']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['comment']):
?>
					<div class="comment_inhalt">
												<h3><?php echo $this->_tpl_vars['comment']['thema']; ?>
<?php echo $this->_tpl_vars['comment']['sprechomatlink']; ?>
</h3>
						<p><?php echo $this->_tpl_vars['message_2017']; ?>
  <?php echo $this->_tpl_vars['comment']['username_comment']; ?>
 <?php echo $this->_tpl_vars['message_2142']; ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['comment']['date_time'])) ? $this->_run_mod_handler('date_format', true, $_tmp, $this->_tpl_vars['lang_dateformat']) : smarty_modifier_date_format($_tmp, $this->_tpl_vars['lang_dateformat'])); ?>
</p>
						<?php echo $this->_tpl_vars['comment']['text']; ?>

					</div>
					<hr />
				<?php endforeach; endif; unset($_from); ?>
				
				<!--weitere Seiten -->
				<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_module_intern/mod_weiter.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
			<?php endif; ?>
			
			<?php if ($this->_tpl_vars['allow_comment2'] == 1): ?>
			
			<?php if ($this->_tpl_vars['eintrag']): ?>
				<?php if ($this->_tpl_vars['fb_comments']): ?>
					<?php echo $this->_tpl_vars['fb_comments']; ?>

				<?php else: ?>
					<div class="formwrap_guest" id="formwrap_guest_anchor">
												<h3><?php echo $this->_tpl_vars['message_2018']; ?>
 <?php echo $this->_tpl_vars['thema']; ?>
?</h3>
						<?php if (count($this->_tpl_vars['fehlerliste']) > 0): ?>
							<blockquote id="kommentar_fehlerliste">
								<span style="font-weight:bold;color:red;font-size:16px;"><?php echo $this->_tpl_vars['fehler']; ?>
 :</span><br/><br/>
								<ul>
								<?php $_from = $this->_tpl_vars['fehlerliste']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['fehler_liste'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['fehler_liste']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['fehl']):
        $this->_foreach['fehler_liste']['iteration']++;
?>
									<li><?php echo $this->_tpl_vars['fehl']; ?>
</li>
								<?php endforeach; endif; unset($_from); ?>
								</ul>
							</blockquote>
						<?php endif; ?>
						<?php if ($this->_tpl_vars['success']): ?>
							<blockquote id="kommentar_abgeschickt">
								<span style="color:green;">Ihr Kommentar wurde erfolgreich gespeichert.</span>
							</blockquote>
						<?php endif; ?>
						<div class="form">
							<form id="artikel_kommentar" action="<?php echo $this->_tpl_vars['slash']; ?>
index.php?menuid=<?php echo $this->_tpl_vars['menuid_aktuell']; ?>
&amp;reporeid=<?php echo $this->_tpl_vars['reporeid_print']; ?>
" method="post">
								<fieldset>
																		<legend><?php echo $this->_tpl_vars['message_2019']; ?>
</legend>
																				<?php if ($this->_tpl_vars['username_neu_comment']): ?>
											<p><?php echo $this->_tpl_vars['message_2010']; ?>
 <?php echo $this->_tpl_vars['username_neu_comment']; ?>
</p>
										<?php else: ?>
											<label for="neuvorname"><?php echo $this->_tpl_vars['message_2076']; ?>
</label><br />
											<input type="text" class="inpt" id="neuvorname" name="neuvorname" size="30" maxlength="78" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['author'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /><br />
										<?php endif; ?>
																				<label for="formthema"><?php echo $this->_tpl_vars['message_2020']; ?>
</label><br />
										<input type="text" class="inpt" id="formthema" name="formthema" size="30" maxlength="78" placeholder="<?php echo $this->_tpl_vars['message_2018']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['formthema'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
" /><br />
																				<label for="inhalt"><?php echo $this->_tpl_vars['message_2021']; ?>
</label><br />
										<textarea class="txt" id="inhalt" name="inhalt" placeholder="<?php echo $this->_tpl_vars['message_2021']; ?>
" rows="10" cols="30"><?php echo ((is_array($_tmp=$this->_tpl_vars['inhalt'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'htmlall') : smarty_modifier_escape($_tmp, 'htmlall')); ?>
</textarea><br />
																		<label for="email"><?php echo $this->_tpl_vars['message_2109']; ?>
</label><br/>
									<input type="text" class="inpt" id="email" name="email" size="30" maxlength="78" placeholder="<?php echo $this->_tpl_vars['message_2109']; ?>
" value="<?php echo ((is_array($_tmp=$this->_tpl_vars['email'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
"/><br/>
										<?php if ($this->_tpl_vars['spamschutz_modus']): ?>
											<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_module_intern/mod_spamschutz.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
											<br />
										 <?php endif; ?>
									<input type="hidden" id="artikelurl" name="artikelurl" value="<?php echo $_SERVER['HTTP_HOST']; ?>
<?php echo $_SERVER['REQUEST_URI']; ?>
" /><br />
																				<input type="submit" class="senden" value="<?php echo $this->_tpl_vars['message_2022']; ?>
" name="uebermittelformular" />
								</fieldset>
							</form>
						</div>
					</div>
				<?php endif; ?>
			<?php endif; ?>
		<?php endif; ?>
	<?php endif; ?>
<?php endif; ?>
<?php endif; ?>
<!-- ENDE TEMPLATE: index.html -->