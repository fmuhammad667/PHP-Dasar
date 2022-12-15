<?php

for($counter = 1; $counter <= 10; $counter++ ) {
    echo "ini adalah for loop ke-$counter" . PHP_EOL;
}

// Decrement
for($counter = 10; $counter >= 1; $counter-- ) {
    echo "ini adalah for loop ke-$counter" . PHP_EOL;
}

// syntax alternative
for($counter = 1; $counter <= 10; $counter++):
    echo "hello for loop ke-$counter" . PHP_EOL;
endfor;