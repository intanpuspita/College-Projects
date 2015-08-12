<HTML>
<BODY>
<?php
	include "connect.php";
$id=$_GET['id_sumbangbarang'];	
?>
<h2>Data Sumbangan Barang</h2>
<TABLE border="2" align="center"> 
<?php
	$querysumbangbarang=mysql_query("select * from sumbangan_barang where id_sumbangbarang='$id' ");
	while ($tampil =mysql_fetch_array($querysumbangbarang))
	{
?>
	<tr>
	<td width="130">ID Sumbang Barang</td>
	<td width="17">:</td>
	<td width="64"><? echo $tampil['id_sumbangbarang'];?></td>
	</tr>
	<tr>
	<td>Nama Donatur</td><td>:</td><td><?php echo $tampil['nama_donatur']." ";?></td>
	</tr>
	<tr>
	<td>Jenis Kelamin</td><td>:</td><td><?php if($tampil['jk_donatur']==1){
			echo "Laki-laki";}
			else{ echo "Perempuan";}?></td>
	</tr>
	<tr>
	<td>Alamat</td><td>:</td><td><?php echo $tampil['alamat_donatur']." ";?></td>
	</tr>
	<tr>	
	<td>Telepon</td><td>:</td><td><?php echo $tampil['telepon_donatur']." ";?></td>
	</tr>
	<tr>
	<td>Email</td><td>:</td><td><?php echo $tampil['email_donatur']." ";?></td>
	</tr>
	<tr>
	<td>Pekerjaan</td><td>:</td><td><?php echo $tampil['pekerjaan_donatur']." ";?></td>	
	</tr>
	<tr>
	<td>Nama Barang</td><td>:</td><td><?php echo $tampil['nama_barang']." ";?></td>
	</tr>
	<tr>
	<td>Jumlah Barang</td><td>:</td><td><?php echo $tampil['jumlah_barang']." ";?></td>
	</tr>
	<tr>
	<td>Sumbangan ke</td><td>:</td><td><?php echo $tampil['barang_ke']." ";?></td>	
	</tr>
	<tr>
	<td>Tanggal KIrim</td><td>:</td><td><?php echo $tampil['tgl_barang']." ";?></td>		
	</tr>

	<?php
	}
	?>
	
</TABLE>
</BODY>
</HTML>
