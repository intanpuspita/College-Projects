<html>
	<body>
		<table border="1" height="300px" width="500px" align="center" valign="center">
		<tr>
			<td align="center">
				<h3>Upload Tugas</h3>
				<?php echo $error; ?>
				<?php echo form_open_multipart('upload/do_upload'); ?>
					<table>
						<tr>
							<td>Nama File</td>
							<td>:</td>
							<td><input type="file" name="userfile" size="20"/></td>
						</tr>
						<tr>
							<td>Judul Tugas</td>
							<td>:</td>
							<td><input type="text" name="judul"/></td>
						</tr>
						<tr>
							<td colspan="3" align="center"><input type="submit" value="Submit"></td>
						</tr>
					</table>
				</form>	
			</td>
		</tr>
		</table>
	</body>
</html>