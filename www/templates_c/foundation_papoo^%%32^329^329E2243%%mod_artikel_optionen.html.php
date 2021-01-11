<?php /* Smarty version 2.6.26, created on 2021-01-08 18:33:09
         compiled from /var/www/html/styles_default/templates/_module_intern/mod_artikel_optionen.html */ ?>
<!-- MODUL (intern): mod_artikel_optionen  -->
<div class="modul" id="mod_artikel_optionen">
		
	<span class="ignore">.</span>
	
	<ul class="option">
		<li class="ignore"></li>
		<?php if ($this->_tpl_vars['anzeig_versende'] && $this->_tpl_vars['reporeid_print']): ?>
			<li>
								<a rel="nofollow" href="<?php echo $this->_tpl_vars['slash']; ?>
index.php?menuid=<?php echo $this->_tpl_vars['menuid_aktuell']; ?>
&amp;reporeid_send=1&amp;reporeid_print=<?php echo $this->_tpl_vars['reporeid_print']; ?>
"><?php echo $this->_tpl_vars['message_2015']; ?>
</a>
			<span class="ignore">.</span></li>
           
		<?php endif; ?>
		<?php if ($this->_tpl_vars['anzeig_drucken'] && $this->_tpl_vars['urldatself']): ?>
			<li>
								<a rel="nofollow" href="javascript:window.print()"><?php echo $this->_tpl_vars['message_2016']; ?>
</a>
                <span class="ignore">.</span>
			</li>
            <!-- <li>
             <a target="blank" href="http://www.web2pdfconvert.com/convert.aspx">Mit Web2PDF PDF der Seite erstellen</a>
             <span class="ignore">.</span></li>-->
		<?php endif; ?>
		
		<?php if ($this->_tpl_vars['plugin']['mehrstufige_freigabe']['handbuchdruck_aktiv']): ?>
			<li><a rel="nofollow" href="<?php echo $this->_tpl_vars['slash']; ?>
plugin.php?menuid=<?php echo $this->_tpl_vars['menuid_aktuell']; ?>
&amp;template=mehrstufige_freigabe/templates/front_handbuchdruck.html&amp;print=ok">.. Handbuchdruck</a><span class="ignore">.</span></li>
		<?php endif; ?>
		
		<?php if ($this->_tpl_vars['editlink']): ?>
			<li><a rel="nofollow" href="<?php echo $this->_tpl_vars['editlink']; ?>
"><?php echo $this->_tpl_vars['message_2195']; ?>
</a><span class="ignore">.</span></li>
		<?php endif; ?>
	</ul>


</div>
<!-- ENDE MODUL (intern): mod_artikel_optionen  -->