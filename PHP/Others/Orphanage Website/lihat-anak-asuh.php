<?php include 'connect.php';?>
<html>
	<body>
		<h2>Data anak asuh</h2>
		<form action="index-admin.php?menu=<?php echo"frm-anak-asuh";?>" method="post">
			<input type="submit" value="Tambah Anak Asuh" name="btntambah" class="button">
		</form>
		<table>
		<form action="" method="post">
		<tr>
			<td style="font-size:20px;">Kata kunci</td><td style="font-size:20px;">:</td>
			<td><input type="text" name="keyword" class="input"></td>
			<td><input type="submit" value="Cari" name="cari" class="button"></td>
		</tr>
		</form>
	<br>
	</table>
		<?php
			if(!isset($_POST['cari'])){?>
				<table border="1" class="data">
					<tr class="kolom">
						<th>ID Anak Asuh</th>
						<th>Nama anak asuh</th>
						<th>Foto anak asuh</th>
						<th colspan="3"></th>
					</tr>
				<?php $anakasuh=mysql_query("select * from anak_asuh");
				$i=1;
				while($dataanakasuh=mysql_fetch_array($anakasuh)){?>
					<tr>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><?php echo $dataanakasuh['id_anakasuh'];?></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><?php echo $dataanakasuh['nama_anak'];?></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><img src="<?php echo $dataanakasuh['foto_anak'];?>" width="88px" height="103"></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><a href="index-admin.php?menu=detail-anak-asuh&anakasuh=<?php echo $dataanakasuh['id_anakasuh'];?>"><img src="images/detail.png" title="Lihat selengkapnya"></a></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><a href="index-admin.php?menu=update-anak-asuh&anakasuh=<?php echo $dataanakasuh['id_anakasuh'];?>"><img src="images/edit.png" title="Ubah"></a></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><a href="delete-anak-asuh.php?anakasuh=<?php echo $dataanakasuh['id_anakasuh'];?>"><img src="images/delete.png" title="Hapus"></a></td>
					</tr>
				<?php $i++;
				} ?>
				</table>
			<?php }
			else{
				$keyword=$_POST['keyword'];
				$anakasuh=mysql_query("select * from anak_asuh where nama_anak like '%$keyword%' or id_anakasuh like '%$keyword%' or pendidikan_anak like '%$keyword%'");
				if(mysql_num_rows($anakasuh)>0){?>
					<table border="1" class="data">
					<tr class="kolom">
						<th>ID Anak Asuh</th>
						<th>Nama anak asuh</th>
						<th>Foto anak asuh</th>
						<th colspan="3"></th>
					</tr>
					<?php $i=1; 
					echo "Hasil pencarian data kegiatan dengan keyword '".$keyword."'";
					while($dataanakasuh=mysql_fetch_array($anakasuh)){?>
					<tr>
						<td><?php echo $dataanakasuh['id_anakasuh'];?></td>
						<td><?php echo $dataanakasuh['nama_anak'];?></td>
						<td><img src="<?php echo $dataanakasuh['foto_anak'];?>"width="88px" height="103"></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><a href="index-admin.php?menu=detail-anak-asuh&anakasuh=<?php echo $dataanakasuh['id_anakasuh'];?>"><img src="images/detail.png" title="Lihat selengkapnya"></a></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><a href="index-admin.php?menu=update-anak-asuh&anakasuh=<?php echo $dataanakasuh['id_anakasuh'];?>"><img src="images/edit.png" title="Ubah"></a></td>
						<td <?php if($i % 2 == 0){ echo "class='kolom'";}?>><a href="delete-anak-asuh.php?anakasuh=<?php echo $dataanakasuh['id_anakasuh'];?>"><img src="images/delete.png" title="Hapus"></a></td>
					</tr>
					<?php $i++; 
					} ?>
					</table>
				<?php }
				else{
					echo "Data anak asuh dengan keyword <strong>'$keyword'</strong> tidak tersedia";
				}				
			}
		?>
	</body>
</html>