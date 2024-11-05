<?php
//include "atas.php";
?><head>
    <link href="assets/css/bootstrap.css" rel="stylesheet">
    <!--external css-->
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
    

</head>

<h4><i class=""></i> Data Guru</h4>
						  
                            <table class="table table-bordered table-striped table-condensed">
    
                              <thead>
                              <tr>

							<p></p>
<thead>
<tr>
<td>NIP</td>
<td>NAMA GURU</td>
<td>JENIS KELAMIN</td>
<td>ALAMAT</td>
<td>TELPON</td>
<td>AKSI</td>

</tr>
</thead>
<?php
include "Config/koneksi.php";
$tampil = " select * from guru";
$hasil = mysqli_query($konek, $tampil);
while ($row =mysqli_fetch_array($hasil)):
?>
     <tr>
          <td><?php echo $row['nip'] ?></td>
          <td><?php echo $row['nama'] ?></td>
          <td><?php echo $row['jk'] ?></td>
          <td><?php echo $row['alamat'] ?></td>
         
          <td><?php echo $row['telpon'] ?></td>
		   
		   <td>
         

        
         <a href='?page=edit_guru&id=<?php echo $row[nip]?>' title="Klik Disini Untuk Hapus"><i class="fa fa-pencil "></i>
         <a href='delete_guru.php?id=<?php echo $row[nip]?>' title="Klik Disini Untuk Hapus" Onclick="return confirm('Apakah Anda Yakin Edit Record dengan ID =<?php echo $row[nip]?>')"><i class="fa fa-trash-o "></i>
                                  

          </td>
     </tr>
<?php
endwhile;
?>
</body>
</table>
	           
