<?php
session_start();
if($_SESSION['status']<>"sukses"){
    header('location:logout.php');
    exit;
}
include "../koneksi.php";
$nis = $_GET['nis'];
$query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='$nis'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Siswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Edit Data Siswa</h2>
    <form action="update.php" method="POST">
        <input type="hidden"
               name="nis_lama"
               value="<?= $data['nis']; ?>">

        <div class="mb-3">
            <label>NIS</label>

            <input type="text"
                   name="nis_baru"
                   value="<?= $data['nis']; ?>"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Nama</label>

            <input type="text"
                   name="nama"
                   value="<?= $data['nama']; ?>"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Alamat</label>

            <input type="text"
                   name="alamat"
                   value="<?= $data['alamat']; ?>"
                   class="form-control">
        </div>

        <button type="submit"
                name="update"
                class="btn btn-success"
                onclick="return confirm('Apakah Kamu Yakin Menyipan?')">
            Simpan
        </button>

        <a href="index.php"
           class="btn btn-secondary"
           onclick="return confirm('Apakah Anda Yakin Ingin Membatalkannya?')">
            Batal
        </a>
    </form>
</div>
</body>
</html>