
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
$pdf->Cell(290,7,'DATA TRANSAKSI LAPTOP CV DELIMA MANDIRI ',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(290,7,'JL Dreded No.42 Kec. Bogor Selatan ',0,1,'C');
$pdf->Cell(290,7,'Halaman 1',0,1);

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(30,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(30,10,'Tgl. Peminjaman',1,0,'C');
$pdf->Cell(25,10,'Kd. Barang',1,0,'C');
$pdf->Cell(25,10,'Merk',1,0,'C');
$pdf->Cell(30,10,'Type',1,0,'C');
$pdf->Cell(40,10,'S. Number',1,0,'C');
$pdf->Cell(22,10,'Status',1,0,'C');
$pdf->Cell(45,10,'Keterangan',1,0,'C');
$pdf->Cell(20,10,'NIK',1,0,'C');
$pdf->Cell(35,10,'Peminjaman',1,1,'C');



 
$pdf->SetFont('Arial','',8);
 
include 'koneksi.php';
$tslpt = mysqli_query($db, "SELECT * from tbtransaksilaptop");
while ($row = mysqli_fetch_array($tslpt)){
    $pdf->Cell(30,10,$row['tglpeminjaman'],1,0,'C');
  	$pdf->Cell(25,10,$row['kodebarang'],1,0,'C');
    $pdf->Cell(25,10,$row['merk'],1,0,'C');
  	$pdf->Cell(30,10,$row['type'],1,0,'C');
    $pdf->Cell(40,10,$row['sn'],1,0,'C');
  	$pdf->Cell(22,10,$row['status'],1,0,'C');
  	$pdf->Cell(45,10,$row['keterangan'],1,0,'C');
    $pdf->Cell(20,10,$row['noid'],1,0,'C');
    $pdf->Cell(35,10,$row['nama'],1,1,'C');

     
  	
}
$pdf->Output();
?>
