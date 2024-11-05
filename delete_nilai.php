<?php
include "Config/koneksi.php";
$id = $_GET['id'];
$hapus="DELETE FROM nilai  where kd_nilai='$id'";
$hasil = mysqli_query($konek,$hapus);

if($hasil){
echo "<script type='text/javascript'>
      alert('Data Berhasil Dihapus...!!!');
      </script>";
echo "<script>location.href='media.php?page=nilai'</script>";
}
else{
echo "<script type='text/javascript'>
      alert('Data Gagal Dihapus
	  ...!!!');
      </script>";
	  
	   echo "<script>location.href='media.php?page=nilai'</script>";
}
?>

