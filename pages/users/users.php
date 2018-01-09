<?php
include_once("koneksi.php");
$q=mysqli_query($conn, "select * from users");
?>
<div class="row">
    <div class="container">
        <div class="pull-left">
            <h1>Daftar Admin</h1>
        </div>
        <hr style="margin-top: 0px; ">
    </div>
    <div class="container">
      <div class="pull-left" style="padding-bottom: 20px;">
          <a class="btn btn-info" href="?pg=users_form"><i class="fa fa-plus fa-fw"></i> Tambah</a>
      </div>
    </div>
    <div class="container">          
        <table class="table table-bordered table-responsive table-striped">
          <tr>
            <th>No</th>
            <th>Nama admin</th>
            <th>Username</th>
            <th>Password</th>
            <th>Aksi</th>
          </tr>
        <?php
        while ($data=mysqli_fetch_assoc($q)){ 
        $i++;?>
          <tr>
            <td><?=$i?></td>
            <td><?=$data["nama_lengkap"]?></td>
            <td><?=$data["username"]?></td>
            <td><?=$data["password"]?></td>
            <td><a class="btn btn-info" href="?pg=users_form&act=edit&id_users=<?=$data["id_users"]?>"><i class="fa fa-pencil fa-fw"></i> Edit</a>&nbsp;
        <a class="btn btn-danger" href="?pg=admin_hapus&id_users=<?=$data["id_users"]?>"><i class="fa fa-trash-o fa-fw"></i>Hapus</a></td>
          </tr>
        <?php } ?>
        </table>
    </div>
</div>