<?php

for($i = 1; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        continue; // continue berfungsi untuk melakukan skip pada perulangan
    }
    echo "angka : $i" . PHP_EOL;
}