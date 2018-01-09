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
  <div class="row">
      <form class="form" action="<?=$action?>" method="post">
        <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
	          <tr>
	            <label style="width: 200px">Nama Puskeswan</label>
	            <input type="text" class="form-control" style="width: 350px" name="nama" placeholder="Nama Tamu" value="<?=$data[nama]?>" />
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
          <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
          <tr>
            <label style="width: 200px">No. Telephone</label>
            <input type="text" class="form-control" style="width: 350px" name="no_telp" placeholder="No. Telephone" value="<?=$data[no_telp]?>" />
          </tr>
          </div>
          </div>
          <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
          <tr>
            <label style="width: 200px">Garis Lintang</label>
            <textarea class="form-control" style="width: 350px" rows="3" placeholder="lintang" name="lintang"><?=$data[lintang]; ?></textarea>
          </tr>
          </div>
          </div>
          <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
          <tr>
            <label style="width: 200px">Garis Bujur</label>
            <textarea class="form-control" style="width: 350px" rows="3" placeholder="bujur" name="bujur"><?=$data[bujur]; ?></textarea>
          </tr>
          </div>
          </div>
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