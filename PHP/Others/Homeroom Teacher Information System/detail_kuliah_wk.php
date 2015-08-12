<?php
	include 'connect.php';
	$kode=$_GET['kd_perkuliahan'];
	
	$sql=mysql_query("select * from perkuliahan where kd_perkuliahan='$kode'");
	$data=mysql_fetch_array($sql);
?>
<h2 align="center">Data Perkuliahan </h2>
  <table width="420" border="0" align="center">
    <tr>
      <td width="150">Kode Perkuliahan </td>
      <td width="6">:</td>
      <td width="209"><?php echo $data['kd_perkuliahan']; ?></td>
    </tr>
    <tr>
      <td>Kode Assignment </td>
      <td>:</td>
      <td><?php echo $data['kd_assignment']; ?></td>
    </tr>
    <tr>
      <td>Kode Ruang </td>
      <td>:</td>
      <td><?php echo $data['kd_ruang']; ?></td>
    </tr>
    <tr>
      <td>Tanggal Perkuliahan</td>
      <td>:</td>
      <td><?php echo $data['tgl_kuliah']; ?></td>
    </tr>
    <tr>
      <td>Jam Awal</td>
      <td>:</td>
      <td><?php echo $data['jam_awal']; ?></td>
    </tr>
    <tr>
      <td>Jam Akhir</td>
      <td>:</td>
      <td><?php echo $data['jam_akhir']; ?></td>
    </tr>
	<tr>
      <td>Kehadiran Dosen</td>
      <td>:</td>
      <td><?php echo $data['kehadiran_dosen']; ?></td>
    </tr>
  </table>