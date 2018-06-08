<?php
include_once("koneksi.php");
$q="INSERT INTO `dokter`(`id_dokter`, `nama`, `alamat`, `id_kecamatan`, `id_jam`, `no_telp`, `lintang`, `bujur`, `ket`) VALUES (NULL,'$_POST[nama]', '$_POST[alamat]', '$_POST[lokasi]', '$_POST[jam_buka]', '$_POST[no_telp]', '$_POST[lintang]', '$_POST[bujur]', '$_POST[ket]')";
mysqli_query($conn, $q);
echo "<script>
	window.location='index.php?pg=dokter';
</script>";
?>
