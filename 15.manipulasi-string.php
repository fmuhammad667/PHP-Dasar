<?php

$nama = "Fadhil Muhammad";

/*
biasanya kita menulis dengan
echo "Nama : ";
echo $nama;
echo "\n"
*/

// kita bisa menyingkatnya
echo "Nama : " . $nama . PHP_EOL;
echo "Value : " . 100 . PHP_EOL;


// Konversi Tipe data
$valueString = (string)100;
var_dump($valueString);

$valueInt = (int)"salah"; // jika datanya tidak valid maka akan dikonversi menjadi 0
var_dump($valueInt);

$valueFloat = (float)"16.07";
var_dump($valueFloat);


// mengakses karakter
$name = "Fadhil";
echo $name[0] . PHP_EOL;
echo $name[1] . PHP_EOL;
echo $name[2] . PHP_EOL;
echo $name[3] . PHP_EOL;
echo $name[4] . PHP_EOL;
echo $name[5] . PHP_EOL;
// echo $name[6] . PHP_EOL; // jika lebih dari kapasitas string maka akan error


// Variable parsing
$user = "Fadhil";
echo "Hallo " . $user . ", Selamat Belajar PHP " . PHP_EOL; // jika dengan cara sebelumnya
echo "Hello $user, Selamat Belajar PHP" . PHP_EOL;


// Curly Brace
$var = "Car";
echo "This is {$var}'s" . PHP_EOL;
