<?php /* Smarty version 2.6.26, created on 2021-01-10 17:29:17
         compiled from /var/www/html/styles_default/templates/_open_graph_meta_tags.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'escape', '/var/www/html/styles_default/templates/_open_graph_meta_tags.html', 2, false),)), $this); ?>
<?php if (isset ( $this->_tpl_vars['openGraphMetaTags'] ) && $this->_tpl_vars['openGraphMetaTags']): ?>
<meta property="og:title" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['openGraphMetaTags']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
<meta property="og:description" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['openGraphMetaTags']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
<meta property="og:type" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['openGraphMetaTags']['type'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
<meta property="og:url" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['openGraphMetaTags']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
<meta property="og:image" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['openGraphMetaTags']['image'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
<?php endif; ?>
<?php if (isset ( $this->_tpl_vars['openGraphMetaTags'] ) && isset ( $this->_tpl_vars['twitterHandle'] ) && $this->_tpl_vars['openGraphMetaTags'] && $this->_tpl_vars['twitterHandle']): ?>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:site" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['twitterHandle'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
<meta name="twitter:url" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['openGraphMetaTags']['url'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
<meta name="twitter:title" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['openGraphMetaTags']['title'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
<meta name="twitter:description" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['openGraphMetaTags']['description'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
<meta name="twitter:image" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['openGraphMetaTags']['image'])) ? $this->_run_mod_handler('escape', true, $_tmp) : smarty_modifier_escape($_tmp)); ?>
">
<?php endif; ?>