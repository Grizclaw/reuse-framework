<?php

  require_once 'config.php';
  if(array_key_exists('submit', $_POST)) {
    $nama = $_POST['nama'];
    $username = $_POST['username'];
    $password = $_POST['password'];
  $sql = "INSERT INTO user (nama, username, password, level) 
			VALUE ('$nama', '$username', '$password', 'user')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman login.php dengan status=sukses
		header('Location: login.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman daftar.php dengan status=gagal
		header('Location: daftar.php?status=gagal');
	} 
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Pendaftaran SMP 73 Jakarta Selatan | Register</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
  <a><b>Pendaftaran</b> SMP 73 Jakarta Selatan</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Register</p>

      <form action="" method="POST">
        <div class="user-details input-group mb-3">

        <input type="hidden" name="tujuan" value="DAFTAR">

        <input type="text" id="nama" name="nama" placeholder="Masukkan nama" required />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
        <input type="text" id="username" name="username" placeholder="Masukkan username" required />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3 ">
        <input type="password" id="password" name="password" placeholder="Masukkan password" required />
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
       
          <!-- /.col -->
          <div class="d-grid gap-2 col-6 mx-auto">
          <input type="submit" name="submit" class="btn btn-primary btn-block" value="Register" />
          </div>
          <!-- /.col -->
        </div>
      </form>

      <a href="index.php" class="text-center mb-3">Sudah Punya Akun? Login</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
</body>
</html>
