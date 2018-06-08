<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json");  
	include "koneksi.php";

	$sql = "SELECT id_puskeswan, nama, alamat, no_telp, lintang, bujur, nama_kecamatan, jam, ket FROM puskeswan LEFT JOIN kecamatan ON kecamatan.`id_kecamatan`=puskeswan.`id_kecamatan` LEFT JOIN jam ON jam.`id_jam`=puskeswan.`id_jam`";
	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_object($result)) {
	    $data[] = $row;
	}
	echo json_encode($data);
?>