<?php 
	include 'koneksi.php';
	$menu = $_GET['data'];
	$menuPus = (  $menu == 'puskeswan' ? 'active' : '' );
	$menuDok = (  $menu == 'dokter' ? 'active' : '' );
	$menuTok = (  $menu == 'toko' ? 'active' : '' );
 ?>
<style>
	.tabel {
		padding: 3%;
		width: 90%;
		margin-left: 5%;
	}
</style>
<div class="row">
	<div class="row text-center" style="padding-top: 3%;">
		<div class="col-xs-8 col-sm-4" align="center">
		  <div style="width: 200px; height: auto; background-color: #74bdff; border-radius: 5px;">
		  	<?php 
		  		$queryJmlPus = "SELECT COUNT(id_puskeswan) AS jml FROM puskeswan";
		  		$exec = mysqli_query($conn, $queryJmlPus);
		  		if ($data = mysqli_fetch_array($exec)) {
		  			echo "<h1><strong>".$data[jml]."</strong></h1>";
		  		}
		  	 ?>
		  
		  <h4>Puskeswan</h4>
		  <a href="?pg=puskeswan"><span class="text-muted">Selengkapnya >></span></a>
		  </div>
		</div>
		<div class="col-xs-8 col-sm-4" align="center">
		  <div style="width: 200px; height: auto; background-color: #ffddcf; border-radius: 5px;">
		  	<?php 
		  		$queryJmlDok = "SELECT COUNT(id_dokter) AS jml FROM dokter";
		  		$exec = mysqli_query($conn, $queryJmlDok);
		  		if ($data = mysqli_fetch_array($exec)) {
		  			echo "<h1><strong>".$data[jml]."</strong></h1>";
		  		}
		  	 ?>
		  
		  <h4>Dokter</h4>
		  <a href="?pg=dokter"><span class="text-muted">Selengkapnya >></span></a>
		  </div>
		</div>
		<div class="col-xs-8 col-sm-4" align="center">
		  <div style="width: 200px; height: auto; background-color: #add3a2; border-radius: 5px;">
		  	<?php 
		  		$queryJmlTok = "SELECT COUNT(id_toko) AS jml FROM toko";
		  		$exec = mysqli_query($conn, $queryJmlTok);
		  		if ($data = mysqli_fetch_array($exec)) {
		  			echo "<h1><strong>".$data[jml]."</strong></h1>";
		  		}
		  	 ?>
		  
		  <h4>Toko</h4>
		  <a href="?pg=toko"><span class="text-muted">Selengkapnya >></span></a>
		  </div>
		</div>
	</div>
	<section id="tabBeranda">
	<div class="tabel">
	<h2 class="sub-header" style="padding-left: 10px;">Tabel <?php echo $_GET['data']; ?></h2>
	<ul class="nav nav-tabs">
	  <li role="presentation" class="<?php echo $menuPus; ?>"><a href="?pg=beranda&data=puskeswan"> Puskeswan </a></li>
	  <li role="presentation" class="<?php echo $menuDok; ?>"><a href="?pg=beranda&data=dokter"> Dokter </a></li>
	  <li role="presentation" class="<?php echo $menuTok; ?>"><a href="?pg=beranda&data=toko"> Toko </a></li>
	</ul>
          <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>No. </th>
                  <th>Nama</th>
                  <th>Area</th>
                  <th>Alamat</th>
                  <th>Jam Buka</th>
                </tr>
              </thead>
              <tbody>
            		<?php include 'content.php'; ?>
              </tbody>
            </table>
          </div>
    </div>
    </section>
</div>
