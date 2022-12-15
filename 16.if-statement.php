<?php

$nilai = 70;
$absen = 100;

if ($nilai >= 75 && $absen >= 75){
    echo "Selamat anda lulus" . PHP_EOL;
} else {
    echo "Maaf, anda tidak lulus" . PHP_EOL;
}

// else-if
$nilaiUjian = 80;
$kehadiran = 100;
if ($nilaiUjian >= 80 && $kehadiran >= 80){
    echo "Anda mendapatkan nilai A" . PHP_EOL;
} else if ($nilaiUjian >= 70 && $kehadiran >= 70){
    echo "Anda mendapatkan nilai B" . PHP_EOL;
} else if ($nilaiUjian >= 60 && $kehadiran >= 60){
    echo "Anda mendapatkan nilai C" . PHP_EOL;
} else if ($nilaiUjian >= 50 && $kehadiran >= 50){
    echo "Anda mendapatkan nilai D" . PHP_EOL;
} else {
    echo "Anda mendapatkan nilai E" . PHP_EOL;
}

// Syntax alternative
if ($nilaiUjian >= 80 && $kehadiran >= 80):
    echo "Anda mendapatkan nilai A" . PHP_EOL;
elseif ($nilaiUjian >= 70 && $kehadiran >= 70):
    echo "Anda mendapatkan nilai B" . PHP_EOL;
elseif ($nilaiUjian >= 60 && $kehadiran >= 60):
    echo "Anda mendapatkan nilai C" . PHP_EOL;
elseif ($nilaiUjian >= 50 && $kehadiran >= 50):
    echo "Anda mendapatkan nilai D" . PHP_EOL;
else :
    echo "Anda mendapatkan nilai E" . PHP_EOL;
endif;