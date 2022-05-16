<?php 
// koneksi db
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data db
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// mysqli_fetch_assoc() mengembalikan array associative
// mysqli_fetch_row() mengembalikan array numerik 

// while ( $mhs = mysqli_fetch_assoc($result) ) {
// var_dump($mhs["nama"]);
// }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>Gambar</th>
        <th>NRP</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Jurusan</th>
    </tr>

    <?php $i = 1; ?>
    <?php while ($row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">Ubah</a> |
            <a href="">Hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]?>" alt="" width="50"></td>
        <td><?= $row ["nrp"]; ?></td>
        <td><?= $row ["nama"]; ?></td>
        <td><?= $row ["email"]; ?></td>
        <td><?= $row ["jurusan"]; ?></td>
    </tr>
    <?php $i++ ; ?>
    <?php endwhile; ?>
    </table>
</body>
</html>