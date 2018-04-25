<?php
include '../conn/koneksi.php';
if(isset($_POST['log'])) {
	$user = mysqli_real_escape_string($konek, trim($_POST['user']));
	$pass = mysqli_real_escape_string($konek, $_POST['pass']); 
	$pass = md5($pass);
	$sql ="SELECT * FROM tbl_admin where username ='$user' and password='$pass'";
	$result = mysqli_query($konek, $sql);
	$data = mysqli_fetch_array($result);
	$username = $data['username'];
	$password = $data['password'];
	
	if ($user==$username && $pass==$password) {
		session_start();
		$_SESSION['nama']=$user;
		echo "<script>alert('Anda berhasil Log In. Mr /Mrs : $user');</script>";
		echo "<meta http-equiv='refresh' content='0; url=home.php'>";
	} else {
		echo "<meta http-equiv='refresh' content='0; url=index.php'>";
		echo "<script>alert('Username dan password anda salah, Silahkan login kembali !');</script>";
	}
	
	
}
?>	