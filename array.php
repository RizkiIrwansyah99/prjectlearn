<?php 
// array = variabel yang memiliki nilai yang banyak dan memiliki type data yg berbeda

$bulan = array("Januari", "Februri", "maret");
// atau

$hari =["senin", "selasa", "Rabu"];

// Menampilkan Array
// var_dump($bulan);
// echo"<br>";

// print_r($hari);

// // menampilkan 1 elemen array
// echo $hari[2];

// Menambahkan elemen array yg sudah dibuat
// var_dump($hari);
// echo "<br>"; 
// $hari[]="Kamis";
// var_dump($hari);
echo "<br>";

// Pengulangan pada array menggunakan foreach
    $angka =[1,2,4,6,5,3,6,0,3];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
        div {
            width: 50px;
            height: 50px;
            background-color: red;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
    </style>
</head>
<body>
    <?php foreach($angka as $a) : ?>
        <div class="clear"><?= $a; ?></div>
    <?php endforeach; ?>
</body>
</html>