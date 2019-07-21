
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
$pdf->Cell(190,7,'Halaman 2',0,1);
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(30,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,10,'Jenis K.',1,0,'C');
$pdf->Cell(25,10,'Status Nikah',1,0);
$pdf->Cell(115,10,'Alamat',1,0,'C');
$pdf->Cell(24,10,'No. Hp',1,1,'C');

 
$pdf->SetFont('Arial','',8);
 
include 'koneksi.php';
$Karyawan = mysqli_query($db, "SELECT * from tbkaryawan");
while ($row = mysqli_fetch_array($Karyawan)){
    $pdf->Cell(20,10,$row['jeniskelamin'],1,0,'C');
  	$pdf->Cell(25,10,$row['statusnikah'],1,0,'C');
    $pdf->Cell(115,10,$row['alamat'],1,0,);
  	$pdf->Cell(24,10,$row['nohp'],1,1,'C');
   
  	 
  	
}
$pdf->Output();
?>
