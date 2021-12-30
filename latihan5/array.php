<?php 
    // array
    // elemen pada array boleh memiliki tipe data yang berbeda
    // variable yang dapat menampung banyak nilai
    // ada 2 cara membuat array
    // cara 1 (cara lama)
    // pasangan anatara key dan value 
    // key = index yang dimuali dari 0
    $hari = array("senin", "selasa", "rabu");

    // cara 2 (cara baru)
    $bulan = ["januari", "februari", "maret"];
    $arr1 = [123, "tulisan", false];

    // tampilkan array
    // var_dump() / print_r();
    // var_dump($hari);
    // echo "<br>";
    // print_r($bulan);
    // echo "<br>";

    // tampilkan satu elemen pada array dengan echo
    // echo $arr1[0];
    // echo "<br>";
    // echo $bulan[1];

    // menambahkan elemen baru pada array
    var_dump($hari);
    $hari[] = "kamis";
    $hari[] = "jumat";
    echo "<br>";
    var_dump($hari);
?>