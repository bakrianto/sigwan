<?php
include_once("koneksi.php");
$q=mysqli_query($conn, "SELECT id_dokter, nama, alamat, no_telp, lintang, bujur, nama_kecamatan, jam, ket FROM dokter LEFT JOIN kecamatan ON kecamatan.`id_kecamatan`=dokter.`id_kecamatan` LEFT JOIN jam ON jam.`id_jam`=dokter.`id_jam`");
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
        <th>Area Lokasi</th>
        <th>Alamat</th>
        <th>Jam Buka</th>
        <th class="text-center">Aksi</th>
      </tr>
    <?php
    while ($data=mysqli_fetch_assoc($q)){ 
    $i++;?>
      <tr>
        <td><?=$data["id_dokter"]?></td>
        <td><?=$data["nama"]?></td>
        <td><?=$data["nama_kecamatan"]?></td>
        <td><?=$data["alamat"]?></td>
        <td><?=$data["jam"]?></td>
        <td class="text-center"><a class="btn btn-info" href="?pg=dokter_form&act=edit&id_dokter=<?=$data["id_dokter"]?>"><i class="fa fa-pencil fa-fw"></i> Edit</a>&nbsp;
    <a class="btn btn-danger" href="?pg=dokter_hapus&id_dokter=<?=$data["id_dokter"]?>"><i class="fa fa-trash-o fa-fw"></i>Hapus</a></td>
      </tr>
    <?php } ?>
    </table>
</div>
</div>
