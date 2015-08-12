<html>
	<head>
		<!-- menampilkan judul pada browser -->
		<title><?=$title?></title>
		<link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>/css/home.css" />  
	</head>
	<body  topmargin="0" leftmargin="0">
		<div id="wrap">
			<div id="maincontent">
				<div id="header">
				<!-- menampilkan judul logo di header -->
					<div class="logo"><?=$logo?></div>
					<!-- menampilkan account name di header -->
					<div class="account">
						<?=$username?>, <a href="<?php echo site_url(); ?>/login/logout">Logout</a>
					</div>
					<?php echo form_open('download/file/'); ?>                    
					<div class="download">
						Heart Attack <input type="submit" name="download" value="download"/>
					</div>
					<div class="sendmail">
						<a href="<?php echo site_url();?>/email/send_email">send email</a>
					</div>
					<div id="clear"></div>
				</div>
			</div>
		</div>
	</body>
</html>