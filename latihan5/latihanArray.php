<?php 
    // pengulangan pada array
    // for / foreach

    $angka = [19,5,6,4,1,8,44,7,12];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan 2</title>
    <style>
        .kotak{
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height:50px;
            margin: 3px;
            float: left;
        }

        .clear{
            clear: both;
        }
    </style>
</head>
<body>

<!-- cara 1 -->
<?php for($i = 0; $i < count($angka); $i++) : ?>
    <div class="kotak"><?php echo $angka[$i] ?></div>
<?php endfor; ?>

<div class="clear"></div>

<!-- cara 2 dengan foreach-->
<?php foreach($angka as $a ): ?>
    <div class="kotak"><?php echo $a ?></div>
<?php endforeach; ?>

<div class="clear"></div>

<!-- cara 3 memperbaiki sintaks foreach dengan templating-->
<?php foreach($angka as $a) : ?>
    <div class="kotak"><?= $a ?></div>
<?php endforeach;?>
<!-- foreach unutk setiap elemen yang ada di dalam array lakukan sesuatu-->
</body>
</html>