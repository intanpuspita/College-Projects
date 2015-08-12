<html>
	<body>
		<h1>Top 10 Liked Songs of The Month</h1>
		<table width="100%">
			<tr>
				<td colspan="3"><div class="head"></div></td>
			</tr>
		</table>
		<table width="98%" border="1">
			<tr height="50">
				<th><h4>Rank</h4></th>
				<th><h4>Title</h4></th>
				<th><h4>Artist</h4></th>
				<th><h4>Album</h4></th>
				<th><h4>Like</h4></th>
			</tr>
			<?php for($i=1; $i<=5; $i++){
			echo "<tr ";
			if($i % 2 ==0){ echo "bgcolor='#fff'"; }
			echo ">";
			?>
				<td><?php echo $i; ?></td>
				<td>lalalalala</td>
				<td>blablablabla</td>
				<td>nanananannana</td>
				<td>2000</td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>