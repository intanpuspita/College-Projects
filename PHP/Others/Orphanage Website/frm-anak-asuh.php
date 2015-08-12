<html>
	<body>
		<h2>Form Anak Asuh</h2>
		<form method="POST" action="kd-anak-asuh.php" enctype="multipart/form-data">
		<table>
			<tr>
				<td>Nama anak asuh</td>
				<td>:</td>
				<td><input type="text" name="nama" class="input"/></td>
			</tr>
			<tr>
				<td>Jenis kelamin</td>
				<td>:</td>
				<td></br><input type="radio" name="jk" value="1" class="radio" checked/>Laki-laki</br></br><input type="radio" name="jk" value="0" class="radio"/>Perempuan</br></br></td>
			</tr>
			<tr>
				<td>Tanggal lahir</td>
				<td>:</td>
				<td><input type="date" name="tgl_lahir" id="datepicker" class="input"/></td>
			</tr>
			<tr>
				<td>Pendidikan terakhir</td>
				<td>:</td>
				<td><select name="pilih">
						<option value="Belum Sekolah">Belum Sekolah</option>
						<option value="SD">SD</option>
						<option value="SMP">SMP</option>
						<option value="SMA">SMA</option>
						<option value="Perguruan Tinggi">Perguruan Tinggi</option>
					</select>
				</td>
			</tr>
			<tr>
				<td>Foto anak asuh</td>
				<td>:</td>
				<td><input type="file" name="file" id="file" accept="image/*" ></td>
			</tr>
			<tr>
				<td colspan="3" align="center"></br></br><input type="submit" name="Submit" value="Tambah" class="button"></td>
			</tr>
		</table>
		</form>
	</body>
</html>