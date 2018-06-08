<?php
include_once("koneksi.php");
$q="INSERT INTO `jam`(`id_jam`, `jam`) VALUES (NULL,'$_POST[jam_buka]')";
mysqli_query($conn, $q);
echo "<script>
	window.location='index.php?pg=jam';
</script>";
?>
