<?php
session_start();
if($_SESSION['status']<>"sukses"){
    header("location:../halaman/logout.php");
    exit;
}

include "koneksi.php";
include "../halaman/nav.html";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mapel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Data Mapel</h2>
    <a href="tambah.php" class="btn btn-primary mb-3">Tambah Mapel</a>
    <table class="table table-bordered">
        <tr>
            <th>Id_Mapel</th>
            <th>Mapel</th>
            <th>Hapus</th>
            <th>Edit</th>
        </tr>
        <?php
        $query = mysqli_query($koneksi,"SELECT * FROM mapel");
        while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?= $data['id_mapel']; ?></td>
            <td><?= $data['mapel']; ?></td>
            <td>
                <a href="hapus.php?id_mapel=<?= $data['id_mapel']; ?>" class="btn btn-danger btn-sm">Hapus</a>
            </td>
            <td>
                <a href="edit.php?id_mapel=<?= $data['id_mapel']; ?>" class="btn btn-warning btn-sm">Edit</a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>