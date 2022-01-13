<?php
require 'function.php';

if (isset($_POST["register"])) {

    if (registrasi($_POST) > 0) {
        echo "
                <script>
                    alert('user baru berhasil ditambahkan');
                </script>
            ";
        header("Location:index.php");
        exit;
    } else {
        echo mysqli_error($conn);
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Registrasi</title>

    <!-- boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <div class="card m-3 p-3">
        <div class="card-header bg-success text-white text-center">
            <h2>Registrasi Akun</h2>
        </div>

        <div class="card-body">
            <form action="" method="POST" class="form-group-sm">
                <div class="mb-3">
                    <label for="username" class="form-label text-capitalize">username : </label>
                    <input type="text" name="username" id="username" class="form-control mb-3">
                </div>

                <div class="mb-3">
                    <label for="password" class="form-label text-capitalize">password : </label>
                    <input type="password" name="password" id="password" class="form-control mb-3">
                </div>

                <div class="mb-3">
                    <label for="password2" class="form-label text-capitalize">konfirmasi password : </label>
                    <input type="password" name="password2" id="password2" class="form-control mb-3">
                </div>
        </div>

        <div class="card-footer">
                <button type="submit" name="register" class="btn btn-success">Register</button>
            </form>
        </div>
    </div>
</body>

</html>