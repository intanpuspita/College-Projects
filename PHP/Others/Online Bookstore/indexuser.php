<!doctype html>
<?php 
	if(!isset($_GET['menu'])){
		$menu="buku";
	}
	else{
		$menu=$_GET['menu'];
	}
?>
<html lang="en-US">
	<head>
		<meta charset="UTF-8" />
		<title>JTK BOOK STORE</title>
		<link href="style.css" rel="stylesheet" type="text/css">
		<link href="styles/print/main.css" rel="stylesheet" type="text/css" media="print">
		<!--[if IE]>
		<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->
		<!--[if IE 6]>
		<script src="js/belatedPNG.js"></script>
		<script>
			DD_belatedPNG.fix('*');
		</script>
		<![endif]-->
	</head>

	<body>
		<div id="wrap">
			<section id="top">
				<nav id="mainnav">
					<h1 id="sitename" class="logotext">
						<a href="index.php">JTK Book Store</a>
					</h1>
					<ul>
						<li <?php if($menu=="buku"){ echo "class='active'";}?>><a href="indexuser.php?menu=<?php echo $menu;?>"><span>Buku</span></a></li>
						<li <?php if($menu=="beli"){ echo "class='active'";}?>><a href="indexuser.php?menu=<?php echo "beli";?>"><span>Pemesanan</span></a></li>
					</ul>
				</nav>
			</section>
			
			<section id="page">
				<header id="pageheader" class="homeheader">
					<h2 class="sitedescription">
					Selamat datang di JTK BOOK STORE</br>Memberikan kemudahan dalam pembelian buku secara online</h2>
				</header>
				<section id="contents">
					<?php if($menu=="buku"){ include 'lihat_buku.php';}
					else if($menu=="beli"){ include 'pesan_buku.php';}?>
				</section>
				<div class="clear"></div>
				<div class="clear"></div>
			</section>
		</div>
		
		<footer id="pagefooter">
			<div id="f-content">
				<img src="images/bamboo.png" width="96" height="125" alt="bamboo" id="footerimg">
				<div id="social-links">
					<!--<a href="#" class="fblink">Facebook</a>
					<a href="#" class="twtlink">Twitter</a>-->
				</div>
				<div id="credits">
					<p class="sitecredit"> 2010 &amp; All Rights Reserved | yourwebsite.com </p>
					<p class="designcredit"><a href="http://www.cssheaven.org" title="Download Free CSS Templates">CSS Template</a> by CSSHeaven</p>
				</div>
			</div>
		</footer>

	</body>
</html>
