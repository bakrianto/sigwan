<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json");  
	include "koneksi.php";

	$sql = "SELECT id_toko, nama, alamat, no_telp, lintang, bujur, nama_kecamatan, jam, ket FROM toko LEFT JOIN kecamatan ON kecamatan.`id_kecamatan`=toko.`id_kecamatan` LEFT JOIN jam ON jam.`id_jam`=toko.`id_jam`";
	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_object($result)) {
	    $data[] = $row;
	}
	echo json_encode($data);
?>