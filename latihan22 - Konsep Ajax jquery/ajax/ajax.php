<?php
// sleep(1);
usleep(500000);
require '../function.php';

$key = $_GET["key"];


$query = "SELECT * FROM mahasiswa WHERE
                nama LIKE '%$key%' OR
                nis LIKE '%$key%' OR
                email LIKE '%$key%' OR
                jurusan LIKE '%$key%'
            ";
$mahasiswa = query($query);

?>

<div class="table-responsive">
    <table class="table table-striped text-center">
        <tr class="table table-dark">
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $mhs) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td>
                    <button class="bg-success"><a href="ubah.php?id=<?= $mhs["id"]; ?>">Ubah</a> </button>
                    <button class="bg-danger"><a href="hapus.php?id=<?= $mhs["id"]; ?>" onclick="return confirm('Yakin ingin dihapus');">Hapus</a></button>
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
</div>