
<script type="text/javascript" src="<?php echo base_url();?>/js/jquery.roundabout-1.0.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>/js/jquery.easing.1.3.js"></script>
<script type="text/javascript">		
$(document).ready(function() { //Start up our Featured Project Carosuel
	$('#featured ul').roundabout({
		easing: 'easeOutInCirc',
		duration: 600
	});
});
</script>
<!--[if IE 6]>
<script src="js/DD_belatedPNG_0.0.8a-min.js"></script>
<script>DD_belatedPNG.fix('.button');</script>
<![endif]-->

<ul id="navigation" class="grid_8">
	<li><?php echo anchor('c_account/logout/', "<span class='meta'>Logged Out</span><br />Take A Break");?></li>
	 <?php if($this->session->userdata('status') == "student"){ ?>
			<li><?php echo anchor('c_test/article/0', "<span class='meta'>Here The Answer . .</span><br />Solutions");?></li>
			<li><?php echo anchor('c_test/test/1', "<span class='meta'>Take Exam</span><br />Try Out");?></li>
			<li><?php echo anchor('c_student/', "<span class='meta'>Homepage</span><br />Home");?></li>
	<?php } 
	else {
	?>
			<li><?php echo anchor('c_student/', "<span class='meta'>Homepage</span><br />Home");?></li>
	<?php } ?>
</ul>
<div class="hr grid_12">&nbsp;</div>