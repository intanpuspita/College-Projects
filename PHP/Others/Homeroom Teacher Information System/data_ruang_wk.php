<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<h2 align="center">Data Ruang</h2>
	<?php include'connect.php'; $data=mysql_query("select * from ruang");
		if(mysql_num_rows($data)>=1)
		{?>
			<table border='1' width='60%'>
				<tr bgcolor="#0094FF">
					<th width='30%'>KODE RUANG</th>
					<th>NAMA RUANG</th>
					<th>JENIS RUANG</th>
				</tr>
				<?php while($tampil = mysql_fetch_array ($data))
					{?>
					<tr>
						<td><?php echo $tampil['kd_ruang'];?></td>
						<td><?php echo $tampil['nama_ruang'];?></td>
						<td><?php echo $tampil['jenis_ruang'];?></td>
					</tr>
			<?php }
			echo "</table>";
		}
		else{ 
		echo "<font color='red'>Belum ada data semester dalam database</font>"; } ?>
</body>
</html>
