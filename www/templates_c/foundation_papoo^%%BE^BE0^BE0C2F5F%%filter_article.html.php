<?php /* Smarty version 2.6.26, created on 2021-01-08 19:20:17
         compiled from /var/www/html/styles_default/templates/_module_intern/filter_article.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '/var/www/html/styles_default/templates/_module_intern/filter_article.html', 1, false),)), $this); ?>
<?php if (count($this->_tpl_vars['article_von']) > 1): ?>
<form id="filter_article_panel" action="" method="post">
	<span><?php echo $this->_tpl_vars['filter_news']; ?>
</span>
	<div class="von">
		<?php echo $this->_tpl_vars['filter_von']; ?>

		<select name="von_article">
			<?php $_from = $this->_tpl_vars['article_von']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['filter_von'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['filter_von']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['filter_von']):
        $this->_foreach['filter_von']['iteration']++;
?>
			<option value="<?php echo $this->_tpl_vars['filter_von']['1']; ?>
" <?php if ($this->_tpl_vars['von_article'] == $this->_tpl_vars['filter_von']['1']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['filter_von']['0']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
		</select>
	</div>
	<div class="bis">
		<?php echo $this->_tpl_vars['filter_bis']; ?>

		<select name="bis_article">
			<?php $_from = $this->_tpl_vars['article_bis']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['filter_bis'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['filter_bis']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['filter_bis']):
        $this->_foreach['filter_bis']['iteration']++;
?>
			<option value="<?php echo $this->_tpl_vars['filter_bis']['1']; ?>
" <?php if ($this->_tpl_vars['bis_article'] == $this->_tpl_vars['filter_bis']['1']): ?> selected<?php endif; ?>><?php echo $this->_tpl_vars['filter_bis']['0']; ?>
</option>
			<?php endforeach; endif; unset($_from); ?>
		</select>
	</div>
	<input type="submit" value="" name="filter_article" />
</form>
<?php endif; ?>