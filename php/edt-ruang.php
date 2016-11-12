<?php
include "login.php";

	$no = $_GET['no'];
	$code = $_POST['code'];
	$nm_ruang = $_POST['nm_ruang'];

	$insert = "UPDATE ruang
			SET code = '$code',
				nm_ruang = '$nm_ruang'
			WHERE `ruang` . `no` = $no";
$edt_query = mysqli_query($login, $insert);
header("Refresh:0; url=../ruang.php")
?> 