<?php
    include "koneksi.php";
    $id_mapel=$_POST['id_mapel'];
    $mapel=$_POST['mapel'];
    $query=mysqli_query($koneksi,"UPDATE mapel set id_mapel='$id_mapel', mapel='$mapel' WHERE id_mapel='$id_mapel'");
    header('location:index.php');

?>