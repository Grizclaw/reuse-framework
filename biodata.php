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
    $p = mysqli_fetch_object($query);


    
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

<!--bagian content-->
<div class="container mt-3">
	<div id="layoutSidenav_content">        
		<section class="content">
			<h2>Biodata Siswa</h2><br>
			<div class="box">
				<a class="breadcrumb-item active">Biodata</a><hr>
			<table class="table-data" border="0"><br>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="fotodaftar/<?php echo $p->foto; ?>" width="200" height="150"><br><br>
				<tr>
					<td>Nama Siswa</td>
					<td>:</td>
					<td><?php echo $p->nama ?></td>
				</tr>
                <tr>
					<td>Tanggal Lahir</td>
					<td>:</td>
					<td><?php echo $p->tgl_lahir ?></td>
				</tr>
                <tr>
					<td>Jenis Kelamin</td>
					<td>:</td>
					<td><?php echo $p->jenis_kelamin ?></td>
				</tr>
                <tr>
					<td>Agama</td>
					<td>:</td>
					<td><?php echo $p->agama ?></td>
				</tr>
                <tr>
					<td>Sekolah Asal</td>
					<td>:</td>
					<td><?php echo $p->sekolah_asal ?></td>
				</tr>
                <tr>
					<td>Nama Orangtua/Wali</td>
					<td>:</td>
					<td><?php echo $p->ortu_wali ?></td>
				</tr>
                <tr>
					<td>Email</td>
					<td>:</td>
					<td><?php echo $p->email ?></td>
				</tr><tr>
					<td>wa</td>
					<td>:</td>
					<td><?php echo $p->wa ?></td>
				</tr>

                <tr>
					<td>Alamat</td>
					<td>:</td>
					<td><?php echo $p->alamat ?></td>
				</tr>
			
			</table>
			
			
		</div>
		</section>
	</div>
</div>

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