<?php
	include_once("koneksi.php");
	$q="DELETE FROM `toko` WHERE id_toko='$_GET[id_toko]'";
	mysqli_query($conn, $q);
	echo "<script>
		window.location='index.php?pg=toko';
	</script>";
?>
