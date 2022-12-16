<?php

function sum(int $first, int $second): int // return type declaration
{
    $total = $first + $second;
    return $total; // jika misal kita ganti returnnya menjadi string maka ia akan error
}

$hasil1 = sum(10, 10);
var_dump($hasil1);

$hasil2 = sum(100, 150);
var_dump($hasil2);


// defaultnya return value hanya bisa mengembalikan satu data saja
// namun kita dapat menambahkan beberapa data dengan menggunakan percabangan

function getFinalValue(int $hasil): string // return type declaration
{
    if ($hasil >= 80) {
        return "A";
    } else if ($hasil >= 70) {
        return "B";
    } else if ($hasil >= 60) {
        return "C";
    } else if ($hasil >= 50) {
        return "D";
    } else {
        return 1; // php memiliki type jugling, meski kita menulis int, ia akan dikonversi menjadi string
    }

    echo "Hello world!" . PHP_EOL;
    // teks hello world! ini tidak akan pernah dieksekusi
    // disaat blok kode menemui kata return, maka blok kode bawahnya tidak akan pernah dieksekusi lagi 
}

$score1 = getFinalValue(90);
var_dump($score1);

$score2 = getFinalValue(40);
var_dump($score2);