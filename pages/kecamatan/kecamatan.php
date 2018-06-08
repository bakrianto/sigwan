<?php
include_once("koneksi.php");
$q=mysqli_query($conn, "SELECT * FROM kecamatan");
?>

<div class="row">
<div class="container">
    <div class="pull-left">
        <h1>Data kecamatan</h1>
    </div>
    <hr style="margin-top: 0px; ">
</div>
<div class="container">
    <div class="pull-left" style="padding-bottom: 20px"><a class="btn btn-info" href="?pg=kecamatan_form"><i class="fa fa-plus fa-fw"></i> Tambah</a>
    </div>
</div>
<div class="container">
    <table class="table table-striped table-responsive table-bordered">
      <tr>
        <th>No</th>
        <th>Nama kecamatan</th>
        <th class="text-center">Aksi</th>
      </tr>
    <?php
    $i = 1;
    while ($data=mysqli_fetch_assoc($q)){ 
    ?>
      <tr>
        <td><?=$i++;?></td>
        <td><?=$data["nama_kecamatan"]?></td>
        <td class="text-center"><a class="btn btn-info" href="?pg=kecamatan_form&act=edit&id_kecamatan=<?=$data["id_kecamatan"]?>"><i class="fa fa-pencil fa-fw"></i> Edit</a>&nbsp;
    <a class="btn btn-danger" href="?pg=kecamatan_hapus&id_kecamatan=<?=$data["id_kecamatan"]?>"><i class="fa fa-trash-o fa-fw"></i>Hapus</a></td>
      </tr>
    <?php } ?>
    </table>
</div>
</div>
