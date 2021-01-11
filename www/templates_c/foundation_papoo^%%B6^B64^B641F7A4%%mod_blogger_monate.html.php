<?php /* Smarty version 2.6.26, created on 2021-01-08 19:20:18
         compiled from /var/www/html/plugins/blogger/templates/mod_blogger_monate.html */ ?>
<?php if ($this->_tpl_vars['module_aktiv']['mod_blogger_monate'] && $this->_tpl_vars['monatsliste_blog']): ?>
<div id="blogger_monate">
    <h3><i class="fa fa-cloud"></i> Archiv</h3>
    <ul>
    <?php $_from = $this->_tpl_vars['monatsliste_blog']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['thekey'] => $this->_tpl_vars['entry']):
?>
  <li><span
            class="wordlist_weight_<?php echo $this->_tpl_vars['entry']['weight']; ?>
<?php if ($this->_tpl_vars['entry']['blogger_wordlist_id'] === $this->_tpl_vars['blogger_word_id']): ?> active<?php endif; ?> wordlistcount">
       <?php if (! $this->_tpl_vars['url_blog_modrewrite']): ?>
        <a href="<?php echo $this->_tpl_vars['web_pfad']; ?>
?menuid=<?php echo $this->_tpl_vars['entry']['lcat_id']; ?>
&word_id=<?php echo $this->_tpl_vars['entry']['blogger_wordlist_id']; ?>
&widget=wordcloud"><?php echo $this->_tpl_vars['thekey']; ?>
</a>
      <?php else: ?>
      <a href="<?php echo $this->_tpl_vars['web_pfad']; ?>
/archiv/<?php echo $this->_tpl_vars['entry']; ?>
/"><?php echo $this->_tpl_vars['thekey']; ?>
</a>
      <?php endif; ?>
  </span></li>
    <?php endforeach; endif; unset($_from); ?>
    </ul>
</div>
<?php endif; ?>