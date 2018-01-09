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
<div class="container">
  <div class="row">
      <div class="col-md-12">
          <h1 class="page-header">Form tambah/edit dokter</h1>
      </div>
  </div>

  <div class="container-fluid">
      <div class="panel pull-left"><a class="btn btn-info" href="?pg=dokter"><i class="fa fa-chevron-left fa-fw"></i> Kembali</a></div>
  </div>

    <div class="container-fluid">
        <form class="form-inline" action="<?=$action?>" method="post">
          <div class="form-group" style="margin-bottom: 30px">
            <tr>
              <td><label style="width: 200px">Nama</label></td>
              <input type="text" class="form-control" name="nama" placeholder="Nama dokter" value="<?=$data[nama]?>"/>
            </tr>
          </div>
          <div class="form-group" style="margin-bottom: 30px">
            <tr>
              <td><label style="width: 200px">Alamat</label></td>
              <input type="text" class="form-control" name="alamat" placeholder="Alamat" value="<?=$data[alamat]?>"/>
            </tr>
          </div>
          <div class="form-group" style="margin-bottom: 30px">
            <tr>
              <td><label style="width: 200px">No. Telephone</label></td>
              <input type="text" class="form-control" name="no_telp" placeholder="No. Telephone" value="<?=$data[no_telp]?>"/>
            </tr>
          </div>
          <div class="form-group" style="margin-bottom: 30px">
            <tr>
              <td><label style="width: 200px">Garis Lintang</label></td>
              <input type="text" class="form-control" name="lintang" placeholder="Garis Lintang" value="<?=$data[lintang]?>"/>
            </tr>
          </div>
          <div class="form-group" style="margin-bottom: 30px">
            <tr>
              <td><label style="width: 200px">Garis Bujur</label></td>
              <input type="text" class="form-control" name="bujur" placeholder="Garis Bujur" value="<?=$data[bujur]?>"/>
            </tr>
          </div>
          <div class="form-group" style="margin-bottom: 30px">
            <tr>
              <td><label style="width: 200px">Keterangan</label></td>
              <input type="text" class="form-control" name="ket" placeholder="Keterangan" value="<?=$data[ket]?>"/>
            </tr>
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
</div>