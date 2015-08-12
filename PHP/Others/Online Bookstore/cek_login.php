<?php
	include 'connect.php';
			
	$user=$_POST['username'];
	$pass=$_POST['password'];
	$data=mysql_query("select * from admin where username='$user' and password='$pass'");
	$akun=mysql_num_rows($data);
	if($akun > 0){
		session_start();
		$_SESSION['username']=$user;
		$_SESSION['password']=$pass;
		header('location:indexadmin.php');
	} 
	else{
		header('location:login.php');
	}
?>