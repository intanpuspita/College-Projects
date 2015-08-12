<?php include 'connect.php';
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
<!--<script type="text/javascript" src="js/jquery-1.9.1.js"></script>-->
<script type="text/javascript" src="js/jquery-ui.js"></script>
<!--<link rel="stylesheet" href="/resources/demos/style.css" />-->

<script>
$(function() {
$( "#datepicker" ).datepicker();
});
</script>

<meta charset="utf-8">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="all">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="all">
<link rel="stylesheet" href="css/style.css" type="text/css" media="all">
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
	<!--<embed src="images/logopanti.swf"/>-->
<!-- header -->
		<header>
		<!--<div class="body2">-->
			<div class="wrapper">
				<h1><a href="index.php" title="Panti Asuhan"><embed src="images/logopanti.swf" width="960px" height="190px"/></a></h1>
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
				<ul id="menu" align="center">
					<li><a href="index.php" class="nav1">Beranda</a></li>
					<li><a href="index.php?menu=<?php echo "kegiatan";?>" class="nav2">Kegiatan<span class="style1"></span></a></li>
					<li><a href="index.php?menu=<?php echo "galeri";?>" class="nav3">Galeri</a></li>
					<li><a href="index.php?menu=<?php echo "donasi";?>" class="nav4">Donasi</a></li>
					<li><a href="index.php?menu=<?php echo "profil";?>" class="nav5">Profil</a></li>
					<li class="end"><a href="index.php?menu=<?php echo "kontakkami";?>" class="nav6">Kontak Kami</a></li>
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
		  <article class="col1">
				<h3><a href="#">Kegiatan</a></h3>
				<div class="pad">
					<div class="wrapper under">
						<ul class="list1 cols">
						<?php 
						$dataPerPage = 5;

						// apabila $_GET['page'] sudah didefinisikan, gunakan nomor halaman tersebut,
						// sedangkan apabila belum, nomor halamannya 1.

						if(isset($_GET['page']))
						{
							$noPage = $_GET['page'];
						}else $noPage = 1;

						// perhitungan offset
						$offset = ($noPage - 1) * $dataPerPage;
						$kegiatan="select * from kegiatan LIMIT $offset, $dataPerPage";
						$result = mysql_query($kegiatan) or die('Error');
						while($datakegiatan=mysql_fetch_array($result)){ ?>
							<li><a href="index.php?menu=<?php echo "detail-kegiatan";?>&kegiatan=<?php echo $datakegiatan['id_kegiatan']?>" title="<?php echo $datakegiatan['nama_kegiatan']; ?>"><?php echo $datakegiatan['nama_kegiatan']; ?></a></li>
						<?php } ?>
						
						</ul><?php
						$hasil  = mysql_query("SELECT COUNT(*) AS jumData FROM kegiatan");
						$data     = mysql_fetch_array($hasil);

						$jumData = $data['jumData'];

						// menentukan jumlah halaman yang muncul berdasarkan jumlah semua data
						$jumPage = ceil($jumData/$dataPerPage);

						// menampilkan link first
						echo "<a href='index.php?page=1'>&lt;&lt; First</a>";

						// menampilkan link previous
						if ($noPage > 1) echo  "<a href='index.php?page=".($noPage-1)."'>&lt; Prev </a>";

						// memunculkan nomor halaman dan linknya
						for($page = 1; $page <= $jumPage; $page++)
						{
							if ((($page >= $noPage - 3) && ($page <= $noPage + 3)) || ($page == 1) || ($page == $jumPage))
							{
								/*if (($showPage == 1) && ($page != 2))  echo "...";
								if (($showPage != ($jumPage - 1)) && ($page == $jumPage))  echo "...";*/
								if ($page == $noPage) echo " <b>".$page." | </b> ";
								else echo " <a href='index.php?page=".$page."'>".$page." | </a> ";
							$showPage = $page;
							}
						}

						// menampilkan link next
						if ($noPage < $jumPage) echo "<a href='index.php?page=".($noPage+1)."'>Next &gt;</a>";

						// menampilkan link last
						echo  "<a href='index.php?page=".($jumPage)."'>Last &gt;&gt;</a>";
					?>
					</div>
				</div>
				<h3><a href="#">Galeri</a></h3>
				<div class="pad">
					<div class="wrapper under">
						<?php $foto=mysql_query("select * from foto");
						$datafoto=mysql_fetch_array($foto);?>
						<img src="<?php echo $datafoto['file_foto'];?>" width="200px" height="200px"></br></br>
					</div>
				</div>
        	</article>
			<article class="col2 pad_left1">
				<?php if($menu == "beranda"){
					include 'beranda.php';}
				else if($menu == "kegiatan"){
					include 'kegiatan.php';}
				else if($menu == "detail-kegiatan"){
					include 'view-detail-kegiatan.php';}
				else if($menu == "galeri"){
					include 'galery.php';}
				else if($menu == "donasi"){
					include 'donasi.php';}
				else if($menu == "donasi_uang"){
					include 'frm-donasi-uang.php';}
				else if($menu == "donasi_barang"){
					include 'frm-donasi-barang.php';}
				else if($menu == "profil"){
					include 'profil.php';}
				else if($menu == "profilpanti"){
					include 'profilpanti.php';}
				else if($menu == "anakasuh"){
					include 'anakasuh.php';}
				else if($menu == "pegawai"){
					include 'pegawai.php';}
				else if($menu == "prestasi"){
					include 'prestasi.php';}
				else if($menu == "kontakkami"){
					include 'kontakkami.php';}?>
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
			<pre><a href="index.php?menu=<?php echo 'beranda'?>">Beranda</a>		||	<a href="index.php?menu=<?php echo 'kegiatan'?>">Kegiatan</a>	||	<a href="index.php?menu=<?php echo 'galeri'?>">Galeri</a>		||	<a href="index.php?menu=<?php echo 'donasi'?>">Donasi</a>		||	<a href="index.php?menu=<?php echo 'profil'?>">Profil</a>	||	<a href="index.php?menu=<?php echo 'kontakkami'?>">Kontak Kami</a></pre><br>
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