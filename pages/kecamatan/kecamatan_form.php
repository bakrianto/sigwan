<?php
  include_once("koneksi.php");
if(!empty($_GET['id_kecamatan'])){
  $q="SELECT * FROM `kecamatan` WHERE id_kecamatan='$_GET[id_kecamatan]'";
  $data=mysqli_fetch_array(mysqli_query($conn, $q));
  $action="?pg=kecamatan_edit";
}else{
  $action="?pg=kecamatan_tambah";
}
?>
  <div class="row">
      <div class="container">
          <h1 class="page-header">Form tambah/edit kecamatan</h1>
      </div>
  </div>

  <div class="container">
      <div class="panel pull-left"><a class="btn btn-info" href="?pg=kecamatan"><i class="fa fa-chevron-left fa-fw"></i> Kembali</a></div>
  </div>

    <div class="container">
        <form class="form-inline" action="<?=$action?>" method="post">
        <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
            <tr>
              <label style="width: 200px">Area Lokasi</label>
              <input type="text" class="form-control" style="width: 350px" name="nama_kecamatan" placeholder="Kecamatan" value="<?=$data[nama_kecamatan]?>" />
            </tr>
        </div>
        </div>
          <div style="padding-bottom: 30px">
            <tr>
              <td>
                <?php if($_GET['act']=="edit"){ ?>
                <input type="hidden" name="id_kecamatan" value="<?=$data[id_kecamatan]?>" />
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