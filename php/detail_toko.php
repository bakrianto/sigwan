<?php 
    header("Access-Control-Allow-Origin: *");
	include 'koneksi.php';
	$id_toko = $_GET['id_toko'];
	$query = "select * from toko where id_toko='$id_toko'";
	$q = mysqli_query($conn, $query);

	while ($data = mysqli_fetch_assoc($q)) {
		echo "	<div class='container'>
		        <div class='row'>
		        <h4>Informasi ".$data[nama]."</h4>
		        <div id='map-toko'></div>
    				<div class='col-10'>
    				<h4>".$data[nama]."</h4>
    					Nama toko :".$data[nama]."<br>
    					Alamat :".$data[alamat]."<br>
    					Telephone :".$data[no_telp]."
    				</div>
    				<div class='col-2 text-right'>
    				    <a href=tel:$data[no_telp]><i class='fa fa-phone-square fa-3x' aria-hidden='true'></i></a>
    				</div>
				</div>
				</div>
				
				<script>
				    var toko = {lat: $data[lintang], lng: $data[bujur]};
                    var mapToko = new google.maps.Map(document.getElementById('map-toko'), {
                      zoom: 11,
                      center: toko,
                      disableDefaultUI: true,
                    });
                    var markerToko = new google.maps.Marker({
                      position: toko,
                      map: mapToko
                    });
				</script>
				";
	}
 ?>