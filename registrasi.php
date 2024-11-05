<?php
include "atas.php";
?>
      <!--sidebar end-->
      
                 	  <h4 >DATA REGISTRASI</h4>
                      <form class="" action="simpan_guru.php" method="post">
                          <div class="form-group">
                              <label class="">NIP</label>
                              <div class="">
                                  <input name="t1" type="text" class="form-control" required>
                              </div>
                          </div>
                                                         <div class="form-group">
                              <label class="">Nama </label>
                              <div class="">
                                  <input name="t2" type="text" class="form-control" required>
                              </div>
                          </div>

           
						      <div class="form-group">
                              <label class="">Jenis Kelamin</label>
                              <div class="">
           <select name="t3" class="form-control" required />
		   <option>Laki-laki</option>
		   <option>Perempuan</option>
		   </select>
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="">Tempat Lahir</label>
                              <div class="">
                                  <input name="t4" type="text" class="form-control" required>
                              </div>
                          </div>
						  <div class="form-group">
                              <label class="">Tanggal Lahir</label>
                              <div class="">
                                  <input name="t5" type="date" class="form-control" required>
                              </div>
                          </div>
						 
						  
						   <div class="form-group">
                              <label class="">Alamat</label>
                              <div class="">
                                  <textarea name="t6" class="form-control" required></textarea>
                              </div>
                          </div>
						                                   <div class="form-group">
                              <label class="">Telpon</label>
                              <div class="">
                                  <input name="t7" type="text" class="form-control" required>
                              </div>
                          </div>
<div class="form-group">
                              <label class="">Agama</label>
                              <div class="">
           <select name="t8" class="form-control" required />
		   <option value="Islam">Islam</option>
		   <option value="Kristen">Kristen</option>
		    <option value="Hindu">Hindu</option>
			 <option value="Budha">Budha</option>
		   </select>
                              </div>
                          </div>
						     <div class="form-group">
                              <label class="">Golongan</label>
                              <div class="">
           <select name="t9" class="form-control" required />
		   <option value="I">I</option>
		   <option value="II">II</option>
		    <option value="III">III</option>
			 <option value="IV">IV</option>
		   </select>
                              </div>
                          </div>
						  
						    <div class="form-group">
                              <label class="">Usia</label>
                              <div class="">
                                  <input name="t10" type="text" class="form-control" required>
                              </div>
                          </div>
						    <div class="form-group">
                              <label class="">Masa Kerja</label>
                              <div class="">
                                  <input name="t11" type="text" class="form-control" required>
                              </div>
                          </div>
						    <div class="form-group">
                              <label class="">Pendidikan</label>
                              <div class="">
                                  <select name="t12" class="form-control" required />
		   <option value="S1">S1</option>
		   <option value="S2">S2</option>
		   </select>
                              </div>
                          </div>
						     <input type="submit" class="btn btn-primary" value="Simpan"/>
							<hr>
							 
       <?php
	   
	   include "bawah.php";
	   ?>