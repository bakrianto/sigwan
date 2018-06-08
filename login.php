<?php
	session_start();
	include "koneksi.php";
	$username=$_POST['username'];
	$password=$_POST['password'];
	$query=mysqli_query($conn, "select * from users where username='$username' and password='$password'");
	$cek=mysqli_num_rows($query);

	if($cek>0){
		$user=mysqli_fetch_assoc($query);
		$_SESSION['level']=$user['level'];
		$_SESSION['usernm']=$user['nama_lengkap'];
		if ($user['level']=="admin") {
			header("location:index.php?pg=users");
		} elseif ($user['level']=="users") {
			header("location:index.php?pg=beranda");
		} else {
			header("location:index.php?msg=Username/Password Salah");
		}
	}else{
		header("location:index.php?msg=Data Ada Yang Kosong.");
	}

?>