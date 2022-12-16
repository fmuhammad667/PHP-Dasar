<?php

function foo() 
{
    echo "Foo" . PHP_EOL;
}

function bar() 
{
    echo "Bar" . PHP_EOL;
}

$variableFunction1 = "foo";
$variableFunction1();

$variableFunction2 = "bar";
$variableFunction2();

function sayHello(string $nama, $filter)
{
    $finalName = $filter($nama);
    echo "Hello $finalName" . PHP_EOL;
}

function samplefunction(string $nama): string
{
    return "sample $nama";
}

sayHello("Fadhil", "samplefunction");
sayHello("Fadhil", "strtoupper");
sayHello("Fadhil", "strtolower");