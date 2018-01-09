<?php 
include 'koneksi.php';

	$username = $_POST['username'];
	$password = md5($_POST['password']);
	$nama_lengkap = $_POST['nama_lengkap'];
	$email = $_POST['email'];
	$no = $_POST['no_telp'];
	$alamat_lengkap = $_POST['alamat_lengkap'];

	$query = "INSERT INTO users (username, password, nama_lengkap, email, no_telp, alamat_lengkap) VALUES ('$username', '$password', '$nama_lengkap', '$email', '$no', '$alamat_lengkap')";

	if ($r = mysqli_query($conn, $query)) {
		echo "berhasil";
	} else {
		echo "gagal";
	}

?>