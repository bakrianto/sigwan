<?php
include_once("koneksi.php");
$q="INSERT INTO `users`(`id_users`, `username`, `password`, `nama_lengkap`) VALUES 
(NULL,'$_POST[username]','$_POST[password]','$_POST[nama]')";
mysqli_query($conn, $q);
//Header("Location:index.php?pg=admin");.
echo "<script>
	window.location='index.php?pg=users';
</script>";
?>
