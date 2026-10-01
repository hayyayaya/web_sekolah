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
    <title>Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Data Siswa</h2>
    <a href="tambah.php" class="btn btn-primary mb-3">
        Tambah Data
    </a>
    <table class="table table-bordered table-striped">
        <tr>
            <th>NIS</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
        <?php
        $data = mysqli_query($koneksi, "SELECT * FROM siswa");
        while ($d = mysqli_fetch_array($data)) {
        ?>
        <tr>
            <td><?= $d['nis']; ?></td>
            <td><?= $d['nama']; ?></td>
            <td><?= $d['alamat']; ?></td>

            <td>
                <a href="edit.php?nis=<?= $d['nis']; ?>"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <a href="hapus.php?nis=<?= $d['nis']; ?>"
                   class="btn btn-danger btn-sm"
                   onclick="return confirm('Yakin ingin menghapus?');">
                    Hapus
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>