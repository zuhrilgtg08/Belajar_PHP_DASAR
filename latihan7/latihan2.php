<?php 
    // cek tidak ada data pada $_GET
    if (!isset($_GET["nama"]) || 
        !isset($_GET["nik"]) ||
        !isset($_GET["email"])||
        !isset($_GET["jurusan"]) ||
        !isset($_GET["foto"])) {
        // redirect
        header("Location: latihan.php");
        exit;
    }
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Mahasiswa</title>
</head>

<body>
    <ul>
        <li>Foto : <img src="gambar/<?= $_GET["foto"]; ?>" alt=""></li>
        <!-- <li><?= $_GET["foto"]; ?></li> -->
        <li>Nama : <?= $_GET["nama"]; ?></li>
        <li>NIK : <?= $_GET["nik"]; ?></li>
        <li>Email : <?= $_GET["email"]; ?></li>
        <li>Jurusan : <?= $_GET["jurusan"]; ?></li>
        <li>Nilai Tugas : <?= $_GET["tugas"]; ?></li>
    </ul>

    <a href="latihan.php">kembali ke daftar mahasiswa</a>
</body>

</html>