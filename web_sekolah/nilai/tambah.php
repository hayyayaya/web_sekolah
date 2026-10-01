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
    <title>Tambah Data Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="container mt-4">
    <h2>Tambah Data Nilai</h2>
    <form action="simpan.php" method="post">
        <label>Nama Siswa</label>
        <select name="nis" class="form-control">
            <?php
            $query=mysqli_query($koneksi,"SELECT * FROM siswa");
            while($data=mysqli_fetch_array($query)){
            ?>
                <option value="<?php echo $data['nis']; ?>">
                    <?php echo $data['nama']; ?>
                </option>
            <?php
            }
            ?>
        </select><br>
        <label>Nama Guru</label>
        <select name="nip" class="form-control">
            <?php
            $query=mysqli_query($koneksi,"SELECT * FROM guru");
            while($data=mysqli_fetch_array($query)){
            ?>
                <option value="<?php echo $data['nip']; ?>">
                    <?php echo $data['nama']; ?>
                </option>
            <?php
            }
            ?>
        </select><br>
        <label>Nama Mapel</label>
        <select name="id_mapel" class="form-control">
            <?php
            $query=mysqli_query($koneksi,"SELECT * FROM mapel");
            while($data=mysqli_fetch_array($query)){
            ?>
                <option value="<?php echo $data['id_mapel']; ?>">
                    <?php echo $data['nama']; ?>
                </option>
            <?php
            }
            ?>
        </select><br>
        <label>Nilai</label>
        <input type="text" name="nilai" class="form-control"><br>
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