<?php include 'connect.php';?>

<html>
	<body>
		<? if(!isset($_GET['album'])){ ?>
		<h2>Galeri</h2>
		<table width="100%" border="1">
			<!--<tr>-->
				<?php $album=mysql_query("select * from album");
				$i=1;
				while($listalbum=mysql_fetch_array($album)){
				if($i == 1){
					echo "<tr height='150px'>";
				}?>
				<td width="270px">
					<?php $foto=mysql_query("select * from foto where id_album='$listalbum[id_album]'");
					$datafoto=mysql_fetch_array($foto);?>
					<h1>Album <?php echo $listalbum['nama_album'];?></h1></br></br>
					<a href="index.php?menu=galeri&album=<?php echo $listalbum['id_album'];?>"><img src="<?php echo $datafoto['file_foto'];?>" width="250px" height="200px"></a>	
				</td>
				<?php
				if($i == 2){
					echo "</tr>";
					$i=1;
				}
				else{
					$i++;
				}				
				} ?>
			<!--</tr>-->
		</table>
		<?php } 
		else{
			$album=$_GET['album'];
			$namaalbum=mysql_query("select nama_album from album where id_album='$album'");
			$nama=mysql_fetch_array($namaalbum);?>
			<h2>Album <?php echo $nama['nama_album'];?></h2>
			<table width="100%">
				<!--<tr height="150px">-->
					<?php
						$fotoalbum=mysql_query("select * from foto where id_album='$album'");
						$i=1;
						while($foto=mysql_fetch_array($fotoalbum)){
						if($i == 1){
							echo "<tr height='150px'>";
						}?>
							<td>
							<strong><?php echo $foto['nama_foto'];?></strong></br>
							<div class="two-column">
								<figure><a href="<?php echo $foto['file_foto'];?>" rel="recent_work" class="zoom"><img src="<?php echo $foto['file_foto'];?>" alt="Image" width="150px" height="120px"></a></figure>
							</div>
							</td>
					<?php if($i == 4){
							echo "</tr>";
							$i=1;
						}
						else{
							$i++;
						}
						} ?>
				<!--</tr>-->
			</table>
		<?php } ?>
	</body>
</html>