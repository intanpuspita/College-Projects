<html>
    <head>
        <!-- menampilkan judul pada browser -->
        <title><?=$title?></title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
        <link rel="stylesheet" type="text/css" media="all" href="<?php echo base_url();?>/login.css" />  
    </head>
    <body>
        <?php echo form_open('login/proses_login'); ?>
        <div id="wrap">
            <div id="maincontent">
                <!-- menampilkan header login -->
                <div id="header"><?=$loginheader?></div>
                <div id="content">
                        <!-- menampilkan validasi login -->
                        <?=$gagal?>
                        <div id="label">Username :</div>
                        <div id="form"><input type="text" name="username"></div>
                        <div id="label">Password :</div>
                        <div id="form"><input type="password" name="password"></div>
                        <div id="label">&nbsp;</div>
                        <div id="form"><input type="submit" value="Login"/></div>
                </div>
                <div id="footer"></div>
            </div>
        </div>
        <?php echo form_close(); ?>
    </body>
</html>