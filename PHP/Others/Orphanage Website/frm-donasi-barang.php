<HTML>
<HEAD>
	<TITLE>Donasi Barang</TITLE>
</HEAD>
<BODY>
<div id="formdonasi">  

	<FORM name="fdonatur" method="post" action="kd-donasi-barang.php" onsubmit='return validasi()'>
	<h2>Donasi Barang</h2>
	<TABLE align="center" border="0">
		<tr>
			<td>Nama Donatur</td>
			<td>:</td>
		  <td><input type="text" name="nama" id="nama" class="input"/></td>
		</tr>
		<tr>
			<td>Jenis Kelamin Donatur</td><td>:</td><td><input type="radio" name="jk" id="jk" value="1" class="radio" checked/>Laki-laki<br><br><input type="radio" name="jk" id="jk" value="0" class="radio"/>Perempuan</td>
		</tr>
		<tr>
			<td>Alamat Donatur</td><td>:</td>
			<td><label>
			  <textarea name="alamat" id="alamat" class="textarea2"></textarea>
			</label></td>
		</tr>
		<tr>
			<td>Telepon Donatur</td><td>:</td><td><input type="text" name="telepon" id="telepon" class="input"/></td>
		</tr>
		<tr>
			<td>Email Donatur</td><td>:</td><td><input type="text" name="email" id="email" class="input"/></td>
		</tr>
		<tr>
			<td>Pekerjaan Donatur</td><td>:</td><td><input type="text" name="pekerjaan" id="pekerjaan" class="input"/></td>
		</tr>
		<tr>
			<td>Nama Barang</td><td>:</td><td><input type="text" name="namabarang" id="namabarang" class="input"/></td>
		</tr>
		<tr>
			<td>Jumlah Barang</td><td>:</td><td><input type="text" name="jumlah" id="jumlah" class="input"/></td>
		</tr>
		<tr>
			<td>Donasi Barang ke-</td><td>:</td><td><input type="text" name="ke" id="ke" class="input"/></td>
		</tr>
		<tr>
			<td>Tanggal Kirim</td><td>:</td><td><input type="date" id="datepicker" name="tgl" class="input"/></td>
		</tr>
		<tr>
			<td colspan="3"><strong></br>
		    Silahkan kirimkan bantuan Anda ke alamat:</br>
			Jl. Musholla No. 41, Kampung Kaum RT 04  RW 05, Kelurahan Ciparigi,
			Kecamatan Bogor Utara
			</strong></td>
		</tr>
		<tr>
			<td colspan="3" align="center"><input type="submit" name="simpan" value="Menyumbang" class="button"/></td>
		</tr>
	</TABLE>
	</FORM>
	</div>
	<br>
</BODY>
</HTML>