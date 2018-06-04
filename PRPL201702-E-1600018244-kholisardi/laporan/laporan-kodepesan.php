<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Restaurant</title>
    <!-- link CSS -->
    <link href="../css/style.css" rel="stylesheet">

    <script type="text/javascript" src="java.js"></script>
    <!-- css utama -->

  </head>

  <body class="bodyform">

    <!-- Navigasi -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top box-shadow" >
      <div class="container">
        <a class="navbar-brand" href="../prpl">Restaurant</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Menu Navigasi bar -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
         <ul class="navbar-nav ml-auto">
             <li class="nav-item ">
              <a class="nav-link" href="#">Menu 
              </a> 
            </li>
            <li class="nav-item active">
              <a class="nav-link" href="index.php">Pesan
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="about.php">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Contact</a>
            </li>

            <!-- Search -->
            <li class="nav-item">
               <form class="form-inline">
                  <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                  <button class="btn btn-outline-success my-2 my-sm-0" type="submit text-bold">Search</button>
              </form>
            </li>
            <!-- search -->

          </ul>
        </div>
      </div>
    </nav>
<!-- End navigasi bar -->


<!-- Page Content -->
<div class="containerlaporan box-shadow">


<!-- FORM PENCARIAN -->
<form action="" method="POST" name="formtanggal">
  <table>
    <tr>
      <td>Silakan Pilih kode pesan </td>
      <td>:</td>
      <td><select name="kodepesan" id="">
        <option value=" ">--PILIH KODEPESAN--</option>
        <?php 
          include "koneksi.php";
          $query = mysqli_query($koneksi, "SELECT kodepesan from pesanan order by kodepesan");
          ?>

          <?php if (mysqli_num_rows($query)>0) { ?>
              
             <?php while ($kode= mysqli_fetch_array($query)) { ?>
                <option><?php echo $kode['kodepesan']; ?> </option>
              <?php } ?>
          <?php } ?>
        
      </select>
    </tr>
    <tr>
      <td><input type="submit" name="submit" value="kirim"></td>
    </tr>
    <input type="hidden" name="submitted" value="true">
  </table>
</form>
      
    <?php

        include "koneksi.php";

        if(isset($_POST['submitted'])){
          if (!empty($_POST['kodepesan'])) {
            $kodepesan = $_POST['kodepesan'];
          }
          
        }


        $datauser       = mysqli_query($koneksi,"SELECT tanggal, kodepesan, namapemesan 
                            from pesanan where kodepesan = '$kodepesan'");
    ?>

<form action="">
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
  <?php if(mysqli_num_rows($datauser)>0){ ?>
    <?php
        $no = 1;
        while ($user = mysqli_fetch_array($datauser)) { 
            $kode = $user["kodepesan"]; ?>

    <tr>
      <td><?php echo $no ?></td>
      <td><?php echo $user["tanggal"]; ?></td>
      <td><?php echo $user["kodepesan"]; ?></td>
      <td><?php echo $user["namapemesan"]; ?></td>

        <td>
            <table>
            <?php 
            $qmak   = mysqli_query($koneksi, "SELECT pesanan.kodepesan, makanan.nama, 
                        pesanmakanan.kodemakanan,
                        pesanmakanan.jmlporsi, pesanmakanan.totalharga
                        from pesanan, makanan, pesanmakanan
                        where pesanan.kodepesan = pesanmakanan.kodepesan and
                        makanan.id_makanan = pesanmakanan.kodemakanan and
                        pesanmakanan.kodepesan = '$kode'");
            
                while ($makanan = mysqli_fetch_array($qmak)) { ?>
                <tr>
                    <td><?php echo $makanan["nama"]; ?></td>
                </tr>
            <?php }; ?>
            </table>
        </td>

         <td>
            <table>
            <?php 
                $qmak   =mysqli_query($koneksi, "SELECT pesanan.kodepesan, makanan.nama, 
                        pesanmakanan.kodemakanan,
                        pesanmakanan.jmlporsi, pesanmakanan.totalharga
                        from pesanan, makanan, pesanmakanan
                        where pesanan.kodepesan = pesanmakanan.kodepesan and
                        makanan.id_makanan = pesanmakanan.kodemakanan and
                        pesanmakanan.kodepesan = '$kode' ");
                while ($makanan =mysqli_fetch_array($qmak)) { ?>
                <tr>
                    <td><?php echo $makanan["jmlporsi"]; ?></td>
                </tr>
            <?php }; ?>
            </table>
         </td>
        
        <td>
            <table>
            <?php 
                $qmak   =mysqli_query($koneksi, "SELECT pesanan.kodepesan, makanan.nama, 
                        pesanmakanan.kodemakanan,
                        pesanmakanan.jmlporsi, pesanmakanan.totalharga
                        from pesanan, makanan, pesanmakanan
                        where pesanan.kodepesan = pesanmakanan.kodepesan and
                        makanan.id_makanan = pesanmakanan.kodemakanan and
                        pesanmakanan.kodepesan = '$kode' ");
                while ($makanan =mysqli_fetch_array($qmak)) { ?>
                <tr>
                    <td><?php echo $makanan["totalharga"]; ?></td>
                </tr>
            <?php }; ?>
            </table>
         </td>

         <td>
            <table>
            <?php 
                $qmak   =mysqli_query($koneksi, "SELECT pesanan.kodepesan, minuman.nama, 
                        pesanminuman.kodeminuman,
                        pesanminuman.jmlporsi, pesanminuman.totalharga
                        from pesanan, minuman, pesanminuman
                        where pesanan.kodepesan = pesanminuman.kodepesan and
                        minuman.id_minuman = pesanminuman.kodeminuman and
                        pesanminuman.kodepesan = '$kode' ");
                while ($minuman =mysqli_fetch_array($qmak)) { ?>
                <tr>
                    <td><?php echo $minuman["nama"]; ?></td>
                </tr>
            <?php }; ?>
            </table>
         </td>
        
        <td>
            <table>
            <?php 
                $qmak   =mysqli_query($koneksi, "SELECT pesanan.kodepesan, minuman.nama, 
                        pesanminuman.kodeminuman,
                        pesanminuman.jmlporsi, pesanminuman.totalharga
                        from pesanan, minuman, pesanminuman
                        where pesanan.kodepesan = pesanminuman.kodepesan and
                        minuman.id_minuman = pesanminuman.kodeminuman and
                        pesanminuman.kodepesan = '$kode' ");
                while ($minuman =mysqli_fetch_array($qmak)) { ?>
                <tr>
                    <td><?php echo $minuman["jmlporsi"]; ?></td>
                </tr>
            <?php }; ?>
            </table>
         </td>

         <td>
            <table>
            <?php 
                $qmak   =mysqli_query($koneksi, "SELECT pesanan.kodepesan, minuman.nama, 
                        pesanminuman.kodeminuman,
                        pesanminuman.jmlporsi, pesanminuman.totalharga
                        from pesanan, minuman, pesanminuman
                        where pesanan.kodepesan = pesanminuman.kodepesan and
                        minuman.id_minuman = pesanminuman.kodeminuman and
                        pesanminuman.kodepesan = '$kode' ");
                while ($minuman =mysqli_fetch_array($qmak)) { ?>
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


</div>  
<!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>

</html>



<style>
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    text-align: left;
    padding: 12px;
    font-size: 12px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
</style>