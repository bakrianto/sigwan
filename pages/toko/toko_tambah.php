<?php
	include_once("koneksi.php");

	$nama = $_POST[nama];
	$alamat = $_POST[alamat];
	$no = $_POST[no_telp];
	$lintang = $_POST[lintang];
	$bujur = $_POST[bujur];
	$ket = $_POST[ket];
	$lokasi = $_POST[lokasi];
	$jam_buka = $_POST[jam_buka];

	$q="INSERT INTO toko VALUES (NULL,'$nama', '$alamat', $lokasi, $jam_buka, '$no', '$lintang', '$bujur', '$ket')";
	mysqli_query($conn, $q);

	echo "<script>
		window.location='index.php?pg=toko';
	</script>";
?>
