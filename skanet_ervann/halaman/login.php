<?php
include "koneksi.php";
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body{
            background: #e1dede;
        }

        .login{
            width: 400px;
            margin: 100px auto;
        }
    </style>
</head>
<body>
<div class="login">
    <div class="card">
        <div class="card-body">
            <h2 class="text-center">Login</h2>
            <br>
            <form action="" method="post">

                <label>Username</label>
                <input type="text" name="usn" class="form-control">

                <br>

                <label>Password</label>
                <input type="password" name="pass" class="form-control">

                <br>

                <button type="submit" name="login" class="btn btn-primary">
                    Login
                </button>
            </form>
        </div>
    </div>
</div>
</body>
</html>

<?php
if(isset($_POST['login'])){
    $usn = $_POST['usn'];
    $pass = $_POST['pass'];

    $query = mysqli_query($koneksi,"SELECT * FROM users WHERE usn='$usn' AND pass='$pass'");
    $cek = mysqli_num_rows($query);

    if($cek > 0){
        session_start();
        $_SESSION['status'] = "sukses";
        $_SESSION['usn'] = $usn;
        $_SESSION['pass'] = $pass;

        header("Location:index.php");
        exit;
    }else{
        echo "<script>alert('Username atau Password salah!');</script>";
    }
}
?>