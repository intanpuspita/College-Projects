<HTML>
<BODY>
<?php
	include "connect.php";
?>
<h2 align="center">Data Prestasi</h2>
<form action="index-admin.php?menu=<?php echo"frm-prestasi";?>" method="post">
	<input type="submit" value="Tambah Prestasi" name="btntambah" class="button">
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
	
	<?php if(!isset($_POST['cari'])){?>
		<TABLE class="data" width="80%"> 
			<tr class="kolom">
				<th>No</th>
				<th>ID Prestasi</th>
				<th>Nama Acara</th>
				<th>Juara</th>
				<th colspan="3"></th>
			</tr>
			<?php
			$queryprestasi=mysql_query("select * from prestasi");
			$no=1;
			while($tampil =mysql_fetch_array($queryprestasi))
			{?>
			<tr <?php if($no%2 == 0){ echo "class='kolom'";}?>>
				<td><? echo $no;?></td>
				<td><?php echo $tampil['id_prestasi']." ";?></td>
				<td><?php echo $tampil['nama_acara']." ";?></td>
				<td><?php echo $tampil['juara']." ";?></td>	
				<td><a href="index-admin.php?menu=detail-prestasi&id_prestasi=<?php echo $tampil['id_prestasi']?>"><img src="images/detail.png" title="Lihat selengkapnya"></a></td>
				<td><a href="index-admin.php?menu=update-prestasi&id_prestasi=<?php echo $tampil['id_prestasi']?>"><img src="images/edit.png" title="Ubah"></a></td>
				<td><a href="delete-prestasi.php?id_prestasi=<?php echo $tampil['id_prestasi']?>"><img src="images/delete.png" title="Hapus"></a></td>
			</tr>
			<?php $no++;
			}
	}
	else{
		$keyword=$_POST['keyword'];
		$prestasi=mysql_query("select * from prestasi where id_prestasi like '%$keyword%' or nama_acara like '%$keyword%' or juara like '%$keyword%' or tingkat like '%$keyword%' or deskripsi_prestasi like '%$keyword%'");
		if(mysql_num_rows($prestasi)>0){
			echo "Hasil pencarian data kegiatan dengan keyword '".$keyword."'";?>
			<table class="data" width="80%"> 
			<tr class="kolom">
				<th>No</th>
				<th>ID Prestasi</th>
				<th>Nama Acara</th>
				<th>Juara</th>
				<th colspan="3"></th>
			</tr>
			<?php $no=1;
			while($tampil =mysql_fetch_array($prestasi))
			{?>
			<tr <?php if($no%2 == 0){ echo "class='kolom'";}?>>
				<td><? echo $no;?></td>
				<td><?php echo $tampil['id_prestasi']." ";?></td>
				<td><?php echo $tampil['nama_acara']." ";?></td>
				<td><?php echo $tampil['juara']." ";?></td>	
				<td><a href="index-admin.php?menu=detail-prestasi&id_prestasi=<?php echo $tampil['id_prestasi']?>"><img src="images/detail.png" title="Lihat selengkapnya"></a></td>
				<td><a href="index-admin.php?menu=update-prestasi&id_prestasi=<?php echo $tampil['id_prestasi']?>"><img src="images/edit.png" title="Ubah"></a></td>
				<td><a href="delete-prestasi.php?id_prestasi=<?php echo $tampil['id_prestasi']?>"><img src="images/delete.png" title="Hapus"></a></td>
			</tr>
			<?php $no++;
			}
		}
		else{
			echo "Data prestasi dengan keyword <strong>'$keyword'</strong> tidak tersedia";
		}
	}
	?>
	
</TABLE>
</BODY>
</HTML>
