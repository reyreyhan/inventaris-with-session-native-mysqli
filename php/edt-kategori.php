<?php
include "login.php";

	$no = $_GET['no'];
	$code = $_POST['code'];
	$nm_kategori = $_POST['nm_kategori'];

	$insert = "UPDATE kategori
			SET code = '$code',
				nm_kategori = '$nm_kategori'
			WHERE `kategori` . `no` = $no";
$edt_query = mysqli_query($login, $insert);
header("Refresh:0; url=../kategori.php")
?>