<?php
include "../halaman/nav.html";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Tambah Data</h2>
    <form action="simpan.php" method="post">
        <label>NIS</label>
        <input type="text" name="nis" class="form-control">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" class="form-control">
        <br>
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control">
        <br>
        <button type="submit" class="btn btn-primary">
            Simpan
        </button>
        <a href="index.php" class="btn btn-secondary">
            Kembali
        </a>
    </form>
</div>
</body>
</html>