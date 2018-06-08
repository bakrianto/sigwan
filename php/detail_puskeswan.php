<?php 
    header("Access-Control-Allow-Origin: *");
	include 'koneksi.php';
	$id = $_GET['id_puskeswan'];
	$query = "select * from puskeswan where id_puskeswan='$id'";
	$q = mysqli_query($conn, $query);

	while ($data = mysqli_fetch_assoc($q)) {
		echo "	<div class='container'>
		        <div class='row'>
		        <h4>Informasi ".$data[nama]."</h4>
		        <div id='map-puskeswan'>
		            
		        </div>
    				<div class='col-10'>
    				<h4>".$data[nama]."</h4>
    					Nama :".$data[nama]."<br>
    					Alamat :".$data[alamat]."<br>
    					Telephone :".$data[no_telp]."
    				</div>
    				<div class='col-2 text-right'>
    				    <a href=tel:$data[no_telp]><i class='fa fa-phone-square fa-3x' aria-hidden='true'></i></a>
    				</div>
				</div>
				</div>
				
				<script>
				
				    var puskeswan = {lat: $data[lintang], lng: $data[bujur]};
                    var mapPuskeswan = new google.maps.Map(document.getElementById('map-puskeswan'), {
                      zoom: 11,
                      center: puskeswan,
                      disableDefaultUI: true,
                    });
                    var markerPuskeswan = new google.maps.Marker({
                      position: puskeswan,
                      map: mapPuskeswan
                    });
				</script>
				";
	}
 ?>