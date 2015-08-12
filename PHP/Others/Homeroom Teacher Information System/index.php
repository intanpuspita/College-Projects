<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<?php
	include 'connect.php';
	include('cek-login.php'); 
	if(!isset($_GET['menu'])){
		$menu=1;
	}
	else{
		$menu=$_GET['menu'];
	}
?>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Sistem Absensi Mahasiswa</title>
<link href="style/style1.css" rel="stylesheet" type="text/css" />
<link ilo-ful-src="" rel="shortcut icon" href="images/gbr5.gif" type="image/x icon" />
<script type="text/JavaScript">
<!--
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
//-->
</script>
</head>
<body onload="MM_preloadImages('images/index_17_a.gif','images/index_18_a.gif','images/index_19_a.gif','images/index_20_a.gif','images/index_21_a.gif','images/index_22_a.gif')">

<table width="780" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <tr>
    <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="48%" align="left" valign="top" style="padding-top:9px; padding-left:30px; padding-bottom:20px;"><a href="index.php"><img src="images/header.jpg" alt="" width="401" height="82" border="0" /></a></td>
            <td width="52%" align="left" valign="top" style="padding-left:400px; padding-top:20px;"><table width="20%" height="39" border="0" cellpadding="0" cellspacing="0">
                <tr>
                  <td width="20%" align="left" valign="top">[<a href="logout.php">LogOut</a>]</td>
                </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="25" align="center" valign="middle">&nbsp;</td>
			<td align="center" valign="middle"><a href="index.php?menu=<?php echo '1'?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image1','','images/home2.gif',1)"><img src="images/home1.gif" alt="contact us" name="Image1" width="100%" height="45" border="0" id="Image1" /></a></td>
            <td align="center" valign="middle"><a href="index.php?menu=<?php echo '2'?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image2','','images/mhs2.gif',1)"><img src="images/mhs1.gif" alt="contact us" name="Image2" width="100%" height="45" border="0" id="Image2" /></a></td>
			<td align="center" valign="middle"><a href="index.php?menu=<?php echo '3'?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image3','','images/dosen2.gif',1)"><img src="images/dosen1.gif" alt="contact us" name="Image3" width="100%" height="45" border="0" id="Image3" /></a></td>
			<td align="center" valign="middle"><a href="index.php?menu=<?php echo '6'?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image6','','images/kuliah2.gif',1)"><img src="images/kuliah1.gif" alt="contact us" name="Image6" width="100%" height="45" border="0" id="Image6" /></a></td>
            <td align="center" valign="middle"><a href="index.php?menu=<?php echo '4'?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image4','','images/absen2.gif',1)"><img src="images/absen1.gif" alt="contact us" name="Image4" width="100%" height="45" border="0" id="Image4" /></a></td>
            <td align="center" valign="middle"><a href="index.php?menu=<?php echo '5'?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image5','','images/matkul2.gif',1)"><img src="images/matkul1.gif" alt="contact us" name="Image5" width="100%" height="45" border="0" id="Image5" /></a></td>
			<td align="center" valign="middle"><a href="index.php?menu=<?php echo '10'?>" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('Image10','','images/semester2.gif',1)"><img src="images/semester1.gif" alt="contact us" name="Image10" width="100%" height="45" border="0" id="Image10" /></a></td>
			<td width="28" align="center" valign="middle">&nbsp;</td>
          </tr>
        </table></td>
      </tr>

    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="995" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr width="80%" align="center">
        <td height="4" width="100%" align="left" valign="top" bgcolor="#0094FF">&nbsp;</td>
      </tr>
	</table>
	<table width="90%" align="center"> 
	  <tr width="99%" align="center">
		<?php 
		if($menu==1){
			include('home.php');}
		else if($menu==2){
			echo "<td>"; include('data_mhs.php'); echo "</td>";}
		else if($menu==21){
			echo "<td>"; include('frm_mhs.php'); echo "</td>";}
		else if($menu==22){
			echo "<td>"; include('edit_mhs.php'); echo "</td>";}
		else if($menu==23){
			echo "<td>"; include('detail_mhs.php'); echo "</td>";}	
		else if($menu==3){
			echo "<td>"; include('data_dosen.php'); echo "</td>";}
		else if($menu==31){
			echo "<td>"; include('frm_dosen.php'); echo "</td>";}
		else if($menu==32){
			echo "<td>"; include('edit_dosen.php'); echo "</td>";}
		else if($menu==33){
			echo "<td>"; include('detail_dosen.php'); echo "</td>";}
		else if($menu==4){
			echo "<td>"; include('data_absen.php'); echo "</td>";}
		else if($menu==41){
			echo "<td>"; include('frm_kehadiran.php'); echo "</td>";}
		else if($menu==42){
			echo "<td>"; include('edit_kehadiran.php'); echo "</td>";}
		else if($menu==43){
			echo "<td>"; include('data_absen_tu.php'); echo "</td>";}
		else if($menu==5){
			echo "<td>"; include('data_assignment.php'); echo "</td>";}
		else if($menu==51){
			echo "<td>"; include('frm_assignment.php'); echo "</td>";}
		else if($menu==52){
			echo "<td>"; include('edit_assignment.php'); echo "</td>";}
		else if($menu==6){
			echo "<td>"; include('data_perkuliahan.php'); echo "</td>";}
		else if($menu==61){
			echo "<td>"; include('frm_perkuliahan.php'); echo "</td>";}
		else if($menu==62){
			echo "<td>"; include('edit_perkuliahan.php'); echo "</td>";}
		else if($menu==63){
			echo "<td>"; include('detail_kuliah.php'); echo "</td>";}
		else if($menu==7){
			echo "<td>"; include('data_mk.php'); echo "</td>";}
		else if($menu==71){
			echo "<td>"; include('frm_mk.php'); echo "</td>";}
		else if($menu==72){
			echo "<td>"; include('edit_mk.php'); echo "</td>";}
		else if($menu==8){
			echo "<td>"; include('data_smt.php'); echo "</td>";}
		else if($menu==81){
			echo "<td>"; include('frm_smt.php'); echo "</td>";}
		else if($menu==82){
			echo "<td>"; include('edit_smt.php'); echo "</td>";}
		else if($menu==9){
			echo "<td>"; include('data_kelas.php'); echo "</td>";}
		else if($menu==91){
			echo "<td>"; include('frm_kelas.php'); echo "</td>";}
		else if($menu==92){
			echo "<td>"; include('edit_kelas.php'); echo "</td>";}
		else if($menu==10){
			echo "<td>"; include('data_semester.php'); echo "</td>";}
		else if($menu==11){
			echo "<td>"; include('frm_ruang.php'); echo "</td>";}
		else if($menu==112){
			echo "<td>"; include('edit_ruang.php'); echo "</td>";}?>
	  </tr>  
        <td align="left" valign="top" style="padding-top:43px;">&nbsp;</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="723" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="13" align="left" valign="top"><img src="images/gbr6.gif" width="13" height="62" alt="" /></td>
        <td align="left" valign="top" style="background-image:url(images/gbr7.gif); background-repeat:repeat-x;"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="center" valign="middle"><pre class="footer"><a href="index.php?menu=<?php echo '1'?>">Home</a>    ::    <a href="index.php?menu=<?php echo '2'?>">Data Mahasiwa</a>    ::    <a href="index.php?menu=<?php echo '3'?>">Data Dosen</a>    ::    <a href="index.php?menu=<?php echo '6'?>">Data Perkuliahan</a>    ::    <a href="index.php?menu=<?php echo '4'?>">Absensi Mahasiswa</a>   ::    <a href="index.php?menu=<?php echo '5'?>">Data Mata Kuliah</a></pre></td>
          </tr>
          <tr>
            <td align="center" valign="middle" class="copyright">Copyright &copy; 2003-2007 <span style="color:#0094FF;">Company name.com. </span>All rights reserved</td>
          </tr>
        </table></td>
        <td width="15" align="right" valign="top"><img src="images/gbr8.gif" width="15" height="62" alt="" /></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>