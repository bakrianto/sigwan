<?php
include_once("koneksi.php");
$q=mysqli_query($conn, "SELECT * FROM `puskeswan`");
?>
<?php if ($_SESSION['level']=="admin") {?>
<div class="row">
    <div class="container">
        <div class="pull-left">
            <h1>Data Puskeswan</h1>
        </div>
        <hr style="margin-top: 0px; ">
    </div>
<div class="container">
    <div class="pull-left" style="padding-bottom: 20px"><a class="btn btn-info" href="?pg=puskeswan_form"><i class="fa fa-plus fa-fw"></i> Tambah</a>
    </div>
</div>
    <div class="container">
        <table class="table table-bordered table-responsive table-striped">
          <tr>
            <th>No</th>
            <th>Nama Puskeswan</th>
            <th>Alamat</th>
            <th>Aksi</th>
          </tr>
        <?php
        while ($data=mysqli_fetch_assoc($q)){ 
        $i++;?>
          <tr>
            <td><?=$i?></td>
            <td><?=$data["nama"]?></td>
            <td><?=$data["alamat"]?></td>
            <td><a class="btn btn-warning" href="?pg=puskeswan_tampil&id_puskeswan=<?=$data["id_puskeswan"]?>"><i class="fa fa-search-plus"></i> Detail</a>&nbsp;<a class="btn btn-info" href="?pg=puskeswan_form&act=edit&id_puskeswan=<?=$data["id_puskeswan"]?>"><i class="fa fa-pencil fa-fw"></i> Edit</a>&nbsp;<a class="btn btn-danger" href="?pg=puskeswan_hapus&id_puskeswan=<?=$data["id_puskeswan"]?>"><i class="fa fa-trash-o fa-fw"></i> Hapus</a></td>
          </tr>
        <?php } ?>
        </table>
    </div>
</div>
<?php } ?>