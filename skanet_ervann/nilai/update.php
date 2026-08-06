<?php
include "koneksi.php";
$id_nilai = $_POST['id_nilai'];
$nis = $_POST['nis'];
$id_mapel = $_POST['id_mapel'];
$nip = $_POST['nip'];
$nilai = $_POST['nilai'];
$query = mysqli_query($koneksi, "UPDATE nilai SET nis='$nis', nip='$nip', id_mapel='$id_mapel',nilai='$nilai' WHERE id_nilai='$id_nilai'");

header("location:index.php");
?>