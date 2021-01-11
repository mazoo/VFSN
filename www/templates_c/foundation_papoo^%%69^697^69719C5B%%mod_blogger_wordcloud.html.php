<?php /* Smarty version 2.6.26, created on 2021-01-08 19:20:18
         compiled from /var/www/html/plugins/blogger/templates/mod_blogger_wordcloud.html */ ?>
<?php if ($this->_tpl_vars['blogger_wordlist']): ?>
<div id="blogger_wordcloud">
    <h3><i class="fa fa-cloud"></i> <?php echo $this->_tpl_vars['blog_wortschlagwolke']; ?>
</h3>
  <link type="text/css" href="<?php echo $this->_tpl_vars['web_pfad']; ?>
/plugins/blogger/css/wordcloud.css" rel="stylesheet"></link>
  <?php $_from = $this->_tpl_vars['blogger_wordlist']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['entry']):
?>
  <span class="wordlist_weight_<?php echo $this->_tpl_vars['entry']['weight']; ?>
<?php if ($this->_tpl_vars['entry']['blogger_wordlist_id'] === $this->_tpl_vars['blogger_word_id']): ?> active<?php endif; ?> wordlistcount">
       <?php if (! $this->_tpl_vars['url_blog_modrewrite']): ?>
        <a href="<?php echo $this->_tpl_vars['web_pfad']; ?>
?menuid=<?php echo $this->_tpl_vars['entry']['lcat_id']; ?>
&word_id=<?php echo $this->_tpl_vars['entry']['blogger_wordlist_id']; ?>
&widget=wordcloud"><?php echo $this->_tpl_vars['entry']['blogger_wordlist_word']; ?>
</a>
      <?php else: ?>
      <a href="<?php echo $this->_tpl_vars['entry']['surl']; ?>
"><?php echo $this->_tpl_vars['entry']['blogger_wordlist_word']; ?>
</a>
      <?php endif; ?>
  </span>
  <?php endforeach; endif; unset($_from); ?>
</div>
<?php endif; ?>