<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<body>
<form action="" method="post" name="form1">
	<h2 align="center">Data Mahasiswa</h2>
	<table width="100%" height="26" border="0">
	<tr>
      <td width="109"><label>Cari berdasarkan : </label></td>
        <td width="103"><label>
          <select name="pilih">
            <option>----Pilih----</option>
            <option value=1>NIM</option>
            <option value=2>NAMA</option>
          </select>
      </label></td>
        <td width="69">Keyword : </td>
		<td width="147"><input name="keyword" type="text" /></td>
		<td width="43"><input name="Cari" type="submit" value="Cari" /></td>
		<td width="105" align="center"><a href="report_mhs.php"><img src="images/print.jpg" alt=""/>Cetak Laporan</a></td>
	</tr>
  </table>
</form>
</br>
<?php
	if(isset($_POST['Cari']))
	{
		include 'kd_searchmhs_wk.php';
	}
	else
	{
		$data=mysql_query("select * from mhs");
		if(mysql_num_rows($data)>=1){?>
		<table border='1' width='85%'>
		<tr bgcolor="#0094FF">
			<th width='15%'>NIM</th>
			<th>NAMA</th>
			<th></th>
		</tr>
		<?php while($tampil = mysql_fetch_array ($data))
		{ ?>
		<tr>
			<td><?php echo $tampil['nim'];?></td>
			<td><?php echo $tampil['nama_mhs'];?></td>
			<td width="30"><a href="index_wk.php?menu=21&nim=<?php echo $tampil['nim']?>"><img src="images/detail.png" alt=""/></a></td>
		</tr>
		<?php
		}
		echo "</table>";
		}
		else{ echo "<font color='red'>Belum ada data mahasiswa dalam database</font>"; }
	}
?>	
</body>
</html>
