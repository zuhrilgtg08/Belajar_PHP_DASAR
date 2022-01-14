<?php
session_start();
if(isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}

require 'function.php';

// ambil data di url
$id = $_GET["id"];

// query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];

// cek apakah tombol submit sudah pernah ditekan atau belum
if (isset($_POST["ubah"])) {

    // cek apakah data berhail di ubah atau belum
    if (ubah($_POST) > 0) {
        echo "
            <script>
                alert('Data Berhasil Di Ubah');
                document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
                alert('Data Gagal Di Ubah');
                document.location.href = 'index.php';
            </script>
        ";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data Mahasiswa</title>

    <!-- bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!-- style css custom -->
    <link href="css/style.css" rel="stylesheet" />
</head>

<body>
    <h1 class="text-center text-uppercase">Ubah Data Mahasiswa</h1>

    <form action="" method="POST" enctype="multipart/form-data">

        <!-- hidden input untuk id -->
        <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">

        <!-- hidden input untuk gambarLama user -->
        <input type="hidden" name="gambarLama" value="<?= $mhs["gambar"]; ?>">

        <div class="baris">
            <button class="bg-warning mb-3"><a href="index.php">Kembali</a></button>

            <div class="form-group mb-3">
                <label for="nis" class="form-label">Nama Siswa : </label>
                <input type="text" class="form-control" name="nama" id="nama" required value="<?= $mhs["nama"]; ?>">
            </div>

            <div class="form-group mb-3">
                <label for="nama" class="form-label">NIS Siswa : </label>
                <input type="text" class="form-control" name="nis" id="nis" required value="<?= $mhs["nis"]; ?>">
            </div>

            <div class="form-group mb-3">
                <label for="email" class="form-label">Email : </label>
                <input type="text" class="form-control" name="email" id="email" required value="<?= $mhs["email"]; ?>">
            </div>

            <div class="form-group mb-3">
                <label for="jurusan" class="form-label">Jurusan : </label>
                <input type="text" class="form-control" name="jurusan" id="jurusan" required value="<?= $mhs["jurusan"]; ?>">
            </div>

            <div class="form-group mb-3">
                <label for="gambar" class="form-label">Gambar : </label>
                <img src="images/<?= $mhs["gambar"]; ?>" alt="">
                <input type="file" class="form-control" name="gambar" id="gambar">
            </div>

            <div class="mb-3">
                <button type="submit" name="ubah" class="bg-success text-white">Ubah Data !</button>
            </div>
        </div>
    </form>
</body>

</html>