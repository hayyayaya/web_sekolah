<?php
include "../koneksi.php";
$id_mapel=$_POST['id_mapel'];
$nama=$_POST['nama'];
$query=mysqli_query($koneksi,"insert into mapel(id_mapel,nama) values('$id_mapel','$nama')");
header('location:index.php');
?>