<?php
//menghitung faktorial
function hitungfaktorial($n) {
    $hasil = 1;
    for ($i = 1; $i <= $n; $i++) {
        $hasil *= $i;
    }
    return $hasil;

}

//contoh pengunaan 
$n = 5;
$faktorial = hitungfaktorial($n);
echo "faktorial dari $n adalah: $faktorial";

?>