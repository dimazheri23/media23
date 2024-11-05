<body onLoad="javascript:print()"> 

<div class="panel panel-default">
<link href="assets/css/bootstrap.css" rel="stylesheet">
<h3 align="center">LAPORAN HASIL PENENTUAN SERTIFIKASI</h3>

<table border="1" align="center"   class="table table-striped table-advance table-hover">
<thead>
<tr>						
<thead>
<tr>

<th>No</th>
<th>NIP</th>
<th>Nama</th>
<th>Usia</th>
<th>Masa Kerja</th>
<th>Golongan</th>
<th>Pendidikan</th>
<th>Keterangan</th>
</tr>
</thead>
<?php
include "Config/koneksi.php";
$tampil = "SELECT hasil.kd_hasil,Jumlah_nilai,keterangan,guru.nip,nama,usia,masa_kerja,golongan,pendidikan
from hasil,guru
where hasil.nip=guru.nip and guru.nip='$_GET[nip]'";
$hasil = mysqli_query($konek, $tampil);
$no=0;
while ($row =mysqli_fetch_array($hasil)):
$no++;
?>
     <tr>
          <td><?php echo $no ?></td>
          <td><?php echo $row['nip'] ?></td>
          <td><?php echo $row['nama'] ?></td>
       <td><?php echo $row['usia'] ?></td>
       <td><?php echo $row['masa_kerja'] ?></td>
       <td><?php echo $row['golongan'] ?></td>
	   <td><?php echo $row['pendidikan'] ?></td>
          <td><?php echo $row['keterangan'] ?></td>
  
       
		
         

      
     </tr>
<?php
endwhile;
?>
</body>
</table>

<?php
echo " <br><br><table align='right'>";
$tgl = date('d M Y');
echo "<tr><td>Padang, $tgl</td></tr>";
echo "<tr><td>Mengetahui,</td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td><em>&nbsp;</em></td></tr>";
echo "<tr><td>Pimpinan</td></tr>";


?>


