<?php

include("config.php");

// cek apakah tombol daftar sudah diklik atau belum?
if(isset($_POST['daftar'])){

	
	// ambil data dari formulir
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$tgl_lahir = $_POST['tgl_lahir'];
	$jk = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$sekolah = $_POST['sekolah_asal'];
	$ortu_wali = $_POST['ortu_wali'];
	$email = $_POST['email'];
	$wa = $_POST['wa'];

	//untuk menyimpan foto dari folder lain 
	$upbukti = $_FILES["foto"]["name"];
	$lokasibukti = $_FILES["foto"]["tmp_name"];

		move_uploaded_file($lokasibukti, "fotodaftar/$upbukti");

	

	// buat query
	$sql = "INSERT INTO calon_siswa (nama, alamat, tgl_lahir, jenis_kelamin, agama, sekolah_asal, ortu_wali, email, wa, foto) 
			VALUE ('$nama', '$alamat', '$tgl_lahir', '$jk', '$agama', '$sekolah', '$ortu_wali', '$email','$wa', '$upbukti')";
	$query = mysqli_query($db, $sql);
	
	// apakah query simpan berhasil?
	if( $query ) {
		// kalau berhasil alihkan ke halaman index.php dengan status=sukses
		header('Location: admin.php?status=sukses');
	} else {
		// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
		header('Location: admin.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
