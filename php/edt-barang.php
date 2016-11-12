<?php
include "login.php";

	$no = $_GET['no'];
	$code = $_POST['code'];
	$kategori = $_POST['nm_kategori'];
	$nm_barang = $_POST['nm_barang'];
	$merk = $_POST['merk'];
	$deskripsi = $_POST['deskripsi'];
	$ruang = $_POST['nm_ruang'];
	$gedung = $_POST['nm_gedung'];
	$kds_barang = $_POST['kds_barang'];

	$insert = "UPDATE barang
			SET code = '$code',
				kategori = '$kategori',
				nm_barang = '$nm_barang',
				merk = '$merk',
				deskripsi = '$deskripsi',
				ruang = '$ruang',
				gedung = '$gedung',
				kds_barang = '$kds_barang'
			WHERE `barang`.`no` = $no";
$edt_query = mysqli_query($login, $insert);

/*if($edt_query)
{
	echo "data berhasil masuk";
}
else{
	echo"gagal bos";
}  */
header("Refresh:0; url=../barang.php")
?>