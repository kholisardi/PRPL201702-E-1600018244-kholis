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
    <div class="card w-25 w-responsive mx-auto p-3">
      <!-- Card body -->
      <div class="card-body">
        <!-- Default form subscription -->
        <form method="post" action="proses_daftar.php">
          <p class="h4 text-center py-4">Daftar Customer Baru</p>
          
          <label for="defaultFormCardNameEx" class="grey-text font-weight-light" style="width:500px">Nama</label>
          <input type="text" name="nama" class="form-control">
          
          <br>
          <label for="defaultFormCardNameEx" class="grey-text font-weight-light" style="width:500px">Username</label>
          <input type="text" name="username" class="form-control">
          
          <br>
          <label for="defaultFormCardEmailEx" class="grey-text font-weight-light">Password</label>
          <input type="password" name="password" class="form-control">
          <br>
          <label for="defaultFormCardEmailEx" class="grey-text font-weight-light">E-mail</label>
          <input type="email" name="email" class="form-control">
          <br>
          <label for="defaultFormCardNameEx" class="grey-text font-weight-light" style="width:500px">No telephone</label>
          <input type="text" name="nohp" class="form-control">
          <div class="text-center py-4 mt-3">
            <button class="btn btn-outline-purple" type="submit" name="submit" value="DAFTAR">Daftar<i class="fa fa-paper-plane-o ml-2"></i></button>
          </div>
          <div class="col">
            <p class="font-small grey-text d-flex">Sudah punya akun? <a href="login.php" class="dark-grey-text ml-1 font-weight-bold"> Sign in</a></p>
          </div>
        </form>
        <!-- Default form subscription -->
      </div>
      <!-- Card body -->
    </div>
    <!-- Card -->
    
    <!-- Bootstrap core JavaScript -->
    <script src="jquery/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
  </body>
</html>