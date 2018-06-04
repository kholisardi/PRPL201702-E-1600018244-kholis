<?php
include('conn.php');
 
if(isset($_SESSION['login_user'])){
header("location: about.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Kecerdasan Buatan</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
  include_once 'head.php';
  ?>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
      </ul>
      <ul class="nav navbar-nav navbar-right">
          
          
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
      <p><a href="index.php"><button type="button" class="btn btn-primary btn-block active">BERANDA</button></a></p>
      <p><a href="diagnosa1.php"><button type="button" class="btn btn-primary btn-block">DIAGNOSA PENYAKIT</button></a></p>
      <p><a href="daftar1.php"><button type="button" class="btn btn-primary btn-block">DAFTAR PENYAKIT</button></a></p>
      <p><a href="about.php"><button type="button" class="btn btn-primary btn-block">ABOUT</button></a></p>    
    </div>
    <div class="col-sm-8 text-left" style="margin-left: 6%;"> 
      

<div class="row">
          <div class="col-lg-12">
            <h2>Penjelasan Detail</h2>
            <?php     
  $id = $_GET['id'];
  $sql = mysqli_query($koneksi, "SELECT pencegahan.*, penyakit.*, solusi.*, rule.* 
                                FROM pencegahan, penyakit, solusi, rule  
                                WHERE penyakit.kode=rule.maka AND
                                penyakit.kode=pencegahan.kode AND
                                solusi.kd_pencegahan=pencegahan.kd_pencegahan AND
                                penyakit.kode='$id'");
      if(mysqli_num_rows($sql) == 0){
        header("Location: daftar.php");
      }else{
        $row = mysqli_fetch_array($sql);
      }
 
 ?>  
            <table class="table table-bordered table-hover">
            <tr>
            <td>Penyakit</td>
            <td>:</td>
            <td><?php echo $row['nama_penyakit']; ?></td>
            <td><a href="cetak-deskripsi.php?id=<?php echo $row['kode']; ?>" class="btn btn-sm btn-primary" target="_blank">Download</a></td>
            
            </tr>
            <tr>
            <td>Penyebab</td>
            <td>:</td>
            <td colspan="2"><?php echo $row['penyebab']; ?></td>
            </tr>
            <tr>
            <td>Gejala</td>
            <td>:</td>
            <td colspan="4">
            <?php 
            $ab = $row['jika'];
            $a = explode("AND", $ab);
            if(isset($a[0])){
            $sql1 = mysqli_query($koneksi, "SELECT * FROM  gejala WHERE kd_gejala='$a[0]'");
        $row1 = mysqli_fetch_array($sql1);
                echo "<ul><li>$row1[gejala]</li>";
                } else {echo "";}
                 ?>
                 <?php
                 if(isset($a[1])){
            $sql2 = mysqli_query($koneksi, "SELECT * FROM  gejala WHERE kd_gejala='$a[1]'");
        $row2 = mysqli_fetch_array($sql2);
                echo "<li>$row2[gejala]</li>";
                } else {echo "";}
                 ?>
                  <?php
                 if(isset($a[2])){
            $sql3 = mysqli_query($koneksi, "SELECT * FROM  gejala WHERE kd_gejala='$a[2]'");
        $row3 = mysqli_fetch_array($sql3);
                echo "<li>$row3[gejala]</li>";
                } else {echo "";}
                 ?>
                  <?php
                 if(isset($a[3])){
            $sql4 = mysqli_query($koneksi, "SELECT * FROM  gejala WHERE kd_gejala='$a[3]'");
        $row4 = mysqli_fetch_array($sql4);
                echo "<li>$row4[gejala]</li>";
                } else {echo "";}
                 ?>
                  <?php
                 if(isset($a[4])){
            $sql5 = mysqli_query($koneksi, "SELECT * FROM  gejala WHERE kd_gejala='$a[4]'");
        $row5 = mysqli_fetch_array($sql5);
                echo "<li>$row5[gejala]</li>";
                } else {echo "";}
                 ?>
                  <?php
                 if(isset($a[5])){
            $sql6 = mysqli_query($koneksi, "SELECT * FROM  gejala WHERE kd_gejala='$a[5]'");
        $row6= mysqli_fetch_array($sql6);
                echo "<li>$row6[gejala]</li>";
                } else {echo "";}
                 ?>
                  <?php
                 if(isset($a[6])){
            $sql7 = mysqli_query($koneksi, "SELECT * FROM  gejala WHERE kd_gejala='$a[6]'");
        $row7 = mysqli_fetch_array($sql7);
                echo "<li>$row7[gejala]</li>";
                } else {echo "";}
                 ?>
                  <?php
                 if(isset($a[7])){
            $sql8 = mysqli_query($koneksi, "SELECT * FROM  gejala WHERE kd_gejala='$a[7]'");
        $row8 = mysqli_fetch_array($sql8);
                echo "<li>$row8[gejala]</li>";
                } else {echo "";}
                 ?>
                  <?php
                 if(isset($a[8])){
            $sql9 = mysqli_query($koneksi, "SELECT * FROM  gejala WHERE kd_gejala='$a[8]'");
        $row9 = mysqli_fetch_array($sql9);
                echo "<li>$row9[gejala]</li></ul>";
                } else {echo "";}
                 ?>
              
            </td>
            </tr>
            <tr>
            
            <tr>
            <td>Nama Obat</td>
            <td>:</td>
            <td colspan="2"><?php echo $row['nama_obat']; ?></td>
            </tr>
            <tr>
            <td>Solusi</td>
            <td>:</td>
            <td colspan="2">
            <ul>
            <?php
            $nomor = $row['kd_pencegahan'];
            $query = mysqli_query($koneksi,"SELECT * FROM solusi WHERE kd_pencegahan='$nomor'");
          $no=0;
      while ($data=mysqli_fetch_array($query)) {
              ?>
              
            <li><?php echo $data['solusi']; ?></li>
            
            <?php }
            ?>
            </ul>
            </td>
            
            </tr>
            
            </table>
            <a type="submit" name ="submit" class="btn btn-primary" href="daftar1.php">Kembali</a>
          </div>
        </div>
      </div>
    </div>
  </div>
<br /><br />
</div>
  

<footer class="container-fluid text-center">
   <p>Kecerdasan Buatan - 2018</p>
</footer>


<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Login content -->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Login</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" method="post" action="ceklogin.php">
            <div class="form-group" method="post">
              <label for="username"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" name="username" id="password" placeholder="Enter username">
            </div>
            <div class="form-group" method="post">
              <label for="password"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" name="password" id="password" placeholder="Enter password">
            </div>
              <button type="submit" id="submit" nama="submit" class="btn btn-primary btn-block" method="post"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form> 
    </div>
  </div>
</body>
</html>