<?php

$nilai = "A";

// jika perbadingan menggunakan if
if ($nilai == "A") {
    echo "Anda lulus dengan baik" . PHP_EOL;
} else if ($nilai == "B" || $nilai == "C"){
    echo "Anda lulus" . PHP_EOL;
} else if ($nilai == "D") {
    echo "Nilai anda kurang dari kriteria" . PHP_EOL;
} else {
    echO "Anda perlu melakukan remedial" . PHP_EOL;
}

// jika menggunakan switch
switch($nilai){
    case "A" :
        echo "Anda lulus dengan baik" . PHP_EOL;
        break;
    case "B" :
    case "C" :
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D" : 
        echo "Nilai anda kurang dari kriteria" . PHP_EOL;
        break;
    default:
        echo "Anda perlu melakukan remedial" . PHP_EOL;
}


// Syntax Alternative
switch($nilai):
    case "A" :
        echo "Anda lulus dengan baik" . PHP_EOL;
        break;
    case "B" :
    case "C" :
        echo "Anda lulus" . PHP_EOL;
        break;
    case "D" : 
        echo "Nilai anda kurang dari kriteria" . PHP_EOL;
        break;
    default:
        echo "Anda perlu melakukan remedial" . PHP_EOL;
endswitch;