<?php include 'connect.php';?>
<html>
	<body>
		<h2>Kontak Kami</h2>
		<table width="80%">
		<?php $kontak=mysql_query("select * from info");
			while($datakontak=mysql_fetch_array($kontak)){ ?>
			<div id="kontak">
			<tr>
				<td width="17%"><strong>Alamat</strong></td>
				<td width="4%"></td>
				<td width="79%"><strong><?php echo $datakontak['alamat']?></strong></br></br></td>
			</tr>
			<tr>
				<td><strong>Kota</strong></td>
				<td></td>
				<td><strong><?php echo $datakontak['kota']?></strong></br></br></td>
			</tr>
			<tr>
				<td><strong>Negara</strong></td>
				<td></td>
				<td><strong><?php echo $datakontak['negara']?></strong></br></br></td>
			</tr>
			<tr>
				<td><strong>Email</strong></td>
				<td></td>
				<td><strong><?php echo $datakontak['email']?></strong></br></br></td>
			</tr>
			<tr>
				<td><strong>No Telepon</strong></td>
				<td></td>
				<td><strong><?php echo $datakontak['telepon']?></strong></br></br></td>
			</tr>
			<tr>
				<td><strong>No Rekening</strong></td>
				<td></td>
				<td><strong><?php echo $datakontak['no_rek']?></strong></td>
			</tr></strong>
			</div>
			<?php } ?>
		</table>
	</body>
</html>