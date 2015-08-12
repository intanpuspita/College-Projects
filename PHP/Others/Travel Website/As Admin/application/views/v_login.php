<h2 align="center">Login</h2></br>
<p align="center"><?php echo $error; ?></p>
<form id="formlogin" method="post" action="<?php echo site_url();?>/c_login/proses_login" align="center">
	<fieldset align="center">
		<label><input type="text" value="Username" onBlur="if(this.value=='') this.value='Username'" onFocus="if(this.value =='Username' ) this.value=''" name="username"></label>
		<label><input type="password" value="Password" onBlur="if(this.value=='') this.value='Password'" onFocus="if(this.value =='Password' ) this.value=''" name="password"></label>
		<input type="submit" value="Login">
	</fieldset>  
</form>
<div class="clear"></div>