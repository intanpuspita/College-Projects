<HTML>
<BODY>
	<FORM name="fprestasi" method="post" action="kd-prestasi.php">
	<h2>Form Prestasi</h2>
	<TABLE>
		<tr>
			<td>Nama Acara</td><td>:</td><td><input type="text" name="nama" class="input"/></td>
		</tr>
		<tr>
			<td>Juara</td><td>:</td><td><input type="text" name="juara" class="input"/></td>
		</tr>
		<tr>
			<td>Tingkat</td><td>:</td><td><select name="tingkat">
				<option Value="kecamatan">Kecamatan</option>
				<option Value="kabupaten">Kabupaten</option>
				<option Value="provinsi">Provinsi</option>
				<option value="nasional">Nasional</option>
				<option value="internasional">Internasional</option>
				</select></td>
		</tr>
		<tr>
			<td>Tanggal Prestasi</td><td>:</td><td><input type="date" name="tgl"/></td>
		</tr>
		<tr>
			<td>Deskripsi</td><td>:</td><td><label>
			  <textarea name="des" id="des" class="textarea2"></textarea>
			</label></td>
		</tr>
		<tr>
			<td height="30"></td><td></td><td><input type="submit" name="simpan" value="Simpan" class="button"/></td>
		</tr>
	</TABLE>
	</FORM>
	<br>
</BODY>
</HTML>