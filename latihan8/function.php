<?php

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);

    // siapkan wadah
    $rows = [];
    while ($baris = mysqli_fetch_assoc($result)) {
        $rows[] = $baris;
    }

    return $rows;
}
?>