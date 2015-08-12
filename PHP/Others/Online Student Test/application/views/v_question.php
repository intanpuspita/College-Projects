<div class="grid_12">
	<h1>Joy The Difficultness. . . </h1>
	<table width="100%">
	<?php echo form_open('c_test/check_test/'.$cat); 
		$i = 1; 
		foreach($question as $ques){ ?>
		<tr>
			<td valign="top"><?php echo $i. '. '; ?></td>
			<td><?php echo $ques['QUES_CONTENT']; ?></td>
		</tr>
		<?php 
		$j=0;
		foreach($option[$i]->result() as $opt){ ?>
		<tr>
			<td></td>
			<td><input type="radio" name="question_<?php echo $i; ?>" value="<?php echo $opt->OPT_ID; ?>"><?php echo $alphabet[$j]. '. ' .$opt->OPT_CONTENT; ?></td>
		</tr>
	<?php   
		$j = $j+1;
			}
	?>
		<tr><td colspan="2">&nbsp;</td></tr>
	<?php
		$i = $i+1;
		}?>
		<tr>
			<td colspan="2" align="center"><input class="edit_prosubmit" type="submit" value="Submit" name="Submit"></td>
		</tr>
	<?php echo form_close(); ?>
	</table>
</div>
