<HTML>
<HEAD>
	<TITLE>Donasi Uang</TITLE>
</HEAD>
<BODY><div id="formdonasi">
	<FORM name="fdonatur" method="post" action="kd-donasi-uang.php">
	<h2>Donasi Uang</h2>
	<TABLE align="center" border="1" bordercolor="#FFFFFF">
		<tr>
			<td>Nama Donatur</td><td>:</td><td><input type="text" name="nama" class="input"/></td>
		</tr>
		<tr>
			<td>Jenis Kelamin Donatur</td><td>:</td><td><input type="radio" name="jk" value="1" class="radio" checked/>Laki-laki<br><br><input type="radio" name="jk" value="0" class="radio"/>Perempuan</td>
		</tr>
		<tr>
			<td>Alamat Donatur</td><td>:</td>
			<td><label>
			  <textarea name="alamat" id="alamat" class="textarea2"></textarea>
			</label></td>
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
			<td>Jumlah Donasi Uang Rp</td><td>:</td><td><input type="text" name="jumlah" class="input"/></td>
		</tr>
		<tr>
			<td>Donasi Uang ke-</td><td>:</td><td><input type="text" name="ke" class="input"/></td>
		</tr>
		<tr>
			<td>Tanggal Sumbangan</td><td>:</td><td><input type="date" id="datepicker" name="tgl" class="input"/></td>
		</tr>
		<tr>
			<td colspan="3"><strong></br>
		    Silahkan kirimkan bantuan Anda ke no rekening :</br>
			1. Mandiri  Cab. Suryakencana, Bogor</br>
			No. Rek.  1330 0097 8619 5, atau</br>
			a.n. R. Lily Rosliah</br>
			2. CIMB Niaga Syariah, Jakarta, Pondok Indah</br>
			No. Rek. 520-01-16994-11-6</br>
			a.n. Dina Mayasari
			</strong></td>
		</tr>
		<tr>
			<td height="30" colspan="3" align="center"><input type="submit" name="simpan" class="button" value="Menyumbang"/></td>
		</tr>
	</TABLE>
	</FORM>
	</div>
	<br>
</BODY>
</HTML>