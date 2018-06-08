<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-type: application/json");  
	include "koneksi.php";

	$sql = "SELECT * FROM jam";
	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_object($result)) {
	    $data[] = $row;
	}
	echo json_encode($data);
?>