<?php
include "../koneksi.php";
if (isset($_POST['update'])) {
    $nis_lama = $_POST['nis_lama'];
    $nis_baru = $_POST['nis_baru'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $query = mysqli_query($koneksi, "UPDATE siswa SET
        nis='$nis_baru',
        nama='$nama',
        alamat='$alamat'
        WHERE nis='$nis_lama'
    ");
    header("Location: index.php");
    exit;
}

?>