<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<h2 align="center">Data Mata Kuliah</h2></br>
	<?php include'connect.php'; $data=mysql_query("select * from mk");
		if(mysql_num_rows($data)>=1)
		{?>
			<table border='1' width='80%'>
				<tr bgcolor="#0094FF">
					<th width='20%'>KODE MATA KULIAH</th>
					<th>NAMA MATA KULIAH</th>
					<th>JENIS MATA KULIAH</th>
				</tr>
				<?php while($tampil = mysql_fetch_array ($data))
					{?>
					<tr>
						<td><?php echo $tampil['kd_mk'];?></td>
						<td><?php echo $tampil['nama_mk'];?></td>
						<td><?php echo $tampil['jenis_mk'];?></td>
					</tr>
			<?php }
			echo "</table>";
		}
		else{ 
		echo "<font color='red'>Belum ada data mata kuliah dalam database</font>"; } ?>
</body>
</html>
