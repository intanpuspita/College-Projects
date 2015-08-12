<script>
	function playsound(url)
	{
		var x = document.getElementById("dummy");
		x.innerHTML = "<embed src=\""+url+"\" hidden=\"false\" autostart=\"false\" loop=\"true\" />";
	}
</script>
<table  width=100% height="1000" border="1" cellpadding="10">
  <tr>
    <td width="50">
		<table width=100% height=100% border="1">
			<tr>
				<td align="center"><img src="<?php echo base_url();?>/css/images/logo.png" alt="slide image" width="150px"/></td>
			</tr>
		</table>
	</td>
    <td width="300" rowspan="2" align="center" >
		<table width=100% height=100% border="1">
		  <tr>
			<td height=20% align="center"><div id="dummy"></div><a href="#" onclick="playsound('<?php echo base_url();?>/<?php echo $info_music->file_lagu;?>')">Click To Listen Music!</a></td>
		  </tr>
		  <tr>
			<td height=10%>&nbsp;</td>
		  </tr>
		  <tr>
			<td align="center" >
				 <table width=80% height=100% border="0">
				  <tr>
					<td height=10% align="center"><?php echo 'Song Lyric' ?></td>
				  </tr>
				  <tr>
					<td><?php echo $info_music->lirik; ?></td>
				  </tr>
				</table> 
			</td>
		  </tr>
		</table>
	</td>
    
  </tr>
  <tr>
    <td height="250"  valign="top">
				<table width=100% border="0">
				&nbsp;
						<img src="<?php echo base_url();?>/css/images/like1.png" alt="slide image" width="30px" title="Like this song"onmouseover="this.src='<?php echo base_url();?>/css/images/like.png'" onmouseout="this.src='<?php echo base_url();?>/css/images/like1.png'"/>
						&nbsp;
						<?php if ($isLogin) { ?>
							<?php echo anchor('c_download/file/'.$kd_lagu,img ('css/images/download1.png'));?>
						<?php } ?>
				  <tr>
					<td  height=10%>
						
					</td>
				  </tr>
				  <tr height="10">
					<td>Judul 	</td>
					<td>:</td>
					<td><?php echo $info_music->judul_lagu; ?></td>
				  </tr>
				  <tr height="10">
					<td>Penyanyi</td>
					<td>:</td>
					<td><?php echo $info_music->nama_musisi; ?></td>
				  </tr>
				  <tr height="10">
					<td>Album 	</td>
					<td>:</td>
					<td><?php echo $info_music->nama_album; ?></td>
				  </tr>
				  <tr height="10">
					<td>Tahun rilis</td>
					<td>:</td>
					<td><?php echo $info_music->tahun_rilis; ?></td>
				  </tr>
				  <tr height="10">
					<td>Durasi</td>
					<td>:</td>
					<td><?php echo $info_music->durasi; ?></td>
				  </tr>
				  <tr height="10">
					<td>Ukuran</td>
					<td>:</td>
					<td><?php echo $info_music->ukuran; ?></td>
				  </tr>
				</table> 
	</td>
  </tr>
  <tr>
    <td colspan="2" height="300">
	 <legend>Comment:</legend>
		<div align="center">
			<div style="color: #ffffff; width: 100%; height: 300px; overflow-y:scroll;overflow-x:hidden; position: static; background-image: url('sadang-loding.gif');">
				 <?php 
				foreach($komentar as $row)
				  {
				?>
				<table width=100% border="0">
				 
                  <tr>
					<td width=10% rowspan="4" valign="top"><img src="css/images/logo.png" width="100px"/></td>
					<td><h4><?php echo $row->username; ?></h4></td>
				  </tr>
				  <tr>
					<td><?php echo $row->komen;?></td>
				  </tr>
				  <tr>
					<td><a href="#">Laporkan</a></td>
				  </tr>
				</table>
				<p>&nbsp;</p>
				<?php
				} 
				?>
			</div>
		</div>
	</td>
  </tr>
  <tr>
    <td colspan="2" height="140" align="center" >
    <?php if ($isLogin) { ?>
	<div id="komen"> 
    <?php echo form_open('c_login/insert_comment').'
	 <fieldset>
        <legend>Write your comment</legend> 
			<textarea name="comment" color="" id="textarea" cols="100" rows="5" ></textarea>
			<input type="submit"name="btnsubmit" value="Submit">
	 </fieldset>'.form_close();
	 ?>
	</div>
						<?php } ?>
	
	</td>
  </tr>
   
</table>