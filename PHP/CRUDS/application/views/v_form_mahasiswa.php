<html>
	<body>
		<h2>Form Mahasiswa</h2>
		<?php echo form_open('c_mahasiswa/insert');?>
		<table>
			<tr>
				<td>NIM</td>
				<td>:</td>
				<td><input type="text" name="nim"></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Umur</td>
				<td>:</td>
				<td><input type="text" name="umur"></td>
			</tr>
			<tr>
				<td colspan="3"><input type="submit" name="submit"></td>
			</tr>
		</table>
		<?php echo form_close();?>
	</body>
</html>