<?php
	include "koneksi.php";

	$nama = "";
	$namemsg = "";

	if (isset($_POST['submit'])){


		if(empty($_POST['namapemesan'])){

			$namamsg		= "Nama Harus di isi";

		} else {

			$nama 			= test_input($_POST['namapemesan']);
			if(!preg_match("/^[a-zA-Z ]*$/", $name)){
				$namamsg	= "hanya Huruf dan spasi yang boleh";
			}

		}
	}

?>