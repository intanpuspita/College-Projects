<?php
	include 'connect.php';
?>
<html>
	<body>
		<h2>Form Kegiatan</h2>
		<form name="" method="POST" action="kd-kegiatan.php">
		<table>
			<tr>
				<td><strong>Keterangan kegiatan</strong></td>
			</tr>
			<tr>
				<td>Nama kegiatan</td>
				<td>:</td>
				<td><input type="text" name="nama" class="input"></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td>:</td>
				<td><input type="date" name="tgl" id="datepicker" class="input"/></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td><label><textarea name="deskripsi" id="" class="textarea"></textarea></label></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="simpan" value="Simpan" class="button"></td>
			</tr>
		</table>
		</form>
	</body>
</html>