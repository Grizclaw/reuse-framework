<?php 

include("config.php");

if( !isset($_GET['id']) ){
	// kalau tidak ada id di query string
	header('Location: admin.php');
}

//ambil id dari query string
$id = $_GET['id'];

// buat query untuk ambil data dari database
$sql = "SELECT * FROM calon_siswa WHERE id=$id";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

// jika data yang di-edit tidak ditemukan
if( mysqli_num_rows($query) < 1 ){
	die("data tidak ditemukan...");
}

?>
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

<div class="container mt-3 col-lg-5">
	<header>
		<h3>Formulir Edit Siswa</h3>

	</header>
	
	<form action="proses-edit.php" method="POST" >
			
		<input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />
		
		<div class="form-group">
			<label for="nama">Nama</label>
			<input type="text" name="nama" class="form-control" value="<?php echo $siswa['nama'] ?>" />
		</div>

		<div class="form-group">
			<label for="jenis_kelamin">Jenis Kelamin</label>
			<?php $jk = $siswa['jenis_kelamin']; ?>

			<div class="form-check">
			  <input class="form-check-input" type="radio" name="jenis_kelamin" id="laki-laki" value="laki-laki" <?php echo ($jk == 'laki-laki') ? "checked": "" ?>>
			  <label class="form-check-label" for="laki-laki">
			    Laki-Laki
			  </label>
			</div>

			<div class="form-check">
			  <input class="form-check-input" type="radio" name="jenis_kelamin" id="perempuan" value="perempuan" <?php echo ($jk == 'perempuan') ? "checked": "" ?>>
			  <label class="form-check-label" for="perempuan">
			    Perempuan
			  </label>
			</div>
		</div>

		<div class="form-group">
			<label for="agama">Agama</label>
			<?php $agama = $siswa['agama']; ?>
			<select class="form-control" name="agama">
			<option value="">-- Agama --</option>
				<option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
				<option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
				<option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
				<option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
				<option <?php echo ($agama == 'Konghucu') ? "selected": "" ?>>Konghucu</option>
			</select>
		</div>

		<div class="form-group">
			<label for="sekolah_asal">Sekolah Asal</label>
			<input type="text" name="sekolah_asal" class="form-control" value="<?php echo $siswa['sekolah_asal'] ?>" />
		</div>

		<div class="form-group">
			<label for="ortu_wali">Orang Tua/Wali</label>
			<input type="text" name="ortu_wali" class="form-control" value="<?php echo $siswa['ortu_wali'] ?>" />
		</div>

		<div class="form-group">
			<label for="email">Email</label>
			<input type="text" name="email" class="form-control" value="<?php echo $siswa['email'] ?>" />
		</div>

		<div class="form-group">
			<label for="wa">wa</label>
			<input type="text" name="wa" class="form-control" value="<?php echo $siswa['wa'] ?>" />
		</div>

		<div class="form-group">
			<label for="alamat">Alamat</label>
			<textarea class="form-control" name="alamat"><?php echo $siswa['alamat'] ?></textarea>
		</div>

		<input type="submit" class="btn btn-primary" value="Update" name="simpan" />
		</fieldset>
	
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

