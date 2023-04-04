<?php
for ($i=1; $i <=10 ; $i++) {
    $hasil = 0;
    for ($z=1; $z <=$i ; $z++) {
        // angka awal variable z adalah i , jika variable z kurang dari SAMA DENGAN hasil dari variable i berarti 50 juga , z increment
        if ($i % $z == 0) {
            // Jika i dibagi z  hasilnya habis
            $hasil++;
        }
    }
    if ($hasil == 2) {
        echo $i. ' ';
    }
}
?>
