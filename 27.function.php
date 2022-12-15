<?php

function sayHello()
{
    echo "Hello Function" . PHP_EOL;
}

// pemanggilan function
sayHello();
sayHello();
sayHello();
sayHello();
sayHello();

// lokasi pembuatan function sangat flexible
// bahkan bisa juga didalam if statement
$buat = true;

if($buat) {
    function hello() {
        echo "Hello Boys!" . PHP_EOL;
    } // jika $buat bernilai false maka php tidak akan mengenali function yang namanya hello()
}

hello();
hello();