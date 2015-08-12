<div class="clear"></div>
<div id="featured" class="clearfix grid_12">
    <ul>
      <li><a href="#"><img src="<?php echo base_url();?>/images/g_1.jpg" alt="" /></a></li>
      <li><a href="#"><img src="<?php echo base_url();?>/images/g_2.png" alt="" /></a></li>
      <li><a href="#"><img src="<?php echo base_url();?>/images/g_3.jpg" alt="" /></a></li>
    </ul>
</div>
<div class="hr grid_12 clearfix">&nbsp;</div> 
<div class="grid_8">
<h2>Here Some Hint and Rule . . .</h2>
<span id="rules">
	<ol type="1">
		<li>The question are provided in Indonesian Language.</li>
		&nbsp;
		<li>Question score are times by 4 if your answer is correct, times by -1 if your answer is wrong and times by 0 if you leave the answer empty.</li>
		&nbsp;
		<li>For Multiple Choice type question, you have to choose one and only one correct answer among A, B, C, D, or E.</li>
		&nbsp;
		<li>
			For Implication type, question is divided into 2 different statement, first is the main statement and second is cause statement. And you have to choose,
			<ol type="A">
				<li>If the main statement is correct, cause statement is also correct and two of them have an implication.</li>
				<li>If the main statement and cause statement both are correct, but two of them doesn't have an implication.</li>
				<li>If the main statement is correct, but the cause statement is wrong.</li>
				<li>if the main statement is wrong, but the cause statement is correct.</li>
				<li>if both statement are wrong.</li>
			</ol>
		</li>
		&nbsp;
		<li>
			Choose,
			<ol type="A">
				<li>If the (1), (2), and (3) are correct.</li>
				<li>If the (1) and (3) are correct.</li>
				<li>If the (2) and (4) are correct.</li>
				<li>if only (4) is correct.</li>
				<li>if all correct.</li>
			</ol>
		</li>
	</ol>
</span>
<h3><?php if($status == 0) echo "Select Category"; else echo "Select Exam Category"; ?></h3>
<?php foreach($category->result() as $category){ 
	if(($category->CAT_ID < 7) && ($category->CAT_ID != 6))
	{
		echo  "<strong>".anchor('c_test/join_test/'.$status.'/'.$category->CAT_ID, "Start ----> ".$category->CAT_NAME)."</strong>";
		echo "</br>";
	}
} 
	echo  "<strong>".anchor('c_test/join_test/'.$status.'/6', "Start ----> All Challenge")."</strong>";
	echo "</br>";
?>
</div>
<div class="grid_4">
    <h4>Other Site That May Help You</h4>
    <div class="hr dotted clearfix">&nbsp;</div>
	<table>
		<tr><td><a class="portfolio_item float" href="portfolio_single.html"> <span>Project Name</span> <img class="" src="<?php echo base_url() ?>/images/site_1.jpg"  alt=""/> </a> </td></tr>
		<tr><td><p>www.snnptn.ac.id</p></td></tr>
		<tr><td class="hr"></td></tr>
		<tr><td>&nbsp;</td></tr>
		<tr><td><a class="portfolio_item float " href="#"> <span>Project Name</span> <img class="" src="<?php echo base_url() ?>/images/site_2.jpg"  alt=""/> </a> </td></tr>
		<tr><td><p>www.depdiknas.go.id</p></td></tr>
	</table>
</div>