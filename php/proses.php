<?php
include "login.php";
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

$ndelok = "SELECT * FROM user WHERE username='$username' AND password='$password'";
$cek = mysqli_query($login, $ndelok);
$jadi = mysqli_fetch_array($cek);

$_SESSION['username']='$username';

if ($jadi['username']=="$username" && $jadi['level']=="admin"){
	header("location:../home.php");
} else if ($jadi['username']=="$username" && $jadi['level']=="member"){
	header("location:../member/index.php");
} else {
	echo "<script>alert('Maaf, Username atau Password salah')</script>";
	echo "<meta http-equiv='refresh' content='0 url=../index.php'>";
}
?>

