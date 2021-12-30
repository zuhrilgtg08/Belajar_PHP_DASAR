<?php
$dataBuku = [
    [
        "coverBuku" => "img (4).jpg",
        "kodeBuku" => 2910,
        "hargaBuku" => "Rp. 12.000",
        "judulBuku" => "Lelah",
        "penulis" => "Abu Huzaifah"
    ],

    [
        "coverBuku" => "img (5).jpg",
        "kodeBuku" => 2911,
        "hargaBuku" => "Rp. 20.000",
        "judulBuku" => "Diriku",
        "penulis" => "Ariful Furqon"
    ],

    [
        "coverBuku" => "img (6).jpg",
        "kodeBuku" => 2912,
        "hargaBuku" => "Rp. 14.000",
        "judulBuku" => "Sahabatku",
        "penulis" => "Nando Septian"
    ],

    [
        "coverBuku" => "img (1).jpg",
        "kodeBuku" => 2913,
        "hargaBuku" => "Rp. 16.000",
        "judulBuku" => "Teman",
        "penulis" => "Wahyu Laksono"
    ]
];
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Studi kasus</title>
    <style>
        body{
            width: 100%;
            overflow-x: hidden;
            z-index: -1;
            background-color: salmon;
            color:#fff;
            display: flex;
            justify-content: space-around;
            gap: 3px;
        }

        .kotak{
            width: 100px;
            line-height: 30px;
            padding-top: 120px;
            z-index: 1000;
            height: 50px;
            display: flex;
            align-items: center;
        }
    </style>
</head>

<body>
    <div class="kotak">
        <h1>Daftar Buku (latihan)</h1>
    </div>

    <?php foreach ($dataBuku as $buku) : ?>
        <ul>
            <h3>Cover Buku : </h3>
            <img src="gambar/<?= $buku["coverBuku"]; ?>" alt="cover">
            <li>Kode Buku : <?php echo $buku["kodeBuku"]; ?></li>
            <li>Harga Buku : <?php echo $buku["hargaBuku"]; ?></li>
            <li>Judul Buku : <?php echo $buku["judulBuku"]; ?></li>
            <li>Penulis Buku : <?php echo $buku["penulis"]; ?></li>
        </ul>
    <?php endforeach; ?>
</body>

</html>