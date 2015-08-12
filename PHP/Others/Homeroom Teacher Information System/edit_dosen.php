<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php 
include 'connect.php';
$kd_dosen=$_GET['kd_dosen'];
$query=mysql_query("select * from dosen where kd_dosen='$kd_dosen'");
while($data=(mysql_fetch_array($query))){
?>
<form id="form1" name="form1" method="post" action="kdupdate_dosen.php">
  <h2 align="center">Form Input Data Dosen </h2>
  <table width="314" border="0" align="center">
    <tr>
      <td width="85">Kode Dosen </td>
      <td width="6">:</td>
      <td width="209"><label>
        <input name="txtkd_dosen" type="text" id="txtkd_dosen" maxlength="6" value="<?php echo $data['kd_dosen'];?>" />
      </label></td>
    </tr>
    <tr>
      <td>Nama Dosen </td>
      <td>:</td>
      <td><label>
        <input name="txtnama_dosen" type="text" id="txtnama_dosen" maxlength="50" value="<?php echo $data['nama_dosen'];?>" />
      </label></td>
    </tr>
    <tr>
      <td>Jenis Kelamin </td>
      <td>:</td>
      <td><label>
        <input name="jk" type="radio" value=1 <?php if($data['jk_dosen']==1){ echo "checked"; }?>/>
      Laki - laki
      <input name="jk" type="radio" value=0 <?php if($data['jk_dosen']==0){ echo "checked"; }?>/>
      Perempuan</label></td>
    </tr>
    <tr>
      <td>Tanggal Lahir </td>
      <td>:</td>
      <td><label>
        <input name="txttgl_lahirdosen" type="date" id="txttgl_lahirdosen" value="<?php echo $data['tgl_lahirdosen'];?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Telepon</td>
      <td>:</td>
      <td><label>
        <input name="txttlp_dosen" type="text" id="txttlp_dosen" value="<?php echo $data['telp'];?>"/>
      </label></td>
    </tr>
    <tr>
      <td>Email</td>
      <td>:</td>
      <td><label>
        <input name="txtemail_dosen" type="text" id="txtemail_dosen" value="<?php echo $data['email'];?>" /><?php } ?>
      </label></td>
    </tr>
  </table>
  <p align="center">
    <label>
    <input name="Update" type="submit" id="Update" value="Update" />
    </label>
  </p>
  <p>&nbsp;</p>
</form>
</body>
</html>
