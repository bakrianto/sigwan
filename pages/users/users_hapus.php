<?php
include_once("koneksi.php");
$q="delete from users
 where id_users='$_GET[id_users]'";
mysqli_query($conn, $q);
//Header("Location:index.php?pg=admin");
echo "<script>
	window.location='index.php?pg=users';
</script>";
?>
