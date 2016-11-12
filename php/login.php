<?php
$host = "localhost";
$user = "root";
$pass = "";
$db	  = "inventaris_db";

$login = mysqli_connect ($host, $user, $pass);
$select_db = mysqli_select_db ($login, $db);

/*if ($login && $select_db) {
	echo "Conect";
} else {
	echo "Disconet";
}*/
?>