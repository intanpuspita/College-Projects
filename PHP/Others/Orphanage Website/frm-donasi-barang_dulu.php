<HTML>
<BODY>
	<div id="formdonasi">
	<FORM name="fdonatur" method="post" action="kd-donasi-barang.php">
	<h2>Donasi Barang</h2>
	<TABLE align="center">
		<tr>
			<td width="463">Nama Donatur</td>
			<td width="21">:</td>
		  <td width="244"><input type="text" name="nama" class="input"/></td>
		</tr>
		<tr>
			<td>Jenis Kelamin Donatur</td>
			<td>:</td>
			<td></br><input type="radio" name="jk" value="1" class="radio" checked/>Laki-laki</br></br><input type="radio" name="jk" value="0" class="radio"/>Perempuan</br></br></td>
		</tr>
		<tr>
			<td>Telepon Donatur</td><td>:</td><td><input type="text" name="telepon" class="input"/></td>
		</tr>
		<tr>
			<td>Email Donatur</td><td>:</td><td><input type="text" name="email" class="input"/></td>
		</tr>
		<tr>
			<td>Pekerjaan Donatur</td><td>:</td><td><input type="text" name="pekerjaan" class="input"/></td>
		</tr>
		<tr>
			<td>Nama Barang</td><td>:</td><td><input type="text" name="namabarang" class="input"/></td>
		</tr>
		<tr>
			<td>Jumlah Barang</td><td>:</td><td><input type="text" name="jumlah" class="input"/></td>
		</tr>
		<tr>
			<td>Donasi Barang ke-</td><td>:</td><td><input type="text" name="ke" class="input"/></td>
		</tr>
		<tr>
			<td>Tanggal Kirim</td><td>:</td><td><input type="text"id="datepicker" name="tgl" class="input"/></td>
		</tr>
		<tr>
			<td colspan="3"><strong></br>
		    Silahkan kirimkan bantuan Anda ke alamat Jln Timbangan, </br>
			Kelurahan Kledung Kradenan RT 01 - RW 04</br>
			Banyu Urip, Purworejo
			</strong></br></td>
		</tr>
		<tr>
			<td colspan="3" align="center"><input type="submit" name="simpan" value="Kirim" class="button"/></td>
		</tr>
	</TABLE>
	</FORM>
	</div>
	<br>
</BODY>
</HTML>