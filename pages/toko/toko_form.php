<?php
  include_once("koneksi.php");
if(!empty($_GET['id_toko'])){
  $base_url = "http://localhost/sig_sekolah/";
  $q="SELECT * FROM `toko` WHERE id_toko='$_GET[id_toko]'";
  $data=mysqli_fetch_array(mysqli_query($conn, $q));
  $action="?pg=toko_edit";
}else{
  $action="?pg=toko_tambah";
}
?>

<div class="row">
    <div class="container">
        <h1 class="page-header">Tambah Data Toko Puskeswan</h1>
    </div>
</div>
<div class="container">
  <div class="row">
      <form class="form" action="<?=$action?>" method="post" enctype="multipart/form-data">
        <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
	          <tr>
	            <label style="width: 200px">Nama</label>
	            <input type="text" class="form-control" style="width: 350px" name="nama" placeholder="Nama Toko" value="<?=$data[nama]?>" />
	          </tr>
	      </div>
        </div>
        <div class="form-inline" style="padding-bottom: 10px">
        <div class="form-group">
          <tr>
            <label style="width: 200px">Alamat</label>
            <input type="text" class="form-control" style="width: 350px" name="alamat" placeholder="Alamat Toko" value="<?=$data[alamat]?>" />
        </tr>
        </div>
        </div>
<!--           <div class="form-inline" style="padding-bottom: 10px">
          <div class="form-group">
          <tr>
            <label style="width: 200px">Struktural</label>
            <select name="struk" class="form-control">
              <option>-- Pilih --</option>}
              <option>Komite</option>
              <option>Organisasi</option>
              <option>Yayasan</option>}
            </select>
          </tr>
          </div>
          </div> -->
        <div class="form-inline" style="padding-bottom: 10px">
        <div class="form-group">
        <tr>
          <label style="width: 200px">No. Telephone</label>
          <input type="text" class="form-control" style="width: 350px" name="no_telp" placeholder="No. Telephone" value="<?=$data[no_telp]?>" />
        </tr>
        </div>
        </div>
<!--         <div class="form-inline" style="padding-bottom: 10px">
        <div class="form-group">
          <tr>
            <label style="width: 200px">Foto</label>
            <input type="file" class="form-control" name="foto">
            <div style="margin-left: 205px">
              <span><img style="width:150px" src="<?=$base_url."/images/anggota/".$data[pict]?>"></span>
            </div>
          </tr>
        </div>
        </div> -->
        <div class="form-inline" style="padding-bottom: 10px">
        <div class="form-group">
        <tr>
          <label style="width: 200px">Garis Lintang</label>
          <input type="text" class="form-control" style="width: 350px" name="lintang" placeholder="Garis Lintang" value="<?=$data[lintang]?>" />
        </tr>
        </div>
        </div>
        <div class="form-inline" style="padding-bottom: 10px">
        <div class="form-group">
        <tr>
          <label style="width: 200px">Garis Bujur</label>
          <input type="text" class="form-control" style="width: 350px" name="bujur" placeholder="Garis Bujur" value="<?=$data[bujur]?>" />
        </tr>
        </div>
        </div>
        <div class="form-inline" style="padding-bottom: 10px">
        <div class="form-group">
        <tr>
          <label style="width: 200px">Keterangan</label>
          <input type="text" class="form-control" style="width: 350px" name="ket" placeholder="Keterangan" value="<?=$data[ket]?>" />
        </tr>
        </div>
        </div>
          <tr>
            <td>
              <?php if($_GET['act']=="edit"){ ?>
              <input type="hidden" name="id_toko" value="<?=$data[id_toko]?>" />
              <?php } ?>
            </td>
            <td>
              <button type="submit" class="btn btn-info"><i class="fa fa-save fa-fw"></i> Simpan</button> &nbsp;<button type="reset" class="btn btn-danger"><i class="fa fa-undo"></i> Batal</button> 
            </td>
          </tr>
      </form>
  </div>
</div>