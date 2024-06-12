<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Login | Sistem Persediaan Barang Masuk dan Keluar</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="description" content="Sistem Persediaan Barang Masuk dan Keluar">
    <meta name="author" content="E. Andika Alfira Damara" />

    <!-- favicon -->
    <link rel="shortcut icon" href="assets/img/logo-pertamina.png" />

    <!-- Bootstrap 3.3.2 -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="assets/plugins/font-awesome-4.6.3/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="assets/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="assets/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />
    <!-- Custom CSS -->
    <link href="assets/css/style.css" rel="stylesheet" type="text/css" />

    <script src="sweetalert2.min.js"></script>
    

  </head>
  <body class="login-page bg-login">
    <div class="login-box">
      <div style="color:#3c78bc" class="login-logo">
        <img style="margin-top:-80px;" src="assets/img/logo-pertamina.png" alt="Logo" height="auto" width="90%">
        <!-- <h2 style="font-size: x-large; margin: 0; font-weight: 700;">SISTEM INVENTORY STOK TONER</h2>
        <h2 style="font-size: larger; margin: 0; font-weight: 700;">SSC ICT FS AREA SUNGAI PAKNING</h2> -->
        <h4 style="color: black; font-weight: 900;">SISTEM PERSEDIAAN BARANG MASUK DAN KELUAR</h4>
        <h5 style="color: black; font-weight: 700;">SSC ICT FS AREA SUNGAI PAKNING</h5>
      </div><!-- /.login-logo -->
      <?php  
      // fungsi untuk menampilkan pesan
      // jika alert = "" (kosong)
      // tampilkan pesan "" (kosong)
      if (empty($_GET['alert'])) {
        echo "";
      } 
      // jika alert = 1
      // tampilkan pesan Gagal "Username atau Password salah, cek kembali Username dan Password Anda"
      elseif ($_GET['alert'] == 1) {
        echo "<div class='alert alert-danger alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4>  <i class='icon fa fa-times-circle'></i> Login Gagal!</h4>
                Username atau password salah, silahkan cek kembali.
              </div>";
      }
      // jika alert = 2
      // tampilkan pesan Sukses "Anda telah berhasil logout"
      elseif ($_GET['alert'] == 2) {
        echo "<div class='alert alert-success alert-dismissable'>
                <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
                <h4>  <i class='icon fa fa-check-circle'></i> Sukses!</h4>
                Anda telah berhasil logout.
              </div>";
      }
      ?>

      <div class="login-box-body">
        <p class="login-box-msg"></i>SELAMAT DATANG</p>
        <br/>
        <form action="login-check.php" method="POST">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="username" placeholder="Username" autocomplete="off" required />
            <span class="glyphicon glyphicon-user form-control-feedback"></span>
          </div>

          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="password" placeholder="Password" required />
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <br/>
          <div class="row">
            <div class="col-xs-12">
              <input type="submit" class="btn btn-primary btn-lg btn-block btn-flat" name="login" value="Login" />
            </div><!-- /.col -->
            
          </div>
        </form>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->

    <!-- jQuery 2.1.3 -->
    <script src="assets/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
  </body>
</html>