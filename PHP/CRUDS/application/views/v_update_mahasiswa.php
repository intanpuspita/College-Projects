<html>
	<body>
		<?php foreach($row_data->result()as $data){ ?>
		<?php echo form_open('c_mahasiswa/update/'. $data->nim); ?>
		<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><?php echo $data->nim;?></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $data->nama;?>"></td>
			</tr>
			<tr>
				<td>Umur</td>
				<td>:</td>
				<td><input type="text" name="umur" value="<?php echo $data->umur;?>"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="submit"></td>
			</tr>
			<?php } ?>
		</table>
		<?php echo form_close(); ?>
	</body>
</html>