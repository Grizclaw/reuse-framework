<?php
	session_start();
	include("config.php");
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
      <h1 class="fw-bold text-end">Pendaftaran Siswa Baru</h1>
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
          <a class="d-block"><?php echo $_SESSION['username'] ?></a>
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
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>

   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
              <h2>Selamat Datang, <?php echo $_SESSION['username'] ?></h2>
              </div>
            </div>
          </div>
          <!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="container-fluid">
            <div class="row">
              <div class="col-md-6">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">DATA PENDAFTARAN SISWA</h3>
                  </div>
                  <!-- /.card-header -->

                  <div class="card-body">
                    <table class="table table-bordered">
                      <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Email</th>
                        <th>Whatsapp</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                      </tr>
                      </thead>
                      <tbody>
            <?php
			// buat query untuk ambil data dari database
				$no = 1;
				$sql = mysqli_query($db, "SELECT * FROM calon_siswa");
				while ($row = mysqli_fetch_array($sql)) {
			?>
                        <tr>
				<td><?php echo $no++ ?></td>
				<td><?php echo $row['nama']?></td>
				<td><?php echo $row['email']?></td>
				<td><?php echo $row['wa']?></td>
				<td>
				<img src="fotodaftar/<?= $row['foto']; ?>" width="70">
				</td>
				
				<td>
					<a href="biodata.php?id=<?php echo $row['id'] ?>" class="btn btn-info"><i class="fas fa-book"></i>Detail&nbsp;&nbsp;</a>
					<a href="edit.php?id=<?php echo $row['id'] ?>" class="btn btn-warning"><i class="fas fa-edit"></i>ubah&nbsp;&nbsp;</a>
					<a href="hapus.php?id=<?php echo $row['id'] ?>" class="btn btn-danger" onclick="return confirm('YAKIN INGIN DIHAPUS??')"><i class="fas fa-trash-alt"></i> hapus</a>
				</td>
			</tr>

                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.card-body -->
                
      <!-- /.content-wrapper -->
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
