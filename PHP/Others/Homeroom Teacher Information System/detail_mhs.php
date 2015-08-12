<?php
	include 'connect.php';
	$vnim=$_GET['nim'];
	
	$sql=mysql_query("select * from mhs where nim='$vnim'");
	$data=mysql_fetch_array ($sql);
?>
	
<h2 align="center">Data Mahasiswa </h2>
  <table width="400" border="0" align="center">
    <tr>
      <td width="160">NIM</td>
      <td width="8">:</td>
      <td width="191"><?php echo $data['nim']; ?></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><div align="center">:</div></td>
      <td><?php echo $data['nama_mhs']; ?></td>
    </tr>
    <tr>
      <td>Kelas</td>
      <td><div align="center">:</div></td>
      <td><?php echo $data['kd_kelas']; ?></td>
    </tr>
	<tr>
      <td>Jenis Kelamin </td>
      <td><div align="center">:</div></td>
      <td><?php if($data['jk_mhs']==1){
			echo "Laki-laki";}
			else{ echo "Perempuan";}?></td>
    </tr>
    <tr>
      <td>Tanggal Lahir </td>
      <td><div align="center">:</div></td>
      <td><?php echo $data['tgl_lahirmhs']; ?></td>
    </tr>
    <tr>
      <td>Alamat Asal </td>
      <td><div align="center">:</div></td>
      <td><?php echo $data['alamat_asal']; ?></td>
    </tr>
    <tr>
      <td>Alamat Sekarang </td>
      <td><div align="center">:</div></td>
      <td><?php echo $data['alamat_sekarang']; ?></td>
    </tr>
    <tr>
      <td>Handphone</td>
      <td><div align="center">:</div></td>
      <td><?php echo $data['tlp_mhs']; ?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><div align="center">:</div></td>
      <td><?php echo $data['email']; ?></td>
    </tr>
  </table>