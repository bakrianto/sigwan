<?php
include_once("koneksi.php");
$q="UPDATE `jam` SET `jam`='$_POST[jam_buka]' WHERE `id_jam`='$_POST[id_jam]'";
mysqli_query($conn, $q);
echo "<script>
	window.location='index.php?pg=jam';
</script>";
?>
