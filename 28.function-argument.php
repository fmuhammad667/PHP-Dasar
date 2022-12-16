<?php

function sayHello($name = "Anonymous") 
{
    echo "Hello $name" . PHP_EOL;
}

sayHello("Fadhil");
sayHello("Mitsurugi");
sayHello();


// default argument value
function hello($firstname, $lastname = ""){
    echo "Hello $firstname $lastname" . PHP_EOL;
}

hello("Muhammad");
hello("Kyouya", "Mitsurugi");


// type declaration
function sum(int $first, int $last) // disaat kita mengirim argument, php akan mengecheck apakah tipe datanya int, atau bukan
{
    $total = $first + $last;
    echo "Total = $first + $last = $total" . PHP_EOL;
}

sum(100, 100);
sum("100", "100");
sum(true, false);
sum(16.7, 20.3); // jika floating poing maka dibulatkan
// sum([], []); // error karena array tidak bisa dikonversi ke int


// tanpa menggunakan Variable Length Argument List
function sumAllArray(array $values)
{
    $total = 0;
    foreach($values as $value){
        $total += $value;
    }
    echo "Total " . implode(", ", $values) . " = $total" . PHP_EOL; 
}

sumAllArray([1,2,3,4,5]);


// menggunakan variable length argument list
function sumAll(...$values) // menambahkan titik tiga kali
{
    $total = 0;
    foreach($values as $value){
        $total += $value;
    }
    echo "Total " . implode(", ", $values) . " = $total" . PHP_EOL; 
}

// pemanggilannya tidak perlu menggunakan array
sumAll(1,2,3,4,5);

// semisal kita terlanjur mempunyai data array kita bisa tambahkan (...) disebelum nama array
$contoh = [1,2,3,4,5];

// sumAll($contoh); // hasilnya error
sumAll(...$contoh);



