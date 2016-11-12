<html>
<head> 
<link rel="shortcut icon" href="http://www.pjbservices.com/wp-content/themes/pjbs/images/favicon.ico">
<title> Inventarisasi </title>
<link rel="stylesheet" type="text/css" href="css/stile.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
 
<body>

<?php
session_start();
if (empty($_SESSION['username'])) {
	header("location:../index.php");
}
?>

<div> 
<awak>
<img src="../gambar/home.png" width="1366" height="575">
</awak>

<div>
	<ndas>
		<img src="gambar/head.png" height="90" width="900">
	</ndas>
</div>

<div>
		<nav>
		<ul><table>
			<tr>
			<td><li><a href="index.php"><font face="calibri (body)" size="5">Home</font></a></li></td>
			<td><li><a href="laporan.php"><font face="calibri (body)" size="5">Laporan</font></a></li></td>
			<td><li><a href="logout.php"><span class="glyphicon glyphicon-log-out"><font face="calibri (body)" size="5"> Logout</font></span></a></li></td>
			</tr>
		</ul></table>
		</nav>
</div>

<sekel>
<font face="Calibri (Body)" color="000000" size="3pt" align="left">&copy; 2016</font>
<font face="Calibri (Body)" color="34495E" size="3pt" align="left">by Alvin Cahya P</font>
</sekel>

</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>