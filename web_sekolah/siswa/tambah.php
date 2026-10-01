<?php
session_start();
if($_SESSION['status']<>"sukses"){
    header('location:logout.php');
    exit;
}
include "../koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah siswa</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">

    <h2>Tambah siswa</h2>

    <form action="simpan.php" method="post">

        <label>Nis</label>
        <input type="text" name="nis" class="form-control"> <br>

        <label>Nama</label>
        <input type="text" name="nama" class="form-control"><br>

        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control"><br>

        <button type="submit" class="btn btn-primary">
            Simpan
        </button>

        <a href="index.php" class="btn btn-secondary"
        onclick="return confirm('Apakah Anda Yakin Ingin Kembali?')">
            Kembali
        </a>
        
    </form>
</div>
</body>
</html>