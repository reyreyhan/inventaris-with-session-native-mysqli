<?php
include "login.php";

$code = $_POST['code'];
$nm_gedung = $_POST['nm_gedung'];

$insert = "INSERT INTO gedung (code, nm_gedung) VALUES ('$code', '$nm_gedung');";

$insert_query = mysqli_query($login, $insert);

/*
if ($insert_query)
{
	echo "data berhasil masuk";
}

else {
	echo"gagal bos";
} */

header("Refresh:0; url=../gedung.php")
 ?>