<?php

$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// tampilkan data
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

// tambah data
function tambah($data)
{
    // ambil data dari tiap elemen dalam form
    global $conn;
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    // upload gambar jalankan function upload gambar
    $gambar = upload();

    if (!$gambar) {
        return false;
    }

    $query = "INSERT INTO mahasiswa
                        VALUES
                        ('', '$nama', '$nis', '$email', '$jurusan', '$gambar')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

// upload gambar
function upload()
{
    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $erorr = $_FILES['gambar']['erorr'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // cek jika tidak ada gambar yang di upload
    if ($erorr === 4) {
        echo "<script>
                    alert('pilih gambar terlebih dahulu');
                </script>";
        return false;
    }


    // cek apakah yang diupload adalah gambar
    $extensiGambarvalid = ['jpg', 'jpeg', 'png'];
    $extensiGambar = explode('.', $namaFile);
    $extensiGambar = strtolower(end($extensiGambar));

    if (!in_array($extensiGambar, $extensiGambarvalid)) {
        echo "<script>
                    alert('Maaf yang anda upload bukan gambar !');
                </script>";
        return false;
    }

    // cek jika ukurannya terlalu besar
    if ($ukuranFile > 5000000) {
        echo "<script>
                    alert('Maaf file yang anda upload ukurannya terlalu besar !');
                </script>";
        return false;
    }


    // geberate nama gambar baru
    $namaFilebaru = uniqid();
    $namaFilebaru .= '.';
    $namaFilebaru .= $extensiGambar;

    // berhasil pengecekan gambar siap diupload
    move_uploaded_file($tmpName, 'images/' . $namaFilebaru);

    return $namaFilebaru;
}

// hapus data
function hapus($id)
{
    global $conn;
    mysqli_query($conn, "DELETE FROM mahasiswa WHERE id = $id");
    return mysqli_affected_rows($conn);
}

// ubah data
function ubah($data)
{
    global $conn;

    $id = $data["id"];
    $nama = htmlspecialchars($data["nama"]);
    $nis = htmlspecialchars($data["nis"]);
    $email = htmlspecialchars($data["email"]);
    $jurusan = htmlspecialchars($data["jurusan"]);

    $gambarLama = htmlspecialchars($data["gambarLama"]);

    // cek user apakah user upload gambar baru atau tidak
    if ($_FILES['gambar']['error'] === 4) {
        $gambar = $gambarLama;
    } else {
        $gambar = upload();
    }

    $query = "UPDATE mahasiswa SET 
                nama = '$nama',
                nis = '$nis',
                email = '$email',
                jurusan = '$jurusan',
                gambar = '$gambar'
            WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword)
{
    $query = "SELECT * FROM mahasiswa WHERE
                nama LIKE '%$keyword%' OR
                nis LIKE '%$keyword%' OR
                email LIKE '%$keyword%' OR
                jurusan LIKE '%$keyword%'
            ";
    return query($query);
}

function registrasi($data)
{
    global $conn;

    $username = strtolower(stripslashes($data["username"]));
    $password = mysqli_real_escape_string($conn, $data["password"]);
    $password2 = mysqli_real_escape_string($conn, $data["password2"]);

    // cek username udah ada atau belum
    $result = mysqli_query($conn, "SELECT username FROM users WHERE username = '$username'");

    if(mysqli_fetch_assoc($result)){
        echo "
                <script>
                    alert('username sudah terdaftar');
                </script>
            ";
        return false;
    }

    // cek konfirmasi password
    if ($password !== $password2) {
        echo "
            <script>
                alert('konfirmasi password tidak sesuai');
            </script>
        ";
        return false;
    }
    // enkripsi passwordnya
    $password = password_hash($password, PASSWORD_DEFAULT);
    

    // tambahkan user baru ke database
    mysqli_query($conn, "INSERT INTO users VALUES('', '$username', '$password')");

    return mysqli_affected_rows($conn);
}
