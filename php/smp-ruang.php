<?php
include "login.php";

$code = $_POST['code'];
$nm_ruang = $_POST['nm_ruang'];

$insert = "INSERT INTO ruang (code, nm_ruang) VALUES ('$code', '$nm_ruang');";

$insert_query = mysqli_query($login, $insert);

/*
if ($insert_query)
{
	echo "data berhasil masuk";
}

else {
	echo"gagal bos";
} */

header("Refresh:0; url=../ruang.php")
?>