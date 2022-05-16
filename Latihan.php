<!-- <?php
// sintaks php
// echo/ print
// pint_r 
// var_dump = untuk debugging

// Penulisan sintaks PHP
// 1. php di dalam HTML
// 2. HTML di dalam php

// Variabel dan tipe data

// $nama = "Rizki Irwansyah";
// echo "Halo nama saya $nama";

// operator 
// operator aritmatika
// + - * / %
// $x = 3;
// $y = 4;
// echo $x + $y;

// operator penggabung string
// .
// $nama_depan ="Rizki";
// $nama_belakang="Irwansyah";
// echo $nama_depan . " " . $nama_belakang;

// operator Assignment
// =, +=. -=, *=, /=, %=, .=
// $x =5;
// $x *=2;
// echo $x;

//  perbandingan 
// < > =< >= == !=
// var_dump(6 > 3);

// identitas
// === , !==
// var_dump(1 !== "1")

// Operator Logika
// $$, ||, !
// $x = 50;
// var_dump($x > 10 && $x % 10 == 0)
// ?>
// <!DOCTYPE html>
// <html lang="en">
// <head>
//     <meta charset="UTF-8">
//     <meta http-equiv="X-UA-Compatible" content="IE=edge">
//     <meta name="viewport" content="width=device-width, initial-scale=1.0">
//     <title>Document</title>
// </head>
// <body>
//     <h1>Belajar <?php echo "PHP dasar";?></h1>
//     <p>Bersama<?php 
//         $nama ="Programming Unpas";
//         echo " $nama";
//         echo "<br><br>";
//         printf("Operator aritmatika");
//         echo ": ";
//         $x = 9;
//         $y = 4; 
//         echo $x + $y;
//         ?>
//     </p>
//         <?php 
//             echo "Operator Penggabung string";   
//             $depan ="Selasa 19";
//             $belakang ="April 2022";
//             echo ": ";
//             echo $depan . $belakang;
//         ?>
//     <p>
//         <?php
//         echo "Operator Assignment";
//         echo ": ";
//         $x = 5;
//         $x += 2;
//         echo $x; 
//         echo "<br>";

//         echo "Operator Perbandingan";
//         echo ": ";
//         $a = 5;
//         $b = 10;
//         var_dump($a < $b);

        // echo "<br>";
        // echo "Operator identitas";
        // echo ": ";
        // var_dump(1 !== "1");

//         echo "<br>";
//         echo "Operator Logika";
//         echo ": ";
//         $z= 20;
//         var_dump($z > 30 || $z % 10 == 0)
//         ?>
//     </p>
// </body>
// </html>

<!-- 5. Struktur kendali -->
<!-- control flow -->
<!-- Pengulangan dan pengkondisian -->

<?php 
// pengulangan 
// for, while. do.. while, foreach: Pengulangan khusus array

// for ($i=0; $i < 4; $i++) { 
//     echo "Rizki <br>";
// }

// $i=0;
// while($i < 6) {
//     echo "Rizki<br>";
//     $i++;
// }

// $i =0;
// do {
//     echo "<br>Hello world <br>";
// $i++;
// } while ($i <= 2);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
       <?php for ($i= 1; $i <= 3; $i++) : ?>
            <tr>
                <?php  for ($j= 1; $j <= 5; $j++) :?>
                    <td><?= "$i, $j"?></td>
                <?php endfor;?>
            </tr>
        <?php endfor; ?>
    </table>
</body> 
</html>
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .warna {
            background-color: red;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing="0">
        <?php for($i= 1; $i <= 5; $i++) : ?>
            <?php if($i % 2 ==1 ) :?>
                <tr class="warna">
            <?php else :?>
                <tr>
            <?php endif; ?>
                <?php for($j= 1; $j <= 5; $j++) :?>
                    <td><?= "$i, $j"?></td>
                <?php endfor;?>
            </tr>
            <?php endfor;?> 
    </table>
</body>
</html> -->


<!-- Pengkondisian -->
<!-- if else, if else, if else, ternary, switch -->
<!-- <!-- <?php 
    $x=8;
    if ($x < 20) {
        echo "True";
    } else if($x == 20) {
        echo "Bingo!";
    } else {
        echo "false";
    }

// ?>

