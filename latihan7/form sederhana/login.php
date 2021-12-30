<?php 
    // cek bila tombol submit sudah ditekan atau belum
    if(isset($_POST["submit"])){
        // cek username dan passwordnya
        if($_POST["username"] == "admin" && $_POST["password"] == "123"){
            // jika benar redirect ke halaman admin
            header("Location: admin.php");
            exit;
        }else{
            // jika salah tamppilkan popup kesalahan
            $error = true;
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login Admin</title>
</head>
<body>
    <h1>Login Admin</h1>

    <?php if(isset($error)):?>
        <p style="background:red; color:#fff; font:italic;">Username atau Password salah!</p>
    <?php endif; ?>
    <ul>
        <form action="" method="post">
            <li>
                <label for="user">Username : </label>
                <input type="text" placeholder="Username" id="user" name="username">
            </li>

            <li>
                <label for="password">Password : </label>
                <input type="password" placeholder="Password" id="password" name="password">
            </li>

            <li>
                <button type="submit" name="submit">Login</button>
            </li>
        </form>
    </ul>
</body>
</html>