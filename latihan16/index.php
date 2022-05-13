<?php
session_start();
if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}

//mengkoneksikan dengan database
require 'function.php';
// accending dan descending
// ASC DAN DESC adalah sebuah urutan mulai dari kecil ke besar begitu juga sebaliknya
//ambil data dari database
$mahasiswa = query("SELECT * FROM mahasiswa");

// jika tombol cari ditekan
if (isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>

    <!-- boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- style css custom -->
    <link href="css/style.css" rel="stylesheet" />
    <link href="css/main.css" rel="stylesheet" />
</head>

<body>
    <nav>
        <div class="logo">
            <h4>Dasboard</h4>
        </div>

        <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Product</a></li>
            <li><a href="#">Service</a></li>
            <li><a href="#">Gallery</a></li>
            <li><a href="#">About</a></li>
        </ul>

        <div class="menu-toggle">
            <input type="checkbox">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </nav>

    <a href="logout.php" class="btn btn-danger float-end m-3">Logout</a>

    <h1 class="text-center mt-2 text-uppercase">Daftar Mahasiswa</h1>

    <a href="tambah.php" class="btn btn-warning m-4">Tambah Data Mahasiswa</a>

    <!-- cari form data -->
    <form action="" method="POST" class="form-group m-3">
        <input type="search" name="keyword" class="form-control" autofocus placeholder="Cari Mahasiswa..." autocomplete="off">
        <button type="submit" name="cari" class="bg-primary rounded mt-3" style="width: 100px; color:#fff;">Cari Data</button>
    </form>
    <br><br>

    <div class="table-responsive">
        <table class="table table-striped text-center">
            <tr class="table table-dark">
                <th>No.</th>
                <th>Aksi</th>
                <th>Gambar</th>
                <th>NIS</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>

            <?php $i = 1; ?>
            <?php foreach ($mahasiswa as $mhs) : ?>
                <tr>
                    <td><?= $i; ?></td>
                    <td>
                        <button class="bg-success"><a href="ubah.php?id=<?= $mhs["id"]; ?>">Ubah</a> </button>
                        <button class="bg-danger"><a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('Yakin ingin dihapus');">Hapus</a></button>
                    </td>
                    <td><img src="images/<?= $mhs["gambar"]; ?>" width="50" alt=""></td>
                    <td><?= $mhs["nis"]; ?></td>
                    <td><?= $mhs["nama"]; ?></td>
                    <td><?= $mhs["email"]; ?></td>
                    <td><?= $mhs["jurusan"]; ?></td>
                </tr>
                <?php $i++; ?>
            <?php endforeach; ?>
        </table>
    </div>

    <!-- script.js -->
    <script src="js/script.js"></script>
</body>

</html>