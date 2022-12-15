<?php

$counter = 1;
while(true) {
    echo "Perulangan menggunakan while, counter ke-$counter" . PHP_EOL;
    $counter++;
    if ($counter > 10){
        break;
    }
}
