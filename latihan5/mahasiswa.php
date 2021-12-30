<?php
$mahasiswa = [
    ["Ahmad Zuhril", "2407", "Rekayasa Perangkat Lunak", "zuhril08@gmail.com"],
    ["Akmal Luthfi", "2405", "Teknik Informatika", "akmalluthfi34@gmail.com"],
    ["Dimas Firmansyah", "4076", "Teknik Kimia", "dimasfrmsyah43@gmail.com"]
];

// array numeric adalah array yang indexnya adalah angka
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
    <h1>Daftar Mahasiswa</h1>

<?php foreach($mahasiswa as $mhs ) :?>
        <ul>
            <!-- <li>Ahmad Zuhril</li>
            <li>2407</li>
            <li>Rekayasa Perangkat Lunak</li>
            <li>zuhril08@gmail.com</li> -->

            <!-- <?php foreach ($mahasiswa as $s) : ?>
            <li><?= $s; ?></li>
            <?php endforeach; ?> -->

        
            <li>Nama : <?php echo $mhs[0]; ?></li>
            <li>NIK : <?php echo $mhs[1]; ?></li>
            <li>Jurusan : <?php echo $mhs[2]; ?></li>
            <li> Email : <?php echo $mhs[3]; ?></li>
        </ul>
<?php endforeach;?>
</body>

</html>