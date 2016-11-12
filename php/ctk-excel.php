<?php
	include "login.php";
 
	$ndelok = "SELECT * FROM barang";
	$query = mysqli_query($login, $ndelok);
	$tgl = date('d M Y');
	$content = "
	<h2>LAPORAN DATA INVENTARIS</h2>
	<h4>Tgl.Pengambilan Data : ".$tgl."</h4>
	<table border='1'>
	<tr>
	<th><b>No</b></th>
	<th><b>Code</b></th>
	<th><b>Kategori</b></th>
	<th><b>Nama Barang</b></th>
	<th><b>Merk</b></th>
	<th><b>Deskripsi</b></th>
	<th><b>Kondisi</b></th>
	<th><b>Ruangan</b></th>
	<th><b>Gedung</b></th>
	</tr>";

	while($jadi = mysqli_fetch_array($query)){
		$content .= "
		<tr>
		<td>".$jadi['no']."</td>
		<td>".$jadi['code']."</td>
		<td>".$jadi['kategori']."</td>
		<td>".$jadi['nm_barang']."</td>
		<td>".$jadi['merk']."</td>
		<td>".$jadi['deskripsi']."</td>
		<td>".$jadi['kds_barang']."</td>
		<td>".$jadi['ruang']."</td>
		<td>".$jadi['gedung']."</td>
		</tr>";

	}"</table>";

	header("Content-type: application/x-msdownload");
	header("Content-Disposition: attachment; filename=\"lap_inventaris.xls\"");
	header("Content-Type: application/vnd.ms-excel"); 
	header("Pragma: no-cache");
	header("Expires: 0");
	echo $content;
?>