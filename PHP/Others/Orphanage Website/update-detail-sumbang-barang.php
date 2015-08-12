<HTML>
<BODY>
<?php
	$id_sumbangbarang=$_GET['id_sumbangbarang'];
	include "connect.php";
	
	$query=mysql_query("select * from sumbangan_barang where id_sumbangbarang='$id_sumbangbarang'");
	$data =mysql_fetch_array($query);
?>
<h2 align="center">Edit Sumbangan Barang</h2>
<form action="kd-update-donasi-barang.php?id=<?php echo $id_sumbangbarang;?>" method="post">
<TABLE align="center" border="1" bordercolor="#00CCFF">
		<tr>
			<td>Nama Donatur</td>
			<td>:</td>
		  <td><input type="text" name="nama" id="nama" value="<?php echo $data['nama_donatur'];?>" class="input"/></td>
		</tr>
		<tr>
			<td>Jenis Kelamin Donatur</td><td>:</td><td><input type="radio" name="jk" id="jk" value="1" <?php if($data['jk_donatur']==1){ echo "checked"; }?>/>Laki-laki<input type="radio" name="jk" id="jk" value="0" <?php if($data['jk_donatur']==0){ echo "checked"; }?>/>Perempuan</td>
		</tr>
		<tr>
			<td>Alamat Donatur</td><td>:</td>
			<td><label>
			  <textarea name="alamat" id="alamat" class="textarea2"><?php echo $data['alamat_donatur'];?></textarea>
			</label></td>
		</tr>
		<tr>
			<td>Telepon Donatur</td><td>:</td><td><input type="text" name="telepon" id="telepon" value="<?php echo $data['telepon_donatur'];?>" class="input"/></td>
		</tr>
		<tr>
			<td>Email Donatur</td><td>:</td><td><input type="text" name="email" id="email" value="<?php echo $data['email_donatur'];?>" class="input"/></td>
		</tr>
		<tr>
			<td>Pekerjaan Donatur</td><td>:</td><td><input type="text" name="pekerjaan" id="pekerjaan" value="<?php echo $data['pekerjaan_donatur'];?>" class="input"/></td>
		</tr>
		<tr>
			<td>Nama Barang</td><td>:</td><td><input type="text" name="namabarang" id="namabarang" value="<?php echo $data['nama_barang'];?>" class="input"/></td>
		</tr>
		<tr>
			<td>Jumlah Barang</td><td>:</td><td><input type="text" name="jumlah" id="jumlah" value="<?php echo $data['jumlah_barang'];?>" class="input"/></td>
		</tr>
		<tr>
			<td>Donasi Barang ke-</td><td>:</td><td><input type="text" name="ke" id="ke" value="<?php echo $data['barang_ke'];?>" class="input"/></td>
		</tr>
		<tr>
			<td>Tanggal Kirim</td><td>:</td><td><input type="date" name="tgl" id="tgl" value="<?php echo $data['tgl_barang'];?>"/></td>
		</tr>
		<tr>
			<td></td><td></td><td><input type="submit" name="simpan" value="Ubah" class="button"/></td>
		</tr>
	</TABLE>

</form>
</BODY>
</HTML>


