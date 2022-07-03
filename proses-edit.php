<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau blum?
if(isset($_POST['simpan'])){
	
	
	// ambil data dari formulir
	$id = $_POST['id'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jk = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$sekolah = $_POST['sekolah_asal'];
	$ortu_wali = $_POST['ortu_wali'];
	$email = $_POST['email'];
	$wa = $_POST['wa'];

	

	// buat query update
	$sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', tgl_lahir='$tgl_lahir', 
		jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah', ortu_wali='$ortu_wali', 
		email='$email', wa='$wa' WHERE id=$id";
	$query = mysqli_query($db, $sql);
	
	// apakah query update berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman list-siswa.php
		header('Location: admin.php');
	} else {
		// kalau gagal tampilkan pesan
		die("Gagal menyimpan perubahan...");
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
