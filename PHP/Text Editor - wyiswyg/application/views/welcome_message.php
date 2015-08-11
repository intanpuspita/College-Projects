<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<title>Question Administrator</title>
       
        <!-- CSS Reset -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/reset.css" tppabs="http://www.xooom.pl/work/magicadmin/css/reset.css" media="screen" />
       
        <!-- Fluid 960 Grid System - CSS framework -->
		<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/grid.css" tppabs="http://www.xooom.pl/work/magicadmin/css/grid.css" media="screen" />
		
        <!-- IE Hacks for the Fluid 960 Grid System -->
        <!--[if IE 6]><link rel="stylesheet" type="text/css" href="ie6.css" tppabs="http://www.xooom.pl/work/magicadmin/css/ie6.css" media="screen" /><![endif]-->
		<!--[if IE 7]><link rel="stylesheet" type="text/css" href="ie.css" tppabs="http://www.xooom.pl/work/magicadmin/css/ie.css" media="screen" /><![endif]-->
        
        <!-- Main stylesheet -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/styles.css" tppabs="http://www.xooom.pl/work/magicadmin/css/styles.css" media="screen" />
        
        <!-- WYSIWYG editor stylesheet -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/jquery.wysiwyg.css" tppabs="http://www.xooom.pl/work/magicadmin/css/jquery.wysiwyg.css" media="screen" />
        
        <!-- Table sorter stylesheet -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/tablesorter.css" tppabs="http://www.xooom.pl/work/magicadmin/css/tablesorter.css" media="screen" />
        
        <!-- Thickbox stylesheet -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/thickbox.css" tppabs="http://www.xooom.pl/work/magicadmin/css/thickbox.css" media="screen" />
        
        <!-- Themes. Below are several color themes. Uncomment the line of your choice to switch to different color. All styles commented out means blue theme. -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/theme-blue.css" tppabs="http://www.xooom.pl/work/magicadmin/css/theme-blue.css" media="screen" />
        
		<!-- JQuery engine script-->
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery-1.3.2.min.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery-1.3.2.min.js"></script>
        
		<!-- JQuery WYSIWYG plugin script -->
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.wysiwyg.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery.wysiwyg.js"></script>
        
        <!-- JQuery tablesorter plugin script-->
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.tablesorter.min.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery.tablesorter.min.js"></script>
        
		<!-- JQuery pager plugin script for tablesorter tables -->
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.tablesorter.pager.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery.tablesorter.pager.js"></script>
        
		<!-- JQuery password strength plugin script -->
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/jquery.pstrength-min.1.2.js" tppabs="http://www.xooom.pl/work/magicadmin/js/jquery.pstrength-min.1.2.js"></script>
        
		<!-- JQuery thickbox plugin script -->
		<script type="text/javascript" src="<?php echo base_url()?>assets/js/thickbox.js" tppabs="http://www.xooom.pl/work/magicadmin/js/thickbox.js"></script>
        
        <script type="text/javascript" src="<?php echo base_url()?>assets/js/tinymce/tinymce.min.js"></script>
		<script type="text/javascript">
		/* tinymce.init({
			selector: "textarea",
			theme: "modern",
			plugins: [
				"advlist autolink lists link image charmap print preview hr anchor pagebreak",
				"searchreplace wordcount visualblocks visualchars code fullscreen",
				"insertdatetime media nonbreaking save table contextmenu directionality",
				"emoticons template paste textcolor moxiemanager"
			],
			toolbar1: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image",
			toolbar2: "print preview media | forecolor backcolor emoticons",
			image_advtab: true,
			templates: [
				{title: 'Test template 1', content: 'Test 1'},
				{title: 'Test template 2', content: 'Test 2'}
			]
		}); */
		</script>
		
		<!-- Initiate WYIWYG text area -->
		<script type="text/javascript">
			$(function()
			{
			$('.wysiwyg').wysiwyg(
			{
			controls : {
			separator01 : { visible : true },
			separator03 : { visible : true },
			separator04 : { visible : true },
			separator00 : { visible : true },
			separator07 : { visible : false },
			separator02 : { visible : false },
			separator08 : { visible : false },
			insertOrderedList : { visible : true },
			insertUnorderedList : { visible : true },
			undo: { visible : true },
			redo: { visible : true },
			justifyLeft: { visible : true },
			justifyCenter: { visible : true },
			justifyRight: { visible : true },
			justifyFull: { visible : true },
			subscript: { visible : true },
			superscript: { visible : true },
			underline: { visible : true },
            increaseFontSize : { visible : false },
            decreaseFontSize : { visible : false }
			}
			} );
			});
        </script>
		
		<!-- Initiate tablesorter script -->
        <script type="text/javascript">
			$(document).ready(function() { 
				$("#myTable") 
				.tablesorter({
					// zebra coloring
					widgets: ['zebra'],
					// pass the headers argument and assing a object 
					headers: { 
						// assign the sixth column (we start counting zero) 
						6: { 
							// disable it by setting the property sorter to false 
							sorter: false 
						} 
					}
				}) 
			.tablesorterPager({container: $("#pager")}); 
		}); 
		</script>
	</head>
	<body>
		<div class="container_12">
			<div class="grid_6">
                <div class="module">
                     <h2><span>Form</span></h2>
                        
                     <div class="module-body">
                         <?php echo form_open('welcome') ;?>
						    <p>
                                <label>Category</label>
                                <input type="text" class="input-short" name="category" />
                                <span class="notification-input ni-correct"></span>
                            </p>
                            <fieldset>
                                <label>Question</label>
                                <textarea class="wysiwyg" rows="22" cols="85" name="content">    </textarea> 
                            </fieldset>
							<fieldset>
                                <label>Solutions</label>
                                <textarea class="wysiwyg" rows="22" cols="85" name="solution">    </textarea> 
                            </fieldset>
                            <fieldset>
                                <input class="submit-green" type="submit" value="Submit" name="submit"/> 
                            </fieldset>
                        <?php echo form_close(); ?>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
        		<div style="clear:both;"></div>
            </div> <!-- End .grid_12 -->
			
			<div class="grid_6">
                <div class="module">
                     <h2><span>Form</span></h2>
                        
                     <div class="module-body">
                         <?php echo form_open('welcome/insert_option') ;?>
						    <p>
                                <label>Question ID</label>
                                <select class="input-long" name="ques">
									<?php foreach($blank->result() as $blank){ ?>
									<option value="<?php echo $blank->QUES_ID; ?>"><?php echo "(".$blank->QUES_ID.")&nbsp;".substr($blank->QUES_CONTENT,0,100)."..."; ?></option>
									<?php } ?>
								</select>
                            </p>
							<table>
                                <tr>
									<td>
										<label>Option A</label>
										<textarea class="wysiwyg" rows="4" cols="40" name="opta">    </textarea> 
									</td>
									<td>
										<label>Option B</label>
										<textarea class="wysiwyg" rows="4" cols="40" name="optb">    </textarea> 
									</td>
								</tr>
								<tr>
									<td>
										<label>Option C</label>
										<textarea class="wysiwyg" rows="4" cols="40" name="optc">    </textarea> 
									</td>
									<td>
										<label>Option D</label>
										<textarea class="wysiwyg" rows="4" cols="40" name="optd">    </textarea> 
									</td>
								</tr>
								<tr>
									<td>
										<label>Option E</label>
										<textarea class="wysiwyg" rows="4" cols="40" name="opte">    </textarea> 
									</td>
								</tr>
                                <input class="submit-green" type="submit" value="Submit" name="submit"/> 
                        </table>
						<?php echo form_close(); ?>
                     </div> <!-- End .module-body -->

                </div>  <!-- End .module -->
        		<div style="clear:both;"></div>
            </div> <!-- End .grid_12 -->
             
			<div class="grid_12">
                <!-- Example table -->
                <div class="module">
                	<h2><span>Question Table</span></h2>
                     <div class="module-table-body">
                    	<form action="">
                        <table id="myTable" class="tablesorter">
                        	<thead>
                                <tr>
                                    <th style="width:5%">#</th>
                                    <th style="width:5%">Category</th>
                                    <th style="width:25%">Question</th>
                                    <th style="width:20%">Solution</th>
									<th style="width:20%">Option</th>
									<th style="width:20%">Answer</th>
									<th style="5%">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
										$i = 1;
										foreach($article as $c)
										{
											
								?>
										<tr>
											<td  class="align-center"><?php echo $c['QUES_ID'] ?></td>
											<td><?php echo $c['CAT_ID'] ?></td>
											<td><?php echo substr($c['QUES_CONTENT'],0,100); ?></td>
											<td><?php echo substr($c['QUES_DISC'],0,80); ?></td>
											<td><?php echo $c['QUES_ANSWER'] ?></td>
											<form action="<?php echo base_url()?>index.php/welcome/set_answer/" method="POST"/>
											<td>
													<input type="hidden" value="<?php echo $c['QUES_ID'] ?>" name="ques"/>
													<select class="input-long" name="answer">
														<?php foreach($opt_content[$i]->result() as $opt){ ?>
														<option value="<?php echo $opt->OPT_ID; ?>"><?php echo "(".$opt->OPT_ID.")&nbsp;".$opt->OPT_CONTENT; ?></option>
														<?php } ?>
													</select>
													<input class="submit-green" formaction="<?php echo base_url()?>index.php/welcome/set_answer/" formmethod="post" type="submit" value="Submit" name="submit"/> 
											</td>
											</form>
											 <td>
												<?php echo anchor('welcome/delete/'.$c['QUES_ID'], "<img src='".base_url()."assets/image/bin.gif' tppabs='http://www.xooom.pl/work/magicadmin/images/bin.gif' width='16' height='16' alt='delete' />")?>
											</td>
										</tr>
								<?php
										
										$i = $i + 1;
										}
								?>
                            </tbody>
                        </table>
                        </form>
                        <div class="pager" id="pager">
                            <form action="">
                                <div>
                                <img class="first" src="<?php echo base_url(); ?>assets/image/arrow-stop-180.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-stop-180.gif" alt="first"/>
                                <img class="prev" src="<?php echo base_url(); ?>assets/image/arrow-180.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-180.gif" alt="prev"/> 
                                <input type="text" class="pagedisplay input-short align-center"/>
                                <img class="next" src="<?php echo base_url(); ?>assets/image/arrow.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow.gif" alt="next"/>
                                <img class="last" src="<?php echo base_url(); ?>assets/image/arrow-stop.gif" tppabs="http://www.xooom.pl/work/magicadmin/images/arrow-stop.gif" alt="last"/> 
                                <select class="pagesize input-short align-center">
                                    <option value="10" selected="selected">10</option>
                                    <option value="20">20</option>
                                    <option value="30">30</option>
                                    <option value="40">40</option>
                                </select>
                                </div>
                            </form>
                        </div>
                        <div style="clear: both"></div>
                    </div> <!-- End .module-table-body -->
                </div> <!-- End .module -->
				</div>
						
            <div style="clear:both;"></div>
        </div> <!-- End .container_12 -->
	</body>
</html>