<html>
	<body>
		<h2 align="center">Input Data Buku</h2>
		<form name="input" method="post" action="save.php">
		<table width="70%" align="center" border="1">
			<tr>
				<td>Judul Buku</td>
				<td>:</td>
				<td><input type="text" name="judul"></td>
			</tr>
			<tr>
				<td>Nama Pengarang</td>
				<td>:</td>
				<td><input type="text" name="pengarang"></td>
			</tr>
			<tr>
				<td>Penerbit</td>
				<td>:</td>
				<td><input type="text" name="penerbit"></td>
			</tr>
			<tr>
				<td>Jumlah Buku</td>
				<td>:</td>
				<td><input type="text" name="stok"></td>
			</tr>
			<tr>
				<td>Harga per satuan</td>
				<td>:</td>
				<td><input type="text" name="harga"></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="btnsubmit" value="Submit"></td>
			</tr>
		</table>
		</form>
	</body>
</html>