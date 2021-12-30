<?php 
    // variable scope / lingkkup variable
    $x =10;
    echo $x;
    echo "<br";

    // variable super global yang bisa diakses didalam php


    //lingkup variable yang berbeda
    function displayX(){
        // $x = 20;
        global $x;
        echo $x;
    }

    displayX();
    echo "<br>";
    echo $x;
?>