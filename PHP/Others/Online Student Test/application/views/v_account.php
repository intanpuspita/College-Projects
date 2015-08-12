<!DOCTYPE html>
<html lang="en">
    <head>
		<meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"> 
		<meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Custom Login Form Styling with CSS3" />
        <meta name="keywords" content="css3, login, form, custom, input, submit, button, html5, placeholder" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
		
		<!--CSS3 Content Navigator-->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/demo.css" />
        <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>/css/style.css" />
		<script type="text/javascript" src="<?php echo base_url();?>/js/modernizr.custom.79639.js"></script> 
		<!--[if lte IE 8]>
			 <link rel="stylesheet" type="text/css" href="css/simple.css" />
		<![endif]-->
    </head>
    <body>
        <div class="container">
			<div class="st-container">
				<input class="inp" type="radio" name="radio-set" id="st-control-1"/>
				<a href="#st-panel-1">Login</a>
				<input class="inp" type="radio" name="radio-set" checked="checked" id="st-control-2"/>
				<a href="#st-panel-2">Join Us !!</a>
				<input class="inp" type="radio" name="radio-set" id="st-control-3"/>
				<a href="#st-panel-3">Our Greetings</a>
				<input class="inp" type="radio" name="radio-set" id="st-control-4"/>
				<a href="#st-panel-4">Learn !!</a>
				<input class="inp" type="radio" name="radio-set" id="st-control-5"/>
				<a href="#st-panel-5">About Us</a>
				
				<div class="st-scroll">
					<section class="st-panel" id="st-panel-1">
						<div class="st-deco" data-icon="H"></div>
							<h1>Just Logged In !!! and ... </h1>
							<p>
								Take our challenge to solve all applied question !! We provide all type of college entrance exam's question and its divided to some category. Your challenge is to solve them all
								without any mistake and take the real one without any hesitation. Just LOG IN to our site and feel the hardest.
							</p>
							<div class="login">
								<h2>Login Here . . . </h2>
								<form class="form-4 formular"  method="POST" action="<?php echo site_url(); ?>/c_account/login">
										<label for="username">Username</label>
										<input  class="logininput" type="text" name="username" placeholder="Username" required><br/>
										<label for="password">Password</label>
										<input  class="logininput" type="password" name='password' placeholder="Password" required> <br/>
										<input  class="loginsubmit" type="submit" name="submit" value="Login" id="st-submit">   
								</form>​
							</div>
					</section>
					
					<section class="st-panel st-color" id="st-panel-2">
						<div class="st-deco" data-icon="2"></div>
						<table>
							<tr>
								<td class="register">
								<h2>Join Here ....</h2>
								<form class="form-4 formular"  method="POST" action="<?php echo site_url(); ?>/c_account/register">
											
											<label for="nama">Your Name</label>
											<input class="reginput" type="text" name="name" placeholder="Your Name" required>
											<label for="username">Username</label>
											<input class="reginput " type="text" name="username" placeholder="Username" maxlength="25" required>
											<div class="error_msg"><?php echo $error_username; ?></div>
											<label for="password">Password</label>
											<input class="reginput" type="password" name='password' placeholder="Password" maxlength="16" required> 
											<div class="error_msg"><?php echo $error_password; ?></div>
											<!--p>
												<label for="status">Status</label>
												<input type="checkbox" name="status" value="institution"> Institusi?  
											</p-->
											<input class="regsubmit" type="submit" name="submit" value="Register">     
									</form>​
								</td>
							</tr>
							<tr>
								<td>
									<h1 id="reg_title">Lets Join Us..NOW !!!!!</h1>
									<p id="reg_p">
										Join, and taste our challenge to solve all question. We provide Physic, Chemistry, Sci-Math, Fun-Math, and also Biology. And so on in the future.....
										This question that we provided has same level with Indonesian College Entrance Examination or 'SNMPTN' . With our help, you can train your knowledge
										using our free online tryout and learn how it does. Feel free to solve the question and record HOW FAST ARE YOU ... ?
									</p>
								</td>
							</tr>
						</table>
					</section>
					
					<section class="st-panel" id="st-panel-3">
						<div class="st-deco" data-icon="B"></div>
						<h1 id="message"><?php echo $message;?></h1>
						<h2 id="error"><?php echo $error ?></h2>
						<p id="site_desc">
							<b>Our Regards . . .</b><br/>
							This site is proudly delegated to best High School Student that want to learn and practice. This site is provide with many College Entrance Exam Question.
							You can measure your knowledge and also your speed by take our challenge.
						</p>
					</section>
					
					<section class="st-panel st-color" id="st-panel-4">
						<div class="st-deco" data-icon="x"></div>
						<h1 id="message">Lets Learn Here...</h1>
						<h2 id="error">Online Student Test</h2>
						<p id="site_desc">
							<?php echo anchor('welcome','Administrator')?>
						</p>
					</section>
					
					<section class="st-panel" id="st-panel-5">
						<div class="st-deco" data-icon="Ç"></div>
						<h1 id="message">About Developer</h1>
						<p id="site_desc">
							Intan Puspitasari (111511042)<br/>
							Reggy Budiana (111511049)
						</p>
					</section>

				</div><!-- // st-scroll -->
				
			</div><!-- // st-container -->
        </div>
    </body>
</html>