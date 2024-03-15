<?php
function cekBilanganprima($angka) {
    if($angka <= 1) {
        return true;
    }
    for($i =2; $i <= sqrt($angka); $i++) {
        if($angka % $i == 0) {
            return false;

        }
    }
    return true;
}

//contoh penggunaan
$angka = 17;
if (cekbilanganprima($angka)) {
    echo "$angka adalah bilangan prima";
}else {
    echo "$angka bukan bilangan prima";
}
?>