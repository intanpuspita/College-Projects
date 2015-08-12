<div class="grid_8">
<!-- Blog Post -->
<?php foreach($article->result() as $row){?>
<div class="post">
  <!-- Post Data -->
  <p class="sub"><a href="#"><?php echo $row->CAT_NAME ?></a>&bull; Taken from 'SNMPTN' archive&bull;</p>
  <div class="hr dotted clearfix">&nbsp;</div>
  <!-- Post Content -->
  <p><strong><?php echo $row->QUES_CONTENT ?></strong></p>
  <p><span><?php echo $row->QUES_DISC ?></span></p>
  <p><span class="green">Correct Answer : </span><strong><?php echo $row->OPT_CONTENT ?></strong></p>
  <!-- Read More Button -->
  <!--p class="clearfix"><a href="single.html" class="button right"> Read More...</a></p-->
</div>
<div class="hr clearfix">&nbsp;</div>
<?php }
echo $links;
?>

</div>
<!-- Column 2 / Sidebar -->
<div class="grid_4">
<h4>Categories</h4>
<ul class="sidebar">
	<?php 
		foreach($category->result() as $category)
		{ 
			if(($category->CAT_ID != 6) && ($category->CAT_ID < 6))
			{
	?>
			  <li><?php echo anchor('c_test/article/'.$category->CAT_ID, $category->CAT_NAME);?></li>
	<?php
			}
		}
	?>
</ul>
</div>
<div class="hr grid_12 clearfix">&nbsp;</div>