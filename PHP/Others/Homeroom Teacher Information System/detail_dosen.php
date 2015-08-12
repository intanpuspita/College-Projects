<?php
	include 'connect.php';
	$kode=$_GET['kd_dosen'];
	
	$sql=mysql_query("select * from dosen where kd_dosen='$kode'");
	$data=mysql_fetch_array($sql);
?>

<h2 align="center">Data Dosen </h2>
  <table width="400" border="0" align="center">
    <tr>
      <td width="160">Kode Dosen </td>
      <td width="8">:</td>
      <td width="191"><?php echo $data['kd_dosen']; ?></td>
    </tr>
    <tr>
      <td>Nama Dosen </td>
      <td>:</td>
      <td><?php echo $data['nama_dosen']; ?></td>
    </tr>
    <tr>
      <td>Jenis Kelamin </td>
      <td>:</td>
      <td><?php if($data['jk_dosen']==1){
			echo "Laki-laki";}
			else{ echo "Perempuan";}?></td>
    </tr>
    <tr>
      <td>Tanggal Lahir </td>
      <td>:</td>
      <td><?php echo $data['tgl_lahirdosen']; ?></td>
    </tr>
    <tr>
      <td>Telepon</td>
      <td>:</td>
      <td><?php echo $data['telp']; ?></td>
    </tr>
    <tr>
      <td>Email</td>
      <td>:</td>
      <td><?php echo $data['email']; ?></td>
    </tr>
  </table>