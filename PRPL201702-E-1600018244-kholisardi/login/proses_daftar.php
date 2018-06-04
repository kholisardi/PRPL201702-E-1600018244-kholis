<?php
include "../laporan/koneksi.php";
$nama 			= $_POST['nama'];
$username 		= $_POST['username'];
$password 		= $_POST['password'];
$email 			= $_POST['email'];
$nohp			= $_POST['nohp'];

if (empty($nama)){
	echo "<script>alert('Nama belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else if (empty($username)){
		echo "<script>alert('username belum diisi')</script>";
		echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else if(empty($password)){
	echo "<script>alert('Password belum diisi')</script>";
	echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else if (empty($email)){
	echo "<script>alert('Isi email dengan benar')</script>";
	echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else if (empty($nohp)){
	echo "<script>alert('silakan masukan no hp')</script>";
	echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
}else{
	$daftar = mysqli_query($koneksi,"INSERT INTO user values ('$nama','$username','$password','$email', '$nohp')");
	if ($daftar){
		echo "<script>alert('Berhasil Mendaftar')</script>";
		echo "<meta http-equiv='refresh' content='1 url=login.php'>";
	}else{
		echo "<script>alert('Gagal Mendaftar')</script>";
		echo "<meta http-equiv='refresh' content='1 url=daftar.php'>";
	}
}
?>	