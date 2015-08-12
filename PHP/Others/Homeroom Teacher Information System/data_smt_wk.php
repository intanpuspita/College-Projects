<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<h2 align="center">Data Semester</h2></br></br>
	<?php include'connect.php'; $data=mysql_query("select * from smt");
		if(mysql_num_rows($data)>=1)
		{?>
			<table border='1' width='50%'>
				<tr bgcolor="#0094FF">
					<th width='10%'>NO SEMESTER</th>
					<th>KETERANGAN</th>
				</tr>
				<?php while($tampil = mysql_fetch_array ($data))
					{?>
					<tr>
						<td><?php echo $tampil['no_smt'];?></td>
						<td><?php echo $tampil['keterangan'];?></td>
					</tr>
			<?php }
			echo "</table>";
		}
		else{ 
		echo "<font color='red'>Belum ada data semester dalam database</font>"; } ?>
</body>
</html>
