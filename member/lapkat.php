<html>
<head>
<link rel="shortcut icon" href="http://www.pjbservices.com/wp-content/themes/pjbs/images/favicon.ico">
<title> Laporan Kategori</title>
<link rel="stylesheet" type="text/css" href="css/stile.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
</head>
<body>
<div>
 <awak> 

 <div>
    <ndas>
        <img src="gambar/head.png" height="90" width="900">
    </ndas>
</div>

  <div>
   <kotak>
   <judul>
    <font color="ffffff">LAPORAN KATEGORI</font>
    </judul>
    <a href="laporan.php"><button class="btn button"><span class="fa fa-arrow-left"></span> <b>Back</b></button></a>
    <br>
    <br style="margin-bottom: 20px;">
    <div class="table-responsive table-scroll1">
     <table class="table table-condensed">
     	<?php
     	include "../php/login.php"
     	?>
     <tr class="info">
     <td><b>No</b></td>
     <td><b>Code</b></td>
     <td><b>Nama Kategori</b></td>
     </tr>

     <?php
     $ndelok = "SELECT * FROM kategori";
     $query = mysqli_query($login, $ndelok);
     while($jadi = mysqli_fetch_array($query))
     {
     ?>

     <tr>
     <td><?php echo $jadi['no'] ?></td>
     <td><?php echo $jadi['code'] ?></td>
     <td><?php echo $jadi['nm_kategori'] ?></td>
     </tr>
     <?php
     }
     ?>
     </table>
    </div>
   </kotak>
  </div>
 </awak>
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

</div>

<sekel>
<font face="Calibri (Body)" color="000000" size="3pt">&copy; 2016</font>
<font face="Calibri (Body)" color="34495E" size="3pt">by Alvin Cahya P</font>
</sekel>

</body>
</html>