<?php 

	$server 	= "localhost";
	$user 		= "root";
	$password 	= "";
	$db_name 	= "khoresto";


	mysql_connect($server, $user, $password);
	mysql_select_db($db_name) or die ("koneksi ke database gagal !!");
	//echo "koneksi Ke database Berhasil ! ";

 ?>