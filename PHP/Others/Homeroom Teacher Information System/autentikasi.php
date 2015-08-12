<?php
	//include(config.php);
	session_start();
	
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	$username=mysql_real_escape_string($username);
	$password=mysql_real_escape_string($password);
	
	if(empty($username) && empty($password)){
		header('location:login.php?error=1');
		break;
	} else if(empty($username)){
		header('location:login.php?error=2');
		break;
	} else if(empty($password)){
		header('location:login.php?error=3');
		break;
	}
	
	include 'connect.php';
	$ambil=mysql_query("select * from akun where username='$username' and password='$password'");
	$cek=mysql_num_rows($ambil);
	
	if($cek==1){	
		$stats=mysql_fetch_array($ambil);
		$_SESSION['username']=$username;
		$_SESSION['password']=$password;
		$_SESSION['stats']=$stats['status'];
		if($stats['status']==1){
			header('location:index.php');}
		else{
			header('location:index_wk.php');}
	} else{
		header('location:login.php?error=4');
	}
?>