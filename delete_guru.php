<?php
include "Config/koneksi.php";
$id = $_GET['id'];
$hapus="DELETE FROM guru where nip='$id'";
$hasil = mysqli_query($konek,$hapus);

if($hasil){
echo "<script type='text/javascript'>
      alert('Data Berhasil Dihapus...!!!');
      </script>";
echo "<script>location.href='media.php?page=guru'</script>";
}
else{
echo "<script type='text/javascript'>
      alert('Data Gaga Dihapus
	  ...!!!');
      </script>";
	  
	   echo "<script>location.href='media.php?page=guru'</script>";
}
?>

