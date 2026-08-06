<?php
include "koneksi.php";
include "../halaman/nav.html";
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
    <a href="tambah.php" class="btn btn-primary mb-3">Tambah Data</a>
    <table class="table table-bordered">
        <tr>
            <th>ID Nilai</th>
            <th>Nama </th>
            <th>Mapel</th>
            <th>Guru</th>
            <th>Nilai</th>
            <th>Hapus</th>
            <th>Edit</th>
            <th>Export PDF</th>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "SELECT nilai.id_nilai, nilai.nis, siswa.nama AS namasiswa, guru.nama AS namaguru, mapel.mapel, nilai.nilai FROM siswa, guru, mapel, nilai WHERE nilai.nis=siswa.nis AND nilai.nip=guru.nip AND nilai.id_mapel=mapel.id_mapel");
        while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data['id_nilai']; ?></td>
            <td><?php echo $data['namasiswa']; ?></td>
            <td><?php echo $data['mapel']; ?></td>
            <td><?php echo $data['namaguru']; ?></td>
            <td><?php echo $data['nilai']; ?></td>
            <td>
                <a href="hapus.php?id_nilai=<?php echo $data['id_nilai']; ?>" class="btn btn-danger btn-sm">Hapus</a>
            </td>
            <td>
                <a href="edit.php?id_nilai=<?php echo $data['id_nilai']; ?>" class="btn btn-warning btn-sm">Edit</a>
            </td>
            <td>
                <a href="cetak.php?nis=<?php echo $data['nis']; ?>" class="btn btn-success">PDF</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>