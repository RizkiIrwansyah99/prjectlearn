<!--Function date haru ada parametert
    dengan format tertentu -->
<!-- <?php 
    echo date("l");
?> -->
<!-- Time -->
<!-- <?php 
    echo date("d M Y", time()+60*60*24*5);
?> -->

<!-- mktime (membuat sendiri detiknya)-->
<!-- mktime(0,0,0,0,0,0,) -->
<!-- jam, menit, detik, bulan, tanggal, tahun -->
<!-- <?php 
    echo date("l", mktime(0,0,0,6,5,2000));
?> -->

<!-- strtotime berbeda dari mktime menggunakan time yang kompleks kalau ini menggunakan string -->
<!-- <?php 
echo date ("l", strtotime("6 mei 2000"));
?> -->

<?php
    echo date("l", mktime(0,0,0,4,4,2022));

echo "<br>";


?>



