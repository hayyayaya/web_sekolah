<?php

require('../fpdf/fpdf.php');
include "../koneksi.php";

$nis = $_GET['nis'];

$query = mysqli_query($koneksi, "
    SELECT
        nilai.nis,
        siswa.nama AS namasiswa,
        guru.nama AS namaguru,
        mapel.nama AS namamapel,
        nilai.nilai
    FROM nilai
    JOIN siswa ON nilai.nis = siswa.nis
    JOIN guru ON nilai.nip = guru.nip
    JOIN mapel ON nilai.id_mapel = mapel.id_mapel
    WHERE nilai.nis = '$nis'
");

$pdf = new FPDF('L', 'mm', 'A4');
$pdf->AddPage();

$pdf->SetFont('Arial', 'B', 16);
$pdf->Cell(0, 10, 'DATA NILAI SISWA', 0, 1, 'C');

$pdf->Ln(5);

$pdf->SetFont('Arial', 'B', 10);

$pdf->Cell(40, 10, 'NIS', 1, 0, 'C');
$pdf->Cell(50, 10, 'Nama', 1, 0, 'C');
$pdf->Cell(70, 10, 'Mapel', 1, 0, 'C');
$pdf->Cell(60, 10, 'Guru', 1, 0, 'C');
$pdf->Cell(25, 10, 'Nilai', 1, 1, 'C');

$pdf->SetFont('Arial', '', 10);

$nis_sebelumnya = "";

while($data = mysqli_fetch_array($query)) {

    if($data['nis'] == $nis_sebelumnya) {

        $pdf->Cell(40, 10, '', 1, 0, 'C');
        $pdf->Cell(50, 10, '', 1, 0, 'L');

    } else {

        $pdf->Cell(40, 10, $data['nis'], 1, 0, 'C');
        $pdf->Cell(50, 10, $data['namasiswa'], 1, 0, 'L');

        $nis_sebelumnya = $data['nis'];
    }

    $pdf->Cell(70, 10, $data['namamapel'], 1, 0, 'L');
    $pdf->Cell(60, 10, $data['namaguru'], 1, 0, 'L');
    $pdf->Cell(25, 10, $data['nilai'], 1, 1, 'C');
}

$pdf->Output('D', 'nilai_'.$nis.'.pdf');

?>