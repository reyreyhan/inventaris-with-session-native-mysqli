<?php
include "login.php";

	$no = $_GET['no'];
	$code = $_POST['code'];
	$nm_gedung = $_POST['nm_gedung'];

	$insert = "UPDATE gedung
			SET code = '$code',
				nm_gedung = '$nm_gedung'
			WHERE `gedung` . `no` = $no";
$edt_query = mysqli_query($login, $insert);
header("Refresh:0; url=../gedung.php")
?>