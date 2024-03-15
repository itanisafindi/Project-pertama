<?php

function kalikan($arr) {
    $total = 1;
    foreach ($arr as $nilai) {
        $total *= $nilai;
    }
    return $total;
}

$angka "Hasil kali: " . kalikan($angka);

?>