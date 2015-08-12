<HTML>
<BODY>
<?php
	include "connect.php";	
	$id_sumbanguang=$_GET['id_sumbanguang'];
?>
<h2>Data Sumbangan Uang</h2>
<TABLE border="2"> 
<?php
	$querysumbanguang=mysql_query("select * from sumbangan_uang where id_sumbanguang='$id_sumbanguang'");
	while ($tampil =mysql_fetch_array($querysumbanguang))
	{
?>
	<tr>
	<td>Id Sumbang Uang</td><td>:</td><td><? echo $tampil['id_sumbanguang'];?></td>
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
	<td>Jumlah donasi</td><td>:</td><td><?php echo $tampil['jumlah_donasi']." ";?></td>
	</tr>
	<tr>
	<td>Sumbangan ke</td><td>:</td><td><?php echo $tampil['donasi_ke']." ";?></td>	
	</tr>
	<tr>
	<td>Tanggal Donasi</td><td>:</td><td><?php echo $tampil['tgl_donasi']." ";?></td>		
	</tr>

	<?php
	}
	?>
	
</TABLE>
</BODY>
</HTML>
