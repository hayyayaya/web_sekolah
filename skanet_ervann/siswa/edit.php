<?php
    include "koneksi.php";
    include "../halaman/nav.html";
    $nis=$_GET['nis'];
    $query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nis='$nis'");
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
    <h2>Edit Data</h2>
    <form action="update.php" method="post">
        <label>NIS</label>
        <input type="text" name="nis" class="form-control" value="<?php echo $data['nis']; ?>">
        <br>
        <label>Nama</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $data['nama']; ?>">
        <br>
        <label>Alamat</label>
        <input type="text" name="alamat" class="form-control" value="<?php echo $data['alamat']; ?>">
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
