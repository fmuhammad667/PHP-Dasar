<?php

$a = 10;
$b = $a++;
/* 
ini seperti halnya 
$b = $a;
$a = $a + 1;
*/
var_dump($a); // 11
var_dump($b); // 10

$c = 10;
$d = ++$c;
/* 
ini seperti halnya
$c = $c + 1;
$d = $c;
*/
var_dump($c); // 11
var_dump($d); // 11

$e = 10;
$f = $e--;
/*
ini seperti halnya
$f = $e;
$e = $e - 1;
*/
var_dump($e); // 9
var_dump($f); // 10

$g = 10;
$h = --$g;
/* 
ini seperti halnya
$g = $g - 1;
$h = $g;
*/
var_dump($g); // 9
var_dump($h); // 9