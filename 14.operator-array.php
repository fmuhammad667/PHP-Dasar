<?php

$awal = [
    "nama_depan" => "Fadhil"
];

$akhir = [
    "nama_depan" => "Ramadhan", 
    // jika terdapat key yang sama, maka yang didahulukan adalah yang variable yang ditulis diawal
    // lain lagi semisal kita balikan jadi $full = $akhir + $awal
    // maka yang didahulukan adalah variable $akhir;
    "nama_akhir" => "Muhammad"
];

// operasi union (Penggabungan)
$full = $awal + $akhir;
var_dump($full);

$a = [
    "nama_awal" => "Fadhil",
    "nama_akhir" => "Muhammad"
];

$b = [
    "nama_akhir" => "Muhammad",
    "nama_awal" => "Fadhil"
];

// Equality
var_dump($a == $b); 
// ini berfungsi untuk mengecheck apakah key-value-nya sama meski posisi berbeda

// Identity
var_dump($a === $b);
// ini berfungsi untuk mengecheck apakah key-value-nya sama dan posisinya sama

// Inequality
var_dump($a != $b);
// ini berfungsi untuk mengecheck apakah key-value-nya tidak sama

// Nonidentity
var_dump($a !== $b);
// ini berfungsi untuk megecheck apakah key-value-nya tidak sama dan juga posisinya