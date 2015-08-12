<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<body>
<form id="form1" name="form1" method="post" action="kd_savedosen.php">
  <h2 align="center">Form Input Data Dosen </h2>
  <table width="314" border="0" align="center">
    <tr>
      <td width="85">Kode Dosen </td>
      <td width="6">:</td>
      <td width="209"><label>
        <input name="txtkd_dosen" type="text" id="txtkd_dosen" maxlength="6" />
      </label></td>
    </tr>
    <tr>
      <td>Nama Dosen </td>
      <td>:</td>
      <td><label>
        <input name="txtnama_dosen" type="text" id="txtnama_dosen" maxlength="50" />
      </label></td>
    </tr>
    <tr>
      <td>Jenis Kelamin </td>
      <td>:</td>
      <td><label>
      <input name="jk" type="radio" value=1 checked/>
      Laki - laki
      <input name="jk" type="radio" value=0 />
      Perempuan</label></td>
    </tr>
    <tr>
      <td>Tanggal Lahir </td>
      <td>:</td>
      <td><label>
        <input name="txttgl_lahirdosen" type="date" id="txttgl_lahirdosen" />
      </label></td>
    </tr>
    <tr>
      <td>Telepon</td>
      <td>:</td>
      <td><label>
        <input name="txttlp_dosen" type="text" id="txttlp_dosen" />
      </label></td>
    </tr>
    <tr>
      <td>Email</td>
      <td>:</td>
      <td><label>
        <input name="txtemail_dosen" type="text" id="txtemail_dosen" />
      </label></td>
    </tr>
  </table>
  <p align="center">
    <label>
    <input name="simpan" type="submit" id="simpan" value="simpan" />
    </label>
  </p>
  <p>&nbsp;</p>
</form>
</body>
</html>
