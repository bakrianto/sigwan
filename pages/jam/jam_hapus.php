<?php
include_once("koneksi.php");
$q="DELETE FROM `jam` WHERE id_jam='$_GET[id_jam]'";
mysqli_query($conn, $q);
echo "<script>
	window.location='index.php?pg=jam';
</script>";
?>
