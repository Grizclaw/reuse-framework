<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "<div class='alert alert-success' role='alert'>
						  Pendaftaran Siswa Berhasil!
						</div>";
			} else {
				echo "<div class='alert alert-danger' role='alert'>
						  Pendaftaran Siswa Gagal!
						</div>";
			}
		?>
	</p>
<?php endif; ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>

<body class="hold-transition sidebar-mini">
<div class="wrapper">
 <!-- Navbar -->
 <nav class="main-header navbar navbar-expand navbar-white navbar-light">

  
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
        
    </ul>
      <h1 class="fw-bold">Pendaftaran Siswa Baru</h1>
  <!-- Right navbar links -->
  <ul class="navbar-nav ml-auto">
      <li class="nav-item d-none d-sm-inline-block">
        <a class="btn btn-danger " href="logout.php" role="button" onclick="return confirm('ANDA YAKIN INGIN KELUAR?')">Logout</a>
    </ul>
  
  </nav>
  
  <!-- /.navbar -->

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="info">
          <a class="d-block"></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Menu
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="pendaftaran.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Pendaftaran</p>
                </a>
              </li>
            </ul>
			<ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="admin.php" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Beranda</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

<div class="container">



	<div class="jumbotron mt-3">
	  <h1 class="display-4 mx-auto">FORMULIR PENDAFTARAN SISWA BARU</h1>
	<hr>
	
	<form action="proses-pendaftaran.php" method="POST" enctype="multipart/form-data">
		<div class="form-group">
			<label for="nama">Nama Lengkap</label>
			<input type="text" class="form-control" name="nama"/>
		</div>

		<div class="form-group">
			<label for="foto">Foto</label><br>
            <input type="file" name="foto" class="form-control" required>
        </div>

		<div class="form-group">
			<label for="tgl_lahir">Tanggal Lahir</label><br>
            <input type="date" name="tgl_lahir" id="tgl_lahir" class="form-control"/>
        </div>

		<div class="form-group">
			<label for="jenis_kelamin">Jenis Kelamin</label>

			<div class="form-check">
			  <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki">
			  <label class="form-check-label" for="laki-laki">
			    Laki-Laki
			  </label>
			</div>

			<div class="form-check">
			  <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan">
			  <label class="form-check-label" for="perempuan">
			    Perempuan
			  </label>
			</div>
		</div>
		
		<div class="form-group">
			<label for="agama">Agama</label>
			<select name="agama" class="form-control">
			<option value="">-- Agama --</option>
				<option>Islam</option>
				<option>Kristen</option>
				<option>Hindu</option>
				<option>Budha</option>
				<option>Konghucu</option>
			</select>
		</div>

		<div class="form-group">
			<label for="sekolah_asal">Sekolah Asal</label>
			<input type="text" name="sekolah_asal" class="form-control" />
		</div>

		<div class="form-group">
			<label for="ortu_wali">Orang Tua/Wali</label>
			<input type="text" name="ortu_wali" class="form-control" />
		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" name="email" class="form-control" />
		</div>

		<div class="form-group">
			<label for="wa">Nomer telephone</label>
			<input type="text" name="wa" class="form-control" />
		</div>

		<div class="form-group">
			<label for="alamat">Alamat</label>
			<textarea class="form-control" name="alamat"></textarea>
		</div>

		<input type="submit" value="Daftar" class="btn btn-md btn-primary" name="daftar" />	
	</form>

</div>
</body>

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
</body>
</html>
