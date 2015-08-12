<HTML>
<BODY>
<?php
	$id_sumbanguang=$_GET['id_sumbanguang'];
	include "connect.php";
	
	$query=mysql_query("select * from sumbangan_uang where id_sumbanguang='$id_sumbanguang'");
	$data =mysql_fetch_array($query);
?>
<h2 align="center">Edit Sumbangan Uang</h2>
<form action="kd-update-donasi-uang.php?id=<?php echo $id_sumbanguang;?>" method="post">
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
			<td>Jumlah Barang</td><td>:</td><td><input type="text" name="jumlah" id="jumlah" value="<?php echo $data['jumlah_donasi'];?>" class="input"/></td>
		</tr>
		<tr>
			<td>Donasi Barang ke-</td><td>:</td><td><input type="text" name="ke" id="ke" value="<?php echo $data['donasi_ke'];?>" class="input"/></td>
		</tr>
		<tr>
			<td>Tanggal Kirim</td><td>:</td><td><input type="date" name="tgl" id="tgl" value="<?php echo $data['tgl_donasi'];?>"/></td>
		</tr>
		<tr>
			<td></td><td></td><td><input type="submit" name="simpan" value="Update" class="button"/></td>
		</tr>
	</TABLE>

</form>
</BODY>
</HTML>


