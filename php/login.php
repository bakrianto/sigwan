<?php
	session_start();
	$username = $_POST['username'];
	$password = $_POST['password'];

	include "koneksi.php";
	$query = "select * from users where username='$username' and password='$password'";
	$q = mysqli_query($conn, $query);
	$cek = mysqli_num_rows($q);
	if ($cek>0){
		$data = mysqli_fetch_array($q);
		if ($data['level']=="users"){
			echo "login berhasil";
		} else {
			echo "login gagal";
		}
}
?>