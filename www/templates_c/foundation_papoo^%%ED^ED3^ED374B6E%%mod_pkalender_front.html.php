<?php /* Smarty version 2.6.26, created on 2021-01-08 19:20:17
         compiled from /var/www/html/plugins/pkalender/templates/mod_pkalender_front.html */ ?>
<?php if ($this->_tpl_vars['module_aktiv']['mod_pkalender_front']): ?>
	<!-- MODUL: Kalender_front -->
<?php $_from = $this->_tpl_vars['kalender_result']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['cal']):
?>
<?php if ($this->_tpl_vars['tvar'] > 10): ?>
<?php if ($this->_tpl_vars['cal']['kalender_modul_id'] == $this->_tpl_vars['tvar']): ?>
	<div id="kalender_<?php echo $this->_tpl_vars['cal']['kalender_id']; ?>
" class="modul">
	<div class="kalender_modul">
	<h3><?php echo $this->_tpl_vars['cal']['kalender_bezeichnung_des_kalenders']; ?>
</h3>
	<?php echo '
<script language="JavaScript"> 
<!-- 

function gox'; ?>
<?php echo $this->_tpl_vars['cal']['kalender_id']; ?>
<?php echo '(){
 document.monatformx'; ?>
<?php echo $this->_tpl_vars['cal']['kalender_id']; ?>
<?php echo '.submit();

}
//-->
</script>
'; ?>

		<div class="Kalender" >
		 <form action="" name="monatformx<?php echo $this->_tpl_vars['cal']['kalender_id']; ?>
" method="POST">
		<input type="hidden" name="date_time" value="" />
			<div class="monat_select">
		
		  <select onchange="gox<?php echo $this->_tpl_vars['cal']['kalender_id']; ?>
()" name="monats_id" size="1" id="monats_id">
		
		   <?php $_from = $this->_tpl_vars['monat_array_kal']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['mon']):
?>
		
		   <option value="<?php echo $this->_tpl_vars['mon']['mon_id']; ?>
" <?php if ($this->_tpl_vars['monats_id'] == $this->_tpl_vars['mon']['mon_id']): ?>
		    selected="selected"<?php endif; ?>><?php echo $this->_tpl_vars['mon']['name']; ?>
 - <?php echo $this->_tpl_vars['mon']['jahr']; ?>
</option>
		
		   <?php endforeach; endif; unset($_from); ?>
		
		  </select>
		 
		<noscript>
				<input type="submit" name="submit" value="<?php echo $this->_tpl_vars['message_160']; ?>
" />
				</noscript>
		</div>
			</form>
		<table class="kalender_table">
		
		 <tr>
		  <th><?php echo $this->_tpl_vars['message_paket_mo']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['message_paket_di']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['message_paket_mi']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['message_paket_do']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['message_paket_fr']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['message_paket_sa']; ?>
</th>
		  <th><?php echo $this->_tpl_vars['message_paket_so']; ?>
</th>
		 </tr>
		 <tr>
		  <?php $_from = $this->_tpl_vars['tagderwoche_a']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ptag']):
?>
		  <td></td>
		  <?php endforeach; endif; unset($_from); ?> 
			<?php $_from = $this->_tpl_vars['cal']['calender_dat']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['ptag']):
?> 
			<?php if ($this->_tpl_vars['ptag']['1'] != 'Mon'): ?>
		  <td <?php if ($this->_tpl_vars['ptag']['link'] == 'ok'): ?>class="cal_set" <?php endif; ?>><?php if ($this->_tpl_vars['ptag']['link'] == 'ok'): ?><a title="<?php echo $this->_tpl_vars['ptag']['termin_name']; ?>
" class="cal_set" 
		   <?php if ($this->_tpl_vars['url_cal_modrewrite']): ?>
		   href="<?php echo $this->_tpl_vars['url_cal_modrewrite'][$this->_tpl_vars['cal']['kalender_id']]; ?>
<?php echo $this->_tpl_vars['cal']['kalender_id']; ?>
-<?php echo $this->_tpl_vars['ptag']['pkal_date_id']; ?>
-<?php echo $this->_tpl_vars['ptag']['termin_name_url']; ?>
-date-<?php echo $this->_tpl_vars['ptag']['termin_time']; ?>
.html"
		   <?php else: ?>
			 href="<?php echo $this->_tpl_vars['url_cal'][$this->_tpl_vars['cal']['kalender_id']]; ?>
<?php echo $this->_tpl_vars['cal']['kalender_id']; ?>
&amp;monats_id=<?php echo $this->_tpl_vars['monats_id']; ?>
&amp;date_id=<?php echo $this->_tpl_vars['ptag']['pkal_date_id']; ?>
&date_time=<?php echo $this->_tpl_vars['ptag']['termin_time']; ?>
#<?php echo $this->_tpl_vars['ptag']['pkal_date_id']; ?>
"
			 <?php endif; ?>
			 ><?php echo $this->_tpl_vars['ptag']['0']; ?>
</a>
		  <?php else: ?><?php echo $this->_tpl_vars['ptag']['0']; ?>

			<?php endif; ?></td>
		  <?php else: ?>
		
		 </tr>
		 <tr>
		  <td <?php if ($this->_tpl_vars['ptag']['link'] == 'ok'): ?>class="cal_set" <?php endif; ?>><?php if ($this->_tpl_vars['ptag']['link'] == 'ok'): ?> <a title="<?php echo $this->_tpl_vars['ptag']['termin_name']; ?>
" class="cal_set" 
		    <?php if ($this->_tpl_vars['url_cal_modrewrite']): ?>
		   href="<?php echo $this->_tpl_vars['url_cal_modrewrite'][$this->_tpl_vars['cal']['kalender_id']]; ?>
<?php echo $this->_tpl_vars['cal']['kalender_id']; ?>
-<?php echo $this->_tpl_vars['ptag']['pkal_date_id']; ?>
-<?php echo $this->_tpl_vars['ptag']['termin_name_url']; ?>
-date-<?php echo $this->_tpl_vars['ptag']['termin_time']; ?>
.html"
		   <?php else: ?>
			 href="<?php echo $this->_tpl_vars['url_cal'][$this->_tpl_vars['cal']['kalender_id']]; ?>
<?php echo $this->_tpl_vars['cal']['kalender_id']; ?>
&amp;monats_id=<?php echo $this->_tpl_vars['monats_id']; ?>
&amp;date_id=<?php echo $this->_tpl_vars['ptag']['pkal_date_id']; ?>
&date_time=<?php echo $this->_tpl_vars['ptag']['termin_time']; ?>
#<?php echo $this->_tpl_vars['ptag']['pkal_date_id']; ?>
"
			 <?php endif; ?>
			 ><?php echo $this->_tpl_vars['ptag']['0']; ?>
</a>
		  <?php else: ?> <?php echo $this->_tpl_vars['ptag']['0']; ?>

			 <?php endif; ?></td>
		  <?php endif; ?> 
			<?php endforeach; endif; unset($_from); ?>
		 </tr>
		</table>

		</div>


</div>
	</div>
<?php endif; ?>
<?php endif; ?>
<?php endforeach; endif; unset($_from); ?>
	<!-- ENDE MODUL: Kalender_front -->
<?php endif; ?>