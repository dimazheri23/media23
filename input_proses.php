<?php
include "atas.php";
?>
    
      
                  <div class="form-panel">
                  	  <h4 >PROSES NEAREST NEIGHBOR</h4>
                      <form class="" action="?page=aksi" method="POST">
                    
                                                        
                          <div class="form-group">
                              <label class="">Kode Guru</label>
                              <div class="">
                    

<?php    

include "Config/koneksi.php";    
$tampil ="select * from guru";   
$hasil = mysqli_query($konek, $tampil); 

$jsArray = "var prdName = new Array();\n";    
echo '<select name="t1" class="form-control" onchange="changeValue(this.value)">';    
echo '<option>-Pilihan-</option>';    
while ($row =mysqli_fetch_array($hasil)) {  
$a=$row['usia'];
if($a >= 51){
echo $n1=2;

}else if($a >= 41 ){
echo $n1=3;

}else if($a >= 31 ){
echo $n1=4;
}else{
echo $n1=5;
}


$b=$row['masa_kerja'];
if($b > 20){
echo $n2=5;

}else if($b > 10 ){
echo $n2=3;

}else{
echo $n2=1;
}

$c=$row['golongan'];
if($c=="IV"){
echo $n3=5;

}else if($c=="III"){
echo $n3=4;
}else if($c=="II"){
echo $n3=3;
}else{
echo $n3=2;
}



$d=$row['pendidikan'];
if($d=="S2"){
echo $n4=5;
}else {
echo $n4=3;
}

    echo '<option value="' . $row['nip'] . '">' . $row['nip'] . '</option>';    
    $jsArray .= "prdName['" . $row['nip'] . "'] = {n1:'" . addslashes($n1) ."',n2:'" . addslashes($n2) ."',n3:'" . addslashes($n3) ."',n4:'" . addslashes($n4) ."'};\n";    
}    
echo '</select>';    
?> </select>
                              </div>
                          </div>
           
		      
						      <div class="form-group">
                              <label class="">Nilai Generik</label>
                              <div class="">
                                  <input type="text" name="t3"  class="form-control" required>
                              </div>
                          </div>
						    <div class="form-group">
                              <label class="">Nilai Spesifik</label>
                              <div class="">
                                  <input type="text" name="t4"  class="form-control" required>
                              </div>
                          </div>
						    <div class="form-group">
                              <label class="">Nilai Masa Kerja</label>
                              <div class="">
                                  <input type="text" name="t5" class="form-control" required>
                              </div>
                          </div>
						 
						 

<script type="text/javascript">    
<?php echo $jsArray; ?>  
function changeValue(id){  
document.getElementById('nn1').value = prdName[id].n1;  
document.getElementById('nn2').value = prdName[id].n2;  
document.getElementById('nn3').value = prdName[id].n3;  
 

};  
</script>  


           
						           
							 
						     <input type="submit" class="btn btn-primary" value="Proses"/>
							<p>
							 
       <?php
	   
	   include "bawah.php";
	   ?>