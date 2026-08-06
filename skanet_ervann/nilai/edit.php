<?php
include "koneksi.php";
include "../halaman/nav.html";

$id_nilai = $_GET['id_nilai'];

$query = mysqli_query($koneksi, "SELECT * FROM nilai WHERE id_nilai='$id_nilai'");
$edit = mysqli_fetch_array($query);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Data Nilai</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h2>Edit Data Nilai</h2>
    <form action="update.php" method="post">
        <input type="hidden" name="id_nilai" value="<?php echo $edit['id_nilai']; ?>">
        <label>Nama Siswa</label>
        <select name="nis" class="form-control">
            <?php
            $query = mysqli_query($koneksi,"SELECT * FROM siswa");
            while($data=mysqli_fetch_array($query)){
            ?>
                <option value="<?php echo $data['nis']; ?>"
                <?php if($data['nis']==$edit['nis']) echo "selected"; ?>>
                    <?php echo $data['nama']; ?>
                </option>
            <?php } ?>
        </select><br>

        <label>Guru</label>
        <select name="nip" class="form-control">
            <?php
            $query = mysqli_query($koneksi,"SELECT * FROM guru");
            while($data=mysqli_fetch_array($query)){
            ?>
                <option value="<?php echo $data['nip']; ?>"
                <?php if($data['nip']==$edit['nip']) echo "selected"; ?>>
                    <?php echo $data['nama']; ?>
                </option>
            <?php } ?>
        </select><br>

        <label>Mata Pelajaran</label>
        <select name="id_mapel" class="form-control">
            <?php
            $query = mysqli_query($koneksi,"SELECT * FROM mapel");
            while($data=mysqli_fetch_array($query)){
            ?>
                <option value="<?php echo $data['id_mapel']; ?>"
                <?php if($data['id_mapel']==$edit['id_mapel']) echo "selected"; ?>>
                    <?php echo $data['mapel']; ?>
                </option>
            <?php } ?>
        </select><br>

        <label>Nilai</label>
        <input type="text" name="nilai" class="form-control"
        value="<?php echo $edit['nilai']; ?>"><br>

        <button type="submit" class="btn btn-primary">
            Update
        </button>

        <a href="index.php" class="btn btn-secondary">
            Kembali
        </a>
    </form>
</div>
</body>
</html>