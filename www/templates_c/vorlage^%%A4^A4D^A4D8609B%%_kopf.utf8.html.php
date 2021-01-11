<?php /* Smarty version 2.6.26, created on 2021-01-10 17:41:36
         compiled from /var/www/html/styles_default/templates/_kopf.utf8.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'strip_tags', '/var/www/html/styles_default/templates/_kopf.utf8.html', 11, false),array('modifier', 'escape', '/var/www/html/styles_default/templates/_kopf.utf8.html', 17, false),)), $this); ?>
<!-- TEMPLATE: _kopf.utf8.html -->
<!--
Ihre barrierefreie Internetseite wurde ermöglicht durch
das barrierefreie CMS Papoo Version <?php echo $this->_tpl_vars['papoo_version']; ?>
.
Information  unter http://www.papoo.de
-->
<title><?php echo ((is_array($_tmp=$this->_tpl_vars['site_title_shop'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
<?php if ($this->_tpl_vars['site_title_shop']): ?> - <?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['site_title'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
 - <?php echo $this->_tpl_vars['site_name']; ?>
</title>
<meta charset="utf-8"/>

<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_open_graph_meta_tags.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

<meta name="dcterms.publisher"     content="<?php echo $this->_tpl_vars['seite_autor']; ?>
" />
<meta name="dcterms.subject"       content="<?php echo ((is_array($_tmp=$this->_tpl_vars['site_title_shop'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<?php if ($this->_tpl_vars['site_title_shop']): ?> - <?php endif; ?><?php echo $this->_tpl_vars['site_title']; ?>
 - <?php echo $this->_tpl_vars['site_name']; ?>
" />
<meta name="dcterms.creator"       content="<?php echo $this->_tpl_vars['seite_autor']; ?>
" />
<meta name="dcterms.language"       content="<?php echo $this->_tpl_vars['lang_short']; ?>
" />
<meta name="dcterms.title"       content="<?php echo ((is_array($_tmp=$this->_tpl_vars['site_title_shop'])) ? $this->_run_mod_handler('escape', true, $_tmp, 'html') : smarty_modifier_escape($_tmp, 'html')); ?>
<?php if ($this->_tpl_vars['site_title_shop']): ?> - <?php endif; ?><?php echo $this->_tpl_vars['site_title']; ?>
 - <?php echo $this->_tpl_vars['site_name']; ?>
" />
<meta name="dcterms.description"       content="<?php echo ((is_array($_tmp=$this->_tpl_vars['description_shop'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
<?php if ($this->_tpl_vars['description_shop']): ?> - <?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['description'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- Standard Metatags -->
<meta name="description" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['description_shop'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
<?php if ($this->_tpl_vars['description_shop']): ?> - <?php endif; ?><?php echo ((is_array($_tmp=$this->_tpl_vars['description'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
" />
<meta name="keywords" content="<?php echo ((is_array($_tmp=$this->_tpl_vars['keywords_shop'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
 <?php echo ((is_array($_tmp=$this->_tpl_vars['keywords'])) ? $this->_run_mod_handler('strip_tags', true, $_tmp) : smarty_modifier_strip_tags($_tmp)); ?>
" />
<meta name="robots" content="INDEX,FOLLOW" />

<!-- Favicon  -->
<link rel="apple-touch-icon-precomposed" href="<?php echo $this->_tpl_vars['slash']; ?>
favicon.png">
<link rel="icon" type="image/png" href="<?php echo $this->_tpl_vars['slash']; ?>
favicon.png" />
<!--[if lt IE 11]><link rel="icon" type="image/x-icon" href="favicon.ico" /><![endif]-->

<?php if ($this->_tpl_vars['extra_meta_front']): ?>
    <!--  Extra Meta Tags aus der Konfiguration -->
    <?php echo $this->_tpl_vars['extra_meta_front']; ?>

<?php endif; ?>

<?php if ($this->_tpl_vars['refresh']): ?><!-- Refresh Meta Tags bei Download --><?php echo $this->_tpl_vars['refresh']; ?>
<?php endif; ?>

<?php if ($this->_tpl_vars['config_jquery_aktivieren_label']): ?>
    <!-- Einbindung Javascripte -->
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['slash']; ?>
js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['slash']; ?>
js/modernizr.js"></script>
    <?php endif; ?>

<?php if ($this->_tpl_vars['config_basis_js_funktionen_frontend']): ?>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['slash']; ?>
js/function_front.js"></script>
<?php endif; ?>

<?php if ($this->_tpl_vars['config_jquery_colorbox_aktivieren']): ?>
    <script type="text/javascript" src="<?php echo $this->_tpl_vars['slash']; ?>
js/jquery.colorbox-min.js"></script>
    <link type="text/css" media="screen" rel="stylesheet" href="<?php echo $this->_tpl_vars['webverzeichnis']; ?>
styles_default/css/colorbox.css" />
    <script type="text/javascript">
    <?php echo '
        $(document).ready(function(){
            $("a[rel=\'lightbox\']").colorbox({
                transition: "elastic",
                maxWidth: "100%",
                maxHeight: "100%",
                current: "Bild {current} von {total}"
            });
            $("header").css("overflow","visible");
        });
    '; ?>

    </script>
<?php endif; ?>

<?php $_from = $this->_tpl_vars['languageget']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang']):
?>
    <!-- Sprach rel alternate bei Mehrsprachigkeit -->
    <link rel="alternate" href="http://<?php echo $this->_tpl_vars['site_name']; ?>
<?php echo $this->_tpl_vars['lang']['lang_link']; ?>
" xml:lang="<?php echo $this->_tpl_vars['lang']['lang_short']; ?>
" lang="<?php echo $this->_tpl_vars['lang']['lang_short']; ?>
" hreflang="<?php echo $this->_tpl_vars['lang']['lang_short']; ?>
" title="<?php echo $this->_tpl_vars['lang']['language']; ?>
" />
<?php endforeach; endif; unset($_from); ?>

<?php if ($this->_tpl_vars['rssfeed']): ?>
<!--  URL des RSS Feeds -->
<link rel='alternate' type='application/rss+xml' title='Nachrichten als RSS 2.0 Feed' href='http://<?php echo $this->_tpl_vars['site_name']; ?>
<?php echo $this->_tpl_vars['webverzeichnis']; ?>
plugins/rssfeed/feed<?php echo $this->_tpl_vars['rss_lang_id']; ?>
.xml' />
<?php endif; ?>

<?php if ($this->_tpl_vars['aktiv_canonical']): ?><?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_module_intern/mod_canonical.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?><?php endif; ?>

<!-- CSS Einbindung -->
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['slash']; ?>
<?php echo $this->_tpl_vars['pluginscss']; ?>
" />
<link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['slash']; ?>
styles/<?php echo $this->_tpl_vars['style_dir']; ?>
/css/_index.css" />
<?php if ($this->_tpl_vars['extra_css']): ?><link rel="stylesheet" type="text/css" href="<?php echo $this->_tpl_vars['slash']; ?>
styles/<?php echo $this->_tpl_vars['style_dir']; ?>
/css/<?php echo $this->_tpl_vars['extra_css']; ?>
" /><?php endif; ?>


<!-- Extra Ausgaben aus den Plugins im Kopf -->
<?php $_from = $this->_tpl_vars['plugin_header']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['plug']):
?>
	 <?php echo $this->_tpl_vars['plug']; ?>

<?php endforeach; endif; unset($_from); ?>

<?php if ($this->_tpl_vars['spamschutz_modus'] == 4): ?>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<?php endif; ?>


<?php if ($this->_tpl_vars['hrefruck']): ?><!--Pagination SEO -->
<link rel="prev" href="<?php echo $this->_tpl_vars['slash']; ?>
<?php echo $this->_tpl_vars['hrefruck']; ?>
"><?php endif; ?>
<?php if ($this->_tpl_vars['hrefweiter']): ?><link rel="next" href="<?php echo $this->_tpl_vars['slash']; ?>
<?php echo $this->_tpl_vars['hrefweiter']; ?>
">
<!--ENDE Pagination SEO --><?php endif; ?>


<!-- ENDE TEMPLATE: _kopf.utf8.html -->