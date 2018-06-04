<?php 
	
	global $koneksi;

	$server 	= "localhost";
	$user 		= "root";
	$password 	= "";
	$db_name 	= "khoresto";

	$koneksi = mysqli_connect($server, $user, $password , $db_name);

	// mysql_connect($server, $user, $password);
	// mysql_select_db($db_name) or die ("koneksi ke database gagal !!");
	//echo "koneksi Ke database Berhasil ! ";

 ?>