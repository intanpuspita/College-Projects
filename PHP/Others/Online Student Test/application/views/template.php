<html>
    <head>
		<link rel="stylesheet" href="<?php echo base_url();?>/css/reset.css" />
		<link rel="stylesheet" href="<?php echo base_url();?>/css/styles.css" />
		<!-- Validation Engine-->
        <link rel="stylesheet" href="<?php echo base_url();?>/css/validation/validationEngine.jquery.css" type="text/css"/>
        <script src="<?php echo base_url();?>/js/validation/jquery-1.8.2.min.js" type="text/javascript" />
        <script src="<?php echo base_url();?>/js/validation/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8" />
        <script src="<?php echo base_url();?>/js/validation/jquery.validationEngine.js" type="text/javascript" charset="utf-8"/>
    	<script src="<?php echo base_url();?>/js/validation/jquery-ui.min.js" "text/javascript"/>
        <script>
            jQuery(document).ready(function(){
                jQuery("#formID").validationEngine();
            });
        </script>
    	<script> 
    		function checkHELLO(field, rules, i, options){
    			if (field.val() != "HELLO") {
    				// this allows to use i18 for the error msgs
    				return options.allrules.validate2fields.alertText;
    			}
    		}
    	</script>
    </head>
    <body>
		<div class="head"></div>
			<div id="wrapper" class="container_12">
				 <h1 id="logo" class="grid_4">Online Test</h1>
				<?php echo $_header;?>
				<table>
					<tr>
					  <td><?php echo $_content;?></td>
					</tr>
				</table>
				<?php echo $_footer;?>
			</div>
		<div class="head"></div>
    </body>
</html>