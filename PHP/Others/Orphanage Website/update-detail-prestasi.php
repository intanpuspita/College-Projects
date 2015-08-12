<HTML>
<BODY>
<?php
	$id_prestasi=$_GET['id_prestasi'];
	include "connect.php";
	
	$query=mysql_query("select * from prestasi where id_prestasi='$id_prestasi'");
	$data =mysql_fetch_array($query);
?>
<form action="kd-update-prestasi.php?id_prestasi=<?php echo $id_prestasi;?>" method="post">
<h2>Edit prestasi</h2>
<TABLE>
		<tr>
			<td>Nama Acara</td>
			<td>:</td>
			<td><input type="text" name="nama" id="nama" value="<?php echo $data['nama_acara'];?>" class="input"/></td>
		</tr>
		<tr>
			<td>Juara</td><td>:</td><td><input type="text" name="juara" id="juara" value="<?php echo $data['juara'];?>" class="input"/></td>
		</tr>
		<tr>
			<td>Tingkat</td><td>:</td>
			<td><select name="tingkat">
				<option Value="kecamatan">Kecamatan</option>
				<option Value="kabupaten">Kabupaten</option>
				<option Value="provinsi">Provinsi</option>
				<option value="nasional">Nasional</option>
				<option value="internasional">Internasional</option>
				</select></td>
		</tr>
		<tr>
			<td>Tanggal Prestasi</td><td>:</td><td><input type="date" name="tgl" id="tgl" value="<?php echo $data['tgl_prestasi'];?>"/></td>
		</tr>
		<tr>
			<td>Deskripsi Prestasi</td><td>:</td><td><label>
			  <textarea name="des" id="des" class="textarea2"><?php echo $data['deskripsi_prestasi'];?></textarea>
			</label></td>
		</tr>
		<tr>
			<td></td><td></td><td><input type="submit" name="simpan" value="Ubah" class="button"/></td>
		</tr>
	</TABLE>

</form>
</BODY>
</HTML>


