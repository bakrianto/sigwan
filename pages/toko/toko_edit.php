<?php
	include_once("koneksi.php");
	$q="UPDATE `toko` SET nama='$_POST[nama]', alamat='$_POST[alamat]', id_kecamatan='$_POST[lokasi]', id_jam='$_POST[jam_buka]', no_telp='$_POST[no_telp]', lintang='$_POST[lintang]', bujur='$_POST[bujur]',ket='$_POST[ket]' WHERE id_toko='$_POST[id_toko]'";
	mysqli_query($conn, $q);
	echo "<script>
		window.location='index.php?pg=toko';
	</script>";
?>
