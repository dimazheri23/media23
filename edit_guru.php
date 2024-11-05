<?php
include "atas.php";
?>
 <?php
include "Config/koneksi.php";   
$id=$_GET['id'];

$edit="SELECT * From guru where nip ='$id'";
$hasil=mysqli_query ($konek,$edit);
$data=mysqli_fetch_array($hasil);
?>
      
                  	  <h4 >UPDATE DATA GURU</h4>
                      <form class="" action="simpan_edit_p.php" method="GET">
                          <div class="form-group">
                              <label class="">NIP</label>
                              <div class="">
                                  <input name="t1" type="text" value='<?php echo "$data[nip]" ?>' class="form-control" DISABLED>
                                  <input name="t1" type="text" value='<?php echo "$data[nip]" ?>' hidden>
                              </div>
                          </div>
                                                         <div class="form-group">
                              <label class="">Nama Guru</label>
                              <div class="">
                                  <input name="t2" type="text" value='<?php echo "$data[nama]" ?>' class="form-control">
                              </div>
                          </div>

           
						      <div class="form-group">
                              <label class="">Jenis Kelamin</label>
                              <div class="">
           <select name="t3" class="form-control"  />
		   <option><?php echo "$data[Jk]" ?></option>
		   <option>Laki-laki</option>
		   <option>Perempuan</option>
		   </select>
                              </div>
                          </div>
						   <div class="form-group">
                              <label class="">Alamat</label>
                              <div class="">
                                  <INPUT type="text" value='<?php echo "$data[alamat]" ?>' name="t4" class="form-control">
                              </div>
                          </div>
						                                   <div class="form-group">
                              <label class="">Telpon</label>
                              <div class="">
                                  <input name="t5" value='<?php echo "$data[telpon]" ?>' type="text" class="form-control">
                              </div>
                          </div>

						     
						     <input type="submit" class="btn btn-primary" value="Edit"/>
							<p>
							 
       <?php
	   
	   include "bawah.php";
	   ?>