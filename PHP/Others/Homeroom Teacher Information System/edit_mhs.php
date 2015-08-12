<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body background="web/images.jpg">
<?php
include 'connect.php';
$nim=$_GET['nim'];
$query_kelas=mysql_query("select kd_kelas from kelas");
$query=mysql_query("select * from mhs where nim='$nim'");
while($data=(mysql_fetch_array($query))){
?>
<form id="form1" name="form1" method="post" action="kdupdate_mhs.php">
  <h2 align="center">Form Mahasiswa </h2>
  <table width="381" border="0" align="center">
    <tr>
      <td width="160">NIM</td>
      <td width="8">:</td>
      <td width="191"><label>
        <input name="txtnim" type="text" id="txtnim" maxlength="9" / value="<?php echo $data['nim'];?>">
      </label></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><div align="center">:</div></td>
      <td><label>
        <input name="txtnama_mhs" type="text" id="txtnama_mhs" maxlength="50" value="<?php echo $data['nama_mhs'];?>"/>
      </label></td>
    </tr>
	<tr>
		<td>Kelas</td>
		<td><div align="center">:</div></td>
		<td><label>
		  <select name="kd_kelas" id="kd_kelas">
          <option><?php echo $data['kd_kelas'];?></option>
		  <?php
		  	while($data_kelas=(mysql_fetch_array($query_kelas))){
		  ?>
		  <option><?php echo $data_kelas['kd_kelas'];?></option>
		  <?php
		  }
		  ?>
        </select>
		</label></td>
	</tr>
    <tr>
      <td>Jenis Kelamin </td>
      <td><div align="center">:</div></td>
      <td><label>
        <input name="jk" type="radio" value="1" <?php if($data['jk_mhs']==1){ echo "checked"; }?>/>
      Laki - laki 
      <input name="jk" type="radio" value="0" <?php if($data['jk_mhs']==0){ echo "checked"; }?>/>
      Perempuan</label></td>
    </tr>
    <tr>
      <td>Tanggal Lahir </td>
      <td><div align="center">:</div></td>
      <td><label>
        <input name="txttgl_mhs" type="date" id="txttgl_mhs" maxlength="10" value="<?php echo $data['tgl_lahirmhs']?>" />
      </label></td>
    </tr>
    <tr>
      <td>Alamat Asal </td>
      <td><div align="center">:</div></td>
      <td><label>
        <input name="txtalmt_asl" type="text" id="txtalmt_asl" maxlength="100" value="<?php echo $data['alamat_asal'];?>" />
      </label></td>
    </tr>
    <tr>
      <td>Alamat Sekarang </td>
      <td><div align="center">:</div></td>
      <td><label>
        <input name="txtalmt_skr" type="text" id="txtalmt_skr" maxlength="100" value="<?php echo $data['alamat_sekarang'];?>" />
      </label></td>
    </tr>
    <tr>
      <td>Handphone</td>
      <td><div align="center">:</div></td>
      <td><label>
        <input name="txttelp" type="text" id="txttelp" maxlength="12" value="<?php echo $data['tlp_mhs'];?>" />
      </label></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><div align="center">:</div></td>
      <td><label>
        <input name="txtemail_mhs" type="text" id="txtemail_mhs" value="<?php echo $data['email'];?>" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><label>
      
        <div align="left">
          <input name="update" type="submit" id="update" value="Update" />
        </div>
      </label></td> 
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
</form>
  <?php } ?>
</body>
</html>
