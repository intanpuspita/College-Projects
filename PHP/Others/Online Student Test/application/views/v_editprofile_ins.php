<h3>Edit Profil</h3>
<?php foreach($list_data->result()as $row){ ?>
<form id="formID" class="formular" method="POST" action="<?php echo site_url();?>/c_institution/edit_profile/<?php echo $row->INS_ID; ?>">
	<table width="350px">
		<tr>
			<td><strong>Nama Institusi</strong></td>
			<td><input value="<?php echo $row->INS_NAME; ?>" class="validate[required,custom[onlyLetterSp]] text-input" type="text" name="name" /></td>
		</tr>
        <tr>
			<td><strong>Alamat</strong></td>
			<td><textarea value="<?php echo $row->INS_ADDR; ?>" name="address"></textarea></td>
		</tr>
		<tr>
			<td><strong>Alamat email</strong></td>
			<td><input value="<?php echo $row->INS_EMAIL; ?>" class="validate[custom[email]] text-input" type="text" name="email"/></td>
		</tr>
		<tr>
			<td><strong>Nomor Telepon</strong></td>
			<td><input value="<?php echo $row->INS_PHONE; ?>" type="text" name="phone" class="validate[custom[phone]] text-input"></td>
		</tr>
		<tr>
			<td><strong>Nama Ambassador</strong></td>
			<td><input value="<?php echo $row->INS_AMMB; ?>" class="validate[required,custom[onlyLetterSp]] text-input" type="text" name="ammb" /></td>
		</tr>
        <tr>
			<td colspan="3" align="center"><input class="submit" type="submit" value="Update" name="Update"/></td>
		</tr>
	</table>
<?php } ?>