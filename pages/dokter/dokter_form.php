<?php
  include_once("koneksi.php");
if(!empty($_GET['id_dokter'])){
  $q="SELECT * FROM `dokter` WHERE id_dokter='$_GET[id_dokter]'";
  $data=mysqli_fetch_array(mysqli_query($conn, $q));
  $action="?pg=dokter_edit";
}else{
  $action="?pg=dokter_tambah";
}
?>
  <div class="row">
      <div class="container">
          <h1 class="page-header">Form tambah/edit dokter</h1>
      </div>
  </div>

  <div class="container">
      <div class="panel pull-left"><a class="btn btn-info" href="?pg=dokter"><i class="fa fa-chevron-left fa-fw"></i> Kembali</a></div>
  </div>

    <div class="container">
        <form class="form-inline" action="<?=$action?>" method="post">
        <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
            <tr>
              <td><label style="width: 200px">Nama</label></td>
              <input type="text" class="form-control" name="nama" style="width: 350px" placeholder="Nama Dokter" value="<?=$data[nama]?>"/>
            </tr>
          </div>
          </div>
          <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
            <tr>
              <td><label style="width: 200px">Alamat</label></td>
              <input type="text" class="form-control" name="alamat" style="width: 350px" placeholder="Alamat" value="<?=$data[alamat]?>"/>
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
              <td><label style="width: 200px">No. Telephone</label></td>
              <input type="text" class="form-control" name="no_telp" style="width: 350px" placeholder="No. Telephone" value="<?=$data[no_telp]?>"/>
            </tr>
          </div>
          </div>
          <!-- garis lintang dan bujur -->
          <!-- <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
            <tr>
              <td><label style="width: 200px">Garis Lintang</label></td>
              <input type="text" class="form-control" name="lintang" style="width: 350px" placeholder="Garis Lintang" value="<?=$data[lintang]?>"/>
            </tr>
          </div>
          </div>
          <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
            <tr>
              <td><label style="width: 200px">Garis Bujur</label></td>
              <input type="text" class="form-control" name="bujur" style="width: 350px" placeholder="Garis Bujur" value="<?=$data[bujur]?>"/>
            </tr>
          </div>
          </div> -->
          <!-- end -->
          <label>Peta</label>
          <input type="hidden" name="lintang" id="lintang" value="<?=$data[lintang]; ?>">
          <input type="hidden" name="bujur" id="bujur" value="<?=$data[bujur]; ?>">
          <div id="dokterMap" style="width:70%; height:400px; margin-left:200px; margin-bottom: 10px;"></div>
          <script>
        function initMap() {
          var laat = $('#lintang').val();
          var loon = $('#bujur').val();
          var posisi = {lat: parseFloat(laat), lng: parseFloat(loon)};

          var mapProp= {
              center:posisi,
              zoom:12,
          };

          var map=new google.maps.Map(document.getElementById("dokterMap"),mapProp);

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
              <td><label style="width: 200px">Keterangan</label></td>
              <textarea class="form-control" rows="3" name="ket" style="width: 350px" placeholder="Keterangan"><?=$data[ket]?></textarea>
            </tr>
          </div>
          </div>
          <div style="padding-bottom: 30px">
            <tr>
              <td>
                <?php if($_GET['act']=="edit"){ ?>
                <input type="hidden" name="id_dokter" value="<?=$data[id_dokter]?>" />
                <?php } ?>
              </td>
              <td>
                <button type="submit" class="btn btn-info"><i class="fa fa-save fa-fw"></i> Simpan</button> &nbsp;<button type="reset" class="btn btn-danger"><i class="fa fa-repeat fa-fw"></i> Batal</button> 
              </td>
            </tr>
            </div>
        </form>
      </div>
  </div>
</div>