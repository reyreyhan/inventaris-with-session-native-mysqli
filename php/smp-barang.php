<?php
include "login.php";

$code = $_POST['code'];
$kategori = $_POST['nm_kategori'];
$nm_barang = $_POST['nm_barang'];
$merk = $_POST['merk'];
$deskripsi = $_POST['deskripsi'];
$ruang = $_POST['nm_ruang'];
$gedung = $_POST['nm_gedung'];
$kds_barang = $_POST['kds_barang'];

$insert = "INSERT INTO barang (code, kategori, nm_barang, merk, deskripsi, ruang, gedung, kds_barang) 
VALUES ('$code', '$kategori', '$nm_barang', '$merk', '$deskripsi', '$ruang', '$gedung', '$kds_barang');";

$insert_query = mysqli_query($login, $insert);


/*if ($insert_query)
{
	echo "data berhasil masuk";
}

else {
	echo"gagal bos";
} 
*/
header("Refresh:0; url=../barang.php")
?>