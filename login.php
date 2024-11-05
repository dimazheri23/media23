<div class="right">
<form action="" method="POST">
   <input type="text" name="username" placeholder="Username">
   <input type="password" name="password" placeholder="Password">
   <p>Login Sebagai</p>
   <input type="radio" name="level" value="Guru" id="mhs"> <label for="mhs">Guru</label>
   <input type="radio" name="level" value="Admin" id="dsn"> <label for="dsn">Admin</label>
   <button type="submit" name="login"><span class="style1">Login</span></button>
   </form>
   </div>
   <?php
// 1. set variabel yang dibutuhkan
$username = isset($_POST['username']) ? $_POST['username'] :'';
$password = isset($_POST['password']) ? $_POST['password'] :'';
$level    = isset($_POST['level']) ? $_POST['level'] :'';
// 2. Cek apakah tombol login diklik untuk login
if(isset($_POST['login'])){
// 3. Buat query untuk mencari data ke tabel
	   // cek level apa user yang login
	   if($level=="guru"){$tabel="admin";}else{$tabel="admin";}
$sql = mysqli_query($konek,"SELECT * FROM $tabel 
					WHERE username='".$username."' AND 
					password='".$password."' AND level='$level'");
$jml = mysqli_num_rows($sql); // Hitung jmlah record	
$row = mysqli_fetch_array($sql);	// tampung record ke data array	
// 4. cek berapa jml data yg ditemukan
	if($jml > 0){
	// Mulai Session Baru 
	session_start();
	$_SESSION['username'] = $row['username'];
	$_SESSION['password'] = $row['password'];
	$_SESSION['level'] 	  = $level;
	$_SESSION['id']=$row['kd_admin'];
	$_SESSION['nm']=$row['nm_lengkap'];
	echo"<script>window.location.href='./media.php'</script>";
	echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=beranda'>";
	}else{
	echo"<script>window.location.href='./?page=anda-gagal-login'</script>";	
	}
}
?>