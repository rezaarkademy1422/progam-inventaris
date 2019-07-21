
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
$pdf->Cell(250,7,'DATA Stok Barang CV DELIMA MANDIRI',0,1,'C');
$pdf->SetFont('Arial','B',12);
$pdf->Cell(250,7,'JL Dreded No.42 Kec. Bogor Selatan ',0,1,'C');
 
// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(30,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(25,10,'Kode Barang ',1,0,'C');
$pdf->Cell(60,10,'Nama',1,0,'C');
$pdf->Cell(25,10,'Jenis',1,0,'C');
$pdf->Cell(25,10,'Ukuran',1,0,'C');
$pdf->Cell(25,10,'Satuan',1,0,'C');
$pdf->Cell(25,10,'Stok Awal',1,1,'C');
 
$pdf->SetFont('Arial','',8);
 
include 'koneksi.php';
$stok = mysqli_query($db, "SELECT * from tbstokbarang");
while ($row = mysqli_fetch_array($stok)){
    $pdf->Cell(25,10,$row['kodebarang'],1,0,'C');
  	$pdf->Cell(60,10,$row['nama'],1,0,'C');
  	$pdf->Cell(25,10,$row['jenis'],1,0,'C');
    $pdf->Cell(25,10,$row['ukuran'],1,0,'C');
  	$pdf->Cell(25,10,$row['satuan'],1,0,'C');
 	$pdf->Cell(25,10,$row['stockawal'],1,1);
   
}
$pdf->Output();
?>
