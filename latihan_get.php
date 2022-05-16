<?php
$siswa = [
    [
        "nama" => "Rizki",
        "nrp" => "123",
        "email" => "rizki@gmail.com",
        "jurusan" => "Hukum",
        "gambar" => "Logo_Kampus.png"
    ],
    [
        "nama" => "Irwansyah",
        "nrp" => "122",
        "email" => "irwansyah@gmail.com",
        "jurusan" => "Sastra",
        "gambar" => "remove.png"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ($siswa as $mhs) : ?>
            <li>
                <a href="latihan_get1.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&email=<?= $mhs["email"]; ?>
                    &jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>

</html>