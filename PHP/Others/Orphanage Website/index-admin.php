<?php
session_start();
if(!isset($_SESSION['username']) && !isset($_SESSION['password'])){
	echo"<script>alert('Anda tidak berhak mengakses halaman ini')
	document.location='login.php'</script>";
}
 include 'connect.php';
	if(!isset($_GET['menu'])){
		$menu = "beranda";
	}
	else{
		$menu = $_GET['menu'];
	}
?>
	
<!DOCTYPE html>
<html lang="en">
<head>
<title>Panti Asuhan</title>
<link rel="stylesheet" href="css/jquery-ui.css" />
<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<!--<link rel="stylesheet" href="/resources/demos/style.css" />-->
<script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>

<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout2.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style2.css" type="text/css" media="all">
<!--<script type="text/javascript" src="js/jquery-1.4.2.js" ></script>-->
<link rel="stylesheet" type="text/css" href="js/fancybox/jquery.fancybox-1.3.4.css" media="screen" />
<script type="text/javascript" src="js/jquery-1.4.3.min.js"></script> 
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/cufon-replace.js"></script>  
<script type="text/javascript" src="js/Myriad_Pro_600.font.js"></script>
<!--[if lt IE 9]>
	<script type="text/javascript" src="http://info.template-help.com/files/ie6_warning/ie6_script_other.js"></script>
	<script type="text/javascript" src="js/html5.js"></script>
<![endif]-->
<style type="text/css">
<!--
.style1 {color: #fff}
-->
</style>
<script type="text/javascript" src="js/jquery.mousewheel-3.0.4.pack.js"></script>
<script type="text/javascript" src="js/fancybox/jquery.fancybox-1.3.4.pack.js"></script>
<script type="text/javascript">

		$(document).ready(function() {
			$('.projects li figure a img').animate({'opacity' : 1}).hover(function() {
				$(this).animate({'opacity' : .5});
			}, function() {
				$(this).animate({'opacity' : 1});
			});
			$('.zoom img').animate({'opacity' : 1}).hover(function() {
				$(this).animate({'opacity' : .5});
			}, function() {
				$(this).animate({'opacity' : 1});
			});

			$("a[rel=work]").fancybox({
				'transitionIn'		: 'elastic',
				'transitionOut'		: 'elastic',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});
			$("a[rel=recent_work]").fancybox({
				'transitionIn'		: 'elastic',
				'transitionOut'		: 'elastic',
				'titlePosition' 	: 'over',
				'titleFormat'		: function(title, currentArray, currentIndex, currentOpts) {
					return '<span id="fancybox-title-over">Image ' + (currentIndex + 1) + ' / ' + currentArray.length + (title.length ? ' &nbsp; ' + title : '') + '</span>';
				}
			});

			
		});
	</script>
</head>
<body id="page2">
<div class="extra">
	<div class="main">
	<Table class="right"><tr align="right"><td><?php echo $_SESSION['nama_admin'];?></td><td width="20%" align="left" valign="top"> [<a href="logout.php">LogOut</a>]</td></tr></table>
<!-- header -->
		<header>
		<!--<div class="body2">-->
			<div class="wrapper">
				<h1><a href="index-admin.php" title="Panti Asuhan"><embed src="images/logopanti.swf" width="960px" height="190px"/></a></h1>
				<!--<div class="right">
					<div class="wrapper">
						<nav>
							<ul id="top_nav">
								<li><a href="#">Log In</a></li>	
							</ul>
						</nav>
					</div>
					<div class="wrapper">
						
						<form id="search" action="" method="post">
							<div class="bg">
								<input type="submit" class="submit" value="">
								<input type="text" class="input" placeholder="Cari berdasarkan keyword">
							</div>
						</form>
					</div>	
				</div>-->
			</div>
			<nav>
			
				<ul id="menu">
					<li><a href="index-admin.php" class="nav1">Beranda</a></li>
					<li><a href="index-admin.php?menu=<?php echo "kegiatan";?>" class="nav2">Kegiatan<span class="style1"></span></a></li>
					<li><a href="index-admin.php?menu=<?php echo "galeri";?>" class="nav3">Galeri</a></li>
					<li><a href="index-admin.php?menu=<?php echo "donasi";?>" class="nav4">Donasi</a></li>
					<li><a href="index-admin.php?menu=<?php echo "anakasuh";?>" class="nav5">Anak asuh</a></li>
					<li class="end"><a href="index-admin.php?menu=<?php echo "datapanti";?>" class="nav6">Data Panti</a></li>
				</ul>
			</nav>
		</header>
	   <!--</div>-->
<!-- / header -->
<!-- content -->
		<article class="coll">
		<marquee>
		<p><strong>Ulurkan cintamu karena Tuhanmu dan tariklah cintamu karena Tuhanmu..</strong></p>
		</marquee>
		</article>
		<section id="content">
		  <!--<article class="col1">
				<h3><a href="#">Kegiatan</a></h3>
				<div class="pad">
					<div class="wrapper under">
						<ul class="list1 cols">
						
						</ul>
					</div>
				</div>
				<h3><a href="#">Galeri</a></h3>
				<div class="pad">
					<div class="wrapper under">
						<img src="contents/kegiatan1.jpg" width="200px" height="200px"></br></br>
					</div>
				</div>
        	</article>-->
			<article class="col2">
				<?php if($menu == "beranda"){
					include 'beranda.php';}
				else if($menu == "donasi"){
					include 'donasi-admin.php';}
				else if($menu == "datapanti"){
					include 'datapanti.php';}
				else if($menu == "kegiatan"){
					include 'lihat-kegiatan.php';}
				else if($menu == "pegawai"){
					include 'lihat-pegawai.php';}
				else if($menu == "prestasi"){
					include 'lihat-prestasi.php';}
				else if($menu == "galeri"){
					include 'lihat-album.php';}
				else if($menu == "donasi_uang"){
					include 'lihat-donasi-uang.php';}
				else if($menu == "kembali-uang"){
					include 'lihat-donasi-uang.php';}
				else if($menu == "donasi_barang"){
					include 'lihat-donasi-barang.php';}
				else if($menu == "kembali-barang"){
					include 'lihat-donasi-barang.php';}
				else if($menu == "anakasuh"){
					include 'lihat-anak-asuh.php';}
				else if($menu == "delete-kegiatan"){
					include 'delete-kegiatan.php';}
				else if($menu == "frm-kegiatan"){
					include 'frm-kegiatan.php';}
				else if($menu == "frm-prestasi"){
					include 'frm-prestasi.php';}
				else if($menu == "frm-album"){
					include 'frm-album.php';}
				else if($menu == "frm-anak-asuh"){
					include 'frm-anak-asuh.php';}
				else if($menu == "frm-foto"){
					include 'frm-foto.php';}
				else if($menu == "frm-uang"){
					include 'frm-donasi-uang.php';}
				else if($menu == "frm-pegawai"){
					include 'frm-pegawai.php';}
				else if($menu == "detail-anak-asuh"){
					include 'view-detail-anak-asuh.php';}	
				else if($menu == "detail-prestasi"){
					include 'view-detail-prestasi.php';}
				else if($menu == "detail-album"){
					include 'view-detail-album.php';}
				else if($menu == "detail-barang"){
					include 'view-detail-sumbang-barang.php';}
				else if($menu == "detail-foto"){
					include 'view-detail-foto.php';}
				else if($menu == "detail-kegiatan"){
					include 'view-detail-kegiatan.php';}
				else if($menu == "detail-pegawai"){
					include 'view-detail-pegawai.php';}
				else if($menu == "detail-uang"){
					include 'view-detail-sumbang-uang.php';}
				else if($menu == "update-album"){
					include 'update-album.php';}
				else if($menu == "update-prestasi"){
					include 'update-detail-prestasi.php';}
				else if($menu == "update-anak-asuh"){
					include 'update-anak-asuh.php';}
				else if($menu == "update-foto"){
					include 'update-foto.php';}
				else if($menu == "update-pegawai"){
					include 'update-detail-pegawai.php';}
				else if($menu == "edit-kegiatan"){
					include 'update-kegiatan.php';}
				else if($menu == "edit-barang"){
					include 'update-detail-sumbang-barang.php';}
				else if($menu == "edit-uang"){
					include 'update-detail-sumbang-uang.php';}
				else if($menu == "delete-uang"){
					include 'delete-sumbang-uang.php';}
				else if($menu == "frm-barang"){
					include 'frm-donasi-barang.php';}
				else if($menu == "delete-barang"){
					include 'delete-sumbang-barang.php';}?>
       		</article>
		</section>
<!-- / content -->
	</div>
	<div class="block"></div>
</div><!--</td></tr>
<tr>
<td>-->
<div class="body1">
	<div class="main">
<!-- footer -->
		<footer>
			<pre><a href="index-admin.php?menu=<?php echo 'beranda'?>">Beranda</a>		||	<a href="index-admin.php?menu=<?php echo 'kegiatan'?>">Kegiatan</a>	||	<a href="index-admin.php?menu=<?php echo 'galeri'?>">Galeri</a>		||	<a href="index-admin.php?menu=<?php echo 'donasi'?>">Donasi</a>		||	<a href="index-admin.php?menu=<?php echo 'anakasuh'?>">Anak Asuh</a>	||	<a href="index-admin.php?menu=<?php echo 'datapanti'?>">Data Panti</a></pre><br>
			<a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">www.templatemonster.com</a><br>
			<a href="http://www.templates.com/product/3d-models/" target="_blank" rel="nofollow">www.templates.com</a>
		</footer>
<!-- / footer -->
	</div>
</div>
<!--</td>
</tr>
</table>-->
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>