<?php
session_start();
if($_SESSION['status']<>"sukses"){
    header('location:logout.php');
    exit;
}
include "../nav.html";
?>
<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mapel</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">

    <h2>Tambah Mapel</h2>

    <form action="simpan.php" method="post">

        <label>ID_Mapel</label>
        <input type="text" name="id_mapel" class="form-control"> <br>

        <label>Nama</label>
        <input type="text" name="nama" class="form-control"><br>
        
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