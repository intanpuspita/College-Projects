<html>
	<body>
		<table width="100%">
			<tr>					
				<td colspan="3"><h1>Newest Songs</h1></td>
			</tr>
			<tr>
				<td colspan="3"><div class="head"></div></td>
			</tr>
				
					<?php
						$count = 0;
						$index = 0;
						foreach($list_music as $row)
						{ 
						
						?>
						
						<tr>
							<td colspan="3"><h2><a href="<?php echo site_url();?>/c_musicfile/view_detail?menu=info_lagu&kd_lagu=<?php echo $row->kd_lagu;?>"><?php echo  $row->judul_lagu;?></a></h2></td>
						</tr>
						<tr>
							<td>
								<img src="<?php echo base_url();?>/css/images/logo.jpg" alt="slide image" width="50px"/>
							</td>
							<td colspan="2">
								<table width="100%">
									<tr>
										<td>Artist</td>
										<td>:</td>
										<td><?php echo $row->nama_musisi; ?></td>
									</tr>
									<tr>
										<td>Title</td>
										<td>:</td>
										<td><?php echo $row->judul_lagu; ?></td>
									</tr>
									<tr>
										<td>Album</td>
										<td>:</td>
										<td><?php echo $row->nama_album; ?></td>
									</tr>
									<tr>
										<td>Release Year</td>
										<td>:</td>
										<td><?php echo $row->tahun_rilis; ?></td>
									</tr>
								</table>
							</td>
						</tr>
						<tr>
							<td align="center"><img src="<?php echo base_url();?>/css/images/like1.png" alt="slide image" width="20px" title="Like this song"onmouseover="this.src='<?php echo base_url();?>/css/images/like.png'" onMouseOut="this.src='<?php echo base_url();?>/css/images/like1.png'"/></td>
							<td align="center">view detail</td>
							<?php if ($isLogin) { ?>
							<td><?php echo anchor('c_download/file/'.$row->kd_lagu,img ('css/images/download1.png'));?></td>
							<?php } ?>
						</tr>
						<tr>
							<td colspan="3"><div class="head"></div></td>
						</tr>
						<?php 
							$count++;
						}
					?>
		</table>
	</body>
</html>