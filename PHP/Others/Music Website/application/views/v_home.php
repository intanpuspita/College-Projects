<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html lang="en-US" xmlns="http://www.w3.org/1999/xhtml" dir="ltr">
<?php
	if(isset($search))
	{
		$menu = $search;
	}
	else
	{
		if(!isset($_GET['menu']))
		{
			$menu="home";
		}
		else
		{
			$menu=$_GET['menu'];
		}
	}
?>
<head>
	<title>TOPmusic</title>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="<?php echo base_url();?>/css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url();?>/css/popup.css" type="text/css" media="all" />
	<!--[if IE 6]>
		<link rel="stylesheet" href="css/ie6.css" type="text/css" media="all" />
	[endif]-->
	<script type="text/javascript" src="<?php echo base_url();?>/js/jquery-1.6.4.min.js"></script>
	 
	<script type="text/javascript" src="<?php echo base_url();?>/js/jquery.jcarousel.js"></script> 
	<script type="text/javascript" src="<?php echo base_url();?>/js/jquery-func.js"></script>
	<link rel="stylesheet" href="<?php echo base_url();?>/css/nivo-slider.css" type="text/css" media="screen" />
	<script src="<?php echo base_url();?>/script/jquery.nivo.slider.js" type="text/javascript"></script>
<script language="javascript" type="text/javascript">
function clearText(field)
{
    if (field.defaultValue == field.value) field.value = '';
    else if (field.value == '') field.value = field.defaultValue;
}
</script>

<script language="javascript" type="text/javascript">
$(document).ready(function() {
$('a.login-window').click(function() {
    
            //Getting the variable's value from a link 
    var loginBox = $(this).attr('href');

    //Fade in the Popup
    $(loginBox).fadeIn(300);
    
    //Set the center alignment padding + border see css style
    var popMargTop = ($(loginBox).height() + 24) / 2; 
    var popMargLeft = ($(loginBox).width() + 24) / 2; 
    
    $(loginBox).css({ 
        'margin-top' : -popMargTop,
        'margin-left' : -popMargLeft
    });
    
    // Add the mask to body
    $('body').append('<div id="mask"></div>');
    $('#mask').fadeIn(300);
    
    return false;
});

// When clicking on the button close or the mask layer the popup closed
$('a.close, #mask').live('click', function() { 
  $('#mask , .login-popup').fadeOut(300 , function() {
    $('#mask').remove();  
}); 
return false;
});
});
</script>

<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'random',
		slices:15,
		animSpeed:500,
		pauseTime:2000,
		startSlide:0, // Set starting Slide (0 index)
		directionNav: false, // Next and Prev
		directionNavHide:false, // Only show on hover
		controlNav:false, // 1,2,3...
		controlNavThumbs:false, //Use thumbnails for Control Nav
		pauseOnHover:true, //Stop animation while hovering
		manualAdvance:false, //Force manual transitions
		captionOpacity:0.8, //Universal caption opacity
		beforeChange: function(){},
		afterChange: function(){},
		slideshowEnd: function(){} //Triggers after all slides have been shown
	});
});
</script>

</head>
<body>
<!-- Header -->
<div id="header">
	<!-- Shell -->
	<div class="shell">
		
		<!-- Navigation -->
		
		<div id="navigation">
			<h1><?php echo anchor('c_login/proses_login','<img src='.base_url().'/images/logotopmusik.png width="300px" height="50px">')?></h1>
		</div>
		<!-- end Navigation -->
		
		<!-- Contact -->
		<?php
			if (!$isLogin) {
		?>
        <div id="contact">
		<h3><a href="#login-box" class="login-window"><img src="<?php echo base_url();?>/css/images/signin2.png" width="70px" height="30px"></a>
			<a href="#signup-box" class="login-window"><img src="<?php echo base_url();?>/css/images/signup.png" width="70px" height="30px"></a>
        </div>
            <div id="login-box" class="login-popup">
				<a href="#" class="close"><img src="<?php echo base_url();?>/images/close_pop.png" class="btn_close" title="Close Window" alt="Close"/></a> 
				<h2 align="center">Sign in here..</h2></br>
				<form method="POST" class="signin" action="<?php echo site_url();?>/c_login/proses_login">
					<fieldset class="textbox">
						<label class="username"><span>Username</span>
							<input id="username" name="username" value="" type="text" placeholder="Username">
						</label>
						<label class="password"><span>Password</span>
							<input id="password" name="password" value="" type="password" placeholder="Password">
						</label>
						<p>
							<a href="#">Forgot Password</a>
						</p>
						<button class="submit button" type="submit">Sign In</button>
					</fieldset>
				</form>
			</div>
			
		</h3>
			<div id="signup-box" class="login-popup">
				<a href="#" class="close"><img src="<?php echo base_url()?>images/close_pop.png" class="btn_close" title="Close Window" alt="Close"/></a>				
                <?php
					$dt_username = array('id' => 'username', 'name' => 'username', 'value' => '', 'type' => 'text', 'placeholder' => 'Username');
					$dt_fullname = array('id' => 'fullname', 'name' => 'fullname', 'value' => '', 'type' => 'fullname', 'placeholder' => 'Full Name');
					$dt_email = array('id' => 'email', 'name' => 'email', 'value' => '', 'type' => 'email', 'placeholder' => 'Your email');
					$dt_password = array('id' => 'password', 'name' => 'password', 'value' => '', 'type' => 'password', 'placeholder' => 'Password');
					$dt_cpassword = array('id' => 'cpassword', 'name' => 'cpassword', 'value' => '', 'type' => 'password', 'placeholder' => 'Confirm Password');
					$dt_submit = array('class' => 'submit button', 'type' => 'submit', 'value' => 'Daftar', 'name' => 'brnsub');
				?>
				<h2 align="center">Sign up here..</h2>
				<?php 
					echo form_open('signup/daftar').//<form method="POST" class="signin" action="">
					'<fieldset class="textbox">
					<table>
					<tr>
						<label class="username">
						<td>Username</td>
						<td>:</td>
						<td>'.form_input($dt_username).'</td>
						<td><p id="status_username"></p></td>
						</label>
					</tr>
					<tr>
						<label class="fullname">
						<td>Full Name</td>
						<td>:</td>
						<td>'.form_input($dt_fullname).'</td>
						<td><p id="status_fullname"></p></td>
						</label>
					</tr>
					<tr>
						<label class="email">
						<td>Email</td>
						<td>:</td>
						<td>'.form_input($dt_email).'</td>
						<td><p id="status_email"></p></td>
						</label>
					</tr>
					<tr>
						<label class="password">
						<td>Password</td>
						<td>:</td>
						<td>'.form_password($dt_password).'</td>
						</label>
					</tr>
					<tr>
						<label class="cpassword">
						<td>Confirm Password</td>
						<td>:</td>
						<td>'.form_password($dt_cpassword).'</td>
						<td><p id="status_password"></p></td>
						</label>
					</tr>
					<tr>
						<td colspan="4" align="center">
							<input id="check" name="check" value="1" type="checkbox">I have read <a href="#">term and agreement</a>
						</td>
						<td><p id="status_agreement"></p></td>
					</tr>
					<tr>
						<td colspan="4" align="center">'.form_submit($dt_submit).'</td>
					</tr>
					</table>
					</fieldset>'.form_close();
				//</form>?>
			</div>
		<?php
			}else{
			?>
		<div class="account">
			<p><?=$username?>, <a href="<?php echo site_url(); ?>/c_login/logout">Logout</a></p>
		</div>
		<?php }
		?>
		<!-- end Contact -->
	
		<!-- Intro -->
		<div id="intro">
		  <!-- Slider -->
    <div id="slider">
        <a href="http://www.templatemo.com/page/1" target="_parent"><img src="<?php echo base_url();?>/images/slideshow/coba1.jpg" alt="01" title="Lorem ipsum dolor sit amet, consectetur adipiscing elit." width="960" height="250"/></a>
        <a href="http://www.templatemo.com/page/2" target="_parent"><img src="<?php echo base_url();?>/images/slideshow/coba2.png" alt="02" title="Nullam ante leo, consectetur eget adipiscing et." width="960" height="250"/></a>
        <a href="http://www.templatemo.com/page/3" target="_parent"><img src="<?php echo base_url();?>/images/slideshow/coba3.jpg" alt="03" title="Suspendisse sit amet enim elit. Curabitur tempor consequat." width="960" height="250"/></a>
        <a href="http://www.templatemo.com/page/4" target="_parent"><img src="<?php echo base_url();?>/images/slideshow/04.jpg" alt="04" title="Nulla faucibus luctus quam eget placerat." width="960" height="250"/></a>
        <a href="http://www.templatemo.com/page/5" target="_parent"><img src="<?php echo base_url();?>/images/slideshow/05.jpg" alt="05" title="Phasellus aliquet viverra posuere." width="960" height="250"/></a>
    </div> 

			<div class="slider" id="big-slider">					
			</div>
			<!-- end Slider -->
			
			<div class="cl">&nbsp;</div>		
	  </div>
		<!-- end Intro -->
	</div>
	<!-- end Shell -->
</div>
<!-- end Header -->

<!-- Main -->
<div id="main">
	<div id="main-in">
		<div id="navi_search" align="center">
			  <table align="center">
					<tr>
						<td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=A">A</a></td> 
                        <td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=B">B</a></td>
						<td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=C">C</a></td> 
                        <td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=D">D</a></td>
						<td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=E">E</a></td> 
                        <td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=F">F</a></td>
						<td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=G">G</a></td> 
                        <td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=H">H</a></td>
						<td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=I">I</a></td> 
                        <td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=J">J</a></td>
						<td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=K">K</a></td> 
                        <td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=L">L</a></td>
						<td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=M">M</a></td> 
                        <td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=N">N</a></td>
						<td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=O">O</a></td>
                        <td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=P">P</a></td>
						<td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=Q">Q</a></td> 
                        <td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=R">R</a></td>
						<td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=S">S</a></td> 
                        <td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=T">T</a></td>
						<td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=U">U</a></td> 
                        <td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=V">V</a></td>
						<td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=W">W</a></td> 
                        <td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=X">X</a></td>
						<td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=Y">Y</a></td> 
                        <td width="30"><a href="<?php echo site_url();?>/c_login/search_alphabet?keyword=Z">Z</a></td>
					</tr>
			  </table></br>
			  <div id="searchkey">
			  <?php echo form_open('c_login/search').'
			  <table width="709">
				<tr>
				  <td width="81"><label>Search by</label></td>
				  <td width="22" align="center">:</td>
				  <td width="160"><select name="searchby" id="searchby">
						<option>Artist</option>
						<option>Title</option>
						<option>Album</option>
						<option>Lyric</option>
						<option>Genre</option>
						</select>
				  </td>
				  <td width="69"><label>Keyword</label></td>
				  <td width="53" align="center">:</td>
				  <td width="184">
					<input name="keyword" type="text" id="keyword"/>
				  </td>
				  <td align="center">
					<input class="submit" type="submit" value="Search"/>
				  </td>
				</tr>
			  </table>'.form_close();?>
			  </div>
		</div>
		
		<table>
			<tr></tr>
		</table>
		<!-- Shell -->
		<div class="shell">
			<!-- Works -->
			<div id="works">
				<?php if($menu == "top10music")
					{
						include 'top10music.php';
					}
					else if($menu == "top10download")
					{
						include 'top10download.php';
					}
					else if($menu == "top10like")
					{
						include 'top10like.php';
					}
					else if($menu == "top10dislike")
					{
						include 'top10dislike.php';
					}
					else if($menu == "info_lagu")
					{
						//$this->load->view('info_lagu',$isLogin,$info_music,$kd_lagu);
						include 'info_lagu.php';
					}
					else if($menu == "list_artist")
					{
						include 'view_search_artist.php';
					}
					else if($menu == "list_lagu")
					{
						include 'view_search_title.php';
					}
					else if($menu == "list_album")
					{
						include 'view_search_album.php';
					}	
					else if($menu == "list_genre")
					{
						include 'view_search_genre.php';
					}
					else if($menu == "list_lirik")
					{
						include 'view_search_lyric.php';
					}
					else if($menu == "list_lagu_artist")
					{
						include 'view_list_lagu_artist.php';
					}
					else
					{ 
						include "home.php";
					}
					?>
			</div>
			<!-- end Works -->
			
			<!-- Blogroll -->
			<div id="blogroll">
			<table>
				<tr>
					<td><h1>Music Chart</h1></td>
				</tr>
				<tr>
					<td><div class="head"></div></td>
				</tr>
				<tr>
					<td>
						<div class="box">
							<h4><a href="index.php?menu=top10music">TOP 10 Music of the Month</a></h4>
							<div class="comment">
								<span>30 Jun 2009 - 02:32 AM by Martina</span>
							</div>
							<div class="content">
								</br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus, felis quis convallis vestibulum, libero ligula ultrices tortor, vitae molestie erat lacus et nunc. Etiam semper, libero quis molestie facilisis, risus arcu pellentesque metus, accumsan pharetra ipsum metus vel tortor.</p>
							</div>
							<a class="red"  href="index.php?menu=top10music">read more &raquo;</a></br></br>
							<h4><a href="index.php?menu=top10download">TOP 10 Downloaded Songs of the Month</a></h4>
							<div class="comment">
								<span>30 Jun 2009 - 02:32 AM by Martina</span>
							</div>
							<div class="content">
								</br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus, felis quis convallis vestibulum, libero ligula ultrices tortor, vitae molestie erat lacus et nunc. Etiam semper, libero quis molestie facilisis, risus arcu pellentesque metus, accumsan pharetra ipsum metus vel tortor.</p>
							</div>
							<a class="red"  href="index.php?menu=top10download">read more &raquo;</a></br>
							<h4><a href="index.php?menu=top10like">TOP 10 Liked Songs of the Month</a></h4>
							<div class="comment">
								<span>30 Jun 2009 - 02:32 AM by Martina</span>
							</div>
							<div class="content">
								</br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus, felis quis convallis vestibulum, libero ligula ultrices tortor, vitae molestie erat lacus et nunc. Etiam semper, libero quis molestie facilisis, risus arcu pellentesque metus, accumsan pharetra ipsum metus vel tortor.</p>
							</div>
							<a class="red"  href="index.php?menu=top10like">read more &raquo;</a></br>
							<h4><a href="index.php?menu=top10dislike">TOP 10 Disliked Songs of the Month</a></h4>
							<div class="comment">
								<span>30 Jun 2009 - 02:32 AM by Martina</span>
							</div>
							<div class="content">
								</br><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean faucibus, felis quis convallis vestibulum, libero ligula ultrices tortor, vitae molestie erat lacus et nunc. Etiam semper, libero quis molestie facilisis, risus arcu pellentesque metus, accumsan pharetra ipsum metus vel tortor.</p>
							</div>
							<a class="red"  href="index.php?menu=top10dislike">read more &raquo;</a></br>
						</div>
					</td>
				</tr>
			  </table>
			</div>
			<!-- end Blogroll -->
			<div class="cl">&nbsp;</div>
		</div>
		<!-- end Shell -->			
	</div>
</div>
<!--  end Main -->

<!-- Fotoer -->
<div id="footer">
	<!-- Shell -->
	<div class="shell">
		<p>&copy; TOPmusic. Design by <a href="http://chocotemplates.com" target="_blank" title="The Sweetest CSS Templates WorldWide">ChocoTemplates.com</a></p>
	</div>
	<!-- end Shell -->
</div>
<!-- end Footer -->
  <script>
		$(function(){
			$('.slider-carousel').jqFancyTransitions({ 
				effect: 'wave',																			 
				width: 475,
				height: 235,
				navigation: true,
				strips: 3
			});
		});
	</script>
</body>
</html>