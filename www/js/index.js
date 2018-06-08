document.addEventListener("deviceready", onDeviceReady, false);
function onDeviceReady() {
  document.addEventListener("backbutton", onBackKeyDown, false);
}

var Latitude = undefined;
var Longitude = undefined;

// Get geo coordinates

function getMapLocation() {

  navigator.geolocation.getCurrentPosition
  (onMapSuccess, onMapError, { enableHighAccuracy: true });
}

// Success callback for get geo coordinates

var onMapSuccess = function (position) {

  Latitude = position.coords.latitude;
  Longitude = position.coords.longitude;

  getMap(Latitude, Longitude);

}

// Get map by using coordinates

function getMap(latitude, longitude) {

  var mapOptions = {
      center: new google.maps.LatLng(0, 0),
      zoom: 1,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
      disableDefaultUI: true,
  };

  map = new google.maps.Map
  (document.getElementById("map"), mapOptions);


  var latLong = new google.maps.LatLng(latitude, longitude);

  var marker = new google.maps.Marker({
      position: latLong
  });

  var infoposisi = new google.maps.InfoWindow({
      content: 'Saya'
  });

  marker.setMap(map);
  map.setZoom(12);
  map.setCenter(marker.getPosition());
  infoposisi.open(map, marker);

}

// Success callback for watching your changing position

var onMapWatchSuccess = function (position) {

  var updatedLatitude = position.coords.latitude;
  var updatedLongitude = position.coords.longitude;

  if (updatedLatitude != Latitude && updatedLongitude != Longitude) {

      Latitude = updatedLatitude;
      Longitude = updatedLongitude;

      getMap(updatedLatitude, updatedLongitude);
  }
}

// Error callback

function onMapError(error) {
  console.log('code: ' + error.code + '\n' +
      'message: ' + error.message + '\n');
}

// Watch your changing position

function watchMapPosition() {

  return navigator.geolocation.watchPosition
  (onMapWatchSuccess, onMapError, { enableHighAccuracy: true });
}

function onBackKeyDown() {
    var kondisi = $(this).attr('id');
    if (kondisi == "content" || "content-2") {
        $('.judul').show();
        $('.kategori').show();
        $('#map').show();
        $('.menu').show();
        $('.content').hide();
        $('.content-2').hide();
    } else if (kondisi != "content" || "content-2") {
        navigator.app.exitApp();
    }
}

function getMapPuskeswan() {
  $.get("http://puskeswan.batserver.xyz/php/json-puskeswan.php", function(data){
    $.each(data, function(index, data) {

        var latpuskeswan = data.lintang;
        var longpuskeswan = data.bujur;
        var namaPuskeswan = data.nama;
        console.log(latpuskeswan+" "+longpuskeswan+" "+namaPuskeswan);

        var latLongPuskeswan = new google.maps.LatLng(latpuskeswan, longpuskeswan);

        var markerPuskeswan = new google.maps.Marker({
          position: latLongPuskeswan,
          title: namaPuskeswan,
        });

        var infoPuskeswan = new google.maps.InfoWindow({
          content: namaPuskeswan
        });

        markerPuskeswan.setMap(map);
        infoPuskeswan.open(map, markerPuskeswan);

        markerPuskeswan.addListener('click', function() {
          infoPuskeswan.open(map, markerPuskeswan);
        });

    });
  });
}

function getMapDokter() {
  $.get("http://puskeswan.batserver.xyz/php/json-dokter.php", function(data){
    $.each(data, function(index, data) {

        var latdokter = data.lintang;
        var longdokter = data.bujur;
        var namaDokter = data.nama; 
        console.log(latdokter+" "+longdokter+" "+namaDokter);

        var latLongDokter = new google.maps.LatLng(latdokter, longdokter);
        var markerDokter = new google.maps.Marker({
          position: latLongDokter
        });

        var infoDokter = new google.maps.InfoWindow({
          content: namaDokter
        });

        markerDokter.setMap(map);
        infoDokter.open(map, markerDokter);

        markerDokter.addListener('click', function() {
          infoDokter.open(map, markerDokter);
        });

    });
  });
}

function getMapToko() {
  $.get("http://puskeswan.batserver.xyz/php/json-toko.php", function(data){
    $.each(data, function(index, data) {

        var lattoko = data.lintang;
        var longtoko = data.bujur;
        var namaToko = data.nama;
        console.log(lattoko+" "+longtoko+" "+namaToko)

        var latLongToko = new google.maps.LatLng(lattoko, longtoko);
        var markerToko = new google.maps.Marker({
          position: latLongToko
        });

        var infoToko = new google.maps.InfoWindow({
          content: namaToko
        });

        markerToko.setMap(map);
        infoToko.open(map, markerToko);

        markerToko.addListener('click', function() {
          infoToko.open(map, markerToko);
        });

    });
  });
}
