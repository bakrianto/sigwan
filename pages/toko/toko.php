<?php 
session_start();
	include 'koneksi.php';
	$query = 'SELECT id_toko, nama, alamat, no_telp, lintang, bujur, nama_kecamatan, jam, ket FROM toko LEFT JOIN kecamatan ON kecamatan.`id_kecamatan`=toko.`id_kecamatan` LEFT JOIN jam ON jam.`id_jam`=toko.`id_jam`';
	$q = mysqli_query($conn, $query);
?>
<?php if ($_SESSION['level']=='admin') {?>
<div class="row">
    <div class="container">
		<div class="pull-left">
            <h1>Data Toko Obat</h1>			
		</div>
        <hr style="margin-top: 0px; ">
    </div>
    <div class="container"> 
    	<div class="pull-left" style="padding-bottom: 20px"><a class="btn btn-info" href="?pg=toko_form"><i class="fa fa-plus fa-fw"></i> Tambah</a></div>
	</div>
    <div class="container">
        <table class="table table-bordered table-responsive table-striped">
          <tr>
            <th>No</th>
            <th>Nama Toko</th>
            <th>Area Lokasi</th>
            <th>Alamat</th>
            <th>Jam Buka</th>
            <th class="text-center">Aksi</th>
          </tr>
        <?php
        while ($data=mysqli_fetch_assoc($q)){ 
        $i++;?>
          <tr>
            <td><?=$i?></td>
            <td><?=$data["nama"]?></td>
            <td><?=$data["nama_kecamatan"]?></td>
            <td><?=$data["alamat"]?></td>
            <td><?=$data["jam"]?></td>
            <td class="text-center"><a class="btn btn-info" href="?pg=toko_form&act=edit&id_toko=<?=$data["id_toko"]?>"><i class="fa fa-pencil fa-fw"></i> Edit</a>&nbsp;<a class="btn btn-danger" href="?pg=toko_hapus&id_toko=<?=$data["id_toko"]?>"><i class="fa fa-trash-o fa-fw"></i> Hapus</a></td>
          </tr>
        <?php } ?>
        </table>
    </div>
</div>
<?php } else { ?>
	halaman user
<?php } ?>