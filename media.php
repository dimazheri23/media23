<?php
ob_start();
session_start();
error_reporting(0);
include"./Config/koneksi.php";
$r=mysqli_fetch_array(mysqli_query($konek,"select * from admin where kd_admin='$_SESSION[id]'"));
?>
<html>
<head>
<title>SISTEM PENDUKUNG KEPUTUSAN </title>
<link rel="stylesheet" type="text/css" href="css/style.css">

<style type="text/css">
<!--
.style1 {font-size: 12px}
-->
</style>
</head>
<body>

<div id="main">
<div id="logo"><img src='images/headeri.jpg' width="100%"></div>
<div id="menu">
		<ul>
		   <li><a href="./media.php">Home</a></li>
		   	   <?php
				   if($_SESSION[level]=="Admin"){
				   ?>
				  
		   		<li><a href="./media.php?page=nn">Proses</a></li>
                <li><a href="./media.php?page=guru">Kelola Data Guru</a>		   </li>
		    <li><a href="#">Laporan</a>
				<ul>
					<li><a href="laporan_guru.php" target="_blank">Laporan Data Guru</a></li>
					<li><a href="laporan_hasil.php" target="_blank">Laporan Hasil Penentuan</a></li>
				</ul>
		   </li>
					
				  <?php
				   }else{
				   ?>
				   <li><a href="./media.php?page=hasil">Hasil Sertifikasi</a></li>
				   
				   <?php
				   }
				   ?>
				   
				   
				
		  
		   <li><a href="./media.php?page=logout">Logout</a> </li>
          
          
		</ul>
         
</div>
 
<?php
$page = isset($_GET['page']) ? $_GET['page'] :'';

if($page=="guru"){ include"guru.php"; }
else if($page=="form-mhs"){ include"form/form-mahasiswa.php"; }
else if($page=="editmahasiswa"){ include"form/form-mahasiswa-edit.php"; }
else if($page=="hapusmahasiswa"){ include"form/mahasiswa-hapus.php"; }

else if($page=="nilai"){ include"nilai.php"; }
else if($page=="addkrs"){ include"form/form-krs.php"; }
else if($page=="hasil"){ include"hasil.php"; }


else if($page=="nn"){ include"input_proses.php"; }
else if($page=="aksi"){ include"aksi.php"; }
else if($page=="input_nilai"){ include"input_nilai.php"; }
else if($page=="input_karyawan"){ include"input_personil.php"; }

else if($page=="edit_guru"){ include"edit_guru.php"; }

else if($page=="logout"){
session_start();
session_destroy();
echo"<script>window.location.href='./'</script>";
}else{
?>

<div class="">

  <h2>Selamat Datang, <?php echo"$_SESSION[nm]"; ?></h2><hr>
	<p align="justify">
	Sistem pendukung keputusan merupakan suatu perlengkapan dari sesorang atau instansi dalam proses pengambilan keputusan. Dimana sistem ini tidak ditunjukan untuk mengganti pengambil keputusan dalam pembuatan keputusan.
Sistem pendukung keputusan menggabungkan kemampuan komputer dalam pelayanan interaktif dengan pengolahan atau pemanipulasi data yang memanfaatkan model atau aturan penyelesaian yang tidak terstruktur. Sistem pendukung keputusan mempunyai beberapa sumber intelektual dengan kemempuan dari komputer untuk memperbaiki kualitas keputusan.	</p>
<p> Sertifikasi guru adalah proses pemberian sertifikat pendidik kepada guru. Sertifikat pendidik diberikan kepada guru yang telah memenuhi standar profesional guru. Guru profesional merupakan syarat mutlak untuk menciptakan sistem dan praktik pendidikan yang berkualitas.</p>
</div>


<?php
}
?>

<div class="footer style1">Copyright &copy; 2017 - Universitas Putra Indonesia "YPTK" Padang</iv>
</div>

</body>
</html>


