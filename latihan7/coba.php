<?php 
    $data =[
        [
            "foto" => "img (6).jpg",
            "nama" => "Ahmad Zuhril",
            "nik" => 45678,
            "email" => "zuhrilgtg@gmail.com"
        ],

        [
            "foto" => "img (2).jpg",
            "nama" => "Nando Prisandy",
            "nik" => 12345,
            "email" => "nandopris@gmail.com"
        ]
    ]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>display foto</title>
</head>
<body>
    <h1>Daftar Foto</h1>

    <ul>
        <?php foreach($data as $d):?>
            <li>
                <a href="coba1.php?foto=<?= $d["foto"];?>
                &nik= <?=$d["nik"];?>
                &email= <?=$d["email"];?>
                &nama= <?=$d["nama"];?>"><?= $d["nama"];?></a>
            </li>
        <?php endforeach;?>
    </ul>
</body>
</html>