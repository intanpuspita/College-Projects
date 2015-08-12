<div> 
  <div>                 	
	  <h1><img src="<?php echo base_url();?>/images/logo.png" alt=""></h1> 
	  <nav>  
		<ul class="menu">
			  <li><?php echo anchor('c_homeadmin', 'Home'); ?></li>
			  <li><?php echo anchor('c_jadwal', 'Jadwal'); ?></li>
			  <li><?php echo anchor('c_pemesanan', 'Pemesanan'); ?></li>
			  <?php if(isset($_SESSION['username'])){ ?><li><?php echo anchor('c_login/proses_logout', 'Log Out'); ?></li>
			  <?php } ?>
		  </ul>
	  </nav>
	  <div class="clear"></div>
  </div>
</div>