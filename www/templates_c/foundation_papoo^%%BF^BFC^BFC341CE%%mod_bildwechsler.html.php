<?php /* Smarty version 2.6.26, created on 2021-01-08 18:33:09
         compiled from /var/www/html/styles/foundation_papoo/templates/plugins/bildwechsler/templates/mod_bildwechsler.html */ ?>
<?php if ($this->_tpl_vars['module_aktiv']['mod_bildwechsler']): ?>
<!-- MODUL: bildwechsler -->
<div class="modul" id="mod_bildwechsler">

            <ul data-orbit data-options =  "timer_speed: 6000;
                                    animation: slide;
                                    animation_speed: 1000;
                                    bullets: false;
                                    circular: true;
                                    pause_on_hover: true;
									resume_on_mouseout: true;
									next_on_click: false;
                                    slide_number_text: von;
                                    ">
        
        <?php $_from = $this->_tpl_vars['plugins']['bildwechsler']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }$this->_foreach['wechselbilder'] = array('total' => count($_from), 'iteration' => 0);
if ($this->_foreach['wechselbilder']['total'] > 0):
    foreach ($_from as $this->_tpl_vars['bkey'] => $this->_tpl_vars['wechselbild']):
        $this->_foreach['wechselbilder']['iteration']++;
?>
        <li <?php if ($this->_tpl_vars['bkey'] == 0): ?>style="z-index:10;"<?php endif; ?>>
            <?php if ($this->_tpl_vars['wechselbild']['has_iframe']): ?>
            <?php echo $this->_tpl_vars['wechselbild']['bw_bild']; ?>

            <?php else: ?>
            <img <?php echo $this->_tpl_vars['wechselbild']['bw_bild']; ?>
 />
            <?php endif; ?>
            <div class="orbit-caption">
                                <?php if ($this->_tpl_vars['wechselbild']['bw_ueberschrift']): ?>
                <h1><a href="<?php echo $this->_tpl_vars['wechselbild']['bw_extra_link_url']; ?>
"><?php echo $this->_tpl_vars['wechselbild']['bw_ueberschrift']; ?>
</a></h1><br />
                <?php endif; ?>
                <?php if ($this->_tpl_vars['wechselbild']['bw_text']): ?>
                    <h2><a href="<?php echo $this->_tpl_vars['wechselbild']['bw_extra_link_url']; ?>
"><?php echo $this->_tpl_vars['wechselbild']['bw_text']; ?>
</a></h2>
                <?php endif; ?>
            </div>
        </li>
        <?php endforeach; endif; unset($_from); ?>
    </ul>
</div>
<!-- ENDE MODUL: bildwechsler -->
<?php endif; ?>

