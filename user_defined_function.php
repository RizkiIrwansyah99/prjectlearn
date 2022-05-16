<?php 
    function salam($waktu="pagi", $name="Rizki") {
        return "Selamat $waktu, $name";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Function</title>
</head>
<body>
     <h1><?= salam("Pagi", "Rizki"); ?></h1>
</body>
</html>