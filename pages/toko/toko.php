<?php 
session_start();
	include 'koneksi.php';
	$query = 'SELECT * FROM toko';
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
            <th>Alamat</th>
            <th class="text-center">Aksi</th>
          </tr>
        <?php
        while ($data=mysqli_fetch_assoc($q)){ 
        $i++;?>
          <tr>
            <td><?=$i?></td>
            <td><?=$data["nama"]?></td>
            <td><?=$data["alamat"]?></td>
            <td class="text-center"><a class="btn btn-warning" href="?pg=toko_tampil&id_toko=<?=$data["id_toko"]?>" title=""><i class="fa fa-search-plus"></i> Detail</a>&nbsp;<a class="btn btn-info" href="?pg=toko_form&act=edit&id_toko=<?=$data["id_toko"]?>"><i class="fa fa-pencil fa-fw"></i> Edit</a>&nbsp;<a class="btn btn-danger" href="?pg=toko_hapus&id_toko=<?=$data["id_toko"]?>"><i class="fa fa-trash-o fa-fw"></i> Hapus</a></td>
          </tr>
        <?php } ?>
        </table>
    </div>
</div>
<?php } else { ?>
	halaman user
<?php } ?>