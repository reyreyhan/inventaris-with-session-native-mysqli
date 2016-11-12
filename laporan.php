<html>
<head>
<link rel="shortcut icon" href="http://www.pjbservices.com/wp-content/themes/pjbs/images/favicon.ico">
<title>Laporan Inventaris</title>
<link rel="stylesheet" type="text/css" href="css/stile.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body bgcolor="f2f2f2">

<div>
<kotak>

<sekel>
<font face="Calibri (Body)" color="000000" size="3pt" align="left">&copy; 2016</font>
<font face="Calibri (Body)" color="34495E" size="3pt" align="left">by Alvin Cahya P</font>
</sekel>

<nav>
<ul>
	<li><a href="home.php"><font face="Calibri (Body)" size="3pt"><span class="fa fa-home icon"></span> Home </font></a></li>
	<li><a href="user.php"><font face="Calibri (Body)" size="3pt"><span class="fa fa-user icon"></span> User </font></a></li>
	<li><a href="gedung.php"><font face="Calibri (Body)" size="3pt"><span class="fa fa-building icon"></span> Gedung </font></a></li>
	<li><a href="ruang.php"><font face="Calibri (Body)" size="3pt"><span class="glyphicon glyphicon-object-align-bottom icon"></span> Ruang </font></a></li>
	<li><a href="kategori.php"><font face="Calibri (Body)" size="3pt"><span class="fa fa-tasks icon"></span> Kategori </font></a></li>
	<li><a href="barang.php"><font face="Calibri (Body)" size="3pt"><span class="fa fa-briefcase icon"></span> Barang </font></a></li>
	<li class="active"><a href="laporan.php"><font face="Calibri (Body)" color="ffffff" size="3pt"><span class="fa fa-folder icon"></span> Laporan </font></a></li>
</ul>
</nav>

<div>
	<ndas>
		<img src="gambar/head.png" height="50" width="500"></img>
		<div>
	 	<out>
	 	<a href="php/logout.php"><center>
	 	<span class="glyphicon glyphicon-log-out">
	 	<font face="calibri (Body)" size="4"> 
	 	<b>Logout</b>
	 	</font>
	 	</span>
	 	</a></center>
	 	</out>
	 </div>
	</ndas>
</div>

<awak>
<judul>
	<font color="6bb9f0"> LAPORAN </font>
</judul><br>
<br style="margin-bottom: 20px;">
<div class="table-responsive table-scroll">
<table class="table table-condensed">
	<?php
	include "php/login.php";
	?>

	<font face="calibri (body)">
	<tr class="info">
	<td><b>No</b></td>
	<td><b>Code</b></td>
	<td><b>Kategori</b></td>
	<td><b>Nama Barang</b></td>
	<td><b>Merk</b></td>
	<td><b>Deskripsi</b></td>
	<td><b>Kondisi</b></td>
	<td><b>Ruangan</b></td>
	<td><b>Gedung</b></td>
	</tr>
	</font>

	<?php
	$ndelok = "SELECT * FROM barang";
	$query = mysqli_query($login, $ndelok);
	while($jadi = mysqli_fetch_array($query))
	{
	?>
		<tr>
		<td><?php echo $jadi['no']?></td>
		<td><?php echo $jadi['code']?></td>
		<td><?php echo $jadi['kategori']?></td>
		<td><?php echo $jadi['nm_barang']?></td>
		<td><?php echo $jadi['merk']?></td>
		<td><?php echo $jadi['deskripsi']?></td>
		<td><?php echo $jadi['kds_barang']?></td>
		<td><?php echo $jadi['ruang']?></td>
		<td><?php echo $jadi['gedung'];?></td>
		</tr>
	<?php
	}
	?>
</table>
</div>
<br>
<div><center>
	<a href="php/ctk-excel.php"><button class="btn"> Cetak Excel </button></a>
	<a href="php/fpdf/ctk-pdf.php" target="_blank"><button class="btn"> Cetak Pdf </button></a>
</div></center>
</awak>

</kotak>
</div>


</body>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>