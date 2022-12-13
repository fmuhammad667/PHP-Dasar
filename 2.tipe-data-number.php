<?php

// tipe data integer
echo "Desimal : ";
var_dump(1234);

echo "Octal : ";
var_dump(01234);

echo "Hexadecimal : ";
var_dump(0x1A);

echo "Binary : ";
var_dump(0b11111111);

echo "Underscore di number : ";
var_dump(1_234_567_890);

// tipe data floating pont
echo "Floating point : ";
var_dump(1.234);

echo "Floating point dengan menggunakan E notation (1.7 x 1000) : ";
var_dump(1.7e3);

echo "Floating point dengan menggunakan E notation minus (1.7 x 0.001) : ";
var_dump(1.7e-3);

echo "Underscore di floating point : ";
var_dump(1_123.123);

// integer overflow
// tergantung kapasitas bit sistem operasi
// untuk 32 bit (2147483647)
// untuk 64 bit (9223372036854775807)

echo "Integer overflow (64 bit) : ";
var_dump(9223372036854775808); // yang belakang ditambah 1