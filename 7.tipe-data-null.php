<?php

$name = "Fadhil";
$name = null; // case insensitive

$age = null;

echo "Name : ";
echo $name;
echo "\n";

echo "Age : ";
echo $age;
echo "\n";

// is_null($variable);
// function yang mengecheck apakah variable datanya null atau tidak ?
// returnnya ialah boolean

// $name = "Fadhil Muhammad"; jika kita rubah value variablenya maka akan bernilai false

echo "variable is name null ? : ";
var_dump(is_null($name));
echo "\n";

// unset($variable);
// function yang menghapus sebuah variable
$contoh = "Fadhil Muhammad";
unset($contoh);

// echo $contoh; // hasilnya akan error, karena variable contoh telah terhapus menggunakan function

// isset($variable)
// function yang digunakan untuk mengecheck apakah variable ada atau tidak, dan bernilai null atau tidak
$contoh = "Kurniawan"; // nilainya true, karena variable contoh ada dan nilainya tidak null
$contoh = NUlL; // nilainya false, karena bernilai null, meski variable tersebut ada

var_dump(isset($contoh));
