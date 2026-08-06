<?php
    include "koneksi.php";
    include "../halaman/nav.html";
    $id_mapel=$_GET['id_mapel'];
    $query = mysqli_query($koneksi, "SELECT * FROM mapel WHERE id_mapel='$id_mapel'");
    $data=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Data</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Edit Nilai</h2>
    <form action="update.php" method="post">
        <label>NIS</label>
        <input type="text" name="id_mapel" class="form-control" value="<?php echo $data['id_mapel']; ?>">
        <br>
        <label>Nama</label>
        <input type="text" name="mapel" class="form-control" value="<?php echo $data['mapel']; ?>">
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
