<?php
// menampilkan array
$dataSiswa = [
    ["Ahmad", 2407, "RPL", "Jl Simorejo"],
    ["Luthfi", 3456, "Mesin", "Jl Melon"],
    ["Krisna", 5634, "Biologi", "Jl Manukan"]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coba</title>
    <style>
        body {
            background-color: salmon;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
            font-size: 16px;
            text-transform: capitalize;
            color: #fff;
        }
    </style>
</head>

<body>

<h1>Data Siswa</h1>
    <?php foreach ($dataSiswa as $dts) : ?>
        <ul>
            <li>nama : <?= $dts[0]; ?></li>
            <li>nim : <?= $dts[1]; ?></li>
            <li>jurusan : <?= $dts[2]; ?></li>
            <li>alamat : <?= $dts[3]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>