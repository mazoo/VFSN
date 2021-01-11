<?php /* Smarty version 2.6.26, created on 2021-01-08 18:33:09
         compiled from _module/mod_sprachwahl.html */ ?>
<?php if ($this->_tpl_vars['module_aktiv']['mod_sprachwahl']): ?>
    <!-- MODUL: sprachwahl -->
    <div class="modul" id="mod_sprachwahl">
        <ul id="language-menu">
            <?php $_from = $this->_tpl_vars['languageget']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['lang']):
?>
                <?php if ($this->_tpl_vars['aktulanglong'] != $this->_tpl_vars['lang']['language']): ?>
                    <li>
                        <a class="languagelink" style="background-image: url(<?php echo $this->_tpl_vars['slash']; ?>
bilder/<?php echo $this->_tpl_vars['lang']['lang_bild']; ?>
)" href="<?php echo $this->_tpl_vars['lang']['lang_link']; ?>
" rel="alternate" hreflang="<?php echo $this->_tpl_vars['lang']['lang_short']; ?>
" title=<?php echo $this->_tpl_vars['lang']['lang']; ?>
>
                            <?php echo $this->_tpl_vars['lang']['lang_short']; ?>

                        </a>
                    </li>
                <?php endif; ?>
            <?php endforeach; endif; unset($_from); ?>
        </ul>
    </div>
    <!-- ENDE MODUL: sprachwahl -->
<?php endif; ?>