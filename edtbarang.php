<html>
<head>
<link rel="shortcut icon" href="http://www.pjbservices.com/wp-content/themes/pjbs/images/favicon.ico">
<title>Barang Inventaris</title>
<link rel="stylesheet" type="text/css" href="css/stile.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.min.css">

</head>
<body>
<?php
	include "php/login.php";
?> 
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
	<li class="active"><a href="barang.php"><font face="Calibri (Body)" color="ffffff" size="3pt"><span class="fa fa-briefcase icon"></span> Barang </font></a></li>
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
	<font color="6bb9f0"> TAMBAH BARANG </font>
</julin><br><br>
	<div class="form-wrapper">
		<?php

			$no = $_GET['no'];
			$ndelok = "SELECT * FROM barang WHERE no = $no";
			$query = mysqli_query($login, $ndelok);
			$jadi = mysqli_fetch_array($query);

			$no = $jadi['no'];
			$code = $jadi['code'];
			$kategori = $jadi['kategori'];
			$nm_barang = $jadi['nm_barang'];
			$merk = $jadi['merk'];
			$deskripsi = $jadi['deskripsi'];
			$ruang = $jadi['ruang'];
			$gedung = $jadi['gedung'];
			$kds_barang = $jadi['kds_barang']; 

		?>

		<form method="POST" action="php/edt-barang.php?no=<?php echo $jadi['no']; ?>">
		
		<div class="form-group">
		<label class="hidden"> code </label>
		<input type="text" value="<?php echo $jadi['code']; ?>" class="form-control seperempat" name="code" placeholder="Code" maxlength="6" required>
		</div>

		<div class="form-group">
		<label class="hidden"> Kategori </label>
		<select name="nm_kategori" class="form-control seperempat">
		<option value="<?php echo $jadi['kategori']; ?>" selected hidden disable><?php echo $jadi['kategori']; ?></option>
		<?php 

			$ndelok = "SELECT * FROM kategori";
			$query = mysqli_query($login, $ndelok);
			while($kategori = mysqli_fetch_array($query))
			{
		?>
		<option value="<?php echo $kategori['nm_kategori']; ?>"><?php echo $kategori['nm_kategori']; ?></option>
		<?php
			}
		?>
		</select>
		</div>
		
		<div class="form-group">
		<label class="hidden"> Nama Barang </label>
		<input type="text" value="<?php echo $jadi['nm_barang']; ?>" class="form-control seperempat" name="nm_barang" placeholder="Nama Barang" maxlength="60" required></input>
		</div>

		<div class="form-group">
		<label class="hidden"> Merk </label>
		<input type="text" value="<?php echo $jadi['merk']; ?>" class="form-control seperempat" name="merk" placeholder="Merk" maxlength="60" required></input>
		</div>

		<div class="form-group">
		<label class="hidden"> Deskripsi </label>
		<textarea type="text" class="form-control deskripsi" name="deskripsi" placeholder="Deskripsi" maxlength="300" required><?php echo $jadi['deskripsi']; ?></textarea>
		</div>

		<div class="form-group">
		<label class="hidden"> Ruang </label>
		<select name="nm_ruang" class="form-control seperempat" >
		<option value="<?php echo $jadi['ruang']; ?>" selected hidden disable><?php echo $jadi['ruang']; ?></option>
		<?php 

			$ndelok = "SELECT * FROM ruang";
			$query = mysqli_query($login, $ndelok);
			while($ruang = mysqli_fetch_array($query))
			{
		?>
		<option value="<?php echo $ruang['nm_ruang']; ?>"><?php echo $ruang['nm_ruang']; ?></option>
		<?php
			}
		?>
		</select>
		</div>

		<div class="form-group">
		<label class="hidden"> Gedung </label>
		<select name="nm_gedung" class="form-control seperempat" >
		<option value="<?php echo $jadi['gedung'];?>" selected hidden disable><?php echo $jadi['gedung'];?></option>
		<?php 

			$ndelok = "SELECT * FROM gedung";
			$query = mysqli_query($login, $ndelok);
			while($gedung = mysqli_fetch_array($query))
			{
		?>
		<option value="<?php echo $gedung['nm_gedung']; ?>"><?php echo $gedung['nm_gedung']; ?></option>
		<?php
			}
		?>
		</select>
		</div>
		
		<div class="form-group">
		<label>Kondisi Barang</label><br>
		<input class=" from-control" type="radio" name="kds_barang" value="BAIK"> Baik </input><br>
		<input type="radio" name="kds_barang" value="RUSAK"> Rusak </input><br>
		<input type="radio" name="kds_barang" value="RUSAK-RINGAN"> Rusak Ringan </input><br>
		<button type="submit" value="simpan" class="btn btn-primary setengah-kanan">Submit</button>
		<a href="barang.php"><button type="button" value="batal" class="btn btn-inverse setengah-kanan">Batal</button></a>
		</div>
		</form>	
	</div>
</in>

</kotak>
</div>


</body>
 <script src="js/jquery.min.js"></script>
<script src="js/bootstrap.js"></script>
<script src="js/bootstrap.min.js"></script>
</html>