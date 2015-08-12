<?php
$key=$_POST['txtkey'];

include "connect.php";
$query=mysql_query("select * from sumbangan_barang where nama_donatur LIKE '%$key%' or jk_donatur LIKE '%$key%' or alamat_donatur LIKE '%$key%' or telepon_donatur LIKE '%$key%' or email_donatur LIKE '%$key%' or pekerjaan_donatur LIKE '%$key%' or nama_barang LIKE '%$key%' or jumlah_barang LIKE '%$key%' or barang_ke LIKE '%$key%' or tgl_barang LIKE '%$key%'");


?>
<h2>Hasil Searching</h2>
<TABLE border="2"> 
	<tr>
	<td>No</td><td>Id Sumbangan</td><td>Nama Donatur</td><td>Jenis Kelamin</td><td>Alamat</td><td>Telepon</td><td>Email</td><td>Pekerjaan</td><td>Nama Barang</td><td>Jumlah Barang</td><td>Sumbangan ke</td><td>Tanggal Kirim</td>
	</tr>
	

<?php
include "connect.php";
	$no=0;
	while($tampil=mysql_fetch_array($query))
	{$no++;
?>
	<tr>
	<td><? echo $no;?></td>
	<td><?php echo $tampil['id_sumbangbarang']." ";?></td>
	<td><?php echo $tampil['nama_donatur']." ";?></td>
	<td><?php if($tampil['jk_donatur']==1){
			echo "Laki-laki";}
			else{ echo "Perempuan";}?></td>
	<td><?php echo $tampil['alamat_donatur']." ";?></td>
	<td><?php echo $tampil['telepon_donatur']." ";?></td>
	<td><?php echo $tampil['email_donatur']." ";?></td>
	<td><?php echo $tampil['pekerjaan_donatur']." ";?></td>
	<td><?php echo $tampil['nama_barang']." ";?></td>
	<td><?php echo $tampil['jumlah_barang']." ";?></td>
	<td><?php echo $tampil['barang_ke']." ";?></td>
	<td><?php echo $tampil['tgl_barang']." ";?></td>	
	<td><a href="view-detail-sumbang-barang.php?id_sumbangbarang=<?php echo $tampil['id_sumbangbarang']?>">lihat Lengkap</a></td>
	<td><a href="update-detail-sumbang-barang.php?id_sumbangbarang=<?php echo $tampil['id_sumbangbarang']?>">Ubah</a></td>
	<td><a href="delete-sumbang-barang.php?id_sumbangbarang=<?php echo $tampil['id_sumbangbarang']?>">Hapus</a></td>
	
	</tr>

	<?php
	}
	?>
	
</TABLE>


