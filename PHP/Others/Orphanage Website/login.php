<?php
session_start();
if(!empty($_SESSION['username']))
{
header("location:index.php");
}?>
<HTML>
<HEAD>
	<TITLE>Panti Asuhan</TITLE>
	<style>
		.button {display:inline-block;font-size:16px;color:#fff;background:#f09e2f;line-height:35px;padding:0 16px;border-radius:4px;-moz-border-radius:4px;-webkit-border-radius:4px;behavior:url(js/PIE.htc);position:relative;font-weight:600;text-decoration:none;text-transform:uppercase}
		.button:hover {background:#8cbd20}
		.input {float:right;width:200px;border:1px solid #dcdcdc; background:#fff; margin-bottom:6px;color:#323232;font:13px Arial, Helvetica, sans-serif}
	</style>
</HEAD>
<BODY>
<table width="960" align="center"  background="images/bg.jpg">
<tr><td height="190">
				<h1><a href="index-admin.php" title="Panti Asuhan"><embed src="images/logopanti.swf" width="960px" height="190px"/></a></h1>
</td>
</tr>
<tr><td valign="top">
<table height="350" align="center">
<tr><td width="750">
<TABLE width="572" height="251" align="center" bgcolor="#3366FF" align="center">
<tr>
<td width="572" >
  <div align="center"><font color="#FFFFFF" size="+6">Login Admin</font></div></td>
</tr>
<tr>
<td height="212"><FORM name="formlogin" action="cek_login.php" method="post">
  <TABLE align="center" bgcolor="#3366FF">
	<tr>
		<td><font color="#FFFFFF">Nama Pengguna</font></td>
		<td>:</td><td><input type="text" name="username" class="input"></td>
	</tr>
	<tr>
		<td><font color="#FFFFFF">Kata Sandi</font> </td>
		<td>:</td><td><input type="password" name="password" class="input"></td>
	</tr>
	<tr>
	<td colspan="3" align="center">
	<input name="login" type="submit" value="Login" class="button">
	</td>
	</tr>
	</TABLE>
	</FORM>
	</td>
</tr>
</TABLE>

</td></tr>
</table>
</td>
</tr>
</table>
</BODY>
</HTML>