<?php
require 'function.php';
// koneksi ke database
// $conn = mysqli_connect("localhost", "root", "", "phpdasar");

// cek apakah tombol submit sudah pernah ditekan atau belum
if (isset($_POST["submit"])) {
    // ambil data dari tiap elemen dalam form
    // $nama = $_POST["nama"];
    // $nis = $_POST["nis"];
    // $email = $_POST["email"];
    // $jurusan = $_POST["jurusan"];
    // $gambar = $_POST["gambar"];

    // query insert data
    // $query = "INSERT INTO mahasiswa
    //                 VALUES
    //                 ('', '$nama', '$nis', '$email', '$jurusan', '$gambar')";

    // mysqli_query($conn, $query);

    // cek apakah data berhail di tambahkan atau belum
    if (tambah($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Ditambahkan');
                document.location.href = 'index.php';
            </script>
        ";
    }
    // var_dump(mysqli_affected_rows($conn));

    // if(mysqli_affected_rows($conn) > 0){
    //     echo "Data Berhasil Di Tambahkan";
    // }else{
    //     echo "Data Gagal Di tambahkan";
    //     echo "<br>";
    //     echo mysqli_error($conn);
    // }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Mahasiswa</title>

    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- style css custom -->
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <h1 class="text-center text-uppercase">Tambah Data Mahasiswa</h1>

    <form action="" method="POST">
        <div class="baris">
            <button class="bg-warning mb-3"><a href="index.php">Kembali</a></button>

            <div class="form-group mb-3">
                <label for="nis" class="form-label">Nama Siswa : </label>
                <input type="text" class="form-control" name="nama" id="nama" required>
            </div>

            <div class="form-group mb-3">
                <label for="nama" class="form-label">NIS Siswa : </label>
                <input type="text" class="form-control" name="nis" id="nis" required>
            </div>

            <div class="form-group mb-3">
                <label for="email" class="form-label">Email : </label>
                <input type="text" class="form-control" name="email" id="email" required>
            </div>

            <div class="form-group mb-3">
                <label for="jurusan" class="form-label">Jurusan : </label>
                <input type="text" class="form-control" name="jurusan" id="jurusan" required>
            </div>

            <div class="form-group mb-3">
                <label for="gambar" class="form-label">Gambar : </label>
                <input type="text" class="form-control" name="gambar" id="gambar">
            </div>

            <div class="mb-3">
                <button type="submit" name="submit" class="bg-success text-white">Tambah Data !</button>
            </div>
        </div>
    </form>
</body>

</html>