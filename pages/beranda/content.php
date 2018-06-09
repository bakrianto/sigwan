<?php 
	include 'koneksi.php';
	$queryPuskeswan = "SELECT * FROM puskeswan JOIN kecamatan USING(id_kecamatan) JOIN jam USING (id_jam)";
	$execPuskeswan = mysqli_query($conn, $queryPuskeswan);

	$queryDokter = "SELECT * FROM dokter JOIN kecamatan USING(id_kecamatan) JOIN jam USING (id_jam)";
	$execDokter = mysqli_query($conn, $queryDokter);

	$queryToko = "SELECT * FROM toko JOIN kecamatan USING(id_kecamatan) JOIN jam USING (id_jam)";
	$execToko = mysqli_query($conn, $queryToko);

	$no = 1;
	$data = $_GET['data'];
	if ($data == 'puskeswan') { 
		$namaTabel = 'active'; 
		while ($data = mysqli_fetch_array($execPuskeswan)) {
		?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $data[nama] ?></td>
			<td><?= $data[nama_kecamatan] ?></td>
			<td><?= $data[alamat] ?></td>
			<td><?= $data[jam] ?></td>
		</tr>
		<?php } ?>
<?php	} elseif ($data == 'dokter') { 
		$namaTabel = 'dokter';
		while ($data = mysqli_fetch_array($execDokter)) {
		?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $data[nama] ?></td>
			<td><?= $data[nama_kecamatan] ?></td>
			<td><?= $data[alamat] ?></td>
			<td><?= $data[jam] ?></td>
		</tr>
		<?php } ?>
<?php	} elseif ($data == 'toko') { 
		$namaTabel = 'toko'; 
		while ($data = mysqli_fetch_array($execToko)) {
		?>
		<tr>
			<td><?= $no++ ?></td>
			<td><?= $data[nama] ?></td>
			<td><?= $data[nama_kecamatan] ?></td>
			<td><?= $data[alamat] ?></td>
			<td><?= $data[jam] ?></td>
		</tr>
		<?php } ?>
<?php	}
 ?>