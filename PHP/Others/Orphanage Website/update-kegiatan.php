<?php
	include 'connect.php';
	$id_kegiatan=$_GET['kegiatan'];
	$kegiatan=mysql_query("select * from kegiatan where id_kegiatan='$id_kegiatan'");
	$datakegiatan=mysql_fetch_array($kegiatan);
	//$datakegiatan['tgl_kegiatan']=date('d-M-Y');
?>
<html>
	<body>
		<h2>Edit Kegiatan</h2>
		<form name="" method="POST" action="kd-update-kegiatan.php?kegiatan=<?php echo $datakegiatan['id_kegiatan'];?>">
		<table>
			<tr>
				<td><strong>Keterangan kegiatan</strong></td>
			</tr>
			<tr>
				<td>Nama kegiatan</td>
				<td>:</td>
				<td><input type="text" name="nama" class="input" value="<?php echo $datakegiatan['nama_kegiatan'];?>"></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td>:</td>
				<td><input type="date" name="tgl" id="datepicker" class="input"value="<?php echo $datakegiatan['tgl_kegiatan'];?>"/></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td><label><textarea name="deskripsi" id="" class="textarea"><?php echo $datakegiatan['deskripsi_kegiatan'];?></textarea></label></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="simpan" value="Ubah" class="button"></td>
			</tr>
		</table>
		</form>
	</body>
</html>