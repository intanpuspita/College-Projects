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
 <h1>Edit Profil</h1>
 <div class="hr dotted"></div>
<?php foreach($list_data->result()as $row){ ?>
<form id="formID" class="formular" method="POST" action="<?php echo site_url();?>/c_student/edit_profile/<?php echo $row->STD_ID; ?>">
	<table id="edit_tab"> 
		<tr>
			<td>My Name</td>
			<td><input value="<?php echo $row->STD_NAME; ?>" class="validate[required,custom[onlyLetterSp]] text-input" type="text" name="name" /></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
        <tr>
			<td>My BirthPlace</td>
			<td><input value="<?php echo $row->STD_BIRTHPLACE; ?>" class="validate[custom[onlyLetterSp]] text-input" type="text" name="birthplace" /></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
        <tr>
			<td>My BirthDate</td>
			<td><input value="<?php echo $row->STD_BIRTHDATE; ?>" type="date" name="birthdate" /></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
        <tr>
			<td>My Address</td>
			<td><textarea name="address" rows="10" cols="50"><?php echo $row->STD_ADDR; ?></textarea></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>My Email</td>
			<td><input value="<?php echo $row->STD_EMAIL; ?>" class="validate[custom[email]] text-input" type="email" name="email"/></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
		<tr>
			<td>My Phone Number</td>
			<td><input value="<?php echo $row->STD_PHONE; ?>" type="text" name="phone" class="validate[custom[phone]] text-input"></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
        <tr>
			<td>My School</td>
			<td><input value="<?php echo $row->STD_SCHOOL; ?>" type="text" name="school"></td>
		</tr>
		<tr><td>&nbsp;</td></tr>
        <tr>
			<td colspan="3" align="left"><input class="edit_prosubmit" type="submit" value="Update" name="Update"/></td>
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