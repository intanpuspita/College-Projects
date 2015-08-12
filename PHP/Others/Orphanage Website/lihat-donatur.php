<HTML>
<BODY>
<?php

	include "connect.php";
	
?>
<form action="frm-donasi-barang.php" method="">
	<input type="submit" value="Tambah Data" nama="btntambah">
</form>

<form action="carikey.php" method="post">
	Keyword<input type="text" name="txtkey">
	<input type="submit" value="Cari" nama="btncari">
</form>
<h2 align="center">Lihat Data Donatur</h2>
<TABLE border="2"> 
	<tr>
	<td>No</td><td>Nama Donatur</td><td>Jenis kelamin</td><td>Alamat</td><td>Telepon</td><td>Email</td><td>Pekerjaan</td>
	</tr>
	

<?php
	$querydonatur=mysql_query("select * from donatur");
	$no=0;
	while ($tampil =mysql_fetch_array($querydonatur))
	{	$no++;
?>
	<tr>
	<td><? echo $no;?></td>
	<td><?php echo $tampil['nama_donatur']." ";?></td>
	<td><?php echo $tampil['jk_donatur']." ";?></td>
	<td><?php echo $tampil['alamat_donatur']." ";?></td>
	<td><?php echo $tampil['telepon_donatur']." ";?></td>
	<td><?php echo $tampil['email_donatur']." ";?></td>
	<td><?php echo $tampil['pekerjaan_donatur']." ";?></td>
	<td><a href="view_detail.php?nim=<?php echo $tampil['id_donatur']?>">View Detail</a></td>
	<td><a href="update_detail.php?nim=<?php echo $tampil['id_donatur']?>">Update</a></td>
	<td><a href="delete_detail.php?nim=<?php echo $tampil['id_donatur']?>">Delete</a></td>
	
	</tr>

	<?php
	}
	?>
	
</TABLE>
</BODY>
</HTML>
