<html>
	<body>
		<table border="1" height="300px" width="500px" align="center" valign="center">
		<tr>
			<td>
				</br>
				<h3 align="center">Berhasil</h3>
		
				<ul>
					<?php foreach($upload_data as $item => $value): ?>
					<li><?php echo  $item;?>: <?php echo $value; ?></li>
					<?php endforeach; ?>
				<ul>
				
				<p><?php echo anchor('upload', 'Kembali'); ?></p>	
			</td>
		</tr>
		</table>
	</body>
</html>