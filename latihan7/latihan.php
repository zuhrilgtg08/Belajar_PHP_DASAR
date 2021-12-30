<?php
// variable super globals
// variable global milik PHP
// merupakan array assosiative

// $_GET
// $_GET["nama"] = "ahmad";
// $_GET["nik"] = "123";

$mahasiswa = [
    [
        "foto" => "img (2).jpj",
        "nama" => "ahmad zuhril",
        "nik" => "2407",
        "email" => "zuhril08@gmail.com",
        "jurusan" => "Teknik Informatika",
        "tugas" => [91, 97, 76]
    ],

    [
        "foto" => "img (4).jpg",
        "nama" => "akmal luthfi",
        "nik" => "2405",
        "email" => "lutfi04@gmail.com",
        "jurusan" => "Teknik Kimia",
        "tugas" => [97, 81, 67]
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>

    <ul>

        <?php foreach ($mahasiswa as $mhs) : ?>
            <li>
                <a href="latihan2.php?nama= <?= $mhs["nama"]; ?>
                    &nik= <?= $mhs["nik"]; ?>
                    &email= <?= $mhs["email"]; ?>
                    &jurusan= <?= $mhs["jurusan"]; ?>
                    &foto= <?= $mhs["foto"]; ?>
                    &tugas= <?= $mhs["tugas"][1];?>">
                    <?= $mhs["nama"]; ?>
                </a>
            </li>
        <?php endforeach; ?>

    </ul>
</body>

</html>