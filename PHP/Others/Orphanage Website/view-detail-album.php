<?php 
	include 'connect.php';
	$id_album=$_GET['album'];
	$album=mysql_query("select * from album where id_album='$id_album'");
	$dataalbum=mysql_fetch_array($album);
	//$dataalbum['tgl_album']=date('d-M-Y');
?>
<html>
	<body>
		<h2>Album <?php echo $dataalbum['nama_album'];?></h2>
		<table>
			<tr>
				<td>Nama album</td>
				<td>:</td>
				<td><?php echo $dataalbum['nama_album'];?></td>
			</tr>
			<tr>
				<td>Tanggal</td>
				<td>:</td>
				<td><?php echo $dataalbum['tgl_album'];?></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>:</td>
				<td><?php echo $dataalbum['ket_album'];?></td>
			</tr>
		</table>
		</br><strong>Foto-foto album "<?php echo $dataalbum['nama_album'];?>"</strong>
		<form action="index-admin.php?menu=<?php echo"frm-foto";?>&id_album=<?php echo $id_album;?>" method="post">
			<input type="submit" value="Tambah Foto" name="btntambah" class="button">
		</form>
		<?php $foto=mysql_query("select * from foto, kegiatan where id_album='$id_album' and kegiatan.id_kegiatan=foto.id_kegiatan");
		if(mysql_num_rows($foto)>0){?>
			<table border="1" width="100%" class="data">
			<tr class="kolom">
				<th width="10%">ID Foto</th>
				<th>Kegiatan</th>
				<th>Nama foto</th>
				<th width="170px">Foto</th>
				<th>Deskripsi foto</th>
				<th colspan="3"></th>
			</tr>
			<?php $i=1;
			while($datafoto=mysql_fetch_array($foto)){?>
			<tr>
				<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><?php echo $datafoto['id_foto'];?></td>
				<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><?php echo $datafoto['nama_kegiatan'];?></td>
				<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><?php echo $datafoto['nama_foto'];?></td>
				<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><img src="<?php echo $datafoto['file_foto'];?>" width="150px" height="120px"></td>
				<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><?php echo $datafoto['ket_foto'];?></td>
				<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><a href="index-admin.php?menu=detail-foto&foto=<?php echo $datafoto['id_foto'];?>"><img src="images/detail.png" title="Lihat selengkapnya"></a></td>
				<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><a href="index-admin.php?menu=update-foto&foto=<?php echo $datafoto['id_foto'];?>"><img src="images/edit.png" title="Ubah"></a></td>
				<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><a href="delete-foto.php?foto=<?php echo $datafoto['id_foto'];?>"><img src="images/delete.png"></a></td>
			</tr>
			<?php $i++; 
			} ?>
			</table>
		<?php }?>
	</body>
</html>