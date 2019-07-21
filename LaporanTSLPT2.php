
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
$pdf->Cell(290,7,'Halaman 2',0,1);

// Memberikan space kebawah agar tidak terlalu rapat
$pdf->Cell(30,7,'',0,1);

$pdf->SetFont('Arial','B',10);
$pdf->Cell(20,10,'Jabatan',1,0,'C');
$pdf->Cell(20,10,'Pend Akhir',1,0,'C');
$pdf->Cell(20,10,'J. Kelamin',1,0,'C');
$pdf->Cell(28,10,'TTL',1,0,'C');
$pdf->Cell(108,10,'Alamat',1,0,'C');
$pdf->Cell(18,10,'Thn Msk',1,0,'C');
$pdf->Cell(25,10,'No Hp',1,0,'C');
$pdf->Cell(32,10,'Tgl. Pengembalian ',1,1,'C');


 
$pdf->SetFont('Arial','',8);
 
include 'koneksi.php';
$tslpt = mysqli_query($db, "SELECT * from tbtransaksilaptop");
while ($row = mysqli_fetch_array($tslpt)){

    $pdf->Cell(20,10,$row['jabatan'],1,0,'C');
  	$pdf->Cell(20,10,$row['pendidikanakhir'],1,0,'C');
    $pdf->Cell(20,10,$row['jeniskelamin'],1,0,'C');
  	$pdf->Cell(28,10,$row['ttl'],1,0,'C');
  	$pdf->Cell(108,10,$row['alamat'],1,0);
  	$pdf->Cell(18,10,$row['tahunmasuk'],1,0,'C');
  	$pdf->Cell(25,10,$row['nohp'],1,0,'C');
  	$pdf->Cell(32,10,$row['tglpengembalian'],1,1,'C');

     
  	
}
$pdf->Output();
?>
