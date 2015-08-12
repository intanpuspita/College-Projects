<?php include 'connect.php';
$id_album=$_GET['album'];
$album=mysql_query("select * from album where id_album='$id_album'");
$dataalbum=mysql_fetch_array($album);?>
<html>
	<body>
		<h2>Edit album</h2>
		<form name="" method="POST" action="kd-update-album.php?album=<?php echo $id_album;?>">
		<table>
			<tr>
				<td><strong>Nama album</strong></td>
				<td><strong>:</strong></td>
				<td><strong><?php echo $dataalbum['nama_album'];?></strong></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td>:</td>
				<td><input type="date" name="tgl" class="input" value="<?php echo $dataalbum['tgl_album'];?>"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td><label><textarea name="deskripsi" id="" class="textarea2"><?php echo $dataalbum['ket_album'];?></textarea></label></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="submit" value="Ubah" class="button"></td>
			</tr>
		</table>
		</form>
	</body>
</html>