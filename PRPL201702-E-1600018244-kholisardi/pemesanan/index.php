<?php
include "koneksi.php";
session_start();
if (!isset($_SESSION['username'])){
echo "<script>alert('Anda belom login')</script>";
header ("location:../login/login.php");
}
?>
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
        <a class="navbar-brand" href="../">Restaurant</a>
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
    <div class="containerpemesanan box-shadow">
      <div class="row">
        <div class="col-md-12">
          <form class="form-inline" method="POST" action="input.php" onsubmit="return validasi()" name="myForm">
            <table  border= "0" align="center">
              <tr>
                <td colspan="6" align="center"><br><h2 class="judulpesan">SILAKAN MEMESAN</h2>
                </td>
              </tr>
              
              <tr>
                <td>Kode Pesan</td>
                <td>:</td>
                <td><input type="text" name="kodepesan" value="<?php
                  include "kodepesan.php";
                  ?>"
                readonly="readonly"/></td>
              </tr>
              <tr>
                <td>Tanggal</td>
                <td>:</td>
                <td><input type="text" name="tanggal" value="<?php
                  $today = date("Y/n/d");
                  echo $today;
                ?>" readonly="readonly"/></td>
              </tr>
              <!-- Nama pemesan -->
              <tr>
                <td>Nama Pemesan</td>
                <td>:</td>
                <td><input type="text" name="namapemesan" id="namapemesan" value="<?php include "koneksi.php";
                  $username    = $_SESSION['username'];
                  $query    = mysql_fetch_array(mysql_query("SELECT nama FROM user WHERE username = '$username'"));
                  $convert  = array_unique($query);
                  $nama   = implode(" ",$convert);
                  echo $nama;
                  ?>" readonly="readonly"/>
                </td>
              </tr>
              <tr>
                <td>Alamat</td>
                <td>:</td>
                <td><textarea name="alamat" id="alamat" placeholder="masukan alamat anda!" rows="2" cols="23"></textarea>
                </td>
              </tr>
              <!-- MAKANAN -->
              <tr>
                <td>Makanan</td>
                <td>:</td>
                <td>
                  <label class="checkboxContainer" >Nasi Goreng
                    <input type="checkbox" value="MK001" name="nasgor" id="nasgor" >
                    <span class="checkmark"></span>
                  </label>
                  
                  <td>Rp. 15.000,-</td>
                  <td>
                    <input type="text" name="jumlahnasgor" id="jumlahnasgor" size="1" onfocus="mulaiHitung()" onblur="berhentiHitung()"/>
                  </td>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <label class="checkboxContainer" >Nasi Ayam
                    <input type="checkbox" value="MK002" name="nasiayam" id="nasiayam">
                    <span class="checkmark"></span>
                  </label>
                  <td>Rp. 13.000,-</td>
                  <td>
                    <input type="text" name="jumlahnasiayam" id="jumlahnasiayam" size="1" onfocus="mulaiHitung()" onblur="berhentiHitung()"/>
                  </td>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <label class="checkboxContainer" >
                    <input type="checkbox" value="MK003" name="gurame" id="gurame">Ikan Gurame Bakar
                    <span class="checkmark"></span>
                  </label>
                  <td>Rp. 42.000,-</td>
                  <td>
                    <input type="text" name="jumlahgurame" id="jumlahgurame" size="1" onfocus="mulaiHitung()" onblur="berhentiHitung()">
                  </td>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <label class="checkboxContainer" >
                    <input type="checkbox" value="MK004" name="baksospesial" id="baksospesial">Bakso Spesial
                    <span class="checkmark"></span>
                  </label>
                  <td>Rp. 20.000,-</td>
                  <td>
                    <input type="text" name="jumlahbakso" id="jumlahbakso" size="1" onfocus="mulaiHitung()" onblur="berhentiHitung()" >
                  </td>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <label class="checkboxContainer" >
                    <input type="checkbox" value="MK005" name="geprek" id="geprek">Ayam Geprek
                    <span class="checkmark"></span>
                  </label>
                  <td>Rp. 15.000,-</td>
                  <td>
                    <input type="text" name="jumlahgeprek" id="jumlahgeprek" size="1" onfocus="mulaiHitung()" onblur="berhentiHitung()">
                  </td>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <label class="checkboxContainer" >
                    <input type="checkbox" value="MK006" name="mieayam" id="mieayam">Mie Ayam Spesial
                    <span class="checkmark"></span>
                  </label>
                  <td>Rp. 18.000,-</td>
                  <td>
                    <input type="text" name="jumlahmieayam" id="jumlahmieayam" size="1" onfocus="mulaiHitung()" onblur="berhentiHitung()">
                  </td>
                </td>
              </tr>
              <!-- Minuman -->
              <tr>
                <td>Minuman</td>
                <td>:</td>
                <td>
                  <label class="checkboxContainer" >
                    <input type="checkbox" value="MN001" name="esteh" id="esteh">Ice tea
                    <span class="checkmark"></span>
                  </label>
                  <td>Rp. 8.000,-</td>
                  <td>
                    <input type="text" name="jumlahesteh" id="jumlahesteh" size="1" onfocus="mulaiHitung()" onblur="berhentiHitung()" />
                  </td>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <label class="checkboxContainer" >
                    <input type="checkbox" value="MN002" name="esjeruk" id="esjeruk">Es jeruk
                    <span class="checkmark"></span>
                  </label>
                  <td>Rp. 7.000,-</td>
                  <td>
                    <input type="text" name="jumlahesjeruk" id="jumlahesjeruk" size="1" onfocus="mulaiHitung()" onblur="berhentiHitung()">
                  </td>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <label class="checkboxContainer" >
                    <input type="checkbox" value="MN003"  name="jusalpukat" id="jusalpukat">Juice Avocado
                    <span class="checkmark"></span>
                  </label>
                  <td>Rp. 15.000,-</td>
                  <td>
                    <input type="text" name="jumlahjusalpukat" id="jumlahjusalpukat" size="1" onfocus="mulaiHitung()" onblur="berhentiHitung()">
                  </td>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <label class="checkboxContainer" >
                    <input type="checkbox" value="MN004" name="susu" id="susu">Es susu putih
                    <span class="checkmark"></span>
                  </label>
                  <td>Rp. 10.000,-</td>
                  <td>
                    <input type="text" name="jumlahsusu" id="jumlahsusu" size="1" onfocus="mulaiHitung()" onblur="berhentiHitung()">
                  </td>
                </td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td>
                  <label class="checkboxContainer" >
                    <input type="checkbox" value="MN005" name="esbuah" id="esbuah">Es buah
                    <span class="checkmark"></span>
                  </label>
                  <td>Rp. 15.000,-</td>
                  <td>
                    <input type="text" name="jumlahesbuah" id="jumlahesbuah" size="1" onfocus="mulaiHitung()" onblur="berhentiHitung()">
                  </td>
                </td>
              </tr>
              <!--
              <tr>
                <td>Harga satuan</td>
                <td>:</td>
                <td><input type="text" name="hargasatuan" id="hargasatuan" onfocus="mulaiHitung()" onblur="berhentiHitung()" /></td>
              </tr> -->
              <!--    <tr>
                <td>Jumlah beli</td>
                <td>:</td>
                <td><input type="text" name="jumlahbeli" id="jumlahbeli" onfocus="mulaiHitung()" onblur="berhentiHitung()"/></td>
              </tr>-->
              <tr>
                <td>Total bayar</td>
                <td>:</td>
                <td><input type="text" name="totalbayar" id="totalbayar" /></td>
              </tr>
              <tr>
                <td>Bayar</td>
                <td>:</td>
                <td><input type="text" name="bayar" id="bayar" onfocus="mulaiHitung()" onblur="berhentiHitung()"/></td>
              </tr>
              <tr>
                <td>Kembalian</td>
                <td>:</td>
                <td><input type="text" name="kembalian" id="kembalian" onfocus="mulaiHitung()" onblur="berhentiHitung()"/></td>
              </tr>
              <tr>
                <td></td>
                <td></td>
                <td><input type="submit" value="PESAN" name="submit"></td>
                <td><input type="reset" value="RESET"></td>
              </tr>
              <input type="hidden" name="submitted" value="true">
            </table>
          </form>
          </div> <!-- end of col-->
          </div> <!-- end of ROW-->
        </div>
        <!-- /.container -->
        <!-- Footer -->
        <footer class="py-5 bg-dark">
          <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Your Website 2018</p>
          </div>
          <!-- /.container -->
        </footer>
        <!-- Bootstrap core JavaScript -->
        <script src="jquery/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
      </body>
    </html>