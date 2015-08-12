<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<h2 align="center">Data Assignment</h2>
	<table height='26' align="right">
		<tr>
			<td><a href="index.php?menu=51"><img src="images/Insert.jpg" alt=""/>Tambah Data</a></td>
		</tr>
	</table></br></br>
	<table border='1' width='100%'>
		<tr bgcolor="#0094FF">
			<th>KODE ASSIGNMENT</th>
			<th>MATA KULIAH</th>
			<th>DOSEN</th>
			<th>SEMESTER</th>
			<th>KELAS</th>
			<th></th>
		</tr>
	<?php
		include 'connect.php';
		$data=mysql_query("select * from assigment");
		
		if(mysql_num_rows($data)>=1){
			while($tampil = mysql_fetch_array ($data))
		{ ?>
		<tr>
			<td><?php echo $tampil['kd_assignment'];?></td>
			<td><?php $matkul=mysql_query("select * from assigment, mk where mk.kd_mk='$tampil[kd_mk]'");
			$record = mysql_fetch_array($matkul);
			echo $record['nama_mk'];?></td>
			<td><?php $dosen=mysql_query("select nama_dosen from dosen, assigment where dosen.kd_dosen=assigment.kd_dosen");
			$record = mysql_fetch_array($dosen);
			echo $record['nama_dosen']?></td>
			<td><?php echo $tampil['no_smt'];?></td>
			<td><?php echo $tampil['kd_kelas'];?></td>
			<td width="30"><a href="index.php?menu=52&kd_assignment=<?php echo $tampil['kd_assignment']?>"><img src="images/edit.png" alt=""/></a></td>
		</tr>
		<?php }
		echo "</table>";
		}
		else{ echo "<font color='red'>Belum ada data mahasiswa dalam database</font>"; }
	?>
</body>
</html>
