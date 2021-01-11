<?php /* Smarty version 2.6.26, created on 2021-01-08 19:20:17
         compiled from _module/mod_breadcrump.html */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('modifier', 'count', '_module/mod_breadcrump.html', 36, false),array('modifier', 'strlen', '_module/mod_breadcrump.html', 36, false),)), $this); ?>
  <!-- MODUL: breadcrump -->
  <div class="modul" id="mod_breadcrump">

    <a class="breadlink1" href="<?php if ($this->_tpl_vars['slash']): ?><?php echo $this->_tpl_vars['slash']; ?>
<?php else: ?><?php echo $this->_tpl_vars['webverzeichnis']; ?>
<?php endif; ?><?php if ($this->_tpl_vars['lang_short']): ?><?php if ($this->_tpl_vars['lang_short'] != 'de'): ?><?php echo $this->_tpl_vars['lang_short']; ?>
/<?php endif; ?><?php endif; ?>" title="<?php echo $this->_tpl_vars['message_2000']; ?>
 <?php echo $this->_tpl_vars['breadcrumb_link']; ?>
"><?php echo $this->_tpl_vars['breadcrumb_link']; ?>
</a>
    <?php $_from = $this->_tpl_vars['menu_data_breadcrump']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['menu']):
?>
    <?php if ($this->_tpl_vars['menu']['menuid'] > 1): ?>


    <?php if ($this->_tpl_vars['sp_urls'] == 'ok' || $this->_tpl_vars['free_sp_urls']): ?>
    
    <?php if (! $this->_tpl_vars['menu']['extern'] && ! $this->_tpl_vars['menu']['extern_bread']): ?>
    <span class="breadslash">/ </span>
    <a href="<?php echo $this->_tpl_vars['slash']; ?>
<?php if ($this->_tpl_vars['free_sp_urls'] == 'ok'): ?><?php echo $this->_tpl_vars['menu']['menuname_free_url']; ?>
<?php else: ?><?php echo $this->_tpl_vars['menu']['menuname_url']; ?>
<?php endif; ?>" class="breadlink" id="breadcrump_<?php echo $this->_tpl_vars['menu']['htmltag_id']; ?>
" title="<?php echo $this->_tpl_vars['menu']['lang_title']; ?>
">
    <dfn class="insert"></dfn><dfn><?php echo $this->_tpl_vars['menu']['nummer']; ?>
: </dfn><?php echo $this->_tpl_vars['menu']['menuname']; ?>
<?php if (! $this->_tpl_vars['menu']['extern']): ?></a><?php endif; ?>
    <?php else: ?>
    <?php if (! $this->_tpl_vars['menu']['extern']): ?>
    <span class="breadslash">/ </span>
    <dfn class="insert"></dfn><dfn><?php echo $this->_tpl_vars['menu']['nummer']; ?>
: </dfn><?php echo $this->_tpl_vars['menu']['menuname']; ?>
<?php if (! $this->_tpl_vars['menu']['extern']): ?></a><?php endif; ?>
    <?php endif; ?>
    <?php if (! $this->_tpl_vars['menu']['extern_bread']): ?>
    <span class="breadslash">/ </span>
    <a href="<?php echo $this->_tpl_vars['menu']['menulink']; ?>
" class="breadlink" id="breadcrump_<?php echo $this->_tpl_vars['menu']['htmltag_id']; ?>
" title="<?php echo $this->_tpl_vars['menu']['lang_title']; ?>
">
    <dfn class="insert"></dfn><dfn><?php echo $this->_tpl_vars['menu']['nummer']; ?>
: </dfn><?php echo $this->_tpl_vars['menu']['menuname']; ?>
<?php if (! $this->_tpl_vars['menu']['extern_bread']): ?></a><?php endif; ?>
    <?php endif; ?>
    <?php endif; ?>
        
        
    <?php else: ?>
<span class="breadslash">/ </span><?php if (! $this->_tpl_vars['menu']['link_aktiv'] && ! 1): ?> <strong><span class="breadlink_span" id="breadcrumpsp_<?php echo $this->_tpl_vars['menu']['htmltag_id']; ?>
"><?php echo $this->_tpl_vars['menu']['menuname']; ?>
</span></strong><?php else: ?><a class="breadlink" href="<?php echo $this->_tpl_vars['slash']; ?>
<?php echo $this->_tpl_vars['menu']['menulink']; ?>
<?php echo $this->_tpl_vars['frag_connect']; ?>
menuid<?php echo $this->_tpl_vars['gleich_connect']; ?>
<?php echo $this->_tpl_vars['menu']['menuid']; ?>
<?php echo $this->_tpl_vars['menu']['template']; ?>
" id="breadcrump_<?php echo $this->_tpl_vars['menu']['htmltag_id']; ?>
" title="<?php echo $this->_tpl_vars['menu']['lang_title']; ?>
"><?php echo $this->_tpl_vars['menu']['menuname']; ?>
</a>
      <?php endif; ?>
    <?php endif; ?>
    <?php endif; ?>
    <?php endforeach; endif; unset($_from); ?>

        <?php if ($this->_tpl_vars['reporeid_aktuell'] > 0 && $this->_tpl_vars['table_data'] && count($this->_tpl_vars['table_data']) == 1 && ((is_array($_tmp=$this->_tpl_vars['table_data']['0']['uberschrift'])) ? $this->_run_mod_handler('strlen', true, $_tmp) : strlen($_tmp))): ?>
    <span class="breadslash">&gt;</span> <?php echo $this->_tpl_vars['table_data']['0']['uberschrift']; ?>

    <?php endif; ?>
  </div>
  <!-- ENDE MODUL: breadcrump -->