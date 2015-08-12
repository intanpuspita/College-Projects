<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>/css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>/css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="<?php echo base_url();?>/css/style.css">
    <link href='http://fonts.googleapis.com/css?family=Lato:300italic' rel='stylesheet' type='text/css'>
    <script src="<?php echo base_url();?>/js/jquery-1.7.min.js"></script>
    <script src="<?php echo base_url();?>/js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url();?>/js/cufon-yui.js"></script>
    <script src="<?php echo base_url();?>/js/cufon-replace.js"></script>
    <script src="<?php echo base_url();?>/js/Bilbo_400.font.js"></script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body>
   <header> 
       <?php echo $_header;?>
    </header>  
  <!--==============================content================================-->
    <section id="content">
    	<div class="container_12 top">
            <?php echo $_content;?>
        </div>
    </section> 
<!--==============================footer=================================-->
  <footer>
      <?php echo $_footer;?>
  </footer>		
</body>
</html>