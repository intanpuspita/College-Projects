<?php 
	session_start(); 
	if(!empty($_SESSION['username'])){
		header('location:indexadmin.php');}
?>
<html>
	<body>
		<form action="cek_login.php" method="POST">
		<h2 align="center">LOG IN</h2>
		<table width="40%" align="center">
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" width="100%"/></td>
			</tr>
			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" width="100%"/></td>
			</tr>
			<tr>
				<td colspan="3" align="center"><input type="submit" name="ogin" value="Login"></td>
			</tr>
		</table>
		</form>
	</body>
</html>