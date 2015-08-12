<div class="clear"></div>
<div id="featured" class="clearfix grid_12">
    <ul>
      <li><a href="#"><img src="<?php echo base_url();?>/images/g_1.jpg" alt="" /></a></li>
      <li><a href="#"><img src="<?php echo base_url();?>/images/g_2.png" alt="" /></a></li>
      <li><a href="#"><img src="<?php echo base_url();?>/images/g_3.jpg" alt="" /></a></li>
    </ul>
</div>
<div class="hr grid_12 clearfix">&nbsp;</div> 
<div class="grid_4">
	<h4>Other Site That May Help You . .</h4>
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
 <div class="grid_8">
	<h1>Hi <span class="green"><?php echo $this->session->userdata("username")?></span>, welcome back !!</h1> 
    <div class="hr clearfix">&nbsp;</div>
	<span>[<?php echo anchor('c_student/edit_profile/', 'Edit Profil');?>]</span>
	<span>[<?php echo anchor('c_student/edit_username_password/', 'Change Username Password');?>]</span>
	<!--img class="floatright" src="<?php //echo base_url() ?>/images/223x112.gif"  alt=""/--><br/>
	<table id="pro_tab">
			<tr><td>&nbsp;</td></tr>
		<?php foreach($list_data->result()as $row){ ?>
			<tr>
				<td><strong>Your Username</strong></td>
			</tr>
			<tr><td class="hr dotted"></td></tr>
			<tr>
				<td class="right"><span class="username"><?php echo $row->STD_USERNAME; ?></span></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td><strong>Your Name</strong></td>
			</tr>
			<tr><td class="hr dotted"></td></tr>
			<tr>
				<td class="right"><?php echo $row->STD_NAME; ?></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td><strong>Your Birth Place and Birthdate</strong></td>
			</tr>
			<tr><td class="hr dotted"></td></tr>
			<tr>
				<td class="right "><?php if($row->STD_BIRTHPLACE != NULL){ echo $row->STD_BIRTHPLACE. ', '; }
				echo date('d F Y', strtotime($row->STD_BIRTHDATE)) ? date('d F Y', strtotime($row->STD_BIRTHDATE))  : "<span class='undefined'>Its Undefined Yet</span>"; ?></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td><strong>Your Address</strong></td>
			</tr>
			<tr><td class="hr dotted"></td></tr>
			<tr>
				<td class="right"><addr><?php echo $row->STD_ADDR ? $row->STD_ADDR : "<span class='undefined'>Its Undefined Yet</span>"; ?></addr></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td><strong>Your Email</strong></td>
			</tr>
			<tr><td class="hr dotted"></td></tr>
			<tr>
				<td class="right"><?php echo $row->STD_EMAIL ? $row->STD_EMAIL : "<span class='undefined'>Its Undefined Yet</span>"; ?></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td><strong>Your Phone</strong></td>
			</tr>
			<tr><td class="hr dotted"></td></tr>
			<tr>
				<td class="right"><?php echo $row->STD_PHONE ? $row->STD_PHONE : "<span class='undefined'>Its Undefined Yet</span>"; ?></td>
			</tr>
			<tr><td>&nbsp;</td></tr>
			<tr>
				<td><strong>Your School</strong></td>
			</tr>
			<tr><td class="hr dotted"></td></tr>
			<tr>
				<td class="right"><?php echo $row->STD_SCHOOL ? $row->STD_SCHOOL : "<span class='undefined'>Its Undefined Yet</span>"; ?></td>
			</tr>
		<?php } ?>
	</table>
	<br/>
 </div>
 <div class="grid_12"><span><strong>Your Score Till Now</strong><span></div>
 <div class="grid_12 hr dotted clearfix">&nbsp;</div>
 <div class="grid_12">
	<table class="exam_tab">
		<tr>
			<th>Exam Date</th>
			<th>Start Time</th>
			<th>End Time</th>
			<th>Category</th>
			<th>Correct Answer</th>
			<th>Incorrect Answer</th>
			<th>Empty Answer</th>
			<th>Final Result</th>
		</tr>
	<?php foreach($exam->result() as $row){ ?>
		<tr>
			<td><?php echo date('d F Y',strtotime($row->EXAM_DATE)) ?></td>
			<td><?php echo $row->EXAM_START ?></td>
			<td><?php echo $row->EXAM_END ?></td>
			<td><?php echo $row->CAT_NAME ?></td>
			<td><?php echo $row->EXAM_TRUE ?></td>
			<td><?php echo $row->EXAM_FALSE ?></td>
			<td><?php echo $row->EXAM_EMPTY ?></td>
			<td><?php echo $row->EXAM_RESULT ?></td>
		</tr>
	<?php } ?>
	</table>
 </div>