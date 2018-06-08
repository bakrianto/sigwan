<?php 
    header("Access-Control-Allow-Origin: *");
  	include 'koneksi.php';
  	$id_dokter = $_GET['id_dokter'];
  	$query = "select * from dokter where id_dokter='$id_dokter'";
  	$q = mysqli_query($conn, $query);

	while ($data = mysqli_fetch_assoc($q)) {
		echo "	
		        <div class='container'>
    		        <div class='row'>
    		        <h4>Informasi ".$data[nama]."</h4>
    		        <div id='map-dokter'></div>
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
				
				    var dokter = {lat: $data[lintang], lng: $data[bujur]};
                    var mapDokter = new google.maps.Map(document.getElementById('map-dokter'), {
                      zoom: 11,
                      center: dokter,
                      disableDefaultUI: true,
                    });
                    var markerDokter = new google.maps.Marker({
                      position: dokter,
                      map: mapDokter
                    });
				</script>
				";
	}
 ?>