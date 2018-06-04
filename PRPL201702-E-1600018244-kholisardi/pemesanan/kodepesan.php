<?php 
      include "koneksi.php";
      $cek    ="select max(kodepesan) as maxKode from pesanan";
      $hasil    = mysql_query($cek);
      $data     = mysql_fetch_array($hasil);
      $kodepesan  = $data['maxKode'];

      $noKode   = (int)substr($kodepesan, 2 , 3);

      
      $noKode++;
      $char     = "PS";
      $kodepesan  = $char.sprintf("%03s", $noKode);
      
      echo $kodepesan ;
?>