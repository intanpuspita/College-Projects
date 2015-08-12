<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<?php include 'connect.php'; 
$query_kelas=mysql_query("select kd_kelas from kelas"); ?>
<body>
<form id="form1" name="form1" method="post" action="kd_savemhs.php">
  <h2 align="center">Form Mahasiswa </h2>
  <table width="381" border="0" align="center">
    <tr>
      <td width="160">NIM</td>
      <td width="8">:</td>
      <td width="191"><label>
        <input name="txtnim" type="text" id="txtnim" maxlength="9" />
      </label></td>
    </tr>
    <tr>
      <td>Nama</td>
      <td><div align="center">:</div></td>
      <td><label>
        <input name="txtnama_mhs" type="text" id="txtnama_mhs" maxlength="50" />
      </label></td>
    </tr>
	<tr>
		<td>Kelas</td>
		<td><div align="center">:</div></td>
		<td><label>
		  <select name="kelas" id="kelas">
          <option>----Pilih----</option>
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
        <input name="jk" type="radio" value="1" checked/>
      Laki - laki 
      <input name="jk" type="radio" value="0" />
      Perempuan</label></td>
    </tr>
    <tr>
      <td>Tanggal Lahir </td>
      <td><div align="center">:</div></td>
      <td><label>
        <input name="txttgl_mhs" type="date" id="txttgl_mhs" maxlength="10" />
      </label></td>
    </tr>
    <tr>
      <td>Alamat Asal </td>
      <td><div align="center">:</div></td>
      <td><label>
        <input name="txtalmt_asl" type="text" id="txtalmt_asl" maxlength="100" />
      </label></td>
    </tr>
    <tr>
      <td>Alamat Sekarang </td>
      <td><div align="center">:</div></td>
      <td><label>
        <input name="txtalmt_skr" type="text" id="txtalmt_skr" maxlength="100" />
      </label></td>
    </tr>
    <tr>
      <td>Handphone</td>
      <td><div align="center">:</div></td>
      <td><label>
        <input name="txttelp" type="text" id="txttelp" maxlength="12" />
      </label></td>
    </tr>
    <tr>
      <td>Email</td>
      <td><div align="center">:</div></td>
      <td><label>
        <input name="txtemail_mhs" type="text" id="txtemail_mhs" />
      </label></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><div align="center"></div></td>
      <td><label>
      
        <div align="left">
          <input name="btnsimpan" type="submit" id="btnsimpan" value="Simpan" />
        </div>
      </label></td>
    </tr>
  </table>
</form>
</body>
</html>
