<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View List Lagu by Artist</title>
</head>

<body>
<h1>List Lagu search by Artist</h1>
		<table width="100%">
			<tr>
				<td colspan="3"><div class="head"></div></td>
			</tr>
		</table>
		<table width="98%" border="1">
			<tr height="50">
				<th colspan="2"><h4>Lagu</h4></th>
			</tr>
            <tr>
            	<th align="center">Judul Lagu</th>
            </tr>
			<?php $i=0;
			foreach($list_lagu_artist as $row)
			{
			echo "<tr ";
			if($i % 2 ==0){ echo "bgcolor='#fff'"; }
			echo ">";
			?>
				<td><a href="<?php echo site_url();?>"><?php echo $row->judul_lagu; ?></a></td>
			</tr>
			<?php $i++;} ?>
		</table>
</body>
</html>