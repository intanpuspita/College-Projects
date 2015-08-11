<html>
<head>
	
    <link rel="stylesheet" href="<?php echo base_url();?>/css/validationEngine.jquery.css" type="text/css"/>
    <script src="<?php echo base_url();?>/js/jquery-1.8.2.min.js" type="text/javascript">
    </script>
    <script src="<?php echo base_url();?>/js/languages/jquery.validationEngine-en.js" type="text/javascript" charset="utf-8">
    </script>
    <script src="<?php echo base_url();?>/js/jquery.validationEngine.js" type="text/javascript" charset="utf-8">
    </script>
	<link rel="stylesheet" href="<?php echo base_url();?>/css/jquery-ui.css" type="text/css"/>
	<script src="<?php echo base_url();?>/js/jquery-ui.min.js" "text/javascript"></script>
    <script>
        jQuery(document).ready(function(){
            jQuery("#formID").validationEngine();
        });
    </script>
	<script>
		jQuery(document).ready(function(){
			// binds form submission and fields to the validation engine
			$( ".datepicker" ).datepicker();
			jQuery("#formID").validationEngine();
		});
            
		/**
		*
		* @param {jqObject} the field where the validation applies
		* @param {Array[String]} validation rules for this field
		* @param {int} rule index
		* @param {Map} form options
		* @return an error string if validation failed
		*/
		function checkHELLO(field, rules, i, options){
			if (field.val() != "HELLO") {
				// this allows to use i18 for the error msgs
				return options.allrules.validate2fields.alertText;
			}
		}
	</script>
</head>
<body>
<form id="formID" class="formular" method="POST" action="<?php echo site_url();?>/c_form/simpan_biodata">
	<table border="1" width="50%" align="center">
		<tr>
			<td colspan="3" align="center"><h1>Form Biodata Mahasiswa</h1></td>
		</tr>
		<tr>
			<td>
				<table align="center">
					<tr>
						<td>NIM</td>
						<td> : </td>
						<td><input class="validate[required,custom[onlyNumberSp], minSize[9], maxSize[9]] text-input" type="text" name="nim"/></td>
					</tr>
					<tr height="10px">
						<td></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td> : </td>
						<td><label><input value="" class="validate[required,custom[onlyLetterSp]] text-input" type="text" name="nama" /></label></td>
					</tr>
					<tr height="10px">
						<td></td>
					</tr>
					<tr>
						<td>Tanggal Lahir</td>
						<td> : </td>
						<td><input type="text" name="ttl" class="validate[required] text-input datepicker" ></td>
					</tr>
					<tr height="10px">
						<td></td>
					</tr>
					<tr>
						<td>Umur</td>
						<td> : </td>
						<td><input type="text" name="umur" class="validate[custom[onlyNumberSp]] text-input"></td>
					</tr>
					<tr height="10px">
						<td></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td> : </td>
						<td><textarea name="alamat"></textarea></td>
					</tr>
					<tr height="10px">
						<td></td>
					</tr>
					<tr>
						<td>Telepon</td>
						<td> : </td>
						<td><input type="text" name="umur" class="validate[custom[onlyNumberSp]] text-input"></td>
					</tr>
					<tr height="10px">
						<td></td>
					</tr>
					<tr>
						<td>Alamat email</td>
						<td> : </td>
						<td><input class="validate[custom[email]] text-input" type="text" name="email"/></td>
					</tr>
					<tr height="10px">
						<td></td>
					</tr>
					<tr>
						<td colspan="3" align="center"><input class="submit" type="submit" value="Submit"/></td>
					</tr>
				</table>
			</td>
		</tr>
	</table>
</form>
</body>
</html>