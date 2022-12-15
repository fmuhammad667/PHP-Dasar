<?php

$gender = "PRIA";
$hi = null;
$say = null;

// pengecheckan tanpa menggunakan ternary operator
if ($gender == "PRIA") {
    $hi = "Hallo, bro!";
} else {
    $hi = "Hallo, nona!";
}

echo $hi . PHP_EOL;

// menggunakan ternary operator
$say = $gender == "PRIA" ? "Hi men" : "Hi ladies";
echo $say . PHP_EOL;

