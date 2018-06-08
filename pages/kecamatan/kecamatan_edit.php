<?php
include_once("koneksi.php");
$q="UPDATE `kecamatan` SET `nama_kecamatan`='$_POST[nama_kecamatan]' WHERE `id_kecamatan`='$_POST[id_kecamatan]'";
mysqli_query($conn, $q);
echo "<script>
	window.location='index.php?pg=kecamatan';
</script>";
?>
