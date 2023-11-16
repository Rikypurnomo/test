<?php
function ujian()
{
    return rand(1, 20) * 5;
}

for ($i = 0; $i < 5; $i++) {
    $nilai = ujian();
    echo $nilai;

    if ($nilai > 80) {
        echo " Luar Biasa";
    } elseif ($nilai  > 60 && $nilai <= 70) {
        echo " Cukup";
    } elseif ($nilai  > 70 && $nilai <= 80) {
        echo " Baik";
    } else {
        echo "kurang";
    }

    echo PHP_EOL;
}
?>
