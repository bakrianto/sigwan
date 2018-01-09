<?php
include_once("koneksi.php");
$q=mysqli_query($conn, "SELECT * FROM `dokter`");
?>

<div class="row">
<div class="container">
    <div class="pull-left">
        <h1>Data Dokter</h1>
    </div>
    <hr style="margin-top: 0px; ">
</div>
<div class="container">
    <div class="pull-left" style="padding-bottom: 20px"><a class="btn btn-info" href="?pg=dokter_form"><i class="fa fa-plus fa-fw"></i> Tambah</a>
    </div>
</div>
<div class="container">
    <table class="table table-striped table-responsive table-bordered">
      <tr>
        <th>No</th>
        <th>Nama Dokter</th>
        <th>Alamat</th>
        <th>Aksi</th>
      </tr>
    <?php
    while ($data=mysqli_fetch_assoc($q)){ 
    $i++;?>
      <tr>
        <td><?=$data["id_dokter"]?></td>
        <td><?=$data["nama"]?></td>
        <td><?=$data["alamat"]?></td>
        <td><a class="btn btn-warning" href="?pg=dokter_tampil&id=<?=$data["id_dokter"]?>"><i class="fa fa-search-plus"></i> Detail</a>&nbsp;<a class="btn btn-info" href="?pg=dokter_form&act=edit&id_dokter=<?=$data["id_dokter"]?>"><i class="fa fa-pencil fa-fw"></i> Edit</a>&nbsp;
    <a class="btn btn-danger" href="?pg=dokter_hapus&id_dokter=<?=$data["id_dokter"]?>"><i class="fa fa-trash-o fa-fw"></i>Hapus</a></td>
      </tr>
    <?php } ?>
    </table>
</div>
</div>
