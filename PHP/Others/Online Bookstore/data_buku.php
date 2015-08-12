
<html>
	<body>
		<h2 align="center">Data Buku JTK Book Store</h2>
		<h3><a href="indexadmin.php?menu=<?php echo "inputbuku";?>">Input Data Buku</a></h3></br>
		<?php include 'connect.php';
		$data=mysql_query("select * from data_buku");
		if(mysql_num_rows($data)!=0)
		{
		?>
		<table width="90%" align="center" border="1">
			<tr>
				<th>Kode Buku</th>
				<th>Judul Buku</th>
				<th>Nama Pengarang</th>
				<th>Nama Penerbit</th>
				<th>Stok Buku</th>
				<th>Harga Buku</th>
			</tr>
			<?php while($tampil=mysql_fetch_array($data)) { ?>
			<tr>
				<td><?php echo $tampil['kode_buku'];?></td>
				<td><?php echo $tampil['judul_buku'];?></td>
				<td><?php echo $tampil['pengarang_buku'];?></td>
				<td><?php echo $tampil['penerbit_buku'];?></td>
				<td><?php echo $tampil['stok_buku'];?></td>
				<td><?php echo $tampil['harga_buku'];?></td>
				<td><a href="indexadmin.php?menu=<?php echo "editbuku";?>&kode_buku=<?php echo $tampil['kode_buku']; ?>">Edit</a></td>
			</tr>
			<?php } ?>
		</table>
		<?php } 
		else { echo "Tidak ada data buku dalam database.";}?>
	</body>
</html>