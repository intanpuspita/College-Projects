<HTML>
<BODY>
<?php
	include "connect.php";
	$id_pegawai=$_GET['id_pegawai'];
	$pegawai=mysql_query("select * from pegawai where id_pegawai='$id_pegawai'");
	$tampil=mysql_fetch_array($pegawai);
?>
<h2>Data pegawai</h2>
<TABLE border="2"> 
	<tr>
	<td>Id Pegawai</td><td>:</td><td><? echo $tampil['id_pegawai'];?></td>
	</tr>
	<tr>
	<td>Nama Pegawai</td><td>:</td><td><?php echo $tampil['nama_pegawai']." ";?></td>
	</tr>
	<tr>
	<td>Jenis Kelamin</td><td>:</td><td><?php if($tampil['jk_pegawai']==1){
			echo "Laki-laki";}
			else{ echo "Perempuan";}?></td>
	</tr>
	<tr>
	<td>Alamat Pegawai</td><td>:</td><td><?php echo $tampil['alamat_pegawai']." ";?></td>
	</tr>
	<tr>	
	<td>Tanggal Lahir</td><td>:</td><td><?php echo $tampil['tgl_lahir_pegawai']." ";?></td>
	</tr>
	<tr>
	<td>Jabatan</td><td>:</td><td><?php echo $tampil['jabatan']." ";?></td>
	</tr>
	<tr>
</TABLE>
</BODY>
</HTML>
