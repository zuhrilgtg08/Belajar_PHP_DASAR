<?php
// $mahasiswa = [
//     ["ahmad", "454673", "ahmad345@gmail.com", "rpl"],
//     ["risky", "454670", "risky35@gmail.com", "tedk"]
// ];

//array assosiative
// dimana key nya menggunakan string yang kita buat sendiri
// definisinya sama dengan array numeric cuman key nya menggunakan string yang kita buat indeknya



$mahasiswa = [
    [
        "foto" => "img (1).jpg",
        "nama" => "ahmad zuhril",
        "nik" => "2407",
        "email" => "zuhril08@gmail.com",
        "jurusan" => "Teknik Informatika",
        "Tugas" => [91, 97, 76]
    ],

    [
        "foto" => "img (2).jpg",
        "nama" => "akmal luthfi",
        "nik" => "2405",
        "email" => "lutfi04@gmail.com",
        "jurusan" => "Teknik Kimia",
        "Tugas" => [97, 81, 67]
    ],

    [
        "foto" => "img (3).jpg",
        "nik" => "2401",
        "nama" => "wahyu laksono",
        "email" => "why0411@gmail.com",
        "jurusan" => "Teknik Industri",
        "Tugas" => [90, 88, 76]
    ]
];

// jika menggunakan assosiative urutannya tidak dipermasalahkan asalkan key nya tahu namanya
// jika numeric harus tahu berdasarkan index urutannya

// echo $mahasiswa["nama"];
// echo $mahasiswa[1]["email"];
// echo $mahasiswa[2]["Tugas"][1];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar mahasiswa</title>
</head>

<body>
    <h1>Daftar mahasiswa</h1>

    <?php foreach ($mahasiswa as $siswa) : ?>
        <ul>
            <li>
                <img src="gambar/<?= $siswa["foto"]; ?>">
            </li>
            <li>Nama : <?= $siswa["nama"]; ?></li>
            <li>NIK : <?= $siswa["nik"]; ?></li>
            <li>email : <?= $siswa["email"]; ?></li>
            <li>Jurusan : <?= $siswa["jurusan"]; ?></li>
            <li>Tugas : <?= $siswa["Tugas"][0]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>