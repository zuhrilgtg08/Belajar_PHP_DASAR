<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Foto : <img src="gambar/<?=$_GET["foto"];?>" alt=""></li>
        <li>Nama : <?= $_GET["nama"]; ?></li>
        <li>NIK : <?= $_GET["nik"]; ?></li>
        <li>Email : <?= $_GET["email"]; ?></li>
    </ul>
</body>
</html>