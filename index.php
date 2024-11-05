<?php
ob_start();
session_start();
error_reporting(0);
include"./Config/koneksi.php";
if(!empty($_SESSION['username']) AND !empty($_SESSION['password'])){
echo"<script>window.location.href='./media.php'</script>";
}
?>
<html>
<head>
<title>selamat datang</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<style type="text/css">
<!--
.style3 {
	font-size: 12px
}
-->
</style>
</head>
<body>

<div id="main">
<div id="logo"><img src='images/head.jpg' width="100%"></div>
<div id="menu">
		<ul>
		   <li><a href="./">Home</a></li>
		   	  
				   
				
		   <li><a href="./index.php?page=profil">Profil</a>		   </li>
		   <li><a href="./index.php?page=kontak">Kontak Informasi</a></li>
            <li><a href="./index.php?page=registrasi">Registrasi</a></li>
		   <li><a href="./index.php?page=login">Login</a></li>
		  
		  <li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li>
		    <li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li>  <li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li><li>&nbsp;</li>
		   <li><a href="http://google.com" target="_blank">Pencarian</a></li>
		</ul>
</div>

<div class="left">

  
	
	
	<?php
$page = isset($_GET['page']) ? $_GET['page'] :'';


if($page=="profil"){ include"profil.php"; }
else if($page=="kontak"){ include"kontak.php"; }
else if($page=="registrasi"){ include"registrasi.php"; }

else if($page=="login"){ include"login.php"; }
else {
include"home.php"; }





?>
</div>
<div class="right1">
<!--<form method="POST" action="http://google.com" >
<input type="text" name="" placeholder="Pencarian">
<a href="http://google.com" target="_blank"> Cari </a>
</form>-->
   <center><div class='alert alert-success'>Waktu Hari ini</div>
<embed src='images/clock.swf' style='margin-top:-20px;' quality='high' bgcolor='black' width='185' height='170' type='application/x-shockwave-flash' pluginspage='http://www.macromedia.com/shockwave/download/index.cgi? P1_Prod_Version=ShockwaveFlash'>
</center>
<br>
  <?php 
  include"fungsi_kalender.php";
  $tgl_skrg=date("d");
  $bln_skrg=date("n");
  $thn_skrg=date("Y");
  echo buatkalender($tgl_skrg,$bln_skrg,$thn_skrg); 
  ?>
</div>
<br><br><br><br><br><br>
<div class="footer style3">Copyright &copy; 2024 - smpn23</div>
</div>
</body>
</html>

