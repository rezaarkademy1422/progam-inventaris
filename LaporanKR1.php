
<?php
// memanggil library FPDF
require('fpdf.php');
// intance object dan memberikan pengaturan halaman PDF
$pdf = new FPDF('p','mm','A4');
// membuat halaman baru
$pdf->AddPage();
// setting jenis font yang akan digunakan
$pdf->SetFont('Arial','B',16);
// mencetak string 
$pdf->Cell(190,7,'DATA KARYAWAN CV DELIMA MANDIRI ',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(190,7,'JL Dreded No.42 Kec. Bogor Selatan ',0,1,'C');
$pdf->Cell(190,7,'Halaman 1',0,1);
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(30,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(28,10,'NIK',1,0,'C');
$pdf->Cell(50,10,'Nama',1,0);
$pdf->Cell(20,10,'Jabatan',1,0,'C');
$pdf->Cell(29,10,'No. KTP',1,0,'C');
$pdf->Cell(25,10,'Tempat.',1,0,'C');
$pdf->Cell(25,10,'Tanggal Lahir',1,1,'C');


 
$pdf->SetFont('Arial','',8);
 
include 'koneksi.php';
$Karyawan = mysqli_query($db, "SELECT * from tbkaryawan");
while ($row = mysqli_fetch_array($Karyawan)){
    $pdf->Cell(28,10,$row['nik'],1,0,'C');
  	$pdf->Cell(50,10,$row['namakaryawan'],1,0);
    $pdf->Cell(20,10,$row['bagian'],1,0,'C');
  	$pdf->Cell(29,10,$row['noktp'],1,0,'C');
    $pdf->Cell(25,10,$row['tempatlahir'],1,0,'C');
  	 $pdf->Cell(25,10,$row['tgllahir'],1,1,'C');
     
  	
}
$pdf->Output();
?>
