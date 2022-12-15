<?php

$counter = 1;
while($counter <= 10) {
    echo "Hello while loop, Counter ke-$counter" . PHP_EOL;
    $counter++;
}

// Syntax Alternative
$counter = 10;
while($counter >= 1) {
    echo "Hello while loop, Counter ke-$counter" . PHP_EOL;
    $counter--;
}