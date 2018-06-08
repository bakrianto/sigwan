<?php
    header("Access-Control-Allow-Origin: *");
	echo "<div class='container'>
		<h4>Daftar Puskeswan</h4>
	</div>"
	;  
	include "koneksi.php";
	$no = 1;
	$sql = "SELECT * FROM puskeswan";
	$result = mysqli_query($conn, $sql);

	while ($row = mysqli_fetch_object($result)) {
		echo		"<p class='btn btn-outline-success btn-block btn-lg detail-".$row->id_puskeswan."'>".$row->nama."</p><br>";
		echo "	<script>
					$(document).ready(function() {
						$('.detail-$row->id_puskeswan').click(function(event) {
							$('.content').html('');
							$('.content-2').show();
							$.ajax({url: 'http://puskeswan.batserver.xyz/php/detail_puskeswan.php?id_puskeswan=$row->id_puskeswan', success: function(result){
						        $('.content-2').html(result);
						    }}); 
						});
					});
				</script>
		";
	}
?>