<?php
include_once("koneksi.php");
$pas = $_POST['password'];
if (empty($pas)) {
	$q="update users set 
	nama_lengkap='$_POST[nama]',username='$_POST[username]'
 	where id_users='$_POST[id_users]'";
}else {
	$q="update users set 
	nama_lengkap='$_POST[nama]',username='$_POST[username]',password='$pas'
 	where id_users='$_POST[id_users]'";
}
mysqli_query($conn, $q);
echo "<script>
	window.location='index.php?pg=users';
</script>";
?>