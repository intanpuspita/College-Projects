<HTML>
<BODY>
	<FORM name="fpegawai" method="post" action="kd-pegawai.php">
	<h2>Form Pegawai</h2>
	<TABLE align="center" border="1" bordercolor="#FFFFFF">
		<tr>
			<td height="30">Nama Pegawai</td><td>:</td><td><input type="text" name="nama" class="input"/></td>
		</tr>
		<tr>
			<td height="30">Jenis Kelamin Pegawai</td><td>:</td><td><input type="radio" name="jk" value="1" checked/>Laki-laki<input type="radio" name="jk" value="0"/>Perempuan</td>
		</tr>
		<tr>
			<td height="32">Alamat Pegawai</td><td>:</td>
			<td><label>
			  <textarea name="alamat" id="alamat" class="textarea2"></textarea>
			</label></td>
		</tr>
		<tr>
			<td height="30">Tanggal Lahir Pegawai</td><td>:</td><td><input type="date" name="tgl" class="input"></td>
		</tr>
		<tr>
			<td height="30">Jabatan</td><td>:</td><td><input type="text" name="jabatan" class="input"/></td>
		</tr>
		<tr>
			<td height="30"></td><td></td><td><input type="submit" name="simpan" value="Simpan" class="button"/></td>
		</tr>
	</TABLE>
	</FORM>
	<br>
</BODY>
</HTML>