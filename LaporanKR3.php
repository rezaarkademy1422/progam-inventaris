
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
$pdf->Cell(190,7,'Halaman 3',0,1);
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(30,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,10,'Pend. Terakhir',1,0,'C');
$pdf->Cell(30,10,'Jurusan',1,0,'C');
$pdf->Cell(35,10,'Tanggal Masuk',1,0,'C');
$pdf->Cell(35,10,'Tanggal Keluar',1,1,'C');


 
$pdf->SetFont('Arial','',8);
 
include 'koneksi.php';
$Karyawan = mysqli_query($db, "SELECT * from tbkaryawan");
while ($row = mysqli_fetch_array($Karyawan)){
	 $pdf->Cell(30,10,$row['pendidikanakhir'],1,0,'C');
    $pdf->Cell(30,10,$row['jurusan'],1,0,'C');
  	$pdf->Cell(35,10,$row['tglmulaikerja'],1,0,'C');
    $pdf->Cell(35,10,$row['tglkeluar'],1,1,'C');

  	 
  	
}
$pdf->Output();
?>
