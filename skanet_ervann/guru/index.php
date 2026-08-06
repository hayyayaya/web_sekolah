<?php
include "koneksi.php";
include "../halaman/nav.html";

session_start();
if($_SESSION['status']<>"sukses"){
    header('location:../halaman/logout.php');
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Guru</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Data Guru</h2>
    <a href="tambah.php" class="btn btn-primary mb-3">Tambah Guru</a>
    <table class="table table-bordered">
        <tr>
            <th>NIP</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Hapus</th>
            <th>Edit</th>
        </tr>
        <?php
        $query = mysqli_query($koneksi, "SELECT * FROM guru");
        while($data = mysqli_fetch_array($query)){
        ?>
        <tr>
            <td><?php echo $data['nip']; ?></td>
            <td><?php echo $data['nama']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td>
                <a href="hapus.php?nip=<?php echo $data['nip']; ?>" class="btn btn-danger btn-sm">
                    Hapus
                </a>
            </td>
            <td>
                <a href="edit.php?nip=<?php echo $data['nip']; ?>" class="btn btn-warning btn-sm">
                    Edit
                </a>
            </td>
        </tr>
        <?php } ?>
    </table>
</div>
</body>
</html>