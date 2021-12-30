<?php 
    // date unutk menampilkan tangga dengan format tertentu
    echo date("l, d-M-Y");

    // time
    // unixx timestamp / epoch time
    // detik yang sudah berlalu sejak 1 januari 1970
    // kapan kita pakai waktu time ini
    echo time();

    echo date("l M Y", time()-60*60*24*100);

    // mktime
    // untuk membuat sendiri detik yang kita inginkan
    // mktime(0,0,0,0,0,0);
    // jam, menit, detik, bulan, tanggal, tahun
    echo date("l", mktime(0,0,0, 8, 6, 2004));

    // strtotime
    echo strtotime("06 aug 2004");

    echo date("l", strtotime("06 aug 2004"));
?>

