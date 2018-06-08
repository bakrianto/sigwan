<?php
include_once("koneksi.php");
$q="INSERT INTO `kecamatan` VALUES (NULL,'$_POST[nama_kecamatan]')";
mysqli_query($conn, $q);
echo "<script>
	window.location='index.php?pg=kecamatan';
</script>";
?>
