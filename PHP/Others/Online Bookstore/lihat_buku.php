<html>
	<body>
		<h1 align="center">Daftar Buku</h1></br></br>
		<form action="search.php" method="POST">
			<h2><table>
				<tr>
					<td>Cari</td>
					<td>:</td>
					<td><input type="text" name="keyword"></td>
					<td><input type="submit" name="btnsubmit" value="Cari"></td>
				</tr>
			</table></h2></br>
		</form>
		<?php if(!isset($_POST['btnsubmit'])){?>
			<table border='1' width='85%'>
				<tr>
					<th>Kode Buku</th>
					<th>Judul Buku</th>
					<th>Pengarang Buku</th>
					<th>Penerbit Buku</th>
					<th>Harga Buku</th>
				</tr>
			<?php include 'connect.php';
			$data=mysql_query("select * from data_buku");
			while($tampil=mysql_fetch_array($data))
			{?>
				<tr>
					<td><?php echo $tampil['kode_buku'];?></td>
					<td><?php echo $tampil['judul_buku'];?></td>
					<td><?php echo $tampil['pengarang_buku'];?></td>
					<td><?php echo $tampil['penerbit_buku'];?></td>
					<td><?php echo $tampil['harga_buku'];?></td>
				</tr>
			<?php }
		}?>
			</table>
	</body>
</html>