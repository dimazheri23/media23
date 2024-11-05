<?php
include "atas.php";
?>
    
      
                  	  <h4 >HASIL PROSES NEAREST NEIGHIBOR</h4>
                      <form class="form-horizontal style-form" action="simpan_hasil.php" method="POST">
                          <div class="form-group">
                              <div class="col-sm-10">
                                
                              </div>
                          </div>
						  
<?php
//error_reporting(0);

include "./Config/koneksi.php";

$a=$_POST['t3'];
$b=$_POST['t4'];
$c=$_POST['t5'];

if($a < 9.75){
$n1=1;

}else if($a < 16.25 ){
$n1=3;

}else if($a > 16.25 ){
$n1=5;
}


if($b < 10.5){
$n2=1;

}else if($b < 17.5 ){
$n2=3;

}else if($b > 17.5 ){
$n2=5;
}

if($c < 10){
$n3=1;

}else if($c < 17 ){
$n3=3;

}else if($b > 17 ){
$n3=5;
}

$t1 = $_POST['t1'];
//echo " N1= $n1,N2= $n2, N3= $n3";

if (empty($t1) )
{
	echo "<script>
				alert('Ada yang belum anda isi');
				window.location = 'javascript:history.go(-1)'; 
		</script>";
}
else
{
	//Membaca jumlah baris data pada database
	$sql = mysql_query("SELECT * FROM data ORDER BY id ASC");
	$numrows = mysql_num_rows($sql);

	//Menentukan nilai K
	/*$k=0.3 * $numrows;
	$k=round($k);
	$r=$k % 2;
	if($r!=0)
	{
		$k=$k+1;
	}
	else
	{
		$k=$k;
	}*/

	$k=1; 



	//Perhitungan dengan KNN
	for ($i=1; $i <= $numrows; $i++)
	{	
		$sql1 = mysql_query("SELECT * FROM data Where id = $i");
		while($data = mysql_fetch_array($sql1))
		{
			//Pengurangan(KNN)
			$v1 = $n1 - $data[N_generik];
			$v2 = $n2 - $data[N_spesifik];
			$v3 = $n3 - $data[N_masa];

			
			//Pengkuadratan(KNN)
			$hit1 = (pow($v1,2)) + (pow($v2,2)) + (pow($v3,2))+ (pow($v4,2));
			
			//Pengakaran(KNN)
			$hit2 = sqrt($hit1);
			
			echo "Nilai Hasil Pengakaran : $hit2 <br><br>";
			//Penyimpanan perhitungan ke database sementara
			mysql_query("INSERT INTO sementara (id,
												jarak,
												N_generik,
												N_spesifik,
												N_masa,
												keterangan)
										VALUES ('$i',
												'$hit2',
												'$data[N_generik]',
												'$data[N_spesiifk]',
												'$data[N_masa]',
												'$data[keterangan]')");
		}	
	}

	
	
	//data yang sudah d sorting dari data pertama sampai data nilai K
	$sql3 = mysql_query("SELECT * FROM  `sementara` ORDER BY  `sementara`.`jarak` ASC LIMIT 0 , $k");
	$x=1;
	
	while($data = mysql_fetch_array($sql3))
		{			
			//memasukkan data yang sudah di sorting mulai dari pertama sampai data nilai k ke dalam database sementara
			mysql_query("INSERT INTO urut (id,
										jarak,
										N_generik,
												N_spesifik,
												N_masa,
										keterangan)
								VALUES ('$x',
										'$data[jarak]',
										'$data[N_generik]',
												'$data[N_spesifik]',
												'$data[N_masa]',
										'$data[keterangan]')");
								$x=$x+1;
		}	
	

	$sqlrtes = mysql_query("SELECT * FROM  urut ORDER BY id ASC LIMIT 0 , 1");
	while($datates = mysql_fetch_array($sqlrtes))
	{
		if($datates['jarak']>'7') // <<<==== ANGKA BATAS ATUR SENDIRI
		{
			echo "Jarak Data Terlalu Jauh";
		}
		else
		{
			//mencari hasil
			$sqlrx = mysql_query("SELECT * FROM  urut ORDER BY id ASC");
			//$hasil_nam = mysql_fetch_array($sql_nam);
			while($datax = mysql_fetch_array($sqlrx))
			{
				if($datax['jarak']=='0')
				{
					$keterangan = $datax['keterangan'];
					$n1 = $datax['N_generik'];
					$n2 = $datax['N_spesifik'];
					$n3 = $datax['N_masa'];
					$jm=$n1+$n2+$n3;
				echo "<br>Keterangan <b>$keterangan</b>"; 	
					break;	
				}
				else
				{
					$keterangan = $datax['keterangan'];
					$n1 = $datax['N_generik'];
					$n2 = $datax['N_spesifik'];
					$n3 = $datax['N_masa'];
					$jm=$n1+$n2+$n3;

				echo "
				<p>Keterangan <b>$keterangan</b>";  
					break;
				}
			}		
		}
	}	


	//langkah terakhir menghapus histori perhitungan pada database
	$sqls = mysql_query("SELECT * FROM sementara ORDER BY id ASC");
	$numrows1 = mysql_num_rows($sqls);
	for ($i=1; $i <= $numrows1; $i++)
	{
		mysql_query("DELETE FROM sementara WHERE id=$i");
	}


	$sql_urut = mysql_query("SELECT * FROM data ORDER BY id ASC");
	$numrows_urut = mysql_num_rows($sql_urut);
	for ($i=1; $i <= $numrows_urut; $i++)
	{
		mysql_query("DELETE FROM urut WHERE id=$i");
	}


}
?>
<?php
include "Config/koneksi.php";



$input ="INSERT INTO hasil VALUES('','$t1','$jm','$keterangan')";
$hasil = mysqli_query($konek,$input);

?>


						   <a href="?page=nn" class="btn btn-primary"> SIMPAN </a>  
							
							 
       <?php
	   
	   include "bawah.php";
	   ?>