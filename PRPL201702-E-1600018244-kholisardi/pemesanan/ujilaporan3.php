<?php

	include "koneksi.php";

    $datauser       = mysql_query("SELECT tanggal, kodepesan, namapemesan 
                        from pesanan order by kodepesan;");

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

        <td>
            <table>
            <?php 
            $qmak   = mysql_query("SELECT pesanan.kodepesan, makanan.nama, 
                        pesanmakanan.kodemakanan,
                        pesanmakanan.jmlporsi, pesanmakanan.totalharga
                        from pesanan, makanan, pesanmakanan
                        where pesanan.kodepesan = pesanmakanan.kodepesan and
                        makanan.id_makanan = pesanmakanan.kodemakanan and
                        pesanmakanan.kodepesan = '$kode' ");
            
                while ($makanan = mysql_fetch_array($qmak)) { ?>
                <tr>
                    <td><?php echo $makanan["nama"]; ?></td>
                </tr>
            <?php }; ?>
            </table>
        </td>

         <td>
            <table>
            <?php 
                $qmak   = mysql_query("SELECT pesanan.kodepesan, makanan.nama, 
                        pesanmakanan.kodemakanan,
                        pesanmakanan.jmlporsi, pesanmakanan.totalharga
                        from pesanan, makanan, pesanmakanan
                        where pesanan.kodepesan = pesanmakanan.kodepesan and
                        makanan.id_makanan = pesanmakanan.kodemakanan and
                        pesanmakanan.kodepesan = '$kode' ");
                while ($makanan = mysql_fetch_array($qmak)) { ?>
                <tr>
                    <td><?php echo $makanan["jmlporsi"]; ?></td>
                </tr>
            <?php }; ?>
            </table>
         </td>
        
        <td>
            <table>
            <?php 
                $qmak   = mysql_query("SELECT pesanan.kodepesan, makanan.nama, 
                        pesanmakanan.kodemakanan,
                        pesanmakanan.jmlporsi, pesanmakanan.totalharga
                        from pesanan, makanan, pesanmakanan
                        where pesanan.kodepesan = pesanmakanan.kodepesan and
                        makanan.id_makanan = pesanmakanan.kodemakanan and
                        pesanmakanan.kodepesan = '$kode' ");
                while ($makanan = mysql_fetch_array($qmak)) { ?>
                <tr>
                    <td><?php echo $makanan["totalharga"]; ?></td>
                </tr>
            <?php }; ?>
            </table>
         </td>

         <td>
            <table>
            <?php 
                $qmak   = mysql_query("SELECT pesanan.kodepesan, minuman.nama, 
                        pesanminuman.kodeminuman,
                        pesanminuman.jmlporsi, pesanminuman.totalharga
                        from pesanan, minuman, pesanminuman
                        where pesanan.kodepesan = pesanminuman.kodepesan and
                        minuman.id_minuman = pesanminuman.kodeminuman and
                        pesanminuman.kodepesan = '$kode' ");
                while ($minuman = mysql_fetch_array($qmak)) { ?>
                <tr>
                    <td><?php echo $minuman["nama"]; ?></td>
                </tr>
            <?php }; ?>
            </table>
         </td>
        
        <td>
            <table>
            <?php 
                $qmak   = mysql_query("SELECT pesanan.kodepesan, minuman.nama, 
                        pesanminuman.kodeminuman,
                        pesanminuman.jmlporsi, pesanminuman.totalharga
                        from pesanan, minuman, pesanminuman
                        where pesanan.kodepesan = pesanminuman.kodepesan and
                        minuman.id_minuman = pesanminuman.kodeminuman and
                        pesanminuman.kodepesan = '$kode' ");
                while ($minuman = mysql_fetch_array($qmak)) { ?>
                <tr>
                    <td><?php echo $minuman["jmlporsi"]; ?></td>
                </tr>
            <?php }; ?>
            </table>
         </td>

         <td>
            <table>
            <?php 
                $qmak   = mysql_query("SELECT pesanan.kodepesan, minuman.nama, 
                        pesanminuman.kodeminuman,
                        pesanminuman.jmlporsi, pesanminuman.totalharga
                        from pesanan, minuman, pesanminuman
                        where pesanan.kodepesan = pesanminuman.kodepesan and
                        minuman.id_minuman = pesanminuman.kodeminuman and
                        pesanminuman.kodepesan = '$kode' ");
                while ($minuman = mysql_fetch_array($qmak)) { ?>
                <tr>
                    <td><?php echo $minuman["totalharga"]; ?></td>
                </tr>
            <?php }; ?>
            </table>
         </td>

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