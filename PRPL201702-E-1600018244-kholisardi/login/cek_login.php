<?php
include "../laporan/koneksi.php";
$username		= $_POST['username'];
$password 		= $_POST['password'];

	if (empty($username)){
			echo "<script>alert('username belum diisi')</script>";
			echo "<meta http-equiv='refresh' content='1 url=login.php'>";
	}else if (empty($password)){
			echo "<script>alert('Password belum diisi')</script>";
			echo "<meta http-equiv='refresh' content='1 url=login.php'>";
	}else{
		session_start();
		$login = mysqli_query($koneksi, "SELECT * from user where username='$username' and password='$password'");
			
		if (mysqli_num_rows($login) > 0){
			$_SESSION['username'] = $username;
			echo "<script>alert('login sucess')</script>";
			echo "<meta http-equiv='refresh' content='1 url=../pemesanan/index.php'>";
		}else{
			echo "<script>alert('username atau Password salah')</script>";
			echo "<meta http-equiv='refresh' content='1 url=login.php'>";
		}
	}
?>