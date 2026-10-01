<?php
session_start();
if($_SESSION['status']<>"sukses"){
    header('location:logout.php');
    exit;
}
include "../koneksi.php";
$id_mapel = $_GET['id_mapel'];
$query = mysqli_query($koneksi, "SELECT * FROM mapel WHERE id_mapel='$id_mapel'");
$data = mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Mapel</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Edit Data Mapel</h2>
    <form action="update.php" method="POST">
        <input type="hidden"
               name="id_mapel_lama"
               value="<?= $data['id_mapel']; ?>">

        <div class="mb-3">
            <label>ID_Mapel</label>

            <input type="text"
                   name="id_mapel_baru"
                   value="<?= $data['id_mapel']; ?>"
                   class="form-control">
        </div>

        <div class="mb-3">
            <label>Nama</label>

            <input type="text"
                   name="nama"
                   value="<?= $data['nama']; ?>"
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