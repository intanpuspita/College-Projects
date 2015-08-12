<!doctype html>

<head>
<meta charset="UTF-8" />
<title>Techno-news</title>

<link href="<?php echo base_url();?>/style.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url();?>/styles/print/main.css" rel="stylesheet" type="text/css" media="print">
<link ilo-ful-src="" rel="shortcut icon" href="<?php echo base_url();?>/images/tlogo.png" type="image/x icon" />
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
<body id="normalpage">
<div id="wrap">

	<header id="mainheader">
		<?php echo $_header;?>
	</header>
	<?php echo $_content;?>
</div>

<div id="footerwrap">
	<?php echo $_footer;?>
</div>

<script type="text/javascript" src="<?php echo base_url();?>/js/jquery.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/js/collection.js"></script>
<script type="text/javascript">
	$(function(){
		$('#slider').loopedSlider({
			autoStart: 6000,
			restart: 5000
		});
		
	});
</script>
</body>
</html>