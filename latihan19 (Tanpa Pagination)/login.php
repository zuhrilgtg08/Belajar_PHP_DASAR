<?php
session_start();
require 'function.php';

// ada nggak cookienya
if(isset($_COOKIE['id']) && isset($_COOKIE['key'])){
    // if($_COOKIE['login'] == 'true'){
    //     $_SESSION['login'] = true;
    // }

    $id = $_COOKIE['id'];
    $key = $_COOKIE['key'];

    // ambil username berdasarkan id
    $result = mysqli_query($conn, "SELECT username FROM users WHERE id = $id");

    $row = mysqli_fetch_assoc($result);
    
    // cek cookie dan username
    if($key === hash('sha256', $row['username'])){
        $_SESSION['login'] = true;
    }



}

if (isset($_SESSION["login"])) {
    header("Location: index.php");
    exit;
}

// jika tombol submit sudah ditekan atau belum
if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $result = mysqli_query($conn, "SELECT * FROM users WHERE username = '$username'");

    // cek username
    if (mysqli_num_rows($result) === 1) {
        // cek passwordnya
        $row = mysqli_fetch_assoc($result);

        if (password_verify($password, $row["password"])) {
            // set session
            // $_SESSION["login"] = true;

            // cek remember me
            if(isset($_POST['remember'])){
                // buat cookienya
                setcookie('id', $row['id'], time() + 60);
                setcookie('key', hash('sha256', $row['username']), time() + 60);
            }
            header("Location: index.php");
            exit;
        }
    }

    $error = true;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Login</title>

    <!-- bootsrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>


    <div class="card m-5">
        <div class="card-header bg-warning">
            <h2 class="text-center text-capitalize text-white">login akun</h2>
        </div>

        <?php if (isset($error)) : ?>
            <div class="alert alert-danger text-capitalize" role="alert">
                Maaf username atau password Salah.
            </div>
        <?php endif; ?>

        <div class="card-body">
            <form action="" method="POST" class="form-group mb-3">
                <div class="mb-3">
                    <label for="username" class="form-label text-capitalize">username : </label>
                    <input type="text" name="username" id="username" class="form-control mb-3">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label text-capitalize">password : </label>
                    <input type="password" name="password" id="password" class="form-control mb-3">
                </div>

                <div class="form-check mb-3">
                    <label for="cekbox" class="form-check-label text-capitalize">remember me</label>
                    <input type="checkbox" name="remember" id="cekbox" class="form-check-input mb-3">
                </div>
        </div>

        <div class="card-footer">
            <button type="submit" name="login" class="btn btn-primary" style="width: 100px;">Login</button>
            <a href="registrasi.php" class="btn btn-success">Registrasi User</a>
            </form>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>