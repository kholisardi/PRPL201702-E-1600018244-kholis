<?php

	include "koneksi.php";

    $datauser       = mysql_query("SELECT tanggal, kodepesan, namapemesan 
                        from pesanan order by kodepesan;");

    $datamakanan	= mysql_query("SELECT pesanan.kodepesan, 
                        makanan.nama, 
                        pesanmakanan.jmlporsi, 
                        pesanmakanan.totalharga
                        from pesanan, makanan, pesanmakanan
                        where pesanan.kodepesan = pesanmakanan.kodepesan and
                        makanan.id_makanan = pesanmakanan.kodemakanan order by 
                        pesanan.kodepesan asc;
                    ");

    $dataminuman    = mysql_query("SELECT pesanan.kodepesan, 
                        minuman.nama, 
                        pesanminuman.jmlporsi, 
                        pesanminuman.totalharga
                        from pesanan, minuman, pesanminuman
                        where pesanan.kodepesan = pesanminuman.kodepesan and
                        minuman.id_minuman = pesanminuman.kodeminuman order by 
                        pesanan.kodepesan asc;
                    ");

?>

<form action="" method="POST">
	
	<table border="1" style="text-align: center;">
	
	<tr>
		<th>No</th>
		<th>Tanggal</th>
		<th>Kode Pesan</th>
		<th>Nama Pemesan</th>
		<th>Nama Makanan</th>
		<th>jumlah porsi</th>
        <th>Total harga</th>
		<th>Nama Minuman</th>
		<th>Jumlah porsi</th>
        <th>total harga</th>
	</tr>
	<?php if(mysql_num_rows($datauser)>0){ ?>
    <?php
        $no = 1;
        while ($user = mysql_fetch_array($datauser)) { 
            $kode = $user["kodepesan"]; ?>

    <tr>
    	<td><?php echo $no ?></td>
    	<td><?php echo $user["tanggal"]; ?></td>
    	<td><?php echo $user["kodepesan"]; ?></td>
    	<td><?php echo $user["namapemesan"]; ?></td>

        <td><?php 
            $qmak   = mysql_query("SELECT pesanan.kodepesan, makanan.nama, 
                        pesanmakanan.kodemakanan,
                        pesanmakanan.jmlporsi, pesanmakanan.totalharga
                        from pesanan, makanan, pesanmakanan
                        where pesanan.kodepesan = pesanmakanan.kodepesan and
                        makanan.id_makanan = pesanmakanan.kodemakanan and
                        pesanmakanan.kodepesan = '$kode' ");
            while ($makanan = mysql_fetch_array($qmak)) {
                echo $makanan["nama"];?>
        <?php }; ?>
        </td>

        <td><?php echo $makanan["jmlporsi"]; ?> </td>
        <td><?php echo $makanan["totalharga"]; ?></td>
    	<td><?php echo $minuman["nama"]; ?></td>
    	<td><?php echo $minuman["jmlporsi"]; ?></td>
    	<td><?php echo $minuman["totalharga"]; ?></td>
    </tr>

	<?php $no++; } ?>
    <?php } ?>

	</table>


</form>

<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 12px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>