<?php
    header("Access-Control-Allow-Origin: *");
	echo "<div class='container'>
		<h4>Daftar Dokter Hewan</h4>
	</div>"
	; 
	include "koneksi.php";
	$no = 1;
	$sql = "SELECT * FROM dokter";
	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_object($result)) {
		echo		"<h4 class='btn btn-outline-success btn-block btn-lg detail-".$row->id_dokter."'>".$row->nama."</h4><br>";
		echo "	<script>
					$(document).ready(function() {
						$('.detail-$row->id_dokter').click(function(event) {
							$('.content').hide();
							$('.content-2').show();
							$.ajax({url: 'http://puskeswan.batserver.xyz/php/detail_dokter.php?id_dokter=$row->id_dokter', success: function(result){
						        $('.content-2').html(result);
						    }}); 
						});
					});
				</script>
		";
	}
?>