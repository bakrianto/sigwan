<?php
  include_once("koneksi.php");
if(!empty($_GET['id_puskeswan'])){
  $q="SELECT * FROM `puskeswan` WHERE id_puskeswan='$_GET[id_puskeswan]'";
  $data=mysqli_fetch_array(mysqli_query($conn, $q));
  $action="?pg=puskeswan_edit";
}else{
  $action="?pg=puskeswan_tambah";
}
?>

<div class="row">
    <div class="container">
        <h1 class="page-header">Tambah Data Puskeswan</h1>
    </div>
</div>
<div class="container">
    <div class="panel pull-left"><a class="btn btn-info" href="?pg=puskeswan"><i class="fa fa-chevron-left fa-fw"></i> Kembali</a></div>
</div>
<div class="container">
  <div class="row">
      <form class="form" action="<?=$action?>" method="post">
        <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
            <tr>
              <label style="width: 200px">Nama Puskeswan</label>
              <input type="text" class="form-control" style="width: 350px" name="nama" placeholder="Nama Puskeswan" value="<?=$data[nama]?>" />
            </tr>
        </div>
        </div>
        <div class="form-inline" style="padding-bottom: 10px">
        <div class="form-group">
        <tr>
          <label style="width: 200px">Alamat</label>
          <input type="text" class="form-control" style="width: 350px" name="alamat" placeholder="Alamat" value="<?=$data[alamat]?>" />
        </tr>
        </div>
        </div>
        <?php 
        $q=mysqli_query($conn, "SELECT * FROM kecamatan ORDER BY id_kecamatan ASC;");
         ?>
        <div class="form-inline" style="padding-bottom: 10px">
        <div class="form-group">
        <tr>
          <label style="width: 200px">Area Lokasi</label>
          <select class="form-control" name="lokasi">
            <?php 
                if ($_GET['act']=="edit") {
                    while ($kat = mysqli_fetch_assoc($q)) {
                        if ($data['id_kecamatan'] == $kat['id_kecamatan']) {
                            echo '<option value="'.$kat['id_kecamatan'].'" selected>'.$kat['nama_kecamatan'].'</option>';
                        } else {
                            echo '<option value="'.$kat['id_kecamatan'].'">'.$kat['nama_kecamatan'].'</option>';
                        }
                    }
                } else {
                    echo "<option>Pilih Kecamatan</option>";
                    while ($kat = mysqli_fetch_assoc($q)) {
                        echo '<option value="'.$kat['id_kecamatan'].'">'.$kat['nama_kecamatan'].'</option>';
                    }
                }
            ?>   
          </select>
        </tr>
        </div>
        </div>
        <?php 
        $q=mysqli_query($conn, "SELECT * FROM jam ORDER BY id_jam ASC;");
         ?>
        <div class="form-inline" style="padding-bottom: 10px">
        <div class="form-group">
        <tr>
          <label style="width: 200px">Jam Buka</label>
          <select class="form-control" name="jam_buka">
            <?php 
                if ($_GET['act']=="edit") {
                    while ($kat = mysqli_fetch_assoc($q)) {
                        if ($data['id_jam'] == $kat['id_jam']) {
                            echo '<option value="'.$kat['id_jam'].'" selected>'.$kat['jam'].'</option>';
                        } else {
                            echo '<option value="'.$kat['id_jam'].'">'.$kat['jam'].'</option>';
                        }
                    }
                } else {
                    echo "<option>Pilih Waktu</option>";
                    while ($kat = mysqli_fetch_assoc($q)) {
                        echo '<option value="'.$kat['id_jam'].'">'.$kat['jam'].'</option>';
                    }
                }
            ?>   
          </select>
        </tr>
        </div>
        </div>
        <div class="form-inline" style="padding-bottom: 10px">
        <div class="form-group">
        <tr>
          <label style="width: 200px">No. Telephone</label>
          <input type="text" class="form-control" style="width: 350px" name="no_telp" placeholder="No. Telephone" value="<?=$data[no_telp]?>" />
        </tr>
        </div>
        </div>
        <!-- garis lintang dan bujur -->
        <!-- <div class="form-inline" style="padding-bottom: 10px">
        <div class="form-group">
        <tr>
          <label style="width: 200px">Garis Lintang</label>
          <input type="text" class="form-control" style="width: 350px" rows="3" placeholder="lintang" name="lintang" value="<?=$data[lintang]; ?>">
        </tr>
        </div>
        </div>
        <div class="form-inline" style="padding-bottom: 10px">
        <div class="form-group">
        <tr>
          <label style="width: 200px">Garis Bujur</label>
          <input class="form-control" style="width: 350px" rows="3" placeholder="bujur" name="bujur" value="<?=$data[bujur]; ?>">
        </tr>
        </div>
        </div> -->
        <!-- end -->
        <label>Peta</label>
        <input type="hidden" name="lintang" id="lintang" value="<?=$data[lintang]; ?>">
        <input type="hidden" name="bujur" id="bujur" value="<?=$data[bujur]; ?>">
        <div id="puskeswanMap" style="width:70%; height:400px; margin-left:200px; margin-bottom: 10px;"></div>
        <script>
        function initMap() {
          var laat = $('#lintang').val();
          var loon = $('#bujur').val();
          

          if (laat != '' && loon != '') {
            var posisi = {lat: parseFloat(laat), lng: parseFloat(loon)};
          } else {
            var posisi = {lat: -7.894778, lng: 110.31421}; 
          }

          var mapProp= {
              center:posisi,
              zoom:12,
          };

          var map=new google.maps.Map(document.getElementById("puskeswanMap"),mapProp);

          var marker = new google.maps.Marker({
              position: posisi,
              map: map,
          });

          google.maps.event.addListener(map, 'click', function(event) {
            //alert(event.latLng.lat() + ", " + event.latLng.lng());
            var lat = event.latLng.lat();
            var lon = event.latLng.lng();
            console.log(lat+" "+lon);
            var lat2 = $('#lintang').val(lat);
            var lon2 = $('#bujur').val(lon);
            var posisi2 = {lat: parseFloat(lat), lng: parseFloat(lon)};
            marker.setMap(null);
            marker = new google.maps.Marker({
              position: posisi2,
              map: map,
          });
          });

        }
        </script>
        <div class="form-inline" style="padding-bottom: 10px">
        <div class="form-group">
        <tr>
          <label style="width: 200px">Keterangan</label>
          <textarea class="form-control" style="width: 350px" rows="3" placeholder="ket" name="ket"><?=$data[ket]; ?></textarea>
        </tr>
        </div>
        </div>
        <tr>
          <td>
            <?php if($_GET['act']=="edit"){ ?>
            <input type="hidden" name="id_puskeswan" value="<?=$data[id_puskeswan]?>" />
            <?php } ?>
          </td>
          <td>
            <button type="submit" class="btn btn-info"><i class="fa fa-save fa-fw"></i> Simpan</button> &nbsp;<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Batal</button> 
          </td>
        </tr>
      </form>
  </div>
</div>