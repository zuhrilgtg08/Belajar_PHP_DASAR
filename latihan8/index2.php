<?php
        //mengkoneksikan dengan database
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

//ambil data dari database
$mahasiswa = query("SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari object result yang telah dibuat
// ada 4 yaitu
//  mysqli_fetch_row() mengembalikan array numeric indeks dengan angkanya
// mysqli_fetch_assoc() mengembalikan array assoiative
// mysqli_fetch_array() mengembalikan array assoc dan numerik
// mysqli_fetch_object() mengembalikkan dengan objectnya


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>

    <!-- boostrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <h1 class="text-center mb-3">Daftar Mahasiswa</h1>

    <table class="table table-striped text-center">
        <tr class="table table-dark">
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIK</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <button class="bg-success"><a href="#" style="text-decoration: none; color:#fff;">Ubah</a> </button>
                    <button class="bg-danger"><a href="#" style="text-decoration: none; color:#fff;">Hapus</a></button>
                </td>
                <td><img src="images/<?= $mhs["gambar"]; ?>" width="50" alt=""></td>
                <td><?= $mhs["nis"]; ?></td>
                <td><?= $mhs["nama"]; ?></td>
                <td><?= $mhs["email"]; ?></td>
                <td><?= $mhs["jurusan"]; ?></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>


    </table>
</body>

</html>