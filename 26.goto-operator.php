<?php

// penggunaan goto sederhana
goto a;
echo "Hello World!" . PHP_EOL;

a:
echo "Hello A" . PHP_EOL;

// goto juga bisa digunakan dalam perulangan
$counter = 1;
while (true) {
    echo "Perulangan ke-$counter" . PHP_EOL;
    $counter++;
    if($counter > 10) {
        goto end; // disaat menemukan kata kunci end, ia akan keluar dari perulangan dan menghentikannya
    }
}

end:
echo "perulangan selesai" . PHP_EOL;