 <div class="grid_12">
	<table id="result_tab">
	<?php foreach($list_data->result()as $row){ ?>
		<tr>
			<td colspan="2">
			<br/>
			 <br/><br/><br/>
			<span class="cert-heading">
				<i>Online Test Try Out Result</i>
			</span>
			<br/><br/><br/><br/><br/><br/>
			<span>Name : </span>
			<br/>
			<span class="cert-belong"><?php echo $row->STD_NAME; ?></span>
			<br/><br/><br/><br/>
			<span>Score : </span>
			<br/>
			<span class="cert-result"><?php echo $result; ?></span>
			<br/>
			<span>True : <?php echo $true; ?></span>
			<br/>
			<span>False : <?php echo $false; ?></span>
			<br/>
			<!--span>Time : <?php //echo date('H m s'.strtotime($date->exam_end) - strtotime($date->exam_start)) ?></span-->
			<br/><br/><br/><br/>
			<span>On Category :</span>
			<br/>
			<span class="cert-belong"><?php echo $cat->cat_name; ?></span>
			<br/><br/><br/><br/>
			<span>At  :</span>
			<br/>
			<span class="cert-belong"><?php echo date('d F Y', strtotime($date->exam_date)); ?></span>
			<br/><br/><br/><br/><br/><br/>
			<div class="cert-prologue">
				<p>
					Congratulations and never satisfied with your current score, make sure upgrade your score as soon as possible and feel the different when your score admitted as the first Rank.
					Not only in here, but in your real College Entrance Exam.
				</p>
			</div>
			<br/><br/>
			</td>
		</tr>
		<tr>
			<td colspan="2">
				<span>
					Our Best Regards,
				</span>
			</td>
		</tr>
		<tr><td colspan="2">&nbsp;</td></tr>
		<tr>
			<td class="fifty">
				<span>Online Test Project Manager</span><br/><br/><br/><br/><br/><br/><br/><br/><span><I>Our Manager</I></span>
			</td>
			<td class="fifty">
				<span>Online Test Advisor</span><br/><br/><br/><br/><br/><br/><br/><br/><span><I>Our Advisor</I></span>
			</td>
		</tr>
		<tr><td colspan="2">&nbsp;</td></tr>
	<?php } ?>
	</table>
 </div>


