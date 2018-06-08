<?php
    header("Access-Control-Allow-Origin: *");
	echo "<div class='container'>
		<h4>Daftar Toko Obat Hewan</h4>
	</div>"
	;  
	include "koneksi.php";
	$no = 1;
	$sql = "SELECT * FROM toko";
	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_object($result)) {
		echo		"<h4 class='btn btn-outline-success btn-block btn-lg tes' id='detail-".$row->id_toko."'>".$row->nama."</h4><br>";
		echo "	<script>
			$(document).ready(function() {
				$('#detail-$row->id_toko').click(function(event) {
					$('.content').hide();
					$('.content-2').show();
					$.ajax({url: 'http://puskeswan.batserver.xyz/php/detail_toko.php?id_toko=$row->id_toko', success: function(result){
				        $('.content-2').html(result);
				    }}); 
				});
			});
		</script>
		";
	}
?>