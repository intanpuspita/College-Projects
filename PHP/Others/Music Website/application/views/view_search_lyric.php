<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>View List Lyric</title>
</head>

<body>
<h1>Search By Lyric</h1>
		<table width="100%">
			<tr>
				<td colspan="3"><div class="head"></div></td>
			</tr>
		</table>
		<table width="98%" border="1">
			<tr height="50">
				<th colspan="5"><h4>Title</h4></th>
			</tr>
            <tr>
            	<th align="center">Judul</th>
                <th align="center">Lyric</th>
                <th align="center">Durasi</th>
                <th align="center">Like</th>
                <th align="center">Dislike</th>
            </tr>
			<?php $i=0;
			foreach($list_lirik as $row)
			{
			echo "<tr ";
			if($i % 2 ==0){ echo "bgcolor='#fff'"; }
			echo ">";
			?>
            	<td><?php echo $row->judul_lagu; ?></td>
                <td><?php echo $row->lirik; ?></td>
				<td><?php echo $row->durasi; ?></td>
                <td><?php echo $row->jml_like; ?></td>
                <td><?php echo $row->jml_dislike; ?></td>
			</tr>
			<?php $i++;} ?>
		</table>
</body>
</html>