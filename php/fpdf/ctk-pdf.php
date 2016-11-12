<?php
include "../login.php";
require('fpdf.php');

class PDF extends FPDF
{

function Header()
{
	$this->Image('PJBS-PNG.png',5,6,15);
	$this->SetFont('Arial','B',15);
	$this->Cell(45);
	$this->Cell(20,4,'LAPORAN DATA INVENTARISASI',0,0,'C');
	$this->Ln(10);
}

function Footer()
{
	$this->SetY(-15);
	$this->SetFont('Arial','',8);
	$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');
}

function FancyTable()
{
	
}
}

$pdf = new PDF();
$pdf->AliasNbPages();
$pdf->AddPage();

$tgl = date('d M Y');
$pdf->SetFont('Arial','B',7);
$pdf->SetFillColor(229,229,229);
$pdf->Cell(-6);
$pdf->Cell(8,5,'Tgl.Pengambilan :');
$pdf->Cell(14);
$pdf->Cell(8,5,$tgl);
$pdf->Ln();
$pdf->Cell(-5);
$pdf->Cell(8,5,'NO',1,0,'C',true);
$pdf->Cell(15,5,'CODE',1,0,'C',true);
$pdf->Cell(35,5,'KATEGORI',1,0,'C',true);
$pdf->Cell(30,5,'NAMA BARANG',1,0,'C',true);
$pdf->Cell(30,5,'MERK',1,0,'C',true);
$pdf->Cell(20,5,'KONDISI',1,0,'C',true);
$pdf->Cell(32,5,'RUANG',1,0,'C',true);
$pdf->Cell(30,5,'GEDUNG',1,0,'C',true);
$pdf->Ln();

$ndelok = "SELECT * FROM barang";
$query = mysqli_query($login, $ndelok);
while($jadi = mysqli_fetch_array($query)){

$pdf->SetFont('Arial','',7	);
$pdf->Cell(-5);
$pdf->Cell(8,5,$jadi['no'],1,0,'C');
$pdf->Cell(15,5,$jadi['code'],1,0,'C');
$pdf->Cell(35,5,$jadi['kategori'],1,0,'C');
$pdf->Cell(30,5,$jadi['nm_barang'],1,0,'C');
$pdf->Cell(30,5,$jadi['merk'],1,0,'C');
$pdf->Cell(20,5,$jadi['kds_barang'],1,0,'C');
$pdf->Cell(32,5,$jadi['ruang'],1,0,'C');
$pdf->Cell(30,5,$jadi['gedung'],1,0,'C');
$pdf->Ln();
}

$pdf->Output();
?>

