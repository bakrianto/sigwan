<?php
include_once("koneksi.php");
$q="INSERT INTO puskeswan VALUES (NULL,'$_POST[nama]', '$_POST[alamat]', '$_POST[no_telp]', '$_POST[lintang]', '$_POST[bujur]', '$_POST[ket]')";
mysqli_query($conn, $q);
echo "<script>
	window.location='index.php?pg=puskeswan';
</script>";
?>
