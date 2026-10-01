<?php
session_start();
if($_SESSION['status']<>"sukses"){
    header('location:logout.php');
    exit;
}
include "../koneksi.php";
include "../nav.html";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
<div class="container mt-4">
    <h2>Data Nilai</h2>
    <a href="tambah.php" class="btn btn-primary mb-3">
        Tambah Nilai
    </a>
    <a href="export.php" class="btn btn-success mb-3">
        Export
    </a>
    <table class="table table-bordered table-striped">

        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Mapel</th>
            <th>Guru</th>
            <th>Nilai</th>
            <th>Aksi</th>
            <th>Cetak pdf</th>
        </tr>

        <?php
        $query = mysqli_query($koneksi, "
            SELECT
                nilai.id_nilai,
                nilai.nis,
                siswa.nama AS namasiswa,
                guru.nama AS namaguru,
                mapel.nama AS namamapel,
                nilai.nilai
            FROM nilai
            JOIN siswa ON nilai.nis = siswa.nis
            JOIN guru ON nilai.nip = guru.nip
            JOIN mapel ON nilai.id_mapel = mapel.id_mapel
        ");

        while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?= $data['nis']; ?></td>
            <td><?= $data['namasiswa']; ?></td>
            <td><?= $data['namamapel']; ?></td>
            <td><?= $data['namaguru']; ?></td>
            <td><?= $data['nilai']; ?></td>
            <td>
                <a href="edit.php?id_nilai=<?= $data['id_nilai']; ?>"
                class="btn btn-warning btn-sm">
                    Edit
                </a>

                <a href="hapus.php?id_nilai=<?= $data['id_nilai']; ?>"
                class="btn btn-danger btn-sm"
                onclick="return confirm('Yakin ingin menghapus?');">
                    Hapus
                </a>
            </td>
            <td>
                <a href="cetak.php?nis=<?= $data['nis']; ?>"
                class="btn btn-secondary btn-sm">
                    PDF
                </a>
            </td>   
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>