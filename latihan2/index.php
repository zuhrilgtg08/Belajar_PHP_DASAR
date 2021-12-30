<?php
// komentar dalam php
// sintaks php
// stardard output (unutk mencetak sesuatu pada layar)
// echo, print, print_r, var_dump


echo "Ahmad Zuhril // cetak dengan echo";
// print "ahmad zuhril // cetak dengan print";
// print_r("halo-halo //ini dengan print_r");
// var_dump("ahmad zuhril");
// 1 php dalam html
// 2 html dalam php
?>

<!-- variable dan tipe data -->
<?php
$nama = "zuhril";
$angka = 12;

echo 1+1;
$x = 10;
$y = 16;

// echo $x + $y;
echo $x + $y;

// concatenation penggabungan 2 data string
// menggunakan tanda (.) sebagai operasi penggabungan

$nama_depan = "Ahmad";
$nama_belakang = "Zuhril";
echo $nama_depan . " " . $nama_belakang;

?>

<?php 
    // operator assignmet
    // = , +=, -=, *=, /=, %=, .=

    $nama = "nama saya";
    $nama .= " ";
    $nama .= "Zuhril";
    echo $nama;


    // perbandingan
    // <, >, <=, >=, ==, !=

    // var_dump(1 > 5);
    var_dump(1 === "1");


    // operator identitas
    // ===, !==

    // operator logika
    // &&, ||, !
    $x = 30;
    var_dump($x < 20 && $x % 2 == 0);
    // meskipun ada satu yang betul nilainya false
    // dikarenakan menggunakan logika and
    var_dump($x < 20 || $x % 2 == 0);
    // logika or bila salah satunya true
    
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php01</title>
</head>

<body>
    <h1>selamat datang <?php echo "ahmad zuhril" ?></h1>
    <p><?php echo "selamat datang ini paragraf" ?></p>
    <h1>ini nama dengan variable <?php echo $nama; ?></h1> <br>
    <p> <?php print_r($angka + 12); ?></p> <br>
    <p> <?php print_r($angka - 4); ?></p> <br>
    <p> <?php print_r($angka * 5); ?></p> <br>
    <p> <?php print_r($angka / 4); ?></p> <br>

    <?php
    echo "<h1>halo kalian</h1>";
    // print_r($angka + 12);
    // print_r($angka - 4);
    // echo $angka * 5;
    // echo $angka / 4;
    ?>
</body>

</html>
