<?php /* Smarty version 2.6.26, created on 2021-01-10 18:08:32
         compiled from __index.html */ ?>
<?php $_from = $this->_tpl_vars['page_error']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['error']):
?><?php echo $this->_tpl_vars['error']; ?>
<?php endforeach; endif; unset($_from); ?><!doctype html>
<html class="no-js" lang="de"<?php if (isset ( $this->_tpl_vars['openGraphMetaTags'] ) && $this->_tpl_vars['openGraphMetaTags']): ?> prefix="og: http://ogp.me/ns#"<?php endif; ?>>
<head>
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_kopf.utf8.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</head>
<?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_body_kopf.utf8.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
BUBU
<span id="styledir" class="<?php echo $this->_tpl_vars['slash']; ?>
styles/<?php echo $this->_tpl_vars['style_dir']; ?>
"></span>

<header>
    <div class="row">
        <div class="large-12 columns">

            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_head.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>

        </div>
    </div>
</header>

<div id="links" class="row">
    <article id="content_links" class="large-12 medium-12 columns">
        <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inhalt_links.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
    </article>
</div>

<div id="main" class="row">
        <?php if ($this->_tpl_vars['aktive_menuid'] == 1): ?>
        <article id="content" class="large-12 medium-12 columns">
            <?php echo $this->_tpl_vars['fixemodule']['testmodul']['testfeld']; ?>

            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inhalt_mitte.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </article>
    <?php else: ?>
        <!-- Breadcrump -->
        <article id="content_breadcrump" class="large-12 medium-12 columns">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_module/mod_breadcrump.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </article>
        <article id="content" class="large-9 medium-9 columns">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inhalt_mitte.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </article>
        <aside id="sidebar" class="large-3 medium-3 columns">
            <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_inhalt_rechts.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
        </aside>
    <?php endif; ?>
</div>

<footer class="row">
    <?php $_smarty_tpl_vars = $this->_tpl_vars;
$this->_smarty_include(array('smarty_include_tpl_file' => "_fuss.html", 'smarty_include_vars' => array()));
$this->_tpl_vars = $_smarty_tpl_vars;
unset($_smarty_tpl_vars);
 ?>
</footer>
<div class="row subfooter">
    <div class="large-12 columns ">
        <div class="large-8 medium-8 columns">
            <?php if ($this->_tpl_vars['PAPOO_EDITION'] != 'Enterprise' && $this->_tpl_vars['PAPOO_EDITION'] != 'Business'): ?>
                <!-- Copyright - nicht entfernen! -->
                <!-- Gegen einen Aufpreis ist das Entfernen dieses Copyright Backlinks für jeweils eine
                     Domain möglich. Für weitere Informationen wenden Sie sich bitte an den Support
                     von Papoo Software: info@papoo.de -->
                <a class="link_poweredbypapoo" target="blank" href="http://www.papoo.de">
                    <img src="<?php echo $this->_tpl_vars['slash']; ?>
bilder/poweredbypapoo3.png" style="" alt="Powered by Papoo 2016"/>
                </a>
                <!-- Ende Copyright -->
            <?php endif; ?>

            <?php if ($this->_tpl_vars['anzeig_besucher'] == 1): ?>
                                <div class="anzeig_besucher span3">    <?php echo $this->_tpl_vars['gesamtcount']; ?>
 <?php echo $this->_tpl_vars['message_2023']; ?>
</div>
            <?php endif; ?>
            <?php if (! empty ( $this->_tpl_vars['usefulservices_analytics_key'] )): ?>
                <?php echo $this->_tpl_vars['usefulservices_analytics_key']; ?>

            <?php endif; ?>
            <?php if (! empty ( $this->_tpl_vars['usefulservices_snap_key'] )): ?>
                <script id="snap_preview_anywhere" type="text/javascript"
                        src="http://shots.snap.com/ss/<?php echo $this->_tpl_vars['usefulservices_snap_key']; ?>
/snap_shots.js"></script>
            <?php endif; ?>
        </div>

        <div class="large-4 medium-4 columns">
            <!-- Freies Modul - manuell eingebunden - auch das geht -->
            <?php $_from = $this->_tpl_vars['freiemodule_result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['banner']):
?>
                <?php if ($this->_tpl_vars['banner']['freiemodule_id'] == 4): ?>
                    <div id="mod_freiemodule_<?php echo $this->_tpl_vars['banner']['freiemodule_id']; ?>
" class="freie_module">
                        <?php echo $this->_tpl_vars['banner']['freiemodule_code']; ?>

                    </div>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        </div>
    </div>
</div>

<script src="<?php echo $this->_tpl_vars['slash']; ?>
js/imageMapResizer.min.js"></script>
<script src="<?php echo $this->_tpl_vars['slash']; ?>
styles/<?php echo $this->_tpl_vars['style_dir']; ?>
/js/script.js"></script>
<script src="<?php echo $this->_tpl_vars['slash']; ?>
styles/<?php echo $this->_tpl_vars['style_dir']; ?>
/foundation/js/foundation.min.js"></script>

<script type="text/javascript" src="<?php echo $this->_tpl_vars['slash']; ?>
js/main.js" defer="defer"></script>

</body>
</html>