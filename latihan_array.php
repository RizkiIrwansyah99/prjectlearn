<?php
$mahasiswa = [
    ["Rizki Irwansyah", "181011400368", "Teknik Informatika", "rizki@gmail.com"],
    ["Rizki Irwansyah", "181011400368", "Teknik Informatika", "rizki@gmail.com"]
];

// Array associative (keynya buat sendiri) -->

$siswa = [
    ["nama" => "Rizki", "nrp" => "123", "gambar" => "Logo_Kampus.png"],
    ["nama" => "Irwansyah", "nrp" => "122", "gambar" => "remove.png"]
];

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mahasiswa</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: palegreen;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 1s;
        }

        .kotak:hover {
            transform: rotate(360deg);
            border-radius: 50%;
        }
    </style>
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mh) : ?>
        <ul>
            <li><?= $mh[0]; ?></li>
        </ul>
    <?php endforeach; ?>

    <?php foreach ($siswa as $mhs) : ?>
        <ul>
            <li>
                <img src="img/<?= $mhs["gambar"]; ?>">
            </li>
            <li>nama :<?= $mhs["nama"]; ?></li>
            <li>nrp :<?= $mhs["nrp"]; ?></li>
        </ul>
    <?php endforeach; ?>


    <body>

        <?php
        $angka = [[1, 2], [3, 4], [5, 6]];
        ?>
        <?php foreach ($angka as $a) : ?>
            <?php foreach ($a as $b) : ?>
                <div class="kotak"><?= $b; ?></div>
            <?php endforeach; ?>
        <?php endforeach; ?>

</html>