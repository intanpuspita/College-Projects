<?php 
include 'connect.php';
$vusername=$_POST['username'];
$vpassword=$_POST['password'];

$cek=mysql_query("select * from admin where nama_admin='$vusername' and password='$vpassword' ");

$hasil=mysql_num_rows($cek);
	
	if($hasil==1){
		session_start();
		$_SESSION['nama_admin']=$vusername;
		$_SESSION['password']=$vpassword;	
		header("location:index-admin.php");
	} else{
		header("location:login.php");
	}


?>