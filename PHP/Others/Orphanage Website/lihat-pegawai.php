<HTML>
<BODY>
<?php
	include "connect.php";
?>
	<h2 align="center">Data Pegawai</h2>
	<form action="index-admin.php?menu=<?php echo"frm-pegawai";?>" method="post">
		<input type="submit" value="Tambah Data Pegawai" name="btntambah" class="button">
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
	<?php if(!isset($_POST['cari'])){?>
		<TABLE width="100%" class="data"> 
		<tr class="kolom">
			<th>No</th>
			<th>ID Pegawai</th>
			<th>Nama Pegawai</th>
			<th>Jenis Kelamin Pegawai</th>
			<th>Alamat Pegawai</th>
			<th colspan="3"></th>
		</tr>
		<?php
			$querypegawai=mysql_query("select * from pegawai");
			$no=1;
			while($tampil =mysql_fetch_array($querypegawai)){?>	
			<tr>
				<td <?php if($no%2 == 0){ echo "class='kolom'";}?>><? echo $no;?></td>
				<td <?php if($no%2 == 0){ echo "class='kolom'";}?>><?php echo $tampil['id_pegawai']." ";?></td>
				<td <?php if($no%2 == 0){ echo "class='kolom'";}?>><?php echo $tampil['nama_pegawai']." ";?></td>
				<td <?php if($no%2 == 0){ echo "class='kolom'";}?>><?php if($tampil['jk_pegawai']==1){
					echo "Laki-laki";}
					else{ echo "Perempuan";}?></td>
				<td <?php if($no%2 == 0){ echo "class='kolom'";}?>><?php echo $tampil['alamat_pegawai']." ";?></td>	
				<td <?php if($no%2 == 0){ echo "class='kolom'";}?>><a href="index-admin.php?menu=detail-pegawai&id_pegawai=<?php echo $tampil['id_pegawai']?>"><img src="images/detail.png" title="Lihat selengkapnya"></a></td>
				<td <?php if($no%2 == 0){ echo "class='kolom'";}?>><a href="index-admin.php?menu=update-pegawai&id_pegawai=<?php echo $tampil['id_pegawai']?>"><img src="images/edit.png" title="Ubah"></a></td>
				<td <?php if($no%2 == 0){ echo "class='kolom'";}?>><a href="delete-pegawai.php?id_pegawai=<?php echo $tampil['id_pegawai']?>"><img src="images/delete.png" title="Hapus"></a></td>
			</tr>
		<?php $no++;
		}
	}
	else{
		$keyword=$_POST['keyword'];
		$pegawai=mysql_query("select * from pegawai where id_pegawai like '%$keyword%' or nama_pegawai like '%$keyword%' or alamat_pegawai like '%$keyword%' or jabatan like '%$keyword%' or tgl_lahir_pegawai like '%$keyword%'");
		if(mysql_num_rows($pegawai)>0){ ?>
			<table width="100%" class="data">
				<tr class="kolom">
					<th>No</th>
					<th>ID Pegawai</th>
					<th>Nama Pegawai</th>
					<th>Jenis Kelamin Pegawai</th>
					<th>Alamat Pegawai</th>
					<th colspan="3"></th>
				</tr>
				<?php $no=1; 
				echo "Hasil pencarian data kegiatan dengan keyword '".$keyword."'";
				while($tampil=mysql_fetch_array($pegawai)){?>
					<tr <?php if($no%2 == 0){ echo "class='kolom'";}?>>
						<td><? echo $no;?></td>
						<td><?php echo $tampil['id_pegawai']." ";?></td>
						<td><?php echo $tampil['nama_pegawai']." ";?></td>
						<td><?php if($tampil['jk_pegawai']==1){
							echo "Laki-laki";}
							else{ echo "Perempuan";}?></td>
						<td><?php echo $tampil['alamat_pegawai']." ";?></td>	
						<td <?php if($no%2 == 0){ echo "class='kolom'";}?>><a href="index-admin.php?menu=detail-pegawai&id_pegawai=<?php echo $tampil['id_pegawai']?>"><img src="images/detail.png" title="Lihat selengkapnya"></a></td>
						<td <?php if($no%2 == 0){ echo "class='kolom'";}?>><a href="index-admin.php?menu=update-pegawai&id_pegawai=<?php echo $tampil['id_pegawai']?>"><img src="images/edit.png" title="Ubah"></a></td>
						<td <?php if($no%2 == 0){ echo "class='kolom'";}?>><a href="delete-pegawai.php?id_pegawai=<?php echo $tampil['id_pegawai']?>"><img src="images/delete.png" title="Hapus"></a></td>
					</tr>
				<?php $no++; 
				} ?>
			</table>
		<?php }
		else{
			echo "Data pegawai dengan keyword <strong>'$keyword'</strong> tidak tersedia";
		}				
		}?>
</TABLE>
</BODY>
</HTML>
