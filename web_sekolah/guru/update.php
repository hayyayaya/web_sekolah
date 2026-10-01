<?php
include "../koneksi.php";
if (isset($_POST['update'])) {
    $nip_lama = $_POST['nip_lama'];
    $nip_baru = $_POST['nip_baru'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $query = mysqli_query($koneksi, "UPDATE guru SET
        nip='$nip_baru',
        nama='$nama',
        alamat='$alamat'
        WHERE nip='$nip_lama'
    ");
    header("Location: index.php");
    exit;
}

?>