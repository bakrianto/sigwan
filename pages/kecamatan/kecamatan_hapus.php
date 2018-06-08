<?php
include_once("koneksi.php");
$q="DELETE FROM `kecamatan` WHERE id_kecamatan='$_GET[id_kecamatan]'";
mysqli_query($conn, $q);
echo "<script>
	window.location='index.php?pg=kecamatan';
</script>";
?>
