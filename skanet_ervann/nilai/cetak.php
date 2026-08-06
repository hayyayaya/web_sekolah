<?php
require('../lib/fpdf.php');
include 'koneksi.php';
$nis = $_GET['nis'];
$query = mysqli_query($koneksi,"
SELECT siswa.nama AS namasiswa, guru.nama AS namaguru, mapel.mapel, nilai.nilai
FROM nilai
JOIN siswa ON nilai.nis = siswa.nis
JOIN guru ON nilai.nip = guru.nip
JOIN mapel ON nilai.id_mapel = mapel.id_mapel
WHERE nilai.nis = '$nis'
");

$pdf = new FPDF('P','mm','A4');
$pdf->AddPage();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(190,10,'DATA NILAI SISWA',0,1,'C');
$pdf->Ln(5);

$pdf->SetFont('Arial','B',12);
$pdf->Cell(50,10,'Nama Siswa',1,0,'C');
$pdf->Cell(50,10,'Nama Guru',1,0,'C');
$pdf->Cell(60,10,'Mata Pelajaran',1,0,'C');
$pdf->Cell(30,10,'Nilai',1,1,'C');
$pdf->SetFont('Arial','',12);

$pertama = true;
while($data = mysqli_fetch_array($query)){
    if($pertama){
        $pdf->Cell(50,10,$data['namasiswa'],1,0);
        $pertama = false;
    }else{
        $pdf->Cell(50,10,'',1,0);
    }
    $pdf->Cell(50,10,$data['namaguru'],1,0);
    $pdf->Cell(60,10,$data['mapel'],1,0);
    $pdf->Cell(30,10,$data['nilai'],1,1,'C');
}

$pdf->Output();
?>