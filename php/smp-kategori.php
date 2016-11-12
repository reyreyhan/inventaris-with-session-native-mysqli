<?php
include "login.php";

$code = $_POST['code'];
$nm_kategori = $_POST['nm_kategori'];

$insert = "INSERT INTO kategori (code, nm_kategori) VALUES ('$code', '$nm_kategori');";

$insert_query = mysqli_query($login, $insert);

/*
if ($insert_query)
{
	echo "data berhasil masuk";
}

else {
	echo"gagal bos";
} */

header("Refresh:0; url=../kategori.php")
?>