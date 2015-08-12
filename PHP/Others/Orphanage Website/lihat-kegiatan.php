<?php include 'connect.php';?>
<html>
	<body>
		<h2 align="center">Data kegiatan</h2>
		<form action="index-admin.php?menu=<?php echo"frm-kegiatan";?>" method="post">
			<input type="submit" value="Tambah Data" name="btntambah" class="button">
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
			if(!isset($_POST['cari'])){
				$kegiatan=mysql_query("select * from kegiatan");?>
				<br>
				<table class="data" width="100%">
				<tr class="kolom">
					<th>No</th>
					<th>ID Kegiatan</th>
					<th width="20%">Nama kegiatan</th>
					<th>Tanggal</th>
					<th width="50%">Deskripsi</th>
					<th colspan="3"></th>
				</tr>
				
				<?php  $c=1; $no=0;while($datakegiatan=mysql_fetch_array($kegiatan)){$no++;
				//$datakegiatan['tgl_kegiatan']=date('d-M-Y', $datakegiatan['tgl_kegiatan']);
				if($c % 2 == 0){
				?>
				<tr>
					<td class="kolom"><?php echo $no;?></td>
					<td class="kolom"><?php echo $datakegiatan['id_kegiatan'];?></td>
					<td class="kolom"><?php echo $datakegiatan['nama_kegiatan'];?></td>
					<td class="kolom"><?php echo $datakegiatan['tgl_kegiatan'];?></td>
					<td class="kolom" align="justify"><?php echo $datakegiatan['deskripsi_kegiatan'];?></td>
					<td valign="center" class="kolom"><a href="index-admin.php?menu=<?php echo"detail-kegiatan";?>&kegiatan=<?php echo $datakegiatan['id_kegiatan'];?>"><img src="images/detail.png" title="Lihat selengkapnya"></a></td>
					<td valign="center" class="kolom"><a href="index-admin.php?menu=<?php echo"edit-kegiatan";?>&kegiatan=<?php echo $datakegiatan['id_kegiatan'];?>"><img src="images/edit.png" title="Ubah"></a></td>
					<td valign="center" class="kolom"><a href="index-admin.php?menu=<?php echo"delete-kegiatan";?>&kegiatan=<?php echo $datakegiatan['id_kegiatan'];?>"><img src="images/delete.png" title="Hapus"></a></td>
				</tr><?php } else{?> 
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $datakegiatan['id_kegiatan'];?></td>
					<td><?php echo $datakegiatan['nama_kegiatan'];?></td>
					<td><?php echo $datakegiatan['tgl_kegiatan'];?></td>
					<td align="justify"><?php echo $datakegiatan['deskripsi_kegiatan'];?></td>
					<td><a href="index-admin.php?menu=<?php echo"detail-kegiatan";?>&kegiatan=<?php echo $datakegiatan['id_kegiatan'];?>"><img src="images/detail.png" title="Lihat selengkapnya"></a></td>
					<td><a href="index-admin.php?menu=<?php echo"edit-kegiatan";?>&kegiatan=<?php echo $datakegiatan['id_kegiatan'];?>"><img src="images/edit.png" title="Ubah"></a></td>
					<td><a href="index-admin.php?menu=<?php echo"delete-kegiatan";?>&kegiatan=<?php echo $datakegiatan['id_kegiatan'];?>"><img src="images/delete.png" title="Hapus"></a></td>
				</tr>
				<?php }?>
				<?php $c++;}?>
				</table>
			<?php }
			else{
				$keyword=$_POST['keyword'];
				$kegiatan=mysql_query("select * from kegiatan where id_kegiatan like '%$keyword%' or nama_kegiatan like '%$keyword%' or deskripsi_kegiatan like '%$keyword%'");
				if(mysql_num_rows($kegiatan)>0){
				echo "Hasil pencarian data kegiatan dengan keyword '".$keyword."'";?>
				<table border="1" class="data">
				<tr class="kolom">
					<th>No</th>
					<th>ID Kegiatan</th>
					<th width="20%">Nama kegiatan</th>
					<th>Tanggal</th>
					<th width="50%">Deskripsi</th>
					<th colspan="3"></th>
				</tr>
				<?php  $c=1; $no=0;while($datakegiatan=mysql_fetch_array($kegiatan)){$no++;
				//$datakegiatan['tgl_kegiatan']=date('d-M-Y');
				if($c % 2 == 0){
				?>
				<tr>
					<td class="kolom"><?php echo $no;?></td>
					<td class="kolom"><?php echo $datakegiatan['id_kegiatan'];?></td>
					<td class="kolom"><?php echo $datakegiatan['nama_kegiatan'];?></td>
					<td class="kolom"><?php echo $datakegiatan['tgl_kegiatan'];?></td>
					<td class="kolom" align="justify"><?php echo $datakegiatan['deskripsi_kegiatan'];?></td>
					<td class="kolom"><a href="index-admin.php?menu=<?php echo"detail-kegiatan";?>&kegiatan=<?php echo $datakegiatan['id_kegiatan'];?>"><img src="images/detail.png"></a></td>
					<td class="kolom"><a href="index-admin.php?menu=<?php echo"edit-kegiatan";?>&kegiatan=<?php echo $datakegiatan['id_kegiatan'];?>"><img src="images/edit.png"></a></td>
					<td class="kolom"><a href="index-admin.php?menu=<?php echo"delete-kegiatan";?>&kegiatan=<?php echo $datakegiatan['id_kegiatan'];?>"><img src="images/delete.png"></a></td>
				</tr><?php } else{?> 
				<tr>
					<td><?php echo $no;?></td>
					<td><?php echo $datakegiatan['id_kegiatan'];?></td>
					<td><?php echo $datakegiatan['nama_kegiatan'];?></td>
					<td><?php echo $datakegiatan['tgl_kegiatan'];?></td>
					<td align="justify"><?php echo $datakegiatan['deskripsi_kegiatan'];?></td>
					<td><a href="index-admin.php?menu=<?php echo"detail-kegiatan";?>&kegiatan=<?php echo $datakegiatan['id_kegiatan'];?>"><img src="images/detail.png"></a></td>
					<td><a href="index-admin.php?menu=<?php echo"edit-kegiatan";?>&kegiatan=<?php echo $datakegiatan['id_kegiatan'];?>"><img src="images/edit.png"></a></td>
					<td><a href="index-admin.php?menu=<?php echo"delete-kegiatan";?>&kegiatan=<?php echo $datakegiatan['id_kegiatan'];?>"><img src="images/delete.png"></a></td>
				</tr>
				<?php }?>
				<?php $c++;}?>
				</table>
			<?php }
				else{
					echo "<i>Data kegiatan dengan keyword <strong>'$keyword'</strong> tidak tersedia</i>";
				}
			}
		?>
	</body>
</html>