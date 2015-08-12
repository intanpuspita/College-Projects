<div class="clear"></div>
<div id="featured" class="clearfix grid_12">
    <ul>
      <li><a href="#"><img src="<?php echo base_url();?>/images/g_1.jpg" alt="" /></a></li>
      <li><a href="#"><img src="<?php echo base_url();?>/images/g_2.png" alt="" /></a></li>
      <li><a href="#"><img src="<?php echo base_url();?>/images/g_3.jpg" alt="" /></a></li>
    </ul>
</div>
<div class="hr grid_12 clearfix">&nbsp;</div> 
<div class="grid_8">
 <h1>Change Username Password</h1>
<?php echo $error; ?>
<?php foreach($list_data->result()as $row){ ?>
<form id="formID" class="formular" method="POST" action="<?php echo site_url();?>/c_student/edit_username_password/<?php echo $row->STD_ID; ?>">
	<table id="edit_tab">
		<tr>
			<td><strong>My Username</strong></td>
			<td><input value="<?php echo $row->STD_USERNAME; ?>" class="validate[required,minSize[6], maxSize[25]] text-input" type="text" name="username" maxlength="25" size="50"/></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td><strong>My Password</strong></td>
			<td><input value="<?php echo $row->STD_PASSWORD; ?>" class="validate[required,minSize[8], maxSize[16]] text-input" type="text" name="password" maxlength="16" size="50"/></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td>&nbsp;</td></tr>
        <tr>
			<td align="left" colspan="2"><input class="edit_prosubmit" type="submit" value="Update" name="Update"/></td>
		</tr>
	</table>
<?php } ?>
</div>
<div class="grid_4">
    <h4>Other Site That May Help You . .</h4>
    <div class="hr dotted clearfix">&nbsp;</div>
	<table>
		<tr><td><a class="portfolio_item float" href="portfolio_single.html"> <span>Project Name</span> <img class="" src="<?php echo base_url() ?>/images/site_1.jpg"  alt=""/> </a> </td></tr>
		<tr><td><p>www.snnptn.ac.id</p></td></tr>
		<tr><td class="hr"></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td><a class="portfolio_item float " href="#"> <span>Project Name</span> <img class="" src="<?php echo base_url() ?>/images/site_2.jpg"  alt=""/> </a> </td></tr>
		<tr><td><p>www.depdiknas.go.id</p></td></tr>
	</table>
</div>