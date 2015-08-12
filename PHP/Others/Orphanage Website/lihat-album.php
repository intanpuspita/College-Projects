<?php include 'connect.php';?>
<html>
	<body>
		<h2 align="center">Data album</h2>
		<form action="index-admin.php?menu=<?php echo"frm-album";?>" method="post">
			<input type="submit" value="Tambah Album" name="btntambah" class="button">
		</form>
		<table>
		<form action="" method="post">
		<tr>
			<td style="font-size:20px;">Kata kunci</td><td style="font-size:20px;">:</td>
			<td><input type="text" name="keyword" class="input"></td>
			<td><input type="submit" name="cari" value="Cari" class="button"></td>
		</tr>
		</form>
	</br>
	</table></br>
			<?php 
			if(!isset($_POST['cari']))
			{ 
				$album=mysql_query("select * from album"); ?>
				<table border="1" width="100%" class="data">	
					<tr class="kolom">
						<th>No</th>
						<th width="10%">ID Album</th>
						<th width="20%">Nama Album</th>
						<th>Tanggal</th>
						<th width="50%">Deskripsi</th>
						<th colspan="3"></th>
					</tr>
				<?php $i=1; 
				while($dataalbum=mysql_fetch_array($album))
				{
					//$dataalbum['tgl_album']=date('d-M-Y');?>
					<tr>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><?php echo $i;?></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><?php echo $dataalbum['id_album'];?></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><?php echo $dataalbum['nama_album'];?></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><?php echo $dataalbum['tgl_album'];?></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><?php echo $dataalbum['ket_album'];?></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><a href="index-admin.php?menu=detail-album&album=<?php echo $dataalbum['id_album'];?>"><img src="images/detail.png" title="Lihat selengkapnya"></a></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><a href="index-admin.php?menu=update-album&album=<?php echo $dataalbum['id_album'];?>"><img src="images/edit.png" title="Ubah"></a></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><a href="delete-album.php?album=<?php echo $dataalbum['id_album'];?>"><img src="images/delete.png" title="Hapus"></a></td>
					</tr>
				<?php $i++; 
				} ?> 
				</table>
			<?php } 
			else
			{
				$keyword=$_POST['keyword'];
				$album=mysql_query("select * from album where id_album like '%$keyword%' or nama_album like '%$keyword%' or ket_album like '%$keyword%'");
				if(mysql_num_rows($album)>0)
				{
					echo "Hasil pencarian data album dengan keyword '".$keyword."'";?>
					<table border="1" class="data" width="100%">	
					<tr class="kolom">
						<th>No</th>
						<th width="10%">ID Album</th>
						<th width="20%">Nama Album</th>
						<th>Tanggal</th>
						<th width="50%">Deskripsi</th>
						<th colspan="3"></th>
					</tr>
					<?php $i=1; 
					while($dataalbum=mysql_fetch_array($album)){ 
					//$dataalbum['tgl_album']=date('d-M-Y');?>
					<tr>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><?php echo $i;?></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><?php echo $dataalbum['id_album'];?></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><?php echo $dataalbum['nama_album'];?></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><?php echo $dataalbum['tgl_album'];?></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><?php echo $dataalbum['ket_album'];?></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><a href="index-admin.php?menu=detail-album&album=<?php echo $dataalbum['id_album'];?>"><img src="images/detail.png" title="Lihat selengkapnya"></a></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><a href="index-admin.php?menu=update-album&album=<?php echo $dataalbum['id_album'];?>"><img src="images/edit.png" title="Ubah"></a></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><a href="delete-album.php?album=<?php echo $dataalbum['id_album'];?>"><img src="images/delete.png" title="Hapus"></a></td>
					</tr>
				<?php $i++; 
				} ?>
				</table>
				<?php }
				else{
					echo "Data album dengan keyword <strong>'$keyword'</strong> tidak tersedia";
				}
			}?>
	</body>
</html>