<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
    <style>
        .warna-kolom{
            background-color: green;
        }

        .warna-baris{
            background-color: red;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for($i = 1; $i <= 10; $i++):?>
            <?php if ($i % 2 == 1):?>
                <tr class="warna-baris">
            <?php else : ?>
            <tr>
            <?php endif;?>

            <?php for($j = 1; $j <= 10; $j ++):?>
                <?php if($j % 2 == 1):?>
                    <td class="warna-kolom">
                <?php else : ?>
                <td>
                <?php endif;?>
                    <?= "$i, $j"; ?>
            <?php endfor; ?>
            <?php endfor; ?>
    </table>
</body>
</html>