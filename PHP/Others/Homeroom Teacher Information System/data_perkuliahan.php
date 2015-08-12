<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
	<h2 align="center">Data Perkuliahan</h2>
	<form name="form1" action="" method="POST">
	<table width="100%" height="26" border="0">
	<tr>
      <td width="109"><label>Cari berdasarkan : </label></td>
        <td width="103"><label>
          <select name="pilih">
            <option>----Pilih----</option>
            <option value=1>Mata Kuliah</option>
            <option value=2>Minggu ke</option>
          </select>
      </label></td>
	  <td width="147"><input name="keyword" type="text" /></td>
	  <td width="43"><input name="Cari" type="submit" value="Cari" /></td>
    	<td width="161" align="center"><a href="index.php?menu=61"><img src="images/Insert.jpg" alt=""/>Tambah Mahasiswa</a></td>
	</form>
		<td width="105" align="center"><a href="report_kuliah.php"><img src="images/print.jpg" alt=""/>Cetak Laporan</a></td>
	</tr>
  </table></br>
	<?php
		if(isset($_POST['Cari'])){
			include 'kd_searchkuliah.php';
		}
		else {
		$data=mysql_query("select * from perkuliahan");
		if(mysql_num_rows($data)>=1)
		{?>
			<table border='1' width='100%'>
				<tr bgcolor="#0094FF">
					<th width="10%">MINGGU KE-</th>
					<th width="20%">TANGGAL PERKULIAHAN</th>
					<th width="20%">KODE PERKULIAHAN</th>
					<th>MATA KULIAH</th>
					<th colspan="2"></th>
				</tr>
				<?php while($tampil = mysql_fetch_array ($data))
					{?>
					<tr>
						<td><?php echo $tampil['minggu_ke'];?></td>
						<td><?php echo $tampil['tgl_kuliah'];?></td>
						<td width="100"><?php echo $tampil['kd_perkuliahan'];?></td>
						<td><?php $matkul=mysql_query("select * from assigment, mk, perkuliahan where assigment.kd_assignment='$tampil[kd_assignment]' and assigment.kd_mk=mk.kd_mk");
						$record = mysql_fetch_array($matkul);
						echo $record['nama_mk']?></td>
						<td width="30"><a href="index.php?menu=62&kd_perkuliahan=<?php echo $tampil['kd_perkuliahan']?>"><img src="images/edit.png" alt=""/></a></td>
						<td width="30"><a href="index.php?menu=63&kd_perkuliahan=<?php echo $tampil['kd_perkuliahan']?>"><img src="images/detail.png" alt=""/></a></td>
					</tr>
			<?php }
			echo "</table>";
		}
		}?>
</body>
</html>
