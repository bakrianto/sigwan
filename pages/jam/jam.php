<?php
include_once("koneksi.php");
$q=mysqli_query($conn, "SELECT * FROM jam");
?>

<div class="row">
<div class="container">
    <div class="pull-left">
        <h1>Data jam</h1>
    </div>
    <hr style="margin-top: 0px; ">
</div>
<div class="container">
    <div class="pull-left" style="padding-bottom: 20px"><a class="btn btn-info" href="?pg=jam_form"><i class="fa fa-plus fa-fw"></i> Tambah</a>
    </div>
</div>
<div class="container">
    <table class="table table-striped table-responsive table-bordered">
      <tr>
        <th>No</th>
        <th>Jam Buka</th>
        <th class="text-center">Aksi</th>
      </tr>
    <?php
    $i = 1;
    while ($data=mysqli_fetch_assoc($q)){ 
    ?>
      <tr>
        <td><?=$i++; ?></td>
        <td><?=$data["jam"]?></td>
        <td class="text-center"><a class="btn btn-info" href="?pg=jam_form&act=edit&id_jam=<?=$data["id_jam"]?>"><i class="fa fa-pencil fa-fw"></i> Edit</a>&nbsp;
    <a class="btn btn-danger" href="?pg=jam_hapus&id_jam=<?=$data["id_jam"]?>"><i class="fa fa-trash-o fa-fw"></i>Hapus</a></td>
      </tr>
    <?php } ?>
    </table>
</div>
</div>
