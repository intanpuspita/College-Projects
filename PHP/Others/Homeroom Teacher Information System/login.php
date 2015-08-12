<?php
	session_start();
	
if(empty($_SESSION['username'])){
?>
<html>
	<head>
		<title>Sistem Absensi</title>
		<link rel="stylesheet" type="text/css" href="style/style.css" />
		<link ilo-ful-src="" rel="shortcut icon" href="images/gbr5.gif" type="image/x icon" />
	</head>
	
	<body>
	<table width="400" height="337" border="0" align="center">
	  <tr>
        <td width="430" align="center"><img src="images/headerlogin.jpg" alt="" width="100%"/>
          <form name="login" class="login" method="post" action="autentikasi.php">
		<?php
			if(!empty($_GET['error'])){
				if($_GET['error']==1){
					echo "<font color=red>Username dan Password belum terisi !</font>";
				} else if($_GET['error']==2){
					echo "<font color=red>Username belum diisi !</font>";
				} else if($_GET['error']==3){
					echo "<font color=red>Password belum diisi !</font>";
				} else if($_GET['error']==4){
					echo "<font color=red>Username dan Password tidak terdaftar !</font>";
				}
			}
		?>	
		<p>
			<label for="login">Username</label>
			<input type="text" name="username" placeholder="Username"/>
		</p>
		<p>
			<label for="password">Password</label>
			<input type="password" name='password' placeholder="Password"/> 
		</p>
		<p>
		    <input type="submit" name="submit" value="Login">
		</p>       
	</form>	</td>
      </tr>
    </table>
	</body>
<?php }
else {
	if($_SESSION['stats']==1){
	header('location:index.php');}
	else{
	header('location:index_wk.php');}
}?>
</html>