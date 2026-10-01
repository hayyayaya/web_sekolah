<?php
include "../koneksi.php";
if (isset($_POST['update'])) {
    $id_mapel = $_POST['id_mapel'];
    $id_mapel_baru = $_POST['id_mapel_baru'];
    $nama = $_POST['nama'];

    $query = mysqli_query($koneksi, "UPDATE mapel SET
        id_mapel='$id_mapel_baru',
        nama='$nama',
        WHERE id_mapel='$id_mapel'
    ");
    header("Location: index.php");
    exit;
}
?>