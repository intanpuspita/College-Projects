<?php 
	$kelas=$_POST['kelas'];
	$minggu=$_POST['minggu_kul'];
	$kuliah=$_POST['kuliah'];
	$data=mysql_query("select * from perkuliahan, kehadiran_mhs, mhs where mhs.kd_kelas='$kelas' and mhs.nim=kehadiran_mhs.nim and kehadiran_mhs.kd_perkuliahan='$kuliah' and kehadiran_mhs.kd_perkuliahan=perkuliahan.kd_perkuliahan and perkuliahan.minggu_ke='$minggu'");
?>
	<table border="0" align="left" width="70%">
	<tr>
		<td width="16%"><b>Absensi Pertemuan <?php echo $kuliah;?></b></td>
		</tr>
			</table>
			<table width="100%" border="1" align="center">
			<tr bgcolor="#0094FF">
				<th>NIM</th>
				<th>NAMA</th>
				<th>KETERANGAN</th>
				<th></th>
			</tr>
			<?php while($tampil=mysql_fetch_array($data))
			{?>
			<tr>
				<td><?php echo $tampil['nim'];?></td>
				<td><?php echo $tampil['nama_mhs'];?></td>
				<td><?php echo $tampil['keterangan'];?></td>
				<td width="30"><a href="index.php?menu=42&kd_absen=<?php echo $tampil['kd_absen'];?>"><img src="images/edit.png" alt=""/></a></td>
			</tr>
			<?php } 
			?>
	</table>
