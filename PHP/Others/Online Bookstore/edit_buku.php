<html>
<body>
	<?php
		include 'connect.php';
		$kode_buku=$_GET['kode_buku'];
	
		$sql=mysql_query("select * from data_buku where kode_buku='$kode_buku'");
		$data=mysql_fetch_array ($sql);
	?>
	<h2 align="center">Update Data Buku</h2>
	<form name="form1" method="post" action="update.php">
		Kode buku : <input type="text" name="kode" readonly="readonly" value="<?php echo $data['kode_buku'];?>"></br></br>
		Judul buku : <input type="text" name="judul" value="<?php echo $data['judul_buku'];?>"></br></br>
		Pengarang buku : <input type="text" name="pengarang" value="<?php echo $data['pengarang_buku'];?>"></br></br>
		Penerbit buku : <input type="text" name="penerbit" value="<?php echo $data['penerbit_buku'];?>"></br></br>
		Stok buku : <input type="text" name="stok" value="<?php echo $data['stok_buku'];?>"></br></br>
		Harga buku : <input type="text" name="harga" value="<?php echo $data['harga_buku'];?>"></br></br>
		<input type="submit" name="btnupdate" value="Update">
	</form>
</body>
</html>