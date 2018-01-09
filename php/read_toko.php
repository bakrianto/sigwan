<?php
	echo "<div class='container'>
		<h4>Daftar Toko Obat Hewan</h4>
	</div>"
	;  
	include "koneksi.php";
	$no = 1;
	$sql = "SELECT * FROM toko";
	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_object($result)) {
		echo		"<h4 class='btn btn-success btn-block'>".$row->nama."</h4><br>";
	}
?>