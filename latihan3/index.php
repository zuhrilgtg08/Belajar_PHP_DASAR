<?php
// // control flow
// // pengulangan
// // for
// for($i = 0; $i < 5; $i++){
//     echo "HELLO WORLD <br>";
// }

// // while
// //dicek dulu baru di jalankan jika (true)
// $j = 0;
// while($j < 5){
//     echo "HAI ZUHRIL <br>";
// $j++;
// }

// // do while
// // dijalanlan sekali baru dicek jika bernilai (false) maka berhenti
// $x = 0;
// do{
//     echo "HAI KALIAN <br>";
//     $x++;
// }while($x < 5 );
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 3</title>
    <style>
        .warna-baris{
            background-color: lightblue;
        }
    </style>
</head>

<body>
    <table border="1" cellpadding="10 cellspacing=" 0">
        <!-- <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
            <td>1,5</td>
        </tr>

        <tr>
            <td>2,1</td>
            <td>2,2</td>
            <td>2,3</td>
            <td>2,4</td>
            <td>2,5</td>
        </tr>

        <tr>
            <td>3,1</td>
            <td>3,2</td>
            <td>3,3</td>
            <td>3,4</td>
            <td>3,5</td>
        </tr> -->


            <!-- // for($i = 1; $i <= 3; $i++){ -->
            <!-- //     echo "<tr>"; -->
            <!-- //         for($j = 1; $j <= 5; $j++){ -->
            <!-- //             echo "<td>$i, $j</td>"; -->
            <!-- //         } -->
            <!-- //     echo "</tr>"; -->
            <!-- // } -->


            <?php for ($i = 1; $i <= 10; $i++):?>
                <?php if($i % 2 == 1):?>
                <tr class="warna-baris">
                <?php else : ?>
                    <tr>
                <?php endif; ?>
                    <?php for ($j = 1; $j <= 10; $j++):?>
                        <td>
                            <?= "$i, $j"; ?>
                        </td>
                    <?php endfor; ?>
                </tr>
            <?php endfor; ?>
        <!-- ?> -->
    </table>
</body>

</html>