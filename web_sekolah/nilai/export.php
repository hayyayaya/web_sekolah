<?php
include "../koneksi.php";

header("Content-Type: application/vnd.ms-excel");
header("Content-Disposition: attachment; filename=data_nilai.xls");
header("Pragma: no-cache");
header("Expires: 0");

echo "<html>";
echo "<head>";
echo "<meta charset='UTF-8'>";
echo "</head>";
echo "<body>";

echo "<table border='1'>";
echo "<tr>";
echo "<th>NIS</th>";
echo "<th>Nama</th>";
echo "<th>Mapel</th>";
echo "<th>Guru</th>";
echo "<th>Nilai</th>";
echo "</tr>";

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
    ORDER BY nilai.nis, nilai.id_nilai
");

$nis_sebelumnya = "";
while($data = mysqli_fetch_assoc($query)){
    echo "<tr>";
    if($data['nis'] == $nis_sebelumnya){
        echo "<td></td>";
        echo "<td></td>";
    }else{
        echo "<td style='mso-number-format:\"\\@\";'>" . $data['nis'] . "</td>";
        echo "<td>" . $data['namasiswa'] . "</td>";
        $nis_sebelumnya = $data['nis'];
    }
    echo "<td>" . $data['namamapel'] . "</td>";
    echo "<td>" . $data['namaguru'] . "</td>";
    echo "<td>" . $data['nilai'] . "</td>";
    echo "</tr>";
}
echo "</table>";
echo "</body>";
echo "</html>";

exit;
?>