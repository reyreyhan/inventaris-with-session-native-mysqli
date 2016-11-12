<html>
<head>
<link rel="shortcut icon" href="http://www.pjbservices.com/wp-content/themes/pjbs/images/favicon.ico">
<title>Kategori Inventaris</title>
<link rel="stylesheet" type="text/css" href="css/stile.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body>

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
	<li class="active"><a href="kategori.php"><font face="Calibri (Body)" color="ffffff" size="3pt"><span class="fa fa-tasks icon"></span> Kategori </font></a></li>
	<li><a href="barang.php"><font face="Calibri (Body)" size="3pt"><span class="fa fa-briefcase icon"></span> Barang </font></a></li>
	<li><a href="laporan.php"><font face="Calibri (Body)" size="3pt"><span class="fa fa-folder icon"></span> Laporan </font></a></li>
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


<in>
<julin>
	<font color="6bb9f0"> TAMBAH KATEGORI </font>
</julin><br><br>
	<div class="form-wrapper">
		<form method="POST" action="php/smp-kategori.php">
			<div class="form-group">
			 <label >Kategori Barang</label>
			 <input type="text" class="form-control setengah" name="code" placeholder="Code" maxlength="6" required>
			 <input type="text" class="form-control setengah" name="nm_kategori" placeholder="Kategori Barang" maxlength="60" required>
			 <button type="submit" class="btn btn-primary kanan">Submit</button>
			 <a href="kategori.php"><button type="button" value="batal" class="btn btn-inverse kanan">Batal</button></a>
			</div>
		</form>
	</div>			 
</in>

</kotak>
</div>

 <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>