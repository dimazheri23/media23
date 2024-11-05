<head>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    

</head>

                      
<h4><i class=""></i> Data Nilai</h4>
 						  
                            <table class="table table-bordered table-striped table-condensed">
     <a href="?page=input_nilai" class="btn btn-primary"/>Tambah Nilai</a>
                              <thead>
                              <tr>


							<p></p>
<thead>
<tr>
<td>KODE NILAI </td>
<td>NIK</td>
<td>NILAI KINERJA</td>
<td>NILAI PENDIDIKAN</td>
<td>NILAI MASA KERJA</td>
<td>AKSI</td>

</tr>
</thead>
<?php
include "Config/koneksi.php";
$tampil = "SELECT * FROM NILAI";
$hasil = mysqli_query($konek, $tampil);
while ($row =mysqli_fetch_array($hasil)):
?>
     <tr>
          <td><?php echo $row['kd_nilai'] ?></td>
          <td><?php echo $row['Kd_personil'] ?></td>
          <td><?php echo $row['N_generik'] ?></td>
          <td><?php echo $row['N_spesifik'] ?></td>
         
          <td><?php echo $row['N_masakerja'] ?></td>
		   <td>
         <a href='delete_nilai.php?id=<?php echo $row[kd_nilai]?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Hapus Record dengan ID =<?php echo $row[kd_nilai]?>')"><i class="fa fa-trash-o "></i>
                                  

          </td>
     </tr>
<?php
endwhile;
?>
</body>
</table>
