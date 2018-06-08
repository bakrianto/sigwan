<?php
include_once("koneksi.php");
$q="DELETE FROM `dokter` WHERE id_dokter='$_GET[id_dokter]'";
mysqli_query($conn, $q);
echo "<script>
	window.location='index.php?pg=dokter';
</script>";
?>
