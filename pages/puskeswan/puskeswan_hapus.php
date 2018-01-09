<?php
include_once("koneksi.php");
$q="DELETE FROM `puskeswan` WHERE id_puskeswan='$_GET[id_puskeswan]'";
mysqli_query($conn, $q);
echo "<script>
	window.location='index.php?pg=puskeswan';
</script>";
?>
