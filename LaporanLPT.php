
<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('l','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(250,7,'DATA Laptop CV DELIMA MANDIRI',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(250,7,'JL Dreded No.42 Kec. Bogor Selatan ',0,1,'C');
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(30,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,10,'Kode ',1,0,'C');
$pdf->Cell(30,10,'Merk',1,0,'C');
$pdf->Cell(35,10,'type',1,0,'C');
$pdf->Cell(55,10,'Serial Number',1,0,'C');
$pdf->Cell(25,10,'Status',1,0,'C');
$pdf->Cell(85,10,'Ket.',1,1,'C');
 
$pdf->SetFont('Arial','',8);
 
include 'koneksi.php';
$laptop = mysqli_query($db, "SELECT * from tblaptop");
while ($row = mysqli_fetch_array($laptop)){
    $pdf->Cell(25,10,$row['kodebarang'],1,0,'C');
  	$pdf->Cell(30,10,$row['merk'],1,0,'C');
  	$pdf->Cell(35,10,$row['type'],1,0,'C');
    $pdf->Cell(55,10,$row['sn'],1,0,'C');
  	$pdf->Cell(25,10,$row['status'],1,0,'C');
 	$pdf->Cell(85,10,$row['keterangan'],1,1	);
   
}
$pdf->Output();
?>
