<?php
	include 'connect.php';
	$id_foto=$_GET['foto'];
	$foto=mysql_query("select * from foto where id_foto='$id_foto'");
	$datafoto=mysql_fetch_array($foto);
	$datafoto['tgl_foto']=date('d-M-Y');
?>
<html>
	<body>
		<h2>Edit foto</h2>
		<img src="<?php echo $datafoto['file_foto'];?>" width="300" height="200"></br></br>
		<form name="" method="post" action="kd-update-foto.php?foto=<?php echo $id_foto;?>">
		<table>
			<tr>
				<td>Nama foto</td>
				<td>:</td>
				<td><input type="text" name="nama" value="<?php echo $datafoto['nama_foto'];?>" class="input"></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td><label><textarea name="deskripsi" id="" class="textarea2"><?php echo $datafoto['ket_foto'];?></textarea></label></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="submit" value="Ubah" class="button"></td>
			</tr>
		</table>
		</form>
	</body>
</html>