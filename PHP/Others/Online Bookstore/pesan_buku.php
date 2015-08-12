<html>
	<body>
		<h2 align="center">Pemesanan Buku</h2>
		<form name="input" method="post" action="simpan_pesan.php">
		<table width="70%" align="center" border="1">
			<tr>
				<td>Nama Pemesan</td>
				<td>:</td>
				<td><input type="text" name="nama"></td>
			</tr>
			<tr>
				<td>Judul Buku</td>
				<td>:</td>
				<td><select name="judul" id="judul">
					<option>----PILIH----</option>
						<?php include 'connect.php';
						$data=mysql_query("select * from data_buku");
						while($tampil=(mysql_fetch_array($data))){?>
							<option value=<?php echo $tampil['kode_buku'];?>><?php echo $tampil['kode_buku']?></option>
						<?php }?>
					</select></td>
			</tr>
			<tr>
				<td>Jumlah pemesanan</td>
				<td>:</td>
				<td><input type="text" name="jumlah"></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="btnsubmit" value="Submit"></td>
			</tr>
		</table>
		</form>
	</body>
</html>