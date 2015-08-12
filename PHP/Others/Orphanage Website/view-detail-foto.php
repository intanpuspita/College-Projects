<?php
	include 'connect.php';
	$id_foto=$_GET['foto'];
	$foto=mysql_query("select * from foto, kegiatan, album where id_foto='$id_foto' and foto.id_kegiatan=kegiatan.id_kegiatan and foto.id_album=album.id_album");
	$datafoto=mysql_fetch_array($foto);
	//$datafoto['tgl_foto']=date('d-M-Y');
?>
<html>
	<body>
		<h2>Foto <?php echo $datafoto['nama_foto'];?></h2>
		<table>
			<tr>
				<td><img src="<?php echo $datafoto['file_foto'];?>" width="300px" height="200px"></td>
				<td width="10px"></td>
				<td valign="top">
					<table>
						<tr>
							<td>Nama foto</td>
							<td>:</td>
							<td><?php echo $datafoto['nama_foto'];?></td>
						</tr>
						<tr>
							<td>Deskripsi</td>
							<td>:</td>
							<td><?php echo $datafoto['ket_foto'];?></td>
						</tr>
						<tr>
							<td>Tanggal</td>
							<td>:</td>
							<td><?php echo $datafoto['tgl_kegiatan'];?></td>
						</tr>
						<tr>
							<td>Nama album</td>
							<td>:</td>
							<td><?php echo $datafoto['nama_album'];?></td>
						</tr>
						<tr>
							<td>Nama kegiatan</td>
							<td>:</td>
							<td><?php echo $datafoto['nama_kegiatan'];?></td>
						</tr>
					</table>
				</td>
			</tr>
		</table>
	</body>
</html>