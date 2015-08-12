<HTML>
<BODY>
<?php
	include "connect.php";	
?>
<h2>Data Prestasi</h2>
<TABLE border="2"> 
<?php
	$queryprestasi=mysql_query("select * from prestasi");
	while ($tampil =mysql_fetch_array($queryprestasi))
	{
?>
	<tr>
	<td>ID Prestasi</td><td>:</td><td><? echo $tampil['id_prestasi'];?></td>
	</tr>
	<tr>
	<td>Nama Acara</td><td>:</td><td><?php echo $tampil['nama_acara']." ";?></td>
	</tr>
	<tr>
	<td>Juara</td><td>:</td><td><?php echo $tampil['juara']." ";?></td>
	</tr>
	<tr>
	<td>Tingkat</td><td>:</td><td><?php echo $tampil['tingkat']." ";?></td>
	</tr>
	<tr>	
	<td>Tanggal Prestasi</td><td>:</td><td><?php echo $tampil['tgl_prestasi']." ";?></td>
	</tr>
	<tr>
	<td>Deskripsi</td><td>:</td><td><?php echo $tampil['deskripsi_prestasi']." ";?></td>
	</tr>
<?php } ?>
</TABLE>
</BODY>
</HTML>
