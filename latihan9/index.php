<?php
//mengkoneksikan dengan database
require 'function.php';

//ambil data dari database
$mahasiswa = query("SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result yang telah dibuat
// ada 4 yaitu
//  mysqli_fetch_row() mengembalikan array numeric indeks dengan angkanya
// mysqli_fetch_assoc() mengembalikan array assoiative
// mysqli_fetch_array() mengembalikan array assoc dan numerik
// mysqli_fetch_object() mengembalikkan dengan objectnya


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
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">SMKN 2 Surabaya</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarText">
            <ul class="navbar-nav mr-3 mb-lg-0">
                <li class="nav-item active">
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Services</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Contact</a>
                </li>
            </ul>
        </div>
    </nav>


    <h1 class="text-center mt-2 text-uppercase">Daftar Mahasiswa</h1>

    <button class="bg-primary mb-3"><a href="tambah.php">Tambah Data Mahasiswa</a></button>

    <table class="table table-striped text-center mb-3">
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
                    <button class="bg-success"><a href="#">Ubah</a> </button>
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
</body>

</html>