<?php 
	
	include "koneksi.php";

	if(isset($_REQUEST['submitted'])){

		$namapemesan 	= $_REQUEST['namapemesan'];
		$totalbayar 	= $_REQUEST['totalbayar'];
		$bayar 			= $_REQUEST['bayar'];
		$kembalian 		= $_REQUEST['kembalian'];
		$no				= "";
		$tanggal		= $_REQUEST['tanggal'];
		$kodepesan		= $_REQUEST['kodepesan'];
		$alamat			= $_REQUEST['alamat'];

		//instansiasi jumlah pembelian makanan
		$jumlahnasgor 	= $_REQUEST['jumlahnasgor'];
		$jumlahnasiayam = $_REQUEST['jumlahnasiayam'];
		$jumlahgurame 	= $_REQUEST['jumlahgurame'];
		$jumlahbakso 	= $_REQUEST['jumlahbakso'];
		$jumlahgeprek 	= $_REQUEST['jumlahgeprek'];
		$jumlahmieayam	= $_REQUEST['jumlahmieayam'];

		//instansiasi jumlah pembelian minuman
		$jumlahesteh 		= $_REQUEST['jumlahesteh'];
		$jumlahesjeruk 		= $_REQUEST['jumlahesjeruk'];
		$jumlahjusalpukat 	= $_REQUEST['jumlahjusalpukat'];
		$jumlahsusu 		= $_REQUEST['jumlahsusu'];
		$jumlahesbuah 		= $_REQUEST['jumlahesbuah'];


		//VARIABEL MAKANAN
		// $nasgor			= $_REQUEST['nasgor'];
		// $nasiayam		= $_REQUEST['nasiayam'];
		// $gurame			= $_REQUEST['gurame'];
		// $baksospesial	= $_REQUEST['baksospesial'];
		// $geprek			= $_REQUEST['geprek'];
		// $mieayam		= $_REQUEST['mieayam'];

		//VARIABEL MINUMAN
		// $esteh			= $_REQUEST['esteh'];
		// $esjeruk			= $_REQUEST['esjeruk'];
		// $jusalpukat		= $_REQUEST['jusalpukat'];
		// $susu			= $_REQUEST['susu'];
		// $esbuah			= $_REQUEST['esbuah'];


		$jumlahmakanan 	= 0;
		$jumlahminuman 	= 0;



		//SINTAK INPUT DATA PESANAN

		//query insert makanan
		if(!empty($_REQUEST['nasgor'])){
				$nasgor 	= $_REQUEST['nasgor'];
				$jumlahmakanan++;

				$query 		= mysql_fetch_array(mysql_query("SELECT harga from makanan where id_makanan = '$nasgor'"));
				$convert 	= array_unique($query);
				$harga		= implode("", $convert);

				$totalharga	= $harga * $jumlahnasgor;

				mysql_query("insert into pesanmakanan values(
					'',
					'$kodepesan',
					'$nasgor',
					'$jumlahnasgor',
					'$totalharga'
				)");
				echo "$totalharga";
		}

		if(!empty($_REQUEST['nasiayam'])){

				$nasiayam 	= $_REQUEST['nasiayam'];
				$jumlahmakanan++;

				$query 		= mysql_fetch_array(mysql_query("SELECT harga from makanan where id_makanan = '$nasiayam'"));
				$convert 	= array_unique($query);
				$harga		= implode("", $convert);

				$totalharga	= $harga * $jumlahnasiayam;

				mysql_query("insert into pesanmakanan values(
					'',
					'$kodepesan',
					'$nasiayam',
					'$jumlahnasiayam',
					'$totalharga'
				)");
		}

		if(!empty($_REQUEST['gurame'])){

			 	$gurame 	= $_REQUEST['gurame'];
				$jumlahmakanan++;

				$query 		= mysql_fetch_array(mysql_query("SELECT harga from makanan where id_makanan = '$gurame'"));
				$convert 	= array_unique($query);
				$harga		= implode("", $convert);

				$totalharga	= $harga * $jumlahgurame;

				mysql_query("insert into pesanmakanan values(
					'',
					'$kodepesan',
					'$gurame',
					'$jumlahgurame',
					'$totalharga'
				)");
		}

		if(!empty($_REQUEST['baksospesial'])){

				$baksospesial =	$_REQUEST['baksospesial'];
				$jumlahmakanan++;

				$query 		= mysql_fetch_array(mysql_query("SELECT harga from makanan where id_makanan = '$baksospesial'"));
				$convert 	= array_unique($query);
				$harga		= implode("", $convert);

				$totalharga	= $harga * $jumlahbakso;

				mysql_query("insert into pesanmakanan values(
					'',
					'$kodepesan',
					'$baksospesial',
					'$jumlahbakso',
					'$totalharga'
				)");
		}

		if(!empty($_REQUEST['geprek'])){
			
				$geprek		= $_REQUEST['geprek'];

				$jumlahmakanan++;

				$query 		= mysql_fetch_array(mysql_query("SELECT harga from makanan where id_makanan = '$geprek'"));
				$convert 	= array_unique($query);
				$harga		= implode("", $convert);

				$totalharga	= $harga * $jumlahgeprek;

				mysql_query("insert into pesanmakanan values(
					'',
					'$kodepesan',
					'$geprek',
					'$jumlahgeprek',
					'$totalharga'
				)");
		}

		if(!empty($_REQUEST['mieayam'])){
				
				$mieayam	= $_REQUEST['mieayam'];
				$jumlahmakanan++;

				$query 		= mysql_fetch_array(mysql_query("SELECT harga from makanan where id_makanan = '$mieayam'"));
				$convert 	= array_unique($query);
				$harga		= implode("", $convert);

				$totalharga	= $harga * $jumlahmieayam;

				mysql_query("insert into pesanmakanan values(
					'',
					'$kodepesan',
					'$mieayam',
					'$jumlahmieayam',
					'$totalharga'
				)");
		}

		//end of query makanan 


		//query insert minuman
		if(!empty($_REQUEST['esteh'])){
			 	
			 	$esteh 		= $_REQUEST['esteh'];
				
				$jumlahminuman++;

				$query 		= mysql_fetch_array(mysql_query("SELECT harga from minuman where id_minuman = '$esteh'"));
				$convert 	= array_unique($query);
				$harga		= implode("", $convert);

				$totalharga	= $harga * $jumlahesteh;

				$qu = mysql_query("insert into pesanminuman values(
					'',
					'$kodepesan',
					'$esteh',
					'$jumlahesteh',
					'$totalharga'
				)") or die(mysql_error());
				
		}

		if(!empty($_REQUEST['esjeruk'])){
				
				$esjeruk	= $_REQUEST['esjeruk'];
				$jumlahminuman++;

				$query 		= mysql_fetch_array(mysql_query("SELECT harga from minuman where id_minuman = '$esjeruk'"));
				$convert 	= array_unique($query);
				$harga		= implode("", $convert);

				$totalharga	= $harga * $jumlahesjeruk;

				mysql_query("insert into pesanminuman values(
					'',
					'$kodepesan',
					'$esjeruk',
					'$jumlahesjeruk',
					'$totalharga'
				)");
		}

		if(!empty($_REQUEST['jusalpukat'])){
			
				$jusalpukat = $_REQUEST['jusalpukat'];
				$jumlahminuman++;

				$query 		= mysql_fetch_array(mysql_query("SELECT harga from minuman where id_minuman = '$jusalpukat'"));
				$convert 	= array_unique($query);
				$harga		= implode("", $convert);

				$totalharga	= $harga * $jumlahjusalpukat;

				mysql_query("insert into pesanminuman values(
					'',
					'$kodepesan',
					'$jusalpukat',
					'$jumlahjusalpukat',
					'$totalharga'
				)");
		}


		if(!empty($_REQUEST['susu'])){
			
				$susu 		= $_REQUEST['susu'];
				
				$jumlahminuman++;

				$query 		= mysql_fetch_array(mysql_query("SELECT harga from minuman where id_minuman = '$susu'"));
				$convert 	= array_unique($query);
				$harga		= implode("", $convert);

				$totalharga	= $harga * $jumlahsusu;

				mysql_query("insert into pesanminuman values(
					'',
					'$kodepesan',
					'$susu',
					'$jumlahsusu',
					'$totalharga'
				)");
		}


		if(!empty($_REQUEST['esbuah'])){
			
				$esbuah   	= $_REQUEST['esbuah'];				
				$jumlahminuman++;

				$query 		= mysql_fetch_array(mysql_query("SELECT harga from minuman where id_minuman = '$esbuah'"));
				$convert 	= array_unique($query);
				$harga		= implode("", $convert);

				$totalharga	= $harga * $jumlahesbuah;

				mysql_query("insert into pesanminuman values(
					'',
					'$kodepesan',
					'$esbuah',
					'$jumlahesbuah',
					'$totalharga'
				)");
		}


		//input pada tabel pesanan
		mysql_query("INSERT into pesanan values(
			'$kodepesan',
			'$tanggal',
			'$namapemesan',
			'$alamat'
			)");



		// mysql_query("insert into pesanan values(
		// 	'$kodepesan',
		// 	'$tanggal',
		// 	'$namapemesan',
		// 	'',
		// 	'',
		// 	'$jumlahmakanan',
		// 	'$jumlahminuman'
		// )");

		// echo "$namamakanan";

		// if(is_array($namamakanan)){
		// 	foreach ($namamakanan as $row => $makan) {
		// 		$namamakan = mysql_real_escape_string($makan);
		// 		mysql_query("INSERT INTO pesanan (kode_makanan) values ($namamakan)");
		// 	}
		// }

		// if($jumlahmakanan <= $jumlahminuman){
		// 	for($i = 0; i < $jumlahminuman; $i++){
		// 		mysql_query("insert into pesanan values(
		// 				'$kodepesan',
		// 				'$tanggal',
		// 				'$namapemesan',
		// 				'$namamakanan',
		// 				'$namaminuman',
		// 				'$jumlahmakanan',
		// 				'$jumlahminuman'
		// 			)");
		// 	}
		// }else{
		// 	if($jumlahmakanan >= $jumlahminuman ){
		// 		for($i = 0; i < $jumlahmakanan; $i++){
		// 			mysql_query("INSERT into pesanan values(
		// 					'$kodepesan',
		// 					'$tanggal',
		// 					'$namapemesan',
		// 					'$namamakanan',
		// 					'$namaminuman',
		// 					'$jumlahmakanan',
		// 					'$jumlahminuman'
		// 				)");
		// 		}
		// 	}
		// }

		

		// input kodepesan
		// mysql_query("insert into pesanan values(
		// 	'$kodepesan',
		// 	'$tanggal',
		// 	'$namapemesan',
		// 	'',
		// 	'',
		// 	'$jumlahmakanan',
		// 	'$jumlahminuman'
		// )");


		// mysql_query("insert into tabel_pesan value(
		// 		'$no',
		// 		'$kodepesan',
		// 		'$tanggal',
		// 		'$namapemesan',
		// 		'$namamakanan',
		// 		'$jumlahmakanan',
		// 		'$namaminuman',
		// 		'$jumlahminuman',
		// 		'$totalbayar',
		// 		'$bayar',
		// 		'$kembalian'
		// 		)") or die("Data gagal disimpan!");


		// echo ("<script type='text/javascript'> alert('Pemesanan Berhasil!');
			
		// 	window.open('index.php', '_self');
			
			

		// 	</script>");

	}

 ?>	
