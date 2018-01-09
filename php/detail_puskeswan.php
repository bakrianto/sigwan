<?php 
	include 'koneksi.php';
	$id_puskeswan = '$_GET[id_puskeswan]';
	$query = "select * from puskeswan where id_puskeswan='$id_puskeswan'";
	$q = mysqli_query($conn, $query);

	while ($data = mysqli_fetch_assoc($q)) {
		echo "<pre>",print_r($data);
	}
 ?>