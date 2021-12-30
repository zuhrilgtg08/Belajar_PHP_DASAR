<!-- <?php 
    // //array
    // // membuat array cara lama
    // $hari = array("senin", "selasa", "rabu");

    // // cara baru
    // $bulan = ["januari", "februari", "maret"];
    // $arr = [100, "nama", 0.4, true];
    
    // // array multidemensi
    // $siswa = [
    //     ["akmal", "1245", "rpl"],
    //     ["rizal", 43536, "mesin"]
    // ];

    // // menampilkan array unutk debugging
    // var_dump($hari);
    // echo "<br>";
    // print_r($bulan);

    // // menampilkan 1 elemen pada array
    // echo $arr[0];
?> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Menampilkan array dengan kotak</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: green;
            text-align: center;
            line-height: 50px;
            margin: 5px;
            float: left;
            transition: 1s;
        }

        .kotak:hover{
            transform: rotate(360deg);
            border-radius: 50%;
        }

        .clear{
            clear: both;
        }
    </style>
</head>
<body>
    <?php 
        $angka = [
            [1,2,3],
            [4,5,6],
            [7,8,9]
        ];
    // echo $angka[2][2];
    ?>

    <?php foreach($angka as $a):?>
        <?php foreach($a as $tmp): ?>
            <div class="kotak"><?= $tmp ?></div>
        <?php endforeach; ?>

        <div class="clear"></div>
    <?php endforeach; ?>
</body>
</html>