<?php
session_start();
if($_SESSION['status']<>"sukses"){
    header('location:logout.php');
    exit;
}
include "../koneksi.php";
include "../nav.html";
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background-color: #e1dede;
        }

        .banner{
            width: 100%;
            height: 400px;
            object-fit: cover;
        }
    </style>
</head>
<body>
    <img src="skanet.jpg" class="img-fluid banner" alt="SMKN Takeran">
    <div class="container mt-4">
        <div class="card">
            <div class="card-body">
                <h1 class="text-center">
                    SMKN Takeran
                </h1>

                <p class="text-center">
                    SMKN Takeran adalah sekolah menengah kejuruan negeri
                    yang berfokus pada bidang teknologi informasi (IT) di Kabupaten Magetan.
                </p>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"></script>>
</body>
</html>